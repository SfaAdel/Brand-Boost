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
                                               {{-- <td>
                                                   <div class="d-flex">
                                                       <div class="usr-img-frame mr-2 rounded-circle">
                                                           <img alt="avatar" class="img-fluid rounded-circle"
                                                               src="{{ $admin->profile_img ?? 'assets/img/default-avatar.png' }}">
                                                       </div>
                                                   </div>
                                               </td> --}}
                                               <td>
                                                   <a href="{{ route('admin.admins.edit', $admin->id) }}"
                                                       class="btn btn-primary btn-sm">{{ __('forms.edit') }}</a>
                                                   <form action="{{ route('admin.admins.destroy', $admin->id) }}"
                                                       method="POST" style="display:inline-block;">
                                                       @csrf
                                                       @method('DELETE')
                                                       <button type="submit"
                                                           class="btn btn-danger btn-sm">{{ __('forms.delete') }}</button>
                                                   </form>
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

       @if (app()->getLocale() == 'ar')
           @push('custom-css')
               <link href=" {{ asset('admin/rtl/plugins/table/datatable/datatables.css') }}" rel="stylesheet"
                   type="text/css">
               <link href=" {{ asset('admin/rtl/plugins/table/datatable/dcustom_dt_html5.css') }}" rel="stylesheet"
                   type="text/css">
               <link href=" {{ asset('admin/rtl/plugins/table/datatable/dt-global_style.css') }}" rel="stylesheet"
                   type="text/css">
           @endpush

           @push('custom-js')
               <script src=" {{ asset('admin/rtl/plugins/table/datatable/datatables.js') }}"></script>
               <!-- NOTE TO Use Copy CSV Excel PDF Print Options You Must Include These Files  -->

               <script src=" {{ asset('admin/rtl/plugins/table/datatable/button-ext/dataTables.buttons.min.js') }}"></script>
               <script src=" {{ asset('admin/rtl/plugins/table/datatable/button-ext/jszip.min.js') }}"></script>
               <script src=" {{ asset('admin/rtl/plugins/table/datatable/button-ext/buttons.html5.min.js') }}"></script>
               <script src=" {{ asset('admin/rtl/plugins/table/datatable/button-ext/buttons.print.min.js') }}"></script>

               <script>
                   $('#html5-extension').DataTable({
                       dom: '<"row"<"col-md-12"<"row"<"col-md-6"B><"col-md-6"f> > ><"col-md-12"rt> <"col-md-12"<"row"<"col-md-5"i><"col-md-7"p>>> >',
                       buttons: {
                           buttons: [{
                                   extend: 'copy',
                                   className: 'btn'
                               },
                               {
                                   extend: 'csv',
                                   className: 'btn'
                               },
                               {
                                   extend: 'excel',
                                   className: 'btn'
                               },
                               {
                                   extend: 'print',
                                   className: 'btn'
                               }
                           ]
                       },
                       "oLanguage": {
                           "oPaginate": {
                               "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>',
                               "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>'
                           },
                           "sInfo": "Showing page _PAGE_ of _PAGES_",
                           "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                           "sSearchPlaceholder": "Search...",
                           "sLengthMenu": "Results :  _MENU_",
                       },
                       "stripeClasses": [],
                       "lengthMenu": [7, 10, 20, 50],
                       "pageLength": 7
                   });
               </script>
           @endpush
       @elseif (app()->getLocale() == 'en')
           @push('custom-css')
               <link href=" {{ asset('admin/ltr/plugins/table/datatable/datatables.css') }}" rel="stylesheet"
                   type="text/css">
               <link href=" {{ asset('admin/ltr/plugins/table/datatable/dcustom_dt_html5.css') }}" rel="stylesheet"
                   type="text/css">
               <link href=" {{ asset('admin/ltr/plugins/table/datatable/dt-global_style.css') }}" rel="stylesheet"
                   type="text/css">
           @endpush

           @push('custom-js')
               <!-- BEGIN PAGE LEVEL CUSTOM SCRIPTS -->

               <script src=" {{ asset('admin/ltr/plugins/table/datatable/datatables.js') }}"></script>
               <!-- NOTE TO Use Copy CSV Excel PDF Print Options You Must Include These Files  -->

               <script src=" {{ asset('admin/ltr/plugins/table/datatable/button-ext/dataTables.buttons.min.js') }}"></script>
               <script src=" {{ asset('admin/ltr/plugins/table/datatable/button-ext/jszip.min.js') }}"></script>
               <script src=" {{ asset('admin/ltr/plugins/table/datatable/button-ext/buttons.html5.min.js') }}"></script>
               <script src=" {{ asset('admin/ltr/plugins/table/datatable/button-ext/buttons.print.min.js') }}"></script>

               <script>
                   $('#html5-extension').DataTable({
                       dom: '<"row"<"col-md-12"<"row"<"col-md-6"B><"col-md-6"f> > ><"col-md-12"rt> <"col-md-12"<"row"<"col-md-5"i><"col-md-7"p>>> >',
                       buttons: {
                           buttons: [{
                                   extend: 'copy',
                                   className: 'btn'
                               },
                               {
                                   extend: 'csv',
                                   className: 'btn'
                               },
                               {
                                   extend: 'excel',
                                   className: 'btn'
                               },
                               {
                                   extend: 'print',
                                   className: 'btn'
                               }
                           ]
                       },
                       "oLanguage": {
                           "oPaginate": {
                               "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>',
                               "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>'
                           },
                           "sInfo": "Showing page _PAGE_ of _PAGES_",
                           "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                           "sSearchPlaceholder": "Search...",
                           "sLengthMenu": "Results :  _MENU_",
                       },
                       "stripeClasses": [],
                       "lengthMenu": [7, 10, 20, 50],
                       "pageLength": 7
                   });
               </script>
           @endpush
       @endif
