@extends('businessarea')

@section('title', 'Order')

@section('business-area-content')
<div class="bg-white border rounded-lg border-gray-200 h-full">
    <div class="p-5 flex flex-col gap-5">
        <h1 class="text-2xl font-bold">#{{ $order->id }} {{__('website.details')}}</h1>
        <div class="grid grid-cols-2 gap-5">


            <!-- Remaining Time -->
            <div>
                <h2 class="text-lg font-semibold">{{__('website.remaining_time')}}</h2>

                @if ($order->status == 'complete')
                    <p class="text-sm ">{{__('website.delivered_successfully')}}</p>
                @elseif ($remainingTime->invert)
                    <p class="text-sm text-red-500">{{__('website.overdue')}} {{ $remainingTime->days }} days</p>
                @else
                    <p class="text-sm">
                        {{ $remainingTime->days }} {{__('website.days')}}, {{ $remainingTime->h }} {{__('website.hours')}},
                        {{ $remainingTime->i }} {{__('website.minutes')}}
                    </p>
                @endif
            </div>


            <!-- Deadline -->
            <div>
                <h2 class="text-lg font-semibold">{{__('website.deadline')}}</h2>
                <p class="text-sm">{{ $order->expected_receive_date }}</p>
            </div>



            <!-- Payment Status -->
            <div>
                <h2 class="text-lg font-semibold">{{ __('Payment Status') }}</h2>
                <div class="relative grid items-center uppercase whitespace-nowrap select-none 
        {{ $order->payment_status === 'complete' ? 'bg-gradient-to-tr from-emerald-600 to-emerald-400' : 'bg-gradient-to-tr from-yellow-600 to-yellow-400' }} 
        text-white py-0.5 px-2 text-[11px] font-medium w-fit">
                    <span>{{ $order->payment_status }}</span>
                </div>
            </div>

            <!-- Order Status -->
            <div>
                <h2 class="text-lg font-semibold">{{ __('Order Status') }}</h2>
                <div class="relative grid items-center uppercase whitespace-nowrap select-none 
        {{ $order->status === 'complete' ? 'bg-gradient-to-tr from-emerald-600 to-emerald-400' : 'bg-gradient-to-tr from-yellow-600 to-yellow-400' }} 
        text-white py-0.5 px-2 text-[11px] font-medium w-fit">
                    <span>{{ $order->status }}</span>
                </div>
            </div>



            <div>
                <h2 class="text-lg font-semibold">{{__('website.amount')}}</h2>
                <p class="text-sm">{{ $order->amount }}</p>
            </div>
            <!-- Status -->
            <div>
                <h2 class="text-lg font-semibold">{{__('website.total_price')}}</h2>
                <p class="text-sm">{{ $order->total_price }}</p>

            </div>


            <!-- Description -->
            <div>
                <h2 class="text-lg font-semibold">{{__('website.description')}}</h2>
                <p class="text-sm">{{ $order->description }}</p>
            </div>

        </div>
    </div>
    @endsection