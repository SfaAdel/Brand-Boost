@extends('admin.layouts.main')

@section('title', __('sidebar.dashboard') . ' - ' . __('forms.update_blog'))

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
                            <h4>{{ __('forms.update_blog') }}</h4>
                        </div>
                        <div class="widget-content widget-content-area">
                            <form action="{{ route('admin.blogs.update', $blog->id) }}" method="POST" class="px-3"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')

                                <h5 class="my-3">{{ __('forms.basic_info') }}</h5>

                                <!-- Blog Icon -->
                                <div class="form-group mb-4">
                                    <label for="icon">{{ __('forms.icon') }}</label>
                                    <input type="file" class="form-control @error('icon') is-invalid @enderror"
                                        id="icon" name="icon">
                                    @if ($blog->icon)
                                        <img src="{{ asset('images/blogs/' . $blog->icon) }}" alt="icon" class="mt-2"
                                            style="max-width: 5rem;">
                                    @endif
                                </div>
                                <!-- Blog banner -->
                                <div class="form-group mb-4">
                                    <label for="banner">{{ __('forms.banner') }}</label>
                                    <input type="file" class="form-control @error('banner') is-invalid @enderror"
                                        id="banner" name="banner">
                                    @if ($blog->banner)
                                        <img src="{{ asset('images/blog_banners/' . $blog->banner) }}" alt="banner" class="mt-2"
                                            style="max-width: 5rem;">
                                    @endif
                                </div>
                                <!-- Tags -->
                                <div class="form-group mb-4">
                                    <label for="tags">{{ __('forms.tags') }}</label>
                                    <select class="form-control tagging" multiple="multiple" name="tags[]" id="tags">
                                        @foreach ($tags as $tag)
                                            <option value="{{ $tag->id }}"
                                                @if (in_array($tag->id, $blog->tags->pluck('id')->toArray())) selected @endif>
                                                {{ $tag->name }}
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
                                                <label>{{ __('forms.main_title') }} - {{ $lang }}</label>
                                                <input type="text" name="{{ $key }}[main_title]"
                                                    class="form-control" value="{{ $blog->translate($key)?->main_title }}">
                                            </div>

                                            <!-- Short Description -->
                                            <div class="form-group">
                                                <label>{{ __('forms.short_description') }} - {{ $lang }}</label>
                                                <textarea name="{{ $key }}[short_description]" class="form-control">{{ $blog->translate($key)?->short_description }}</textarea>
                                            </div>

                                            <!-- Long Description -->
                                            {{-- <div class="form-group">
                                                <label>{{ __('forms.long_description') }} - {{ $lang }}</label>
                                                <textarea name="{{ $key }}[long_description]" class="form-control">{{ $blog->translate($key)?->long_description }}</textarea>
                                            </div> --}}
                                
                                            <!-- Long Description -->
                                            <div class="form-group">
                                                <label>{{ __('forms.long_description') }} - {{ $lang }}</label>
                                                <!-- CKEditor Textarea -->
                                                <textarea name="{{ $key }}[long_description]" id="long_description_{{ $key }}" class="ckeditor">
                                                    {{ $blog->translate($key)?->long_description }}
                                                </textarea>
                                            </div>
                                             
                                        </div>
                                    @endforeach
                                </div>

                                <div class="d-flex justify-content-end mt-3">
                                    <button type="submit" class="btn btn-success mx-3">{{ __('forms.save') }}</button>
                                    <a href="{{ route('admin.blogs.index') }}"
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