<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\BusinessOwnerRequest;
use App\Http\Requests\Admin\FreelancerRequest;
use App\Models\BusinessOwner;
use App\Models\FavoriteFreelancer;
use App\Models\Freelancer;
use App\Models\Field;
use App\Models\FreelancerProject;
use App\Models\FreelancerService;
use App\Models\JobTitle;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use App\Models\Service;
use App\Models\Setting;
use Illuminate\Http\Request;
use Carbon\Carbon;

use SebastianBergmann\LinesOfCode\Counter;

class BusinessOwnerProfileController extends Controller
{
    //





    public function dashboard()
    {

        $businessOwnerId = Auth::guard('business_owner')->user()->id;

        // Get the freelancer's data
        $businessOwner = BusinessOwner::findOrFail($businessOwnerId);

        // Number of followers (count of favorite_freelancers for this freelancer)
        $following = $businessOwner->favorites()->count();



        $totalBalance = $businessOwner->orders()
            ->where('payment_status', 'complete')
            ->sum('total_price');

        return view('front-end.dashboard.dashboard', compact('businessOwner', 'following', 'totalBalance'));
    }

    public function visionaryProfile()
    {

        $businessOwnerId = Auth::guard('business_owner')->user()->id;

        $businessOwner = BusinessOwner::findOrFail($businessOwnerId);

        $fields = Field::whereIn('type', ['business_owner', 'both'])->get();

        return view('front-end.dashboard.visionary.dashboard-visionary-profile', compact('fields', 'businessOwner'));
    }

    public function updateVisionaryProfile(BusinessOwnerRequest $request, $id)
    {
        $businessOwner = BusinessOwner::findOrFail($id);

        $businessOwner->update($request->except('_token', '_method', 'profile_image', 'password'));

        if ($request->filled('password')) {
            $data['password'] = bcrypt($request->input('password'));
        }
        // Handle logo upload
        if ($request->hasFile('profile_image')) {
            $profileImageName = time() . '.' . $request->profile_image->extension();
            $request->profile_image->move(('images/business_owners/profile'), $profileImageName);
            $businessOwner->update(['profile_image' => $profileImageName]);
        }

        return redirect()->route('dashboard-visionary-profile', $businessOwner->id)
            ->with('success', 'Profile updated successfully.');
    }

    public function favFreelancers()
    {
        $businessOwnerId = Auth::guard('business_owner')->user()->id;

        $favFreelancers = FavoriteFreelancer::where('business_owner_id', $businessOwnerId)->get();

        return view('front-end.dashboard.visionary.dashboard-visionary-fav-freelancers', compact('favFreelancers'));
    }

    // public function newService()
    // {
    //     return view('front-end.dashboard.dashboard-talent-services-new');
    // }

    // public function service()
    // {
    //     return view('front-end.dashboard.dashboard-talent-serices-service');
    // }

    // public function project()
    // {
    //     return view('front-end.dashboard.dashboard-talent-projects-project');
    // }

    // public function newProject()
    // {
    //     return view('front-end.dashboard.dashboard-talent-projects-new');
    // }

    public function visionaryOrders()
    {
        $businessOwnerId = Auth::guard('business_owner')->user()->id;

        // Get the freelancer's orders
        $orders = Order::where('business_owner_id', $businessOwnerId)->get();
        

        return view('front-end.dashboard.visionary.dashboard-visionary-orders', compact('orders'));
    }


    public function order($id)
    {
        $order = Order::with(['freelancerService.service', 'businessOwner'])->findOrFail($id);
        $remainingTime = now()->diff($order->expected_receive_date);

        return view('front-end.dashboard.visionary.dashboard-visionary-orders-order', compact('order', 'remainingTime'));
    }

    public function toggleFavorite(Request $request)
    {
        $validated = $request->validate([
            'freelancer_id' => 'required|exists:freelancers,id',
            'business_owner_id' => 'required|exists:business_owners,id',
        ]);

        $favorite = FavoriteFreelancer::where('freelancer_id', $validated['freelancer_id'])
            ->where('business_owner_id', $validated['business_owner_id'])
            ->first();

        if ($favorite) {
            // If exists, unfollow
            $favorite->delete();
            return response()->json(['following' => false], 200);
        } else {
            // Otherwise, follow
            FavoriteFreelancer::create($validated);
            return response()->json(['following' => true], 201);
        }

        
    }
}
