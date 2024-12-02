 
            @extends('admin.layouts.main')

            @section('title', __('sidebar.dashboard') . ' - ' . __('forms.advantages_list'))
 
            @section('body-class', 'sidebar-noneoverflow')
 
            @section('content')
 
 
                <a href="{{ route('admin.advantages.create') }}"
                    class="btn  m-3 btn-success ">{{ __('forms.add_new_advantage') }}</a>
 
                <!--  BEGIN CONTENT AREA  -->
 
                <div class="layout-px-spacing">
                    <div class="page-header">
                        <div class="page-title">
                            <h3>{{ __('forms.advantages_list') }}</h3>
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
                                                <th>{{ __('forms.icon') }}</th>
                                                <th>{{ __('forms.created_at') }}</th>
                                                <th>{{ __('forms.action') }}</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($advantages as $advantage)
                                                <tr>
                                                    <td>{{ $advantage->title }}</td>
                                                    <td>
                                                        @if ($advantage->icon)
                                                            <img src="{{ asset('images/advantages/' . $advantage->icon) }}"
                                                                alt="icon" class="mt-2" style="max-width: 5rem;">
                                                        @endif
                                                    </td>
                                                    <td>{{ $advantage->created_at->format('Y-m-d') }}</td>
 
                                                    <td>
                                                        <a href="{{ route('admin.advantages.edit', $advantage->id) }}"
                                                            class="btn btn-primary mb-2 mr-2 btn-sm">{{ __('forms.edit') }}</a>
 
                                                        <!-- Button to open the modal, with a unique modal ID -->
                                                        <button type="button" class="btn btn-danger mb-2 mr-2 btn-sm"
                                                            data-toggle="modal"
                                                            data-target="#deleteModal{{ $advantage->id }}">
                                                            {{ __('forms.delete') }}
                                                        </button>
 
                                                        <!-- Include the Delete Modal with a unique ID -->
                                                        @include('admin.components.delete-modal', [
                                                            'modalId' => 'deleteModal' . $advantage->id,
                                                            'formAction' => route(
                                                                'admin.advantages.destroy',
                                                                $advantage->id),
                                                            'itemName' => $advantage->name,
                                                        ])
                                                    </td>
                                                </tr>
                                            @endforeach
 
                                        </tbody>
                                    </table>
                                    <!-- Pagination Links -->
                                    {{ $advantages->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
 
 
 
                <!--  END CONTENT AREA  -->
            @endsection
 
    
 
 
 
 
 
 