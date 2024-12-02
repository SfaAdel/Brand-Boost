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

use App\Notifications\SendVerificationCode;
use App\Notifications\SendVerifySMS;
use App\Providers\RouteServiceProvider;

use App\Services\Vonage as ServicesVonage;
use App\Services\WhatsAppService;
use App\Services\ShrinkItService;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Registered;
use Illuminate\Notifications\Facades\Vonage;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;
use Vonage\Client;
use Vonage\Client\Credentials\Basic;
use Vonage\SMS\Message\SMS;
use Vonage\Client\Credentials\Basic as VonageCredentials;
use Vonage\SMS\Message\SentSMS;
use Illuminate\Validation\ValidationException;


class AuthController extends Controller
{

    public function signIn(): View
    {
        return view('front-end.signin');
    }

    public function visionarySignUp(): View
    {
        $fields = Field::whereIn('type', ['business_owner', 'both'])->get();
        $jobTitles = JobTitle::all();

        return view('front-end.visionary-signup',  compact('fields', 'jobTitles'));
    }

    public function talentSignUp(): View
    {
        $fields = Field::whereIn('type', ['freelancer', 'both'])->get();
        $jobTitles = JobTitle::whereIn('type', ['freelancer', 'both'])->get();

        return view('front-end.talent-signup',  compact('fields', 'jobTitles'));
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
