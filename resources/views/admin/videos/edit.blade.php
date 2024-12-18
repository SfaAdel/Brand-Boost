@extends('admin.layouts.main')

@section('title', __('sidebar.dashboard') . ' - ' . __('forms.update_video'))

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
                            <h4>{{ __('forms.update_video') }}</h4>
                        </div>
                        <div class="widget-content widget-content-area">
                            <form action="{{ route('admin.videos.update', $video->id) }}" method="POST" class="px-3"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')

                                <h5 class="my-3">{{ __('forms.basic_info') }}</h5>

                                <!-- video -->
                                <div class="form-group mb-4">
                                    <label for="video">{{ __('forms.video') . ' - ' . $video->type }} </label>
                                    <input type="file" class="form-control @error('video') is-invalid @enderror"
                                        id="video" name="video" accept="video/mp4,video/x-m4v,video/*">
                                    @error('video')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                    @if ($video->video)
                                        <video controls class="mt-2" style="max-width: 15rem;">
                                            <source src="{{ asset('videos/home/' . $video->video) }}" type="video/mp4">
                                            Your browser does not support the video tag.
                                        </video>
                                    @endif
                                </div>



                                <div class="d-flex justify-content-end mt-3">
                                    <button type="submit" class="btn btn-success mx-3">{{ __('forms.save') }}</button>
                                    <a href="{{ route('admin.videos.index') }}"
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
