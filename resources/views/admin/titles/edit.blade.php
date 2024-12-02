@extends('admin.layouts.main')

@section('title', __('sidebar.dashboard') . ' - ' . __('forms.update_title'))

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
                            <h4>{{ __('forms.update_title') }}</h4>
                        </div>
                        <div class="widget-content widget-content-area">
                            <form action="{{ route('admin.titles.update', $title->id) }}" method="POST" class="px-3"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')

                                <h5 class="my-3">{{ __('forms.basic_info') }}</h5>

                                <!-- title Icon -->
                                <div class="form-group mb-4">
                                    <label for="icon">{{ __('forms.icon') }}</label>
                                    <input type="file" class="form-control @error('icon') is-invalid @enderror"
                                        id="icon" name="icon">
                                    @if ($title->icon)
                                        <img src="{{ asset('images/titles/' . $title->icon) }}" alt="icon" class="mt-2"
                                            style="max-width: 5rem;">
                                    @endif
                                </div>
                                <!-- title banner -->
                                <div class="form-group mb-4">
                                    <label for="banner">{{ __('forms.banner') }}</label>
                                    <input type="file" class="form-control @error('banner') is-invalid @enderror"
                                        id="banner" name="banner">
                                    @if ($title->banner)
                                        <img src="{{ asset('images/pages_banners/' . $title->banner) }}" alt="banner" class="mt-2"
                                            style="max-width: 5rem;">
                                    @endif
                                </div>
                                <!-- Tags -->
                                <div class="form-group mb-4">
                                    <label for="section">{{ __('forms.section') }}</label>
                                    <select class="form-control" name="section" id="section">
                                        @php
                                            $sections = ['about_us', 'services', 'stars', 'advantages', 'blogs', 'contacts', 'main', 'join'];
                                        @endphp
                                        @foreach ($sections as $section)
                                            <option value="{{ $section }}" 
                                                @if (isset($title) && $title->section === $section) selected @endif>
                                                {{ __('forms.' . $section) }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                

                                <h5 class="my-3">{{ __('forms.translated_info') }}</h5>

                                <!-- Language Tabs -->
                                <ul class="nav nav-pills mb-1 mt-4" id="pills-tab" role="tablist">
                                    @foreach (config('app.languages') as $key => $lang)
                                        <li class="nav-item">
                                            <a class="nav-link @if ($loop->first) active @endif"
                                                data-toggle="pill" href="#{{ $key }}"
                                                role="tab">{{ $lang }}</a>
                                        </li>
                                    @endforeach
                                </ul>

                                <div class="tab-content mt-0">
                                    @foreach (config('app.languages') as $key => $lang)
                                        <div class="tab-pane fade @if ($loop->first) show active @endif"
                                            id="{{ $key }}">
                                            <!-- Main Title -->
                                            <div class="form-group">
                                                <label>{{ __('forms.title') }} - {{ $lang }}</label>
                                                <input type="text" name="{{ $key }}[title]"
                                                    class="form-control" value="{{ $title->translate($key)?->title }}">
                                            </div>

                                            <!-- Short Description -->
                                            <div class="form-group">
                                                <label>{{ __('forms.short_description') }} - {{ $lang }}</label>
                                                <textarea name="{{ $key }}[short_description]" class="form-control">{{ $title->translate($key)?->short_description }}</textarea>
                                            </div>

                                            <!-- Long Description -->
                                            {{-- <div class="form-group">
                                                <label>{{ __('forms.long_description') }} - {{ $lang }}</label>
                                                <textarea name="{{ $key }}[long_description]" class="form-control">{{ $title->translate($key)?->long_description }}</textarea>
                                            </div> --}}
                                
                                            <!-- Long Description -->
                                            <div class="form-group">
                                                <label>{{ __('forms.long_description') }} - {{ $lang }}</label>
                                                <!-- CKEditor Textarea -->
                                                <textarea name="{{ $key }}[long_description]" id="long_description_{{ $key }}" class="ckeditor">
                                                    {{ $title->translate($key)?->long_description }}
                                                </textarea>
                                            </div>
                                             
                                        </div>
                                    @endforeach
                                </div>

                                <div class="d-flex justify-content-end mt-3">
                                    <button type="submit" class="btn btn-success mx-3">{{ __('forms.save') }}</button>
                                    <a href="{{ route('admin.titles.index') }}"
                                        class="btn btn-secondary">{{ __('forms.cancel') }}</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('custom-css')
    <link href=" {{ asset('admin/rtl/plugins/bootstrap-select/bootstrap-select.min.css') }}" rel="stylesheet"
        type="text/css">
    <link rel="stylesheet" type="text/css" href=" {{ asset('admin/rtl/plugins/select2/select2.min.css') }}">
@endpush

@push('custom-js')
    <script src=" {{ asset('admin/rtl/plugins/bootstrap-select/bootstrap-select.min.js') }}"></script>
    <script src=" {{ asset('admin/rtl/plugins/select2/select2.min.js') }}"></script>
    <script src=" {{ asset('admin/rtl/plugins/select2/custom-select2.js') }}"></script>
@endpush