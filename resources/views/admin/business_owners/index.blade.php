 
            @extends('admin.layouts.main')

            @section('title', __('sidebar.dashboard') . ' - ' . __('forms.business_owners_list'))
 
            @section('body-class', 'sidebar-noneoverflow')
 
            @section('content')
 
 
                <!--  BEGIN CONTENT AREA  -->
 
                <div class="layout-px-spacing">
                    <div class="page-header">
                        <div class="page-title">
                            <h3>{{ __('forms.business_owners_list') }}</h3>
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
                                                <th>{{ __('forms.status') }}</th>
                                                {{-- <th>{{ __('forms.ordered_at') }}</th> --}}

                                                <th>{{ __('forms.action') }}</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($businessOwners as $businessOwner)
                                            <tr>
                                                <td>{{ $businessOwner->name  }}</td>
                                                <td>{{ $businessOwner->email  }}</td>
                                                <td>{{ $businessOwner->phone  }}</td>
                                                <td class="{{ $businessOwner->active ? 'text-success' : 'text-danger' }}"> {{ $businessOwner->active ? __('forms.active') : __('forms.not_active') }}</td>
                                                {{-- <td>{{ $businessOwner->created_at->format('Y-m-d') }}</td> --}}

                                                <td>
                                                
                                                       <a href="{{ route('admin.business_owners.show', $businessOwner->id) }}" class="btn btn-outline-primary mb-2 mr-2 btn-sm">{{ __('forms.view') }}</a>

                                        
                                                    {{-- <button type="button" class="btn btn-danger mb-2 mr-2 btn-sm"
                                                        data-toggle="modal"
                                                        data-target="#deleteModal{{ $businessOwner->id }}">
                                                        {{ __('forms.delete') }}
                                                    </button>
                                        
                                                    @include('admin.components.delete-modal', [
                                                        'modalId' => 'deleteModal' . $businessOwner->id,
                                                        'formAction' => route('admin.business_owners.destroy', $business_owner->id),
                                                        'itemName' => $businessOwner->businessOwner->name  ?? 'businessOwner',
                                                    ]) --}}
                                                </td>
                                            </tr>
                                        @endforeach
                                        
 
                                        </tbody>
                                    </table>
                                    <!-- Pagination Links -->
                                    {{ $businessOwners->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
 
 
 
                <!--  END CONTENT AREA  -->
            @endsection
 

 
 
 
 
 
 