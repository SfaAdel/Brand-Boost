 
            @extends('admin.layouts.main')

            @section('title', __('sidebar.dashboard') . ' - ' . __('forms.blogs_list'))
 
            @section('body-class', 'sidebar-noneoverflow')
 
            @section('content')
 
 
                <a href="{{ route('admin.blogs.create') }}"
                    class="btn  m-3 btn-success ">{{ __('forms.add_new_blog') }}</a>
 
                <!--  BEGIN CONTENT AREA  -->
 
                <div class="layout-px-spacing">
                    <div class="page-header">
                        <div class="page-title">
                            <h3>{{ __('forms.blogs_list') }}</h3>
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
                                                <th>{{ __('forms.main_title') }}</th>
                                                <th>{{ __('forms.short_description') }}</th>
                                                <th>{{ __('forms.icon') }}</th>
                                                <th>{{ __('forms.created_at') }}</th>
                                                <th>{{ __('forms.action') }}</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($blogs as $blog)
                                                <tr>
                                                 <td>{{ $blog->main_title }}</td>
                                                 <td>{{ $blog->short_description }}</td>
                                                 <td>
                                                        @if ($blog->icon)
                                                            <img src="{{ asset('images/blogs/' . $blog->icon) }}"
                                                                alt="icon" class="mt-2" style="max-width: 5rem;">
                                                        @endif
                                                    </td>
                                                    <td>{{ $blog->created_at->format('Y-m-d') }}</td>
 
                                                    <td>
                                                        <a href="{{ route('admin.blogs.edit', $blog->id) }}"
                                                            class="btn btn-primary mb-2 mr-2 btn-sm">{{ __('forms.edit') }}</a>
 
                                                        <a href="{{ route('admin.blogs.show', $blog->id) }}" class="btn btn-warning  mb-2 mr-2 btn-sm">View</a>
                                                        <!-- Button to open the modal, with a unique modal ID -->
                                                        <button type="button" class="btn btn-danger mb-2 mr-2 btn-sm"
                                                            data-toggle="modal"
                                                            data-target="#deleteModal{{ $blog->id }}">
                                                            {{ __('forms.delete') }}
                                                        </button>
 
                                                        <!-- Include the Delete Modal with a unique ID -->
                                                        @include('admin.components.delete-modal', [
                                                            'modalId' => 'deleteModal' . $blog->id,
                                                            'formAction' => route(
                                                                'admin.blogs.destroy',
                                                                $blog->id),
                                                            'itemName' => $blog->main_title,
                                                        ])
                                                    </td>
                                                </tr>
                                            @endforeach
 
                                        </tbody>
                                    </table>
                                    <!-- Pagination Links -->
                                    {{ $blogs->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
 
 
 
                <!--  END CONTENT AREA  -->
            @endsection
 
 
 
 
 
 
 
 