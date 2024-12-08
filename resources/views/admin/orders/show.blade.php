@extends('admin.layouts.main')

@section('title', __('sidebar.orders') . ' - ' . __('forms.order_details'))

@section('body-class', 'sidebar-noneoverflow')

@section('content')
<div class="layout-px-spacing">
    <div class="page-header">
        <div class="page-title">
            <h3>{{ __('forms.order_details') }}</h3>
        </div>
    </div>

    <div class="my-3">
        @include('admin.includes.alerts')
    </div>

    <div class="row p-0">
        <!-- Freelancer Info Column -->
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 layout-top-spacing">
            <div class="user-profile">
                <div class="widget-content widget-content-area">
                    <div class="d-flex justify-content-between">
                        <h4 class="">{{ __('forms.freelancer_info') }}</h4>
                    </div>

                    <div class="text-center user-info">
                        <p><strong>{{ __('forms.name') }}:</strong> {{ $order->freelancerService->freelancer->name }}</p>
                        <p><strong>{{ __('forms.email') }}:</strong> <a href="mailto:{{ $order->freelancerService->freelancer->email }}">{{ $order->freelancerService->freelancer->email }}</a></p>
                        <p><strong>{{ __('forms.phone') }}:</strong> <a href="tel:+2{{ $order->freelancerService->freelancer->phone }}">{{ $order->freelancerService->freelancer->phone }}</a></p>
                        <p><strong>{{ __('forms.service') }}:</strong> {{ $order->freelancerService->service->name }} </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Business Owner Info Column -->
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 layout-top-spacing">
            <div class="user-profile">
                <div class="widget-content widget-content-area">
                    <div class="d-flex justify-content-between">
                        <h4 class="">{{ __('forms.business_owner_info') }}</h4>
                    </div>

                    <div class="text-center user-info">
                        <p><strong>{{ __('forms.name') }}:</strong> {{ $order->businessOwner->name }}</p>
                        <p><strong>{{ __('forms.company_name') }}:</strong> {{ $order->businessOwner->company_name }}</p>
                        <p><strong>{{ __('forms.email') }}:</strong> <a href="mailto:{{ $order->businessOwner->email }}">{{ $order->businessOwner->email }}</a></p>
                        <p><strong>{{ __('forms.phone') }}:</strong> <a href="tel:+2{{ $order->businessOwner->phone }}">{{ $order->businessOwner->phone }}</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Order Info Section -->
    <div class="row p-0 mt-4">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
            <div class="user-profile">
                <div class="widget-content widget-content-area">
                    <div class="d-flex justify-content-between">
                        <h4 class="mb-1">{{ __('forms.order_info') }}</h4>
                    </div>

                    <div class="user-info-list">
                        <div class="">
                            <ul class="orders-block list-unstyled">
                                <li class="orders-block__item text-success mt-3">
                                    <i class="fa-solid fa-message"></i>
                                    {{ __('forms.order_details') }}:
                                    <p class="text-primary">{{ $order->description }}</p>
                                </li>
                                <li class="orders-block__item text-success">
                                    <i class="fa-solid fa-calendar"></i>
                                    {{ __('forms.ordered_at') }}:
                                    <span class="text-primary">
                                        {{ $order->created_at->format('Y-m-d H:i:s') }}
                                    </span>
                                </li>
                                <li class="orders-block__item text-success">
                                    <i class="fa-solid fa-barcode"></i>
                                    {{ __('forms.amount') }}:
                                    <span class="text-primary">
                                        {{ number_format($order->amount, 2) }}
                                    </span>
                                </li>
                                <li class="orders-block__item text-success">
                                    <i class="fa-solid fa-dollar-sign"></i>
                                    {{ __('forms.total_price') }}:
                                    <span class="text-primary">
                                        {{ number_format($order->freelancerService->price_per_unit * $order->amount ?? '--', 2) }} {{ __('forms.currency') }}
                                    </span>
                                </li>
                                <li class="orders-block__item text-success">
                                    <i class="fa-solid fa-calendar"></i>
                                    {{ __('forms.expected_receive_date') }}:
                                    <span class="text-primary">
                                        {{ \Carbon\Carbon::parse($order->expected_receive_date)->format('Y-m-d') }}
                                    </span>
                                </li>
                                <li class="orders-block__item text-success">
                                    <i class="fa-solid fa-clock"></i>
                                    {{ __('forms.remaining_time') }}:
                                    <span class="text-primary">
                                        @php
                                            $now = \Carbon\Carbon::now();
                                            $expectedDate = \Carbon\Carbon::parse($order->expected_receive_date);
                                            $diff = $expectedDate->diffForHumans($now, ['parts' => 2]);
                                        @endphp
                                        {{ $expectedDate->isPast() ? __('forms.already_delivered') : $diff }}
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <hr>
                    <div class="mt-4">
                        <h5>{{ __('forms.update') }}</h5>
                        <form action="{{ route('admin.orders.update', $order->id) }}" method="POST">
                            @csrf
                            @method('PATCH')
                            <div class="form-group">
                                <label for="status">{{ __('forms.status') }}</label>
                                <select name="status" id="status" class="form-control">
                                    <option value="pending" {{ $order->status == 'pending' ? 'selected' : '' }}>
                                        {{ __('forms.pending') }}
                                    </option>
                                    <option value="complete" {{ $order->status == 'complete' ? 'selected' : '' }}>
                                        {{ __('forms.complete') }}
                                    </option>
                                </select>
                            </div>

                            @if ($order->status == 'pending')

                             <!-- Description -->
    <div class="mb-4">
        <label for="description" class="block font-bold">{{ __('forms.description') }}</label>
        <textarea name="description" id="description" class="form-control">{{ old('description', $order->description) }}</textarea>
    </div>

    <!-- Expected Receive Date -->
    <div class="mb-4">
        <label for="expected_receive_date" class="block font-bold">{{ __('forms.expected_receive_date') }}</label>
        <input type="date" name="expected_receive_date" id="expected_receive_date" 
               value="{{ old('expected_receive_date', $order->expected_receive_date ? \Carbon\Carbon::parse($order->expected_receive_date)->format('Y-m-d') : '') }}" 
               class="form-control">
    </div>
    @endif

                            <button type="submit" class="btn btn-primary mt-3">
                                {{ __('forms.update') }}
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
