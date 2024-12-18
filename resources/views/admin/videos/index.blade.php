 @extends('admin.layouts.main')

 @section('title', __('sidebar.dashboard') . ' - ' . __('forms.videos_list'))

 @section('body-class', 'sidebar-noneoverflow')

 @section('content')



     <!--  BEGIN CONTENT AREA  -->

     <div class="layout-px-spacing">
         <div class="page-header">
             <div class="page-title">
                 <h3>{{ __('forms.videos_list') }}</h3>
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
                                     <th>{{ __('forms.type') }}</th>
                                     <th>{{ __('forms.video') }}</th>
                                     <th>{{ __('forms.created_at') }}</th>
                                     <th>{{ __('forms.action') }}</th>
                                 </tr>
                             </thead>
                             <tbody>
                                 @foreach ($videos as $video)
                                     <tr>
                                         <td>{{ $video->type }}</td>
                                         <td>
                                             @if ($video->video)
                                                 <video controls class="mt-2" style="max-width: 300px;">
                                                     <source src="{{ asset('videos/home/' . $video->video) }}"
                                                         type="video/mp4">
                                                     Your browser does not support the video tag.
                                                 </video>
                                             @endif

                                         </td>

                                         <td>{{ $video->created_at->format('Y-m-d') }}</td>

                                         <td>
                                             <a href="{{ route('admin.videos.edit', $video->id) }}"
                                                 class="btn btn-primary mb-2 mr-1 btn-sm">{{ __('forms.edit') }}</a>


                                         </td>
                                     </tr>
                                 @endforeach

                             </tbody>
                         </table>
                         <!-- Pagination Links -->
                         {{ $videos->links() }}
                     </div>
                 </div>
             </div>
         </div>
     </div>



     <!--  END CONTENT AREA  -->
 @endsection
