 
            @extends('admin.layouts.main')

           @section('title', __('sidebar.dashboard') . ' - ' . __('forms.services_list'))

           @section('body-class', 'sidebar-noneoverflow')

           @section('content')


               <a href="{{ route('admin.services.create') }}"
                   class="btn  m-3 btn-success ">{{ __('forms.add_new_service') }}</a>

               <!--  BEGIN CONTENT AREA  -->

               <div class="layout-px-spacing">
                   <div class="page-header">
                       <div class="page-title">
                           <h3>{{ __('forms.services_list') }}</h3>
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
                                               <th>{{ __('forms.description') }}</th>
                                               <th>{{ __('forms.price_unit') }}</th>
                                               <th>{{ __('forms.service_icon') }}</th>
                                               <th>{{ __('forms.created_at') }}</th>
                                               <th>{{ __('forms.action') }}</th>
                                           </tr>
                                       </thead>
                                       <tbody>
                                           @foreach ($services as $service)
                                               <tr>
                                                <td>{{ $service->name }}</td>
                                                <td>{{ $service->description }}</td>
                                                <td>{{ $service->unit_of_price }}</td>
                                                <td>
                                                       @if ($service->icon)
                                                           <img src="{{ asset('images/services/' . $service->icon) }}"
                                                               alt="icon" class="mt-2" style="max-width: 5rem;">
                                                       @endif
                                                   </td>
                                                   <td>{{ $service->created_at->format('Y-m-d') }}</td>

                                                   <td>
                                                       <a href="{{ route('admin.services.edit', $service->id) }}"
                                                           class="btn btn-primary mb-2 mr-2 btn-sm">{{ __('forms.edit') }}</a>

                                                       <!-- Button to open the modal, with a unique modal ID -->
                                                       <button type="button" class="btn btn-danger mb-2 mr-2 btn-sm"
                                                           data-toggle="modal"
                                                           data-target="#deleteModal{{ $service->id }}">
                                                           {{ __('forms.delete') }}
                                                       </button>

                                                       <!-- Include the Delete Modal with a unique ID -->
                                                       @include('admin.components.delete-modal', [
                                                           'modalId' => 'deleteModal' . $service->id,
                                                           'formAction' => route(
                                                               'admin.services.destroy',
                                                               $service->id),
                                                           'itemName' => $service->name,
                                                       ])
                                                   </td>
                                               </tr>
                                           @endforeach

                                       </tbody>
                                   </table>
                                   <!-- Pagination Links -->
                                   {{ $services->links() }}
                               </div>
                           </div>
                       </div>
                   </div>
               </div>



               <!--  END CONTENT AREA  -->
           @endsection

 




