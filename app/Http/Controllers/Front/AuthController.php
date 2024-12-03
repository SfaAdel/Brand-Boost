<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\BusinessOwnerRequest;
// use App\Http\Middleware\Freelancer;
use App\Http\Requests\Admin\CustomerRequest;
use App\Http\Requests\Admin\FreelancerRequest;
use App\Http\Requests\Front\LoginRequest;
use App\Models\BusinessOwner;
use App\Models\Customer;
use App\Models\Field;
use App\Models\JobTitle;
use App\Models\Freelancer;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\View\View;

use Illuminate\Validation\ValidationException;


class AuthController extends Controller
{

    public function signIn(): View
    {
        $setting = Setting::first();

        return view('front-end.signin', compact('setting'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
            'user_type' => 'required|in:freelancer,business_owner',
        ]);

        $guard = $request->user_type; // 'freelancer' or 'business_owner'

        if (Auth::guard($guard)->attempt($request->only('email', 'password'), $request->has('remember'))) {
            $request->session()->regenerate();

            return redirect()->intended(route('welcome'))
                ->with('success', __('messages.' . $guard . '_login_successfully'));
        }

        return back()->withErrors([
            'email' => __('auth.failed'),
        ])->onlyInput('email');
    }

    /**
     * Handle logout.
     */
    public function destroy(Request $request)
    {
        $guard = $request->user_type ?? (Auth::guard('freelancer')->check() ? 'freelancer' : 'business_owner');
        Auth::guard($guard)->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect(route('welcome'))
            ->with('success', __('messages.' . $guard . '_logout_successfully'));
    }

    public function visionarySignUp(): View
    {
        $fields = Field::whereIn('type', ['business_owner', 'both'])->get();
        $jobTitles = JobTitle::all();
        $setting = Setting::first();

        return view('front-end.visionary-signup',  compact('setting','fields', 'jobTitles'));
    }

    public function talentSignUp(): View
    {
        $fields = Field::whereIn('type', ['freelancer', 'both'])->get();
        $jobTitles = JobTitle::whereIn('type', ['freelancer', 'both'])->get();
        $setting = Setting::first();

        return view('front-end.talent-signup',  compact('setting','fields', 'jobTitles'));
    }

    public function freelancerRegister(FreelancerRequest $request)
    {
        // Check if phone already exists
        if (Freelancer::where('phone', $request->phone)->exists()) {
            throw ValidationException::withMessages([
                'phone' => 'هذا الرقم موجود بالفعل',
            ]);
        }

        // Save Freelancer details
        $freelancer = new Freelancer();
        $freelancer->email = $request->email;
        $freelancer->password = bcrypt($request->password);
        $freelancer->phone = $request->phone;
        $freelancer->cash_number = $request->cash_number;
        $freelancer->job_title_id = $request->job_title_id;
        $freelancer->date_of_birth = $request->date_of_birth;

        // Save translations
        $freelancer->translateOrNew('en')->name = $request->input('en.name');
        $freelancer->translateOrNew('en')->bio = $request->input('en.bio');
        $freelancer->translateOrNew('ar')->name = $request->input('ar.name');
        $freelancer->translateOrNew('ar')->bio = $request->input('ar.bio');
        $freelancer->save();

        // Attach fields
        if ($request->filled('fields')) {
            $freelancer->fields()->sync($request->fields);
        }

        return redirect()->route('signIn')
            ->with('success', __('messages.freelancer_registered_successfully'));
    }

    public function businessOwnerRegister(BusinessOwnerRequest $request)
    {
        // Check if phone already exists
        if (BusinessOwner::where('phone', $request->phone)->exists()) {
            throw ValidationException::withMessages([
                'phone' => 'هذا الرقم موجود بالفعل',
            ]);
        }

        // Save Freelancer details
        $businessOwner = new BusinessOwner();
        $businessOwner->email = $request->email;
        $businessOwner->password = bcrypt($request->password);
        $businessOwner->phone = $request->phone;
        $businessOwner->field_id = $request->field_id;
      

        // Save translations
        $businessOwner->translateOrNew('en')->name = $request->input('en.name');
        $businessOwner->translateOrNew('en')->company_name = $request->input('en.company_name');
        $businessOwner->translateOrNew('ar')->name = $request->input('ar.name');
        $businessOwner->translateOrNew('ar')->company_name = $request->input('ar.company_name');
        $businessOwner->save();



        return redirect()->route('signIn')
            ->with('success', __('messages.business_owner_registered_successfully'));
    }
}
