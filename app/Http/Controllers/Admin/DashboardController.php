<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BusinessOwner;
use App\Models\Contact;
use App\Models\Freelancer;
use App\Models\Order;
use App\Models\Service;
use Illuminate\Http\Request;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
   // Total counts
   $freelancersCount = Freelancer::count();
   $businessOwnersCount = BusinessOwner::count();
   $contactsCount = Contact::count();
   $ordersCount = Order::count();
   $servicesCount = Service::count();


   $pendingOrders = Order::where('status', 'pending')->latest()->paginate(10);

// Get orders with expected receive date as today and still pending
$todayOrders = Order::where('expected_receive_date', Carbon::today())
                           ->latest()
                           ->paginate(10);
   // Specific statistics
   $pendingOrdersCount = Order::where('status', 'pending')->count();
   $pendingContactsCount = Contact::where('status', 'pending')->count();
   $todayPendingOrdersCount = Order::where('expected_receive_date', Carbon::today())
                                    ->where('status', 'pending')
                                    ->count();
   $completedOrdersCount = Order::where('status', 'complete')->count();

   return view('admin.index', compact(
    'todayOrders',
    'pendingOrders',
    'servicesCount',
       'freelancersCount', 
       'businessOwnersCount', 
       'contactsCount', 
       'ordersCount', 
       'pendingOrdersCount', 
       'pendingContactsCount', 
       'todayPendingOrdersCount', 
       'completedOrdersCount'
   ));
}


  
}