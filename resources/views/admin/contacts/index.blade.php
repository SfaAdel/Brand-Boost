 @extends('admin.layouts.main')

 @section('title', __('sidebar.dashboard') . ' - ' . __('forms.contacts_list'))

 @section('body-class', 'sidebar-noneoverflow')

 @section('content')




     <!--  BEGIN CONTENT AREA  -->

     <div class="layout-px-spacing">


         <div class="my-3">
             @include('admin.includes.alerts')
         </div>

         <div class="row layout-top-spacing" id="cancel-row">
             <div class="col-xl-12 col-lg-12 col-sm-12 layout-spacing">
                 <div class="statbox widget box box-shadow">
                     <div class="widget-header">
                         <div class="row">
                             <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                 <h4>{{ __('forms.contacts_list') }}</h4>
                             </div>
                         </div>
                     </div>
                     <div class="widget-content widget-content-area">
                         <div class="table-responsive mb-4">
                             <table id="column-filter" class="table">
                                 <thead>
                                     <tr>
                                         <th class="checkbox-column"> Record No. </th>
                                         <th>{{ __('forms.name') }}</th>
                                         <th>{{ __('forms.title') }}</th>
                                         <th>{{ __('forms.email') }}</th>
                                         <th>{{ __('forms.phone') }}</th>
                                         <th>{{ __('forms.status') }}</th>
                                         <th class="text-center">Action</th>
                                     </tr>
                                 </thead>
                                 <tbody>
                                    @foreach ($contacts as $contact)
                                     <tr>
                                         <td class="checkbox-column"> 1 </td>
                                         <td>{{ $contact->name }}</td>
                                         <td>{{ $contact->title }}</td>
                                         <td>{{ $contact->email }}</td>
                                         <td>{{ $contact->phone }}</td>
                                         <td>{{ $contact->status }}</td>
                                         <td><span class="shadow-none badge badge-primary">{{ $contact->status }}</span></td>
                                         <td class="text-center">
                                            <a href="{{ route('admin.contacts.show', $contact->id) }} class="btn btn-outline-primary">View</button>
                                        </td>
                                     </tr>
                                     @endforeach
                                 </tbody>
                           
                             </table>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>



     <!--  END CONTENT AREA  -->
 @endsection



 @if (app()->getLocale() == 'ar')
     @push('custom-css')
         <link href=" {{ asset('admin/rtl/plugins/table/datatable/datatables.css') }}" rel="stylesheet" type="text/css">
         <link href=" {{ asset('admin/rtl/plugins/table/datatable/custom_dt_miscellaneous.css') }}" rel="stylesheet"
             type="text/css">
         <link href=" {{ asset('admin/rtl/assets/css/forms/theme-checkbox-radio.css') }}" rel="stylesheet" type="text/css">
         <link href=" {{ asset('admin/rtl/plugins/table/datatable/dt-global_style.css') }}" rel="stylesheet"
             type="text/css">
     @endpush

     @push('custom-js')
         <script src=" {{ asset('admin/rtl/plugins/table/datatable/datatables.js') }}"></script>
         <!-- NOTE TO Use Copy CSV Excel PDF Print Options You Must Include These Files  -->

         <script src=" {{ asset('admin/rtl/plugins/table/datatable/custom_miscellaneous.js') }}"></script>
     @endpush
 @elseif (app()->getLocale() == 'en')
     @push('custom-css')
         <link href=" {{ asset('admin/ltr/plugins/table/datatable/datatables.css') }}" rel="stylesheet" type="text/css">
         <link href=" {{ asset('admin/ltr/plugins/table/datatable/custom_dt_miscellaneous.css') }}" rel="stylesheet"
             type="text/css">
         <link href=" {{ asset('admin/ltr/assets/css/forms/theme-checkbox-radio.css') }}" rel="stylesheet" type="text/css">
         <link href=" {{ asset('admin/ltr/plugins/table/datatable/dt-global_style.css') }}" rel="stylesheet"
             type="text/css">
     @endpush

     @push('custom-js')
         <script src=" {{ asset('admin/ltr/plugins/table/datatable/custom_miscellaneous.js') }}"></script>
     @endpush
 @endif
