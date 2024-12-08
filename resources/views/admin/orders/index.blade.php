 
            @extends('admin.layouts.main')

            @section('title', __('sidebar.dashboard') . ' - ' . __('forms.orders_list'))
 
            @section('body-class', 'sidebar-noneoverflow')
 
            @section('content')
 
 
                <!--  BEGIN CONTENT AREA  -->
 
                <div class="layout-px-spacing">
                    <div class="page-header">
                        <div class="page-title">
                            <h3>{{ __('forms.orders_list') }}</h3>
                        </div>
                    </div>
 
                    <div class="my-3">
                        @include('admin.includes.alerts')
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
                                                <th>{{ __('forms.service') }}</th>
                                                <th>{{ __('forms.date_of_receipt') }}</th>
                                                {{-- <th>{{ __('forms.ordered_at') }}</th> --}}
                                                <th>{{ __('forms.status') }}</th>

                                                <th>{{ __('forms.action') }}</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($orders as $order)
                                            <tr>
                                                <td>{{ $order->businessOwner->name ?? 'N/A' }}</td>
                                                <td>{{ $order->freelancerService->freelancer->name ?? 'N/A' }}</td>
                                                <td>{{ $order->freelancerService->price_per_unit * $order->amount ?? 'N/A' }}</td>
                                                <td>{{ $order->freelancerService->service->name ?? 'N/A' }}</td>
                                                <td>
                                                    <span class="{{ $order->status === 'pending' && \Carbon\Carbon::parse($order->expected_receive_date)->isBefore(\Carbon\Carbon::today()) ? 'text-danger' : ''  }}">
                                                        {{ \Carbon\Carbon::parse($order->expected_receive_date)->format('Y-m-d') }}
                                                    </span>
                                                </td>                                               {{-- <td>{{ $order->created_at->format('Y-m-d') }}</td> --}}
                                                <td>{{ __('forms.' . $order->status) }}</td>

                                                <td>
                                                
                                                       <a href="{{ route('admin.orders.show', $order->id) }}" class="btn btn-outline-primary mb-2 mr-2 btn-sm">{{ __('forms.view') }}</a>

                                        
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
                                    {{ $orders->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
 
 
 
                <!--  END CONTENT AREA  -->
            @endsection
 

 
 
 
 
 
 