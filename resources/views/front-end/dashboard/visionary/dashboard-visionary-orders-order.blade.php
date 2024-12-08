@extends('businessarea')

@section('title', 'Order')

@section('business-area-content')
    <div class="border-black border-2 bg-slate-50 h-full">
        <div class="p-5 flex flex-col gap-5">
            <h1 class="text-2xl font-bold">Order #{{ $order->id }} Details</h1>
            <div class="grid grid-cols-2 gap-5">


                <!-- Remaining Time -->
                <div>
                    <h2 class="text-lg font-semibold">Remaining Time</h2>

                    @if ($order->status == 'complete')
                        <p class="text-sm "> The order was delivered successfully</p>
                    @elseif ($remainingTime->invert)
                        <p class="text-sm text-red-500">Overdue by {{ $remainingTime->days }} days</p>
                    @else
                        <p class="text-sm">
                            {{ $remainingTime->days }} days, {{ $remainingTime->h }} hours, {{ $remainingTime->i }} minutes
                        </p>
                    @endif
                </div>


                <!-- Deadline -->
                <div>
                    <h2 class="text-lg font-semibold">Deadline</h2>
                    <p class="text-sm">{{ $order->expected_receive_date }}</p>
                </div>



           <!-- Payment Status -->
<div>
    <h2 class="text-lg font-semibold">{{ __('Payment Status') }}</h2>
    <div
    class="relative grid items-center uppercase whitespace-nowrap select-none 
        {{ $order->payment_status === 'complete' ? 'bg-gradient-to-tr from-emerald-600 to-emerald-400' : 'bg-gradient-to-tr from-yellow-600 to-yellow-400' }} 
        text-white py-0.5 px-2 text-[11px] font-medium w-fit">
    <span>{{ $order->payment_status }}</span>
</div>
</div>

<!-- Order Status -->
<div>
    <h2 class="text-lg font-semibold">{{ __('Order Status') }}</h2>
    <div
    class="relative grid items-center uppercase whitespace-nowrap select-none 
        {{ $order->status === 'complete' ? 'bg-gradient-to-tr from-emerald-600 to-emerald-400' : 'bg-gradient-to-tr from-yellow-600 to-yellow-400' }} 
        text-white py-0.5 px-2 text-[11px] font-medium w-fit">
    <span>{{ $order->status }}</span>
</div>
</div>



                <div>
                    <h2 class="text-lg font-semibold">Amount</h2>
                    <p class="text-sm">{{ $order->amount }}</p>
                </div>
                <!-- Status -->
                <div>
                    <h2 class="text-lg font-semibold">Total Price</h2>
                    <p class="text-sm">{{ $order->total_price }}</p>

                </div>

                <div>
                    <h2 class="text-lg font-semibold">Freelancer</h2>
                    <a href="{{ route('freelancerName', $order->freelancerService->freelancer->id) }}"
                        class="text-sm text-blue">{{ $order->freelancerService->freelancer->name }}</a>
                </div>

                <!-- Description -->
                <div>
                    <h2 class="text-lg font-semibold">Description</h2>
                    <p class="text-sm">{{ $order->description }}</p>
                </div>

            </div>
        </div>
    @endsection
