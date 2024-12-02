       <!-- resources/views/dashboard.blade.php -->
       @extends('admin.layouts.main')

       @section('title', __('sidebar.dashboard') . ' - ' . __('messages.home'))

       @section('body-class', 'sidebar-noneoverflow')

       @section('content')


           <!--  BEGIN CONTENT AREA  -->

           <div class="layout-px-spacing">
               <div class="page-header">
                   <div class="page-title">
                       <h3>{{ __('forms.admin_list') }}</h3>
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
                                           <th>{{ __('forms.role') }}</th>
                                           <th>{{ __('forms.created_at') }}</th>
                                           {{-- <th>{{ __('forms.avatar') }}</th> --}}
                                           <th>{{ __('forms.action') }}</th>
                                       </tr>
                                   </thead>
                                   <tbody>
                                       @foreach ($admins as $admin)
                                           <tr>
                                               <td>{{ $admin->name }}</td>
                                               <td>{{ $admin->email }}</td>
                                               <td>{{ __('forms.' . $admin->role) }}</td>
                                               <td>{{ $admin->created_at->format('Y-m-d') }}</td>
                                               <td>
                                                   <a href="{{ route('admin.admins.edit', $admin->id) }}"
                                                       class="btn btn-primary mb-2 mr-2 btn-sm">{{ __('forms.edit') }}</a>

                                                   <!-- Button to open the modal, with a unique modal ID -->
                                                   <button type="button" class="btn btn-danger mb-2 mr-2 btn-sm"
                                                       data-toggle="modal" data-target="#deleteModal{{ $admin->id }}">
                                                       {{ __('forms.delete') }}
                                                   </button>

                                                   <!-- Include the Delete Modal with a unique ID -->
                                                   @include('admin.components.delete-modal', [
                                                       'modalId' => 'deleteModal' . $admin->id,
                                                       'formAction' => route('admin.admins.destroy', $admin->id),
                                                       'itemName' => $admin->name,
                                                   ])
                                               </td>
                                           </tr>
                                       @endforeach

                                   </tbody>
                               </table>
                               <!-- Pagination Links -->
                               {{ $admins->links() }}
                           </div>
                       </div>
                   </div>
               </div>
           </div>



           <!--  END CONTENT AREA  -->
       @endsection

