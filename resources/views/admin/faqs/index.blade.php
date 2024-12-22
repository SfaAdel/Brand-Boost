       <!-- resources/views/dashboard.blade.php -->
       @extends('admin.layouts.main')

       @section('title', __('sidebar.dashboard') . ' - ' . __('forms.faqs_list'))

       @section('body-class', 'sidebar-noneoverflow')

       @section('content')


           <a href="{{ route('admin.faqs.create') }}" class="btn  m-3 btn-success ">{{ __('forms.add_new_faq') }}</a>

           <!--  BEGIN CONTENT AREA  -->

           <div class="layout-px-spacing">
               <div class="page-header">
                   <div class="page-title">
                       <h3>{{ __('forms.faqs_list') }}</h3>
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
                                           <th>{{ __('forms.question') }}</th>
                                           <th>{{ __('forms.answer') }}</th>
                                           <th>{{ __('forms.created_at') }}</th>
                                           <th>{{ __('forms.action') }}</th>
                                       </tr>
                                   </thead>
                                   <tbody>
                                       @foreach ($faqs as $faq)
                                           <tr>
                                               <td>{{ $faq->question }}</td>
                                               <td>{{  $faq->answer }}</td>
                                               <td>{{ $faq->created_at->format('Y-m-d') }}</td>

                                               <td>
                                                   <a href="{{ route('admin.faqs.edit', $faq->id) }}"
                                                       class="btn btn-primary mb-2 mr-2 btn-sm">{{ __('forms.edit') }}</a>

                                                   <!-- Button to open the modal, with a unique modal ID -->
                                                   <button type="button" class="btn btn-danger mb-2 mr-2 btn-sm"
                                                       data-toggle="modal" data-target="#deleteModal{{ $faq->id }}">
                                                       {{ __('forms.delete') }}
                                                   </button>

                                                   <!-- Include the Delete Modal with a unique ID -->
                                                   @include('admin.components.delete-modal', [
                                                       'modalId' => 'deleteModal' . $faq->id,
                                                       'formAction' => route('admin.faqs.destroy', $faq->id),
                                                       'itemName' => $faq->question,
                                                   ])
                                               </td>
                                           </tr>
                                       @endforeach

                                   </tbody>
                               </table>
                               <!-- Pagination Links -->
                               {{ $faqs->links() }}
                           </div>
                       </div>
                   </div>
               </div>
           </div>



           <!--  END CONTENT AREA  -->
       @endsection


