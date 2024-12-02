<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Advantage;
use App\Models\Blog;
use App\Models\Freelancer;
use App\Models\BusinessOwner;
use App\Models\Field;
use App\Models\FreelancerService;
use App\Models\JobTitle;
use App\Models\Service;
use App\Models\Setting;
use App\Models\Tag;
use App\Models\Title;
use Illuminate\Http\Request;
use Carbon\Carbon;

use SebastianBergmann\LinesOfCode\Counter;

class HomeController extends Controller
{
    //

    public function index()
    {
        //
        // $mainSection = Title::where('section', 'main')->first();

        $titles = Title::latest()->limit(4)->get();

        $services = Service::latest()->limit(6)->get();
        $serviceSection = Title::where('section', 'services')->first();

        $advantages = Advantage::latest()->limit(6)->get();
        $advantageSection = Title::where('section', 'advantages')->first();

        $blogs = Blog::latest()->limit(4)->get();
        $blogSection = Title::where('section', 'blogs')->first();

        $favFreelancersSection = Title::where('section', 'stars')->first();
        $favFreelancers = Freelancer::where('fav', 1)->get();

        $contactSection = Title::where('section', 'contacts')->first();
        $aboutSection = Title::where('section', 'about_us')->first();
        $mainSection = Title::where('section', 'main')->first();

        $setting = Setting::first();

        return view('front-end.homepage', compact('services', 'favFreelancersSection', 'favFreelancers', 'setting', 'mainSection', 'contactSection', 'aboutSection', 'blogSection', 'advantageSection', 'serviceSection', 'titles', 'advantages', 'blogs'));
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
        $freelancers = Freelancer::whereHas('services', function ($query) use ($id) {
            $query->where('id', $id);
        })->get();

        // Fetch settings
        $setting = Setting::first();

        return view('front-end.service-offers', compact('setting', 'service', 'freelancers'));
    }

    public function freelancers()
    {
        // Fetch the specified service
        $freelancers = Freelancer::all();
        $fields = Field::all();
        $jobTitles = JobTitle::all();
        // Fetch settings
        $setting = Setting::first();

        return view('front-end.freelancerspage', compact('jobTitles', 'fields', 'setting', 'freelancers'));
    }

    public function freelancer_details($id)
    {
        // Fetch the specified service
        $freelancer = Freelancer::findOrFail($id);


        // Fetch settings
        $setting = Setting::first();

        return view('front-end.singlefreelancerpage', compact('setting', 'freelancer'));
    }

    public function freelancer_projects($id)
    {
        // Fetch the specified service
        $freelancer = Freelancer::findOrFail($id);


        // Fetch settings
        $setting = Setting::first();

        return view('front-end.singlefreelancerprojects', compact('setting', 'freelancer'));
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
