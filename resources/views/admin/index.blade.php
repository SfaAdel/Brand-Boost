<!-- resources/views/dashboard.blade.php -->
@extends('admin.layouts.main')

@section('title', __('sidebar.dashboard') . ' - ' . __('messages.home'))

@section('body-class', 'dashboard-analytics')

@section('content')
    <div class="layout-px-spacing">

        <div class="page-header">
            <div class="page-title">
                <h3>Analytics</h3>
            </div>
        </div>

        <div class="row layout-top-spacing">

            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                <div class="row widget-statistic">
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-4 col-12">
                        <div class="widget widget-one_hybrid widget-engagement">
                            <div class="widget-heading">
                                <div class="w-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-message-circle">
                                        <path
                                            d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z">
                                        </path>
                                    </svg>
                                </div>
                                <p class="w-value">{{ $contactsCount }}</p>
                                <h5 class="">Messages</h5>
                            </div>
                            <div class="widget-content">
                                <div class="w-chart">
                                    <div id="hybrid_followers3"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-4 col-12">
                        <div class="widget widget-one_hybrid widget-followers">
                            <div class="widget-heading">
                                <div class="w-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-users">
                                        <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="9" cy="7" r="4"></circle>
                                        <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                        <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                    </svg>
                                </div>
                                <p class="w-value">{{ $freelancersCount }}</p>
                                <h5 class="">Freelancers</h5>
                            </div>
                            <div class="widget-content">
                                <div class="w-chart">
                                    <div id="hybrid_followers"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-4 col-12">
                        <div class="widget widget-one_hybrid widget-referral">
                            <div class="widget-heading">
                                <div class="w-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-link">
                                        <path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"></path>
                                        <path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"></path>
                                    </svg>
                                </div>
                                <p class="w-value">{{ $ordersCount }}</p>
                                <h5 class="">orders</h5>
                            </div>
                            <div class="widget-content">
                                <div class="w-chart">
                                    <div id="hybrid_followers1"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-4 col-12">
                        <div class="widget widget-one_hybrid widget-followers">
                            <div class="widget-heading">
                                <div class="w-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-users">
                                        <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="9" cy="7" r="4"></circle>
                                        <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                        <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                    </svg>
                                </div>
                                <p class="w-value">{{ $businessOwnersCount }}</p>
                                <h5 class="">Business Owners</h5>
                            </div>
                            <div class="widget-content">
                                <div class="w-chart">
                                    <div id="hybrid_followers"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing">
                <div class="widget widget-five">
                    <div class="widget-content">

                        <div class="header">
                            <div class="header-body">
                                <h6>Total Pending Orders</h6>
                            </div>
                            {{-- <div class="task-action">
                            <div class="dropdown  custom-dropdown">
                                <a class="dropdown-toggle" href="#" role="button" id="pendingTask" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="pendingTask">
                                    <a class="dropdown-item" href="javascript:void(0);">Add</a>
                                    <a class="dropdown-item" href="javascript:void(0);">View</a>
                                    <a class="dropdown-item" href="javascript:void(0);">Update</a>
                                    <a class="dropdown-item" href="javascript:void(0);">Clear All</a>
                                </div>
                            </div>
                        </div> --}}
                        </div>

                        <div class="w-content">
                            <div class="">
                                <p class="task-left">{{ $pendingOrdersCount }}</p>
                                {{-- <p class="task-completed"><span>12 Done</span></p> --}}
                                {{-- <p class="task-hight-priority"><span>3 Task</span> with High priotity</p> --}}
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing">
                <div class="widget widget-five">
                    <div class="widget-content">

                        <div class="header">
                            <div class="header-body">
                                <h6>Total Pending Messages</h6>
                            </div>
                        </div>

                        <div class="w-content">
                            <div class="">
                                <p class="task-left">{{ $pendingContactsCount }}</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing">
                <div class="widget widget-five">
                    <div class="widget-content">

                        <div class="header">
                            <div class="header-body">
                                <h6>orders should receive today</h6>
                            </div>
                        </div>

                        <div class="w-content">
                            <div class="">
                                <p class="task-left">{{ $todayPendingOrdersCount }}</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing">
                <div class="widget widget-five">
                    <div class="widget-content">

                        <div class="header">
                            <div class="header-body">
                                <h6>Total Completed Orders</h6>
                            </div>
                        </div>

                        <div class="w-content">
                            <div class="">
                                <p class="task-left">{{ $completedOrdersCount }}</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        {{-- table of today pendig  orders --}}

        <div class="page-header">
            <div class="page-title">
                <h3>{{ __('forms.today_orders_list') }}</h3>
            </div>
        </div>


        <div class="row layout-top-spacing" id="cancel-row">
            <div class="col-xl-12 col-lg-12 col-sm-12 layout-spacing">
                <div class="widget-content widget-content-area br-6">
                    <div class="table-responsive mb-4 mt-4">
                        <table id="html5-extension" class="table table-hover non-hover" style="width:100%">
                            <thead>
                                <tr>
                                    <th>{{ __('forms.business_owner') }}</th>
                                    <th>{{ __('forms.freelancer') }}</th>
                                    <th>{{ __('forms.total_price') }}</th>
                                    <th>{{ __('forms.date_of_receipt') }}</th>
                                    {{-- <th>{{ __('forms.ordered_at') }}</th> --}}
                                    <th>{{ __('forms.status') }}</th>
                                    <th>{{ __('forms.payment_status') }}</th>

                                    <th>{{ __('forms.action') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($todayOrders as $order)
                                    <tr>
                                        <td>{{ $order->businessOwner->name ?? 'N/A' }}</td>
                                        <td>{{ $order->freelancerService->freelancer->name ?? 'N/A' }}</td>
                                        <td>{{ $order->freelancerService->price_per_unit * $order->amount ?? 'N/A' }}</td>
                                        <td>
                                            <span
                                                class="{{ $order->status === 'pending' && \Carbon\Carbon::parse($order->expected_receive_date)->isBefore(\Carbon\Carbon::today()) ? 'text-danger' : '' }}">
                                                {{ \Carbon\Carbon::parse($order->expected_receive_date)->format('Y-m-d') }}
                                            </span>
                                        </td> {{-- <td>{{ $order->created_at->format('Y-m-d') }}</td> --}}
                                        <td>{{ __('forms.' . $order->status) }}</td>
                                        <td>{{ __('forms.' . $order->payment_status) }}</td>

                                        <td>

                                            <a href="{{ route('admin.orders.show', $order->id) }}"
                                                class="btn btn-outline-primary mb-2 mr-2 btn-sm">{{ __('forms.view') }}</a>


                                            {{-- <button type="button" class="btn btn-danger mb-2 mr-2 btn-sm"
                                        data-toggle="modal"
                                        data-target="#deleteModal{{ $order->id }}">
                                        {{ __('forms.delete') }}
                                    </button>
                        
                                    @include('admin.components.delete-modal', [
                                        'modalId' => 'deleteModal' . $order->id,
                                        'formAction' => route('admin.orders.destroy', $order->id),
                                        'itemName' => $order->businessOwner->name  ?? 'Order',
                                    ]) --}}
                                        </td>
                                    </tr>
                                @endforeach


                            </tbody>
                        </table>
                        <!-- Pagination Links -->
                        {{ $todayOrders->links() }}
                    </div>
                </div>
            </div>
        </div>

        {{-- table pending orders --}}

        <div class="page-header">
            <div class="page-title">
                <h3>{{ __('forms.pending_orders_list') }}</h3>
            </div>
        </div>


        <div class="row layout-top-spacing" id="cancel-row">
            <div class="col-xl-12 col-lg-12 col-sm-12 layout-spacing">
                <div class="widget-content widget-content-area br-6">
                    <div class="table-responsive mb-4 mt-4">
                        <table id="html5-extension" class="table table-hover non-hover" style="width:100%">
                            <thead>
                                <tr>
                                    <th>{{ __('forms.business_owner') }}</th>
                                    <th>{{ __('forms.freelancer') }}</th>
                                    <th>{{ __('forms.total_price') }}</th>
                                    <th>{{ __('forms.date_of_receipt') }}</th>
                                    {{-- <th>{{ __('forms.ordered_at') }}</th> --}}
                                    <th>{{ __('forms.status') }}</th>
                                    <th>{{ __('forms.payment_status') }}</th>

                                    <th>{{ __('forms.action') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pendingOrders as $order)
                                    <tr>
                                        <td>{{ $order->businessOwner->name ?? 'N/A' }}</td>
                                        <td>{{ $order->freelancerService->freelancer->name ?? 'N/A' }}</td>
                                        <td>{{ $order->freelancerService->price_per_unit * $order->amount ?? 'N/A' }}</td>
                                        <td>
                                            <span
                                                class="{{ $order->status === 'pending' && \Carbon\Carbon::parse($order->expected_receive_date)->isBefore(\Carbon\Carbon::today()) ? 'text-danger' : '' }}">
                                                {{ \Carbon\Carbon::parse($order->expected_receive_date)->format('Y-m-d') }}
                                            </span>
                                        </td> {{-- <td>{{ $order->created_at->format('Y-m-d') }}</td> --}}
                                        <td>{{ __('forms.' . $order->status) }}</td>
                                        <td>{{ __('forms.' . $order->payment_status) }}</td>

                                        <td>

                                            <a href="{{ route('admin.orders.show', $order->id) }}"
                                                class="btn btn-outline-primary mb-2 mr-2 btn-sm">{{ __('forms.view') }}</a>


                                            {{-- <button type="button" class="btn btn-danger mb-2 mr-2 btn-sm"
                                        data-toggle="modal"
                                        data-target="#deleteModal{{ $order->id }}">
                                        {{ __('forms.delete') }}
                                    </button>
                        
                                    @include('admin.components.delete-modal', [
                                        'modalId' => 'deleteModal' . $order->id,
                                        'formAction' => route('admin.orders.destroy', $order->id),
                                        'itemName' => $order->businessOwner->name  ?? 'Order',
                                    ]) --}}
                                        </td>
                                    </tr>
                                @endforeach


                            </tbody>
                        </table>
                        <!-- Pagination Links -->
                        {{ $pendingOrders->links() }}
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
