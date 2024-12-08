@extends('businessarea')

@section('title', 'Orders')

@section('business-area-content')
<div class="border-black border-2 bg-slate-50 h-full">
    <div class="p-6 px-0 pt-0 pb-2">
        <table class="w-full min-w-[640px] table-auto border-collapse border-spacing-0">
            <thead>
                <tr>
                    <th class="border-b border-blue-50 py-3 px-5 text-left">
                        <p class="block antialiased text-[11px] font-bold uppercase">#</p>
                    </th>
                    <th class="border-b border-blue-50 py-3 px-5 text-left">
                        <p class="block antialiased text-[11px] font-bold uppercase">Description</p>
                    </th>
                    <th class="border-b border-blue-50 py-3 px-5 text-left">
                        <p class="block antialiased text-[11px] font-bold uppercase">Deadline</p>
                    </th>
                    <th class="border-b border-blue-50 py-3 px-5 text-left">
                        <p class="block antialiased text-[11px] font-bold uppercase">Status</p>
                    </th>
                    <th class="border-b border-blue-50 py-3 px-5 text-left">
                        <p class="block antialiased text-[11px] font-bold uppercase">Actions</p>
                    </th>
                </tr>
            </thead>
            <tbody>
                @forelse ($orders as $order)
                <tr>
                    <!-- Order Number -->
                    <td class="py-3 px-5">
                        <p class="block antialiased text-sm leading-normal font-semibold">{{ $loop->iteration }}</p>
                    </td>
                    
                    <!-- Order Description -->
                    <td class="py-3 px-5">
                        <p class="block antialiased text-xs font-normal">{{ $order->description }}</p>
                    </td>
                    
                    <!-- Deadline -->
                    <td class="py-3 px-5">
                        <p class="block antialiased text-xs font-semibold">{{ $order->expected_receive_date }}</p>
                    </td>
                    
                    <!-- Status -->
                    <td class="py-3 px-5">
                        <div
                        class="relative grid items-center uppercase whitespace-nowrap select-none 
                            {{ $order->status === 'complete' ? 'bg-gradient-to-tr from-emerald-600 to-emerald-400' : 'bg-gradient-to-tr from-yellow-600 to-yellow-400' }} 
                            text-white py-0.5 px-2 text-[11px] font-medium w-fit">
                        <span>{{ $order->status }}</span>
                    </div>
                    </td>

                    <!-- Actions -->
                    <td class="py-3 px-5">
                        <a href="{{ route('dashboard-talent-orders-order', $order->id) }}"
                           class="block antialiased text-xs font-semibold capitalize">View</a>
                    </td>
                </tr>
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
