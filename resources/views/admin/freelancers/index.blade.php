 
            @extends('admin.layouts.main')

            @section('title', __('sidebar.dashboard') . ' - ' . __('forms.freelancers_list'))
 
            @section('body-class', 'sidebar-noneoverflow')
 
            @section('content')
 
 
                <!--  BEGIN CONTENT AREA  -->
 
                <div class="layout-px-spacing">
                    <div class="page-header">
                        <div class="page-title">
                            <h3>{{ __('forms.freelancers_list') }}</h3>
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
                                                <th>{{ __('forms.name') }}</th>
                                                <th>{{ __('forms.email') }}</th>
                                                <th>{{ __('forms.phone') }}</th>
                                                <th>{{ __('forms.job_title') }}</th>
                                                {{-- <th>{{ __('forms.freelancered_at') }}</th> --}}
                                                <th>{{ __('forms.status') }}</th>
                                                <th>{{ __('forms.total_orders') }}</th>

                                                <th>{{ __('forms.action') }}</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($freelancers as $freelancer)
                                            <tr>
                                                <td>{{ $freelancer->name  }}</td>
                                                <td>{{ $freelancer->email }}</td>
                                                <td>{{ $freelancer->phone }}</td>
                                                <td>{{ $freelancer->jobTitle->name  }}</td>
                                                {{-- <td>{{ $freelancer->created_at->format('Y-m-d') }}</td> --}}
                                                <td class="{{ $freelancer->active == 1 ? 'text-success' : 'text-danger' }}">
                                                    {{ __($freelancer->active == 1 ? 'Active' : 'Not Active') }}
                                                </td>
                                                <td>{{ $freelancer->orders?->count() ?? 0 }}</td>

                                                <td>
                                                
                                                       <a href="{{ route('admin.freelancers.show', $freelancer->id) }}" class="btn btn-outline-primary mb-2 mr-2 btn-sm">{{ __('forms.view') }}</a>

                                        
                                                    <button type="button" class="btn btn-danger mb-2 mr-2 btn-sm"
                                                        data-toggle="modal"
                                                        data-target="#deleteModal{{ $freelancer->id }}">
                                                        {{ __('forms.delete') }}
                                                    </button>
                                        
                                                    @include('admin.components.delete-modal', [
                                                        'modalId' => 'deleteModal' . $freelancer->id,
                                                        'formAction' => route('admin.freelancers.destroy', $freelancer->id),
                                                        'itemName' => $freelancer->name  ?? 'freelancer',
                                                    ])
                                                </td>
                                            </tr>
                                        @endforeach
                                        
 
                                        </tbody>
                                    </table>
                                    <!-- Pagination Links -->
                                    {{ $freelancers->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
 
 
 
                <!--  END CONTENT AREA  -->
            @endsection
 

 
 
 
 
 
 