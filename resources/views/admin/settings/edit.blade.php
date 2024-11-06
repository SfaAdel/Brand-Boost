@extends('admin.layouts.main')

@section('title', __('sidebar.settings') . ' - ' . __('forms.edit_settings'))

@section('content')
    <div class="card main-card m-1">
        <div class="container">
            <div class="my-3">
                @include('admin.includes.alerts')
            </div>
            <div class="row layout-top-spacing">
                <div class="col-lg-12 col-12 layout-spacing">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-header">
                            <h4>{{ __('forms.edit_settings') }}</h4>
                        </div>
                        <div class="widget-content widget-content-area">
                            <form action="{{ route('admin.settings.update', $setting->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')

                                @foreach ([
                                    'site_name' => 'name',
                                    'site_email' => 'email',
                                    'phone' => 'phone',
                                    'whatsapp' => 'whatsapp',
                                    'facebook' => 'facebook',
                                    'x' => 'x',
                                    'youtube' => 'youtube',
                                    'address' => 'address',
                                    'linkedin' => 'linkedin',
                                    'instagram' => 'instagram',
                                    'tiktok' => 'tiktok'
                                ] as $label => $field)
                                    <div class="form-group mb-4">
                                        <label for="{{ $field }}">{{ __('forms.' . $label) }}</label>
                                        <input type="text" class="form-control" id="{{ $field }}" name="{{ $field }}" 
                                               placeholder="{{ __('forms.enter') . ' ' . __('forms.' . $label) }}" 
                                               value="{{ old($field, $setting->$field) }}" required>
                                    </div>
                                @endforeach

                                <div class="form-group mb-4">
                                    <label for="logo">{{ __('forms.logo') }}</label>
                                    <input type="file" class="form-control" id="logo" name="logo">
                                    @if ($setting->logo)
                                        <img src="{{ asset('images/settings/' . $setting->logo) }}" alt="Logo" class="mt-2" style="max-width: 5rem;">
                                    @endif
                                </div>

                                <div class="form-group mb-4">
                                    <label for="favicon">{{ __('forms.favicon') }}</label>
                                    <input type="file" class="form-control" id="favicon" name="favicon">
                                    @if ($setting->favicon)
                                        <img src="{{ asset('images/settings/' . $setting->favicon) }}" alt="Favicon" class="mt-2" style="max-width: 2rem;">
                                    @endif
                                </div>

                                <button type="submit" class="btn btn-primary mt-4">{{ __('forms.update') }}</button>
                                <a href="{{ route('admin.settings.index') }}" class="btn btn-secondary mt-4">{{ __('forms.cancel') }}</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
