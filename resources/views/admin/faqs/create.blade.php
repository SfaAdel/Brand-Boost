@extends('admin.layouts.main')

@section('title', __('sidebar.dashboard') . ' - ' . __('forms.add_new_faq'))

@section('content')
   
<a href="{{ route('admin.faqs.index') }}" class="btn  m-3 btn-success ">{{ __('forms.faqs_list') }}</a>

    <div class="card main-card m-1">
        <div class="container">
            <div class="my-3">
                @include('admin.includes.alerts')
            </div>
            <div class="row layout-top-spacing">
                <div class="col-lg-12 col-12 layout-spacing">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-header">
                            <h4>{{ __('forms.add_new_faq') }}</h4>
                        </div>
                        <div class="widget-content widget-content-area">
                            <form action="{{ route('admin.faqs.store') }}" method="POST" class="px-3">
                                @csrf
    

                                <h5 class="my-3">{{ __('forms.translated_info') }}</h5>


                                <ul class="nav nav-pills mb-1 mt-4" id="pills-tab" role="tablist">
                                    @foreach (config('app.languages') as $key => $lang)
                                        <li class="nav-item">
                                            <a class="nav-link @if ($loop->first) active @endif"
                                               id="home-tab" data-toggle="pill" href="#{{ $key }}"
                                               role="tab" aria-controls="pill-home"
                                               aria-selected="true">{{ $lang }}</a>
                                        </li>
                                    @endforeach
                                </ul>
    
                                <div class="tab-content mt-0" id="myTabContent">
                                    @foreach (config('app.languages') as $key => $lang)
                                        <div class="tab-pane mt-1 fade @if ($loop->first) show active in @endif"
                                             id="{{ $key }}" role="tabpanel" aria-labelledby="home-tab">
    
                                            <div class="form-group mt-3 col-md-12">
                                                <label>{{ __('forms.question') }} - {{ $lang }} </label>
                                                <input type="text" name="{{ $key }}[question]" class="form-control"
                                                       placeholder="{{ __('forms.question') }}">
                                            </div>

                                            <div class="form-group mt-3 col-md-12">
                                                <label>{{ __('forms.answer') }} - {{ $lang }} </label>
                                                <input type="text" name="{{ $key }}[answer]" class="form-control"
                                                       placeholder="{{ __('forms.answer') }}">
                                            </div>
                                        </div>

                                        
                                    @endforeach
                                </div>
    
                                <div class="d-flex justify-content-end mt-3">
                                    <button type="submit" class="btn btn-success mx-2">{{ __('forms.save') }}</button>
                                    <a href="{{ route('admin.faqs.index') }}" class="btn btn-secondary ms-2">{{ __('forms.cancel') }}</a>
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
<link href=" {{ asset('admin/rtl/plugins/bootstrap-select/bootstrap-select.min.css') }}" rel="stylesheet" type="text/css">
@endpush

@push('custom-js')

<script src=" {{ asset('admin/rtl/plugins/bootstrap-select/bootstrap-select.min.js') }}"></script>

@endpush