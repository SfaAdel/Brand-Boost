       <!-- resources/views/dashboard.blade.php -->
       @extends('admin.layouts.main')

       @section('title', __('sidebar.dashboard') . ' - ' . __('forms.hero_sections_list'))

       @section('body-class', 'sidebar-noneoverflow')

       @section('content')


           <a href="{{ route('admin.hero_sections.create') }}"
               class="btn  m-3 btn-success ">{{ __('forms.add_new_hero_section') }}</a>

           <!--  BEGIN CONTENT AREA  -->

           <div class="layout-px-spacing">
               <div class="page-header">
                   <div class="page-title">
                       <h3>{{ __('forms.hero_sections_list') }}</h3>
                   </div>
               </div>

               <div class="my-3">
                   @include('admin.includes.alerts')
               </div>

               <div class="row layout-top-spacing" id="cancel-row">
                   <div class="col-xl-12 col-lg-12 col-sm-12 layout-spacing">
                       <div class="widget-content widget-content-area br-6">
                           <div class="table-responsive mb-4 mt-4">
                               <!-- First Table -->
                               <h4>{{ __('forms.special_row') }}</h4>
                               <table id="special-row-table" class="table table-hover non-hover" style="width:100%">
                                   <thead>
                                       <tr>
                                          
                                           <th>{{ __('forms.h11') }}</th>
                                           <th>{{ __('forms.h12') }}</th>
                                           <th>{{ __('forms.h13') }}</th>
                                           <th>{{ __('forms.created_at') }}</th>
                                           <th>{{ __('forms.action') }}</th>
                                       </tr>
                                   </thead>
                                   <tbody>
                                       @if ($heroSections->first() && $heroSections->first()->h11 && $heroSections->first()->h12 && $heroSections->first()->h13)
                                           <tr>
                                            
                                               <td>{{ $heroSections->first()->h11 }}</td>
                                               <td>{{ $heroSections->first()->h12 }}</td>
                                               <td>{{ $heroSections->first()->h13 }}</td>
                                               <td>{{ $heroSections->first()->created_at->format('Y-m-d') }}</td>
                                               <td>
                                                   <a href="{{ route('admin.hero_sections.edit', $heroSections->first()->id) }}"
                                                       class="btn btn-primary btn-sm">{{ __('forms.edit') }}</a>
                                                   <!-- No delete button for the first row -->
                                               </td>
                                           </tr>
                                       @endif
                                   </tbody>
                               </table>

                               <!-- Second Table -->
                               <h4>{{ __('forms.other_rows') }}</h4>
                               <table id="other-rows-table" class="table table-hover non-hover" style="width:100%">
                                   <thead>
                                       <tr>
                                           <th>{{ __('forms.h21') }}</th>
                                           <th>{{ __('forms.h22') }}</th>
                                           <th>{{ __('forms.h23') }}</th>
                                           <th>{{ __('forms.p') }}</th>
                                           <th>{{ __('forms.created_at') }}</th>
                                           <th>{{ __('forms.action') }}</th>
                                       </tr>
                                   </thead>
                                   <tbody>
                                       @foreach ($heroSections as $heroSection)
                                           <tr>
                                               <td>{{ $heroSection->h21 }}</td>
                                               <td>{{ $heroSection->h22 }}</td>
                                               <td>{{ $heroSection->h23 }}</td>
                                               <td>{{ $heroSection->p }}</td>
                                               <td>{{ $heroSection->created_at->format('Y-m-d') }}</td>
                                               <td>
                                                   <a href="{{ route('admin.hero_sections.edit', $heroSection->id) }}"
                                                       class="btn btn-primary btn-sm">{{ __('forms.edit') }}</a>
                                                   <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                                       data-target="#deleteModal{{ $heroSection->id }}">
                                                       {{ __('forms.delete') }}
                                                   </button>
                                                   <!-- Include Delete Modal -->
                                                   @include('admin.components.delete-modal', [
                                                       'modalId' => 'deleteModal' . $heroSection->id,
                                                       'formAction' => route(
                                                           'admin.hero_sections.destroy',
                                                           $heroSection->id),
                                                       'itemName' => $heroSection->h21,
                                                   ])
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



           <!--  END CONTENT AREA  -->
       @endsection
