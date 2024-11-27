@extends('admin.layouts.main')

@section('title', __('sidebar.freelancers') . ' - ' . __('forms.details'))

@section('body-class', 'sidebar-noneoverflow')

@section('content')
    <div class="layout-px-spacing">
        <div class="page-header">
            <div class="page-title">
                <h3>{{ __('forms.freelancer_details') }}</h3>
            </div>
        </div>

        <div class="my-3">
            @include('admin.includes.alerts')
        </div>

        <div class="row">
            <!-- Business Owner Info -->
            <div class="col-lg-6 layout-top-spacing">
                <div class="user-profile">
                    <div class="widget-content widget-content-area">
                        <h4>{{ __('forms.freelancer_info') }}</h4>
                        <div class="user-info">

                            <p><strong>{{ __('forms.name') }}:</strong> {{ $freelancer->name }}</p>
                            <p><strong>{{ __('forms.email') }}:</strong> <a
                                    href="mailto:{{ $freelancer->email }}">{{ $freelancer->email }}</a></p>
                            <p><strong>{{ __('forms.phone') }}:</strong> <a
                                    href="tel:+2{{ $freelancer->phone }}">{{ $freelancer->phone }}</a></p>
                            <p><strong>{{ __('forms.bio') }}:</strong> {{ $freelancer->bio }}</p>
                            <p><strong>{{ __('forms.total_orders') }}:</strong> {{ $freelancer->orders ? ->count() ?? 0 }}
                            </p>
                            <p><strong>{{ __('forms.status') }}:</strong>
                                <span class="{{ $freelancer->active ? 'text-success' : 'text-danger' }}">
                                    {{ $freelancer->active ? __('forms.active') : __('forms.not_active') }}
                                </span>
                            </p>
                            <hr>
                            <!-- fields -->
                            <h5 class="text-primary mb-3"> <i class="fa-solid fa-star"></i> {{ __('forms.fields') }}</h5>
                            <p>
                                @if ($freelancer->fields->isNotEmpty())
                                    @foreach ($freelancer->fields as $field)
                                        <span class="badge badge-primary">{{ $field->name }}</span>
                                    @endforeach
                                @else
                                    <span class="badge badge-danger"> {{ __('forms.no_fields_available') }}</span>

                                @endif
                            </p>
                            <hr>
                            <h5>{{ __('forms.change_status') }}</h5>

                            <form action="{{ route('admin.freelancers.update', $freelancer->id) }}" method="POST">
                                @csrf
                                @method('PATCH')

                                <div class="form-check">
                                    <input type="radio" class="form-check-input" id="active" name="active"
                                        value="1" {{ $freelancer->active ? 'checked' : '' }}>
                                    <label class="form-check-label" for="active">{{ __('forms.active') }}</label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" id="not_active" name="active"
                                        value="0" {{ !$freelancer->active ? 'checked' : '' }}>
                                    <label class="form-check-label" for="not_active">{{ __('forms.not_active') }}</label>
                                </div>

                                <!-- Favorite Status -->
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="fav" name="fav"
                                        value="1" {{ $freelancer->fav ? 'checked' : '' }}>
                                    <label class="form-check-label" for="fav">{{ __('forms.favorite') }}</label>
                                </div>

                                <button type="submit"
                                    class="btn btn-primary mt-2">{{ __('forms.update_status') }}</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>

            <!-- Orders List -->
            <div class="col-lg-6 layout-top-spacing">
                <div class="widget-content widget-content-area">
                    <h4>{{ __('forms.orders') }}</h4>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>{{ __('forms.id') }}</th>
                                    <th>{{ __('forms.service') }}</th>
                                    <th>{{ __('forms.ordered_at') }}</th>
                                    <th>{{ __('forms.status') }}</th>
                                    <th>{{ __('forms.action') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($freelancer->orders as $order)
                                    <tr>
                                        <td>{{ $order->id }}</td>
                                        <td>{{ $order->freelancerService->service->name }}</td>
                                        <td>{{ $order->created_at->format('Y-m-d H:i:s') }}</td>
                                        <td class="{{ $order->status === 'complete' ? 'text-success' : 'text-warning' }}">
                                            {{ __($order->status) }}
                                        </td>
                                        <td>

                                            <a href="{{ route('admin.orders.show', $order->id) }}"
                                                class="btn btn-outline-primary mb-2 mr-2 btn-sm">{{ __('forms.view') }}</a>
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
@endsection
