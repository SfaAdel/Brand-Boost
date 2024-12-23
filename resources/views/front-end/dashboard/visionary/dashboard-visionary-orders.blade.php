@extends('businessarea')

@section('title', 'Orders')

@section('business-area-content')
<small class="pb-3 block">{{__('website.new_order_warning')}}</small>

<div class="my-3">
    @include('front-end.includes.alerts')
</div>

<div class="bg-pr text-white border rounded-lg border-gray-200 h-full">
    <div class="p-6 px-0 pt-0 pb-2">
        <table class="w-full min-w-[640px] table-auto">
            <thead>
                <tr>
                    <th class="border-b border-blue-50 py-3 px-5 text-left">
                        <p class="block antialiased text-[11px] font-bold uppercase">#
                        </p>
                    </th>
                    <th class="border-b border-blue-50 py-3 px-5 text-left">
                        <p class="block antialiased text-[11px] font-bold uppercase">
                            {{__('website.description')}}
                        </p>
                    </th>
                    <th class="border-b border-blue-50 py-3 px-5 text-left">
                        <p class="block antialiased text-[11px] font-bold uppercase">
                            {{__('website.order_from')}}
                        </p>
                    </th>
                    <th class="border-b border-blue-50 py-3 px-5 text-left">
                        <p class="block antialiased text-[11px] font-bold uppercase">{{__('website.deadline')}}
                        </p>
                    </th>
                    <th class="border-b border-blue-50 py-3 px-5 text-left">
                        <p class="block antialiased text-[11px] font-bold uppercase">{{__('website.total_price')}}
                        </p>
                    </th>
                    <th class="border-b border-blue-50 py-3 px-5 text-left">
                        <p class="block antialiased text-[11px] font-bold uppercase">{{__('website.status')}}
                        </p>
                    </th>
                    <th class="border-b border-blue-50 py-3 px-5 text-left">
                        <p class="block antialiased text-[11px] font-bold uppercase">{{__('website.actions')}}</p>
                    </th>
                </tr>
            </thead>
            <tbody>
                @forelse ($orders as $order)
                    <tr class="table-row hover:bg-gr hover:text-bl transition">
                        <td class="py-3 px-5 ">
                            <div class="flex items-center gap-4">
                                <!-- <img src="" alt=""
                                                                                                                                                                                                class="inline-block relative object-cover object-center w-9 h-9 rounded-md"> -->
                                <div>
                                    <p class="block antialiased text-sm leading-normal font-semibold">
                                        {{ $order->id }}
                                    </p>
                                </div>
                            </div>
                        </td>
                        <td class="py-3 px-5 ">
                            <p class="block antialiased text-xs font-normal" id="dashboardOrderDescription">
                                {{ $order->description }}
                            </p>
                        </td>
                        <td class="py-3 px-5 ">
                            <p class="block antialiased text-xs font-semibold">
                                {{ $order->freelancerService->freelancer->name }}
                            </p>
                        </td>
                        <td class="py-3 px-5 ">
                            <p class="block antialiased text-xs font-semibold">{{ $order->expected_receive_date }}</p>
                        </td>
                        <td class="py-3 px-5 ">
                            <p class="block antialiased text-xs font-semibold">{{ $order->total_price }}</p>
                        </td>
                        <td class="py-3 px-5">
                            <div
                                class="relative grid items-center uppercase whitespace-nowrap select-none 
                                                                                                                                                                                    {{ $order->status === 'complete' ? 'bg-gradient-to-tr from-emerald-600 to-emerald-400' : 'bg-gradient-to-tr from-yellow-600 to-yellow-400' }} 
                                                                                                                                                                                    text-white py-0.5 px-2 text-[11px] font-medium w-fit">
                                <span>{{ $order->status }}</span>
                            </div>
                        </td>

                        <td class="py-3 px-5 "><a href="{{ route('dashboard-visionary-orders-order', $order->id) }}"
                                class=" antialiased text-xs font-semibold capitalize">open</a>
                            @if ($order->status == 'pending')
                                <span>|</span>
                                <button data-modal-open="delete-order-modal-{{ $order->id }}"
                                    class="inline mx-1 antialiased text-xs font-semibold capitalize text-red-500">Cancel</button>
                            @endif
                        </td>
                    </tr>

                    <div id="delete-order-modal-{{ $order->id }}"
                        class="modal-overlay hidden fixed inset-0 z-50 bg-black/75 p-10 overflow-auto">
                        <div class="bg-white w-3/4 m-auto p-10  border rounded-lg border-gray-200 acworth">
                            <h1 class="text-2xl font-bold">You Sure that you want to cancel this Order ?</h1>
                            <form action="{{ route('orders.destroy', $order->id) }}" method="POST" class="mt-5">
                                @csrf
                                @method('DELETE')
                                <div class="flex flex-col gap-2">
                                    @if ($order->payment_status == 'complete')
                                        <p class="text-sm text-gray-700">
                                            {{ __('website.action_cannot_undo') }} -
                                            <span class="text-red-700">{{ __('website.refund_message', ['days' => 7]) }}</span>
                                        </p>
                                    @else
                                        <p class="text-sm text-gray-700">{{__('website.delete_warning')}}</p>
                                    @endif
                                </div>
                                <div class="flex gap-3 mt-5">
                                    <button type="submit"
                                        class="bg-red-400 hover:bg-red-500 transition text-md p-2 border rounded-lg border-gray-200 text-white hepta capitalize">
                                        {{__('website.delete')}}
                                    </button>
                                    <button type="button" data-modal-close="delete-service-modal-{{ $order->id }}"
                                        class="bg-gray-200 hover:bg-gray-50 transition text-md p-2 border rounded-lg border-gray-200 text-black hepta capitalize">
                                        {{__('website.close')}}
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                @empty
                    <tr>
                        <td colspan="5" class="py-3 px-5 text-center">
                            <p class="block antialiased text-sm font-semibold">No orders found.</p>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection