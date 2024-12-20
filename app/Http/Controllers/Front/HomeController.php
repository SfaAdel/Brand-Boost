<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Advantage;
use App\Models\Blog;
use App\Models\Freelancer;
use App\Models\BusinessOwner;
use App\Models\FavoriteFreelancer;
use App\Models\Field;
use App\Models\FreelancerProject;
use App\Models\FreelancerService;
use App\Models\HeroSection;
use App\Models\JobTitle;
use App\Models\Service;
use App\Models\Setting;
use App\Models\Tag;
use App\Models\Title;
use App\Models\Video;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

use SebastianBergmann\LinesOfCode\Counter;

class HomeController extends Controller
{
    //

    public function index()
    {
        //
        // $mainSection = Title::where('section', 'main')->first();

        $titles = Title::latest()->limit(4)->get();

        $services = Service::latest()->limit(4)->get();
        $serviceSection = Title::where('section', 'services')->first();

        $advantages = Advantage::latest()->limit(4)->get();
        $advantageSection = Title::where('section', 'advantages')->first();

        $blogs = Blog::latest()->limit(4)->get();
        $blogSection = Title::where('section', 'blogs')->first();

        $favFreelancersSection = Title::where('section', 'stars')->first();
        $favFreelancers = Freelancer::where('fav', 1)->get();

        $contactSection = Title::where('section', 'contacts')->first();
        $aboutSection = Title::where('section', 'about_us')->first();
        $mainSection = Title::where('section', 'main')->first();
        $joinSection = Title::where('section', 'join')->first();

        $setting = Setting::first();

        $heroVideo = Video::where('type', 'hero')->first();
        $sec1Video = Video::where('type', 'sec1')->first();
        $sec2Video = Video::where('type', 'sec2')->first();
        $sec3Video = Video::where('type', 'sec3')->first();
        $sec4Video = Video::where('type', 'sec4')->first();

        $heroSection1 = HeroSection::where('id', 1)->first();
        $heroSection2 = HeroSection::where('id', 2)->first();
        $heroSection3 = HeroSection::where('id', 3)->first();


        return view('front-end.homepage', compact('joinSection', 'heroSection2', 'heroSection3', 'heroVideo', 'heroSection1', 'sec4Video', 'sec3Video', 'sec2Video', 'sec1Video', 'services', 'favFreelancersSection', 'favFreelancers', 'setting', 'mainSection', 'contactSection', 'aboutSection', 'blogSection', 'advantageSection', 'serviceSection', 'titles', 'advantages', 'blogs'));
    }


    public function services()
    {
        // Fetch the specified service
        $services = Service::all();

        // Fetch settings
        $setting = Setting::first();

        return view('front-end.servicespage', compact('setting', 'services'));
    }

    public function service_details($id)
    {
        // Fetch the specified service
        $service = Service::findOrFail($id);

        // Fetch freelancers providing this service
        $freelancerServices = FreelancerService::where('service_id', $id)->get();

        // Fetch settings
        $setting = Setting::first();

        return view('front-end.service-offers', compact('setting', 'service', 'freelancerServices'));
    }

    public function freelancers(Request $request)
    {
        // Fetch the selected service from the request query
        $selectedService = $request->query('service');

        // Start the query for freelancers
        $freelancers = Freelancer::query();

        // Filter by services if a service is selected
        if ($selectedService) {
            $freelancers->whereHas('services', function ($query) use ($selectedService) {
                $query->where('services.id', $selectedService);
            });
        }

        // Retrieve filtered freelancers
        $freelancers = $freelancers->with('jobTitle', 'fields', 'services')->get();

        // Fetch available services and other necessary data
        $services = Service::all();
        $setting = Setting::first();

        // Check if no freelancers are found
        $noFreelancersMessage = $freelancers->isEmpty()
            ? __('website.no_freelancers_found')
            : null;

        return view('front-end.freelancerspage', compact(
            'services',
            'selectedService',
            'setting',
            'freelancers',
            'noFreelancersMessage'
        ));
    }



    // public function filteration(Request $request)
    // {
    //     $jobTitle = $request->query('job_title');
    //     $fields = $request->query('fields', []);

    //     $freelancers = Freelancer::query();

    //     if ($jobTitle) {
    //         $freelancers->where('job_title', $jobTitle);
    //     }

    //     if (!empty($fields)) {
    //         $freelancers->whereHas('fields', function ($query) use ($fields) {
    //             $query->whereIn('field_name', $fields);
    //         });
    //     }

    //     $freelancers = $freelancers->get();

    //     return view('front-end.freelancerspage', compact('freelancers'));
    // }

    public function freelancer_details($id)
    {
        // Fetch the specified service
        $freelancer = Freelancer::findOrFail($id);



        // Fetch settings
        $setting = Setting::first();

        $isFollowing = FavoriteFreelancer::where('freelancer_id', $freelancer->id)
            ->where('business_owner_id', Auth::guard('business_owner')->id())
            ->exists();

        $freelancerServices = FreelancerService::where('freelancer_id', $id)->get();


        $freelancerProjects = FreelancerProject::whereHas('freelancerService', function ($query) use ($id) {
            $query->where('freelancer_id', $id);
        })->get();


        return view('freelancer-profile-layout', compact('isFollowing', 'setting', 'freelancer', 'freelancerServices', 'freelancerProjects'));
    }

    public function freelancer_projects($id)
    {
        // Fetch the specified service
        $freelancer = Freelancer::findOrFail($id);

        $isFollowing = FavoriteFreelancer::where('freelancer_id', $freelancer->id)
            ->where('business_owner_id', Auth::guard('business_owner')->id())
            ->exists();

        $freelancerProjects = FreelancerProject::whereHas('freelancerService', function ($query) use ($id) {
            $query->where('freelancer_id', $id);
        })->get();
        // Fetch settings
        $setting = Setting::first();

        return view('front-end.singlefreelancerprojects', compact('freelancerProjects', 'isFollowing', 'setting', 'freelancer'));
    }


    public function freelancer_service_details($id)
    {
        // Fetch the specified service
        $freelancerService = FreelancerService::findOrFail($id);


        // Fetch settings
        $setting = Setting::first();

        return view('front-end.offer', compact('setting', 'freelancerService'));
    }

    // public function submit_review(Request $request, $id)
    // {
    //     $request->validate([
    //         'rate' => 'required|integer|between:1,5',
    //         'comment' => 'required|string',
    //         // 'name' => 'required|string',
    //         // 'email' => 'required|email',
    //     ]);

    //     $review = new CustomerReview();
    //     $review->sub_service_id = $id;
    //     $review->customer_id = Customer::firstOrCreate(
    //         ['email' => $request->email],
    //         ['name' => $request->name]
    //     )->id;
    //     $review->stars = $request->rate;
    //     $review->comment = $request->comment;
    //     $review->save();

    //     return redirect()->back()->with('success', 'تم اضافة المراجعة بنجاح');
    // }

    public function contact()
    {

        $contactSection = Title::where('section', 'contacts')->first();
        $setting = Setting::first();

        return view('front-end.contactpage', compact('setting', 'contactSection'));
    }

    public function about()
    {

        $advantages = Advantage::latest()->get();
        $advantageSection = Title::where('section', 'advantages')->first();

        $contactSection = Title::where('section', 'contacts')->first();
        $aboutSection = Title::where('section', 'about_us')->first();

        $services = Service::latest()->limit(6)->get();
        $serviceSection = Title::where('section', 'services')->first();

        $setting = Setting::first();


        return view('front-end.aboutpage', compact('setting', 'advantages', 'advantageSection', 'contactSection', 'aboutSection'));
    }

    public function blog()
    {


        $blogs = Blog::latest()->get();
        $blogSection = Title::where('section', 'blogs')->first();
        $setting = Setting::first();
        $tags = Tag::all();

        return view('front.blogs', compact('tags', 'setting', 'blogs', 'blogSection'));
    }

    public function blog_details($id)
    {
        $blog = Blog::find($id);
        $setting = Setting::first();

        return view('front.blog_details', compact('setting', 'blog'));
    }

    public function filterByTag($tagId = null)
    {


        $blogSection = Title::where('section', 'blogs')->first();
        $setting = Setting::first();
        $tags = Tag::all(); // Make sure this line is present in all relevant methods

        if ($tagId) {
            $blogs = Blog::where('tag_id', $tagId)->get();
            $selectedTag = Tag::find($tagId);
        } else {
            $blogs = Blog::all();
            $selectedTag = null;
        }

        $noBlogsMessage = $blogs->isEmpty() ? 'لا يوجد مدونات في هذه الفئة' : '';
        return view('front.blogs', compact('setting', 'blogs', 'blogSection', 'tags', 'noBlogsMessage', 'selectedTag'));
    }


}