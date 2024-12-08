<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\OrderRequest;


class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //


        $orders = Order::latest()->paginate(10);
            
        return view('admin.orders.index', compact('orders'));
    }

    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(OrderRequest $request)
    {
        //
        Order::create($request->except('_token'));
        return redirect()->back()->with('success', __('messages.order_sent'));

    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        //
        return view('admin.orders.show', compact('order'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        //

        return view('admin.orders.edit', compact('order'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
        // Validate the input fields
        $validated = $request->validate([
            'status' => 'required|string|in:pending,complete', 
            'description' => 'required|string|max:500', 
            'expected_receive_date' => 'required|date|after_or_equal:today', 
        ]);
    
   
    
        // Update the order with the validated data
        $order->update($validated);
    
        return redirect()
            ->route('admin.orders.index')
            ->with('success', __('messages.order_updated'));
    }
    


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        //
        $order->delete();

        return redirect()->back()->with('success', __('messages.order_deleted'));
    }
}
