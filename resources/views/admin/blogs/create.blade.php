@extends('admin.layouts.main')

@section('title', __('sidebar.dashboard') . ' - ' . __('forms.add_new_blog'))

@section('content')

    <a href="{{ route('admin.blogs.index') }}" class="btn  m-3 btn-success ">{{ __('forms.blogs_list') }}</a>

    <div class="card main-card m-1">
        <div class="container">
            <div class="my-3">
                @include('admin.includes.alerts')
            </div>
            <div class="row layout-top-spacing">
                <div class="col-lg-12 col-12 layout-spacing">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-header">
                            <h4>{{ __('forms.add_new_blog') }}</h4>
                        </div>
                        <div class="widget-content widget-content-area">
                            <form action="{{ route('admin.blogs.store') }}" method="POST" class="px-3"
                                enctype="multipart/form-data">
                                @csrf



                                {{-- <div id="editor-container">
                                            <h1>This is a heading text...</h1>
                                            <br />
                                            <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla dui arcu,
                                                pellentesque id mattis sed, mattis semper erat. Etiam commodo arcu a mollis
                                                consequat. Curabitur pretium auctor tortor, bibendum placerat elit feugiat
                                                et. Ut ac turpis nec dui ullamcorper ornare. Vestibulum finibus quis magna
                                                at accumsan. Praesent a purus vitae tortor fringilla tempus vel non purus.
                                                Suspendisse eleifend nibh porta dolor ullamcorper laoreet. Ut sit amet ipsum
                                                vitae lectus pharetra tincidunt. In ipsum quam, iaculis at erat ut,
                                                fermentum efficitur ipsum. Nunc odio diam, fringilla in auctor et,
                                                scelerisque at lorem. Sed convallis tempor dolor eu dictum. Cras ornare
                                                ornare imperdiet. Pellentesque sagittis lacus non libero fringilla faucibus.
                                                Aenean ullamcorper enim et metus vestibulum, eu aliquam nunc placerat.
                                                Praesent fringilla dolor sit amet leo pulvinar semper. </p>
                                            <br />
                                            <p> Curabitur vel tincidunt dui. Duis vestibulum eget velit sit amet aliquet.
                                                Curabitur vitae cursus ex. Aliquam pulvinar vulputate ullamcorper. Maecenas
                                                luctus in eros et aliquet. Cras auctor luctus nisl a consectetur. Morbi
                                                hendrerit nisi nunc, quis egestas nibh consectetur nec. Aliquam vel lorem
                                                enim. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices
                                                posuere cubilia Curae; Nunc placerat, enim quis varius luctus, enim arcu
                                                tincidunt purus, in vulputate tortor mi a tortor. Praesent porta ornare
                                                fermentum. Praesent sed ligula at ante tempor posuere a at lorem. </p>
                                            <br />
                                            <p> Aliquam diam felis, vehicula ut ipsum eu, consectetur tincidunt ipsum.
                                                Vestibulum sed metus ac nisi tincidunt mollis sed non urna. Vivamus lacinia
                                                ullamcorper interdum. Sed sed erat vel leo venenatis pretium. Sed aliquet
                                                sem nunc, ut iaculis dolor consectetur et. Vivamus ligula sapien, maximus
                                                nec pellentesque ut, imperdiet at libero. Vivamus semper nulla lectus, id
                                                dapibus nulla convallis id. Quisque elementum lectus ac dui gravida, ut
                                                molestie nunc convallis. Pellentesque et odio non dolor convallis commodo
                                                sit amet a ante. </p>



                                        </div> --}}

                                <h5 class="my-3">{{ __('forms.basic_info') }}</h5>

                                <div class="form-group mb-4">
                                    <label for="icon">{{ __('forms.icon') }}</label>
                                    <input type="file" class="form-control @error('icon') is-invalid @enderror"
                                        id="icon" name="icon">
                                </div>

                                <div class="form-group mb-4">
                                    <label for="icon">{{ __('forms.banner') }}</label>
                                    <input type="file" class="form-control @error('banner') is-invalid @enderror"
                                        id="banner" name="banner">
                                </div>

                                <div class="form-group mb-4">


                                    {{-- @foreach ($tags as $tag)
                                        <p value="{{ $tag->id }}">{{ $tag->name }}</p>
                                    @endforeach --}}

                                    <label for="tags">{{ __('forms.tags') }}</label>

                                    <select class="form-control tagging" multiple="multiple" name="tags[]" id="tags">
                                        @foreach ($tags as $tag)
                                            <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <h5 class="my-3">{{ __('forms.translated_info') }}</h5>

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
                                            <div class="form-group">
                                                <label>{{ __('forms.main_title') }} - {{ $lang }}</label>
                                                <input type="text" name="{{ $key }}[main_title]"
                                                    class="form-control" placeholder="{{ __('forms.main_title') }}">
                                            </div>
                                            <div class="form-group">
                                                <label>{{ __('forms.short_description') }} - {{ $lang }}</label>
                                                <textarea name="{{ $key }}[short_description]" class="form-control"></textarea>
                                            </div>
                                            {{-- <div class="form-group">
                                                <label>{{ __('forms.long_description') }} - {{ $lang }}</label>
                                                <textarea name="{{ $key }}[long_description]" class="form-control"></textarea>
                                            </div> --}}

                                            <!-- Long Description -->
                                            <div class="form-group">
                                                <label>{{ __('forms.long_description') }} - {{ $lang }}</label>
                                                <!-- CKEditor Textarea -->
                                                <textarea name="{{ $key }}[long_description]" id="long_description_{{ $key }}" class="ckeditor">
                                                    {{-- {{ $blog->translate($key)?->long_description }} --}}
                                                </textarea>
                                            </div>

                                        </div>
                                    @endforeach
                                </div>


                                <div class="d-flex justify-content-end mt-3">
                                    <button type="submit" class="btn btn-success mx-2">{{ __('forms.save') }}</button>
                                    <a href="{{ route('admin.blogs.index') }}"
                                        class="btn btn-secondary ms-2">{{ __('forms.cancel') }}</a>
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
    {{-- <link href=" {{ asset('admin/rtl/assets/css/scrollspyNav.css') }}" rel="stylesheet" type="text/css" /> --}}
    <link rel="stylesheet" type="text/css" href=" {{ asset('admin/rtl/plugins/select2/select2.min.css') }}">
@endpush

@push('custom-js')
    <script src=" {{ asset('admin/rtl/plugins/bootstrap-select/bootstrap-select.min.js') }}"></script>
    <script src=" {{ asset('admin/rtl/assets/js/scrollspyNav.js') }}"></script>
    <script src=" {{ asset('admin/rtl/plugins/select2/select2.min.js') }}"></script>
    <script src=" {{ asset('admin/rtl/plugins/select2/custom-select2.js') }}"></script>

@endpush
