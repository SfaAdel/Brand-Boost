<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\FreelancerRequest;
use App\Models\Freelancer;
use App\Models\Field;
use App\Models\FreelancerProject;
use App\Models\FreelancerService;
use App\Models\JobTitle;
use App\Models\Service;
use App\Models\Setting;
use Illuminate\Http\Request;
use Carbon\Carbon;

use SebastianBergmann\LinesOfCode\Counter;

class FreelancerProfileController extends Controller
{
    //

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

    public function dashboard($id)
    {
        // Get the freelancer's data
        $freelancer = Freelancer::findOrFail($id);

        // Number of followers (count of favorite_freelancers for this freelancer)
        $followers = $freelancer->favoriteByOwners()->count();

        // Number of projects
        $projects = $freelancer->projects()->count();

        $totalBalance = $freelancer->orders()
        ->where('status', 'complete')
        ->sum('total_price');
    
        return view('front-end.dashboard.dashboard', compact('freelancer', 'followers', 'projects', 'totalBalance'));
    }

    public function talentProfile($id)
    {
        $freelancer = Freelancer::findOrFail($id);
        $jobTitles = JobTitle::all();
        $fields = Field::all();

        return view('front-end.dashboard.dashboard-talent-profile', compact('jobTitles','fields', 'freelancer'));
    }

    public function updateTalentProfile(FreelancerRequest $request, $id)
{
    $freelancer = Freelancer::findOrFail($id);

    $freelancer->update($request->except('_token', '_method' , 'profile_image','fields' , 'password')); 

    if ($request->filled('password')) {
        $data['password'] = bcrypt($request->input('password'));
    }
    // Handle logo upload
    if ($request->hasFile('profile_image')) {
        $profileImageName = time() . '.' . $request->profile_image->extension();
        $request->profile_image->move(('images/freelancers/profile'), $profileImageName);
        $freelancer->update(['profile_image' => $profileImageName]);
    }

    $freelancer->fields()->sync(ids: $request->input('fields', []));
   
    return redirect()->route('dashboard-talent-profile', $freelancer->id)
        ->with('success', 'Profile updated successfully.');
}

    public function talentServices($id)
    {
        $freelancerServices = FreelancerService::where('freelancer_id', $id)->get();

        return view('front-end.dashboard.dashboard-talent-services' , compact('freelancerServices'));
    }

    // public function newService()
    // {
    //     return view('front-end.dashboard.dashboard-talent-services-new');
    // }

    // public function service()
    // {
    //     return view('front-end.dashboard.dashboard-talent-serices-service');
    // }

    public function talentProjects($id)
    {
        $freelancerProjects = FreelancerProject::whereHas('freelancerService', function ($query) use ($id) {
            $query->where('freelancer_id', $id);
        })->get();
        
        return view('front-end.dashboard.dashboard-talent-projects', compact('freelancerProjects'));
    }

    // public function project()
    // {
    //     return view('front-end.dashboard.dashboard-talent-projects-project');
    // }

    // public function newProject()
    // {
    //     return view('front-end.dashboard.dashboard-talent-projects-new');
    // }

    public function talentOrders($id)
    {
        return view('front-end.dashboard.dashboard-talent-orders');
    }

    public function order()
    {
        return view('front-end.dashboard.dashboard-talent-orders-order');
    }

}
