 
            @extends('admin.layouts.main')

            @section('title', __('sidebar.dashboard') . ' - ' . __('forms.titles_list'))
 
            @section('body-class', 'sidebar-noneoverflow')
 
            @section('content')
 

 
                <!--  BEGIN CONTENT AREA  -->
 
                <div class="layout-px-spacing">
                    <div class="page-header">
                        <div class="page-title">
                            <h3>{{ __('forms.titles_list') }}</h3>
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
                                                <th>{{ __('forms.title') }}</th>
                                                <th>{{ __('forms.short_description') }}</th>
                                                <th>{{ __('forms.section') }}</th>
                                                <th>{{ __('forms.icon') }}</th>
                                                <th>{{ __('forms.created_at') }}</th>
                                                <th>{{ __('forms.action') }}</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($titles as $title)
                                                <tr>
                                                 <td>{{ $title->title }}</td>
                                                 <td>{{ $title->short_description }}</td>
                                                 <td>{{ $title->section }}</td>
                                                 <td>
                                                        @if ($title->icon)
                                                            <img src="{{ asset('images/titles/' . $title->icon) }}"
                                                                alt="icon" class="mt-2" style="max-width: 5rem;">
                                                        @endif
                                                    </td>
                                                    <td>{{ $title->created_at->format('Y-m-d') }}</td>
 
                                                    <td>
                                                        <a href="{{ route('admin.titles.edit', $title->id) }}"
                                                            class="btn btn-primary mb-2 mr-2 btn-sm">{{ __('forms.edit') }}</a>
 
                                                        <a href="{{ route('admin.titles.show', $title->id) }}" class="btn btn-warning  mb-2 mr-2 btn-sm">View</a>
                                                        {{-- <!-- Button to open the modal, with a unique modal ID -->
                                                        <button type="button" class="btn btn-danger mb-2 mr-2 btn-sm"
                                                            data-toggle="modal"
                                                            data-target="#deleteModal{{ $title->id }}">
                                                            {{ __('forms.delete') }}
                                                        </button>
 
                                                        <!-- Include the Delete Modal with a unique ID -->
                                                        @include('admin.components.delete-modal', [
                                                            'modalId' => 'deleteModal' . $title->id,
                                                            'formAction' => route(
                                                                'admin.titles.destroy',
                                                                $title->id),
                                                            'itemName' => $title->title,
                                                        ]) --}}
                                                    </td>
                                                </tr>
                                            @endforeach
 
                                        </tbody>
                                    </table>
                                    <!-- Pagination Links -->
                                    {{ $titles->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
 
 
 
                <!--  END CONTENT AREA  -->
            @endsection
 
 
 
 
 
 
 
 