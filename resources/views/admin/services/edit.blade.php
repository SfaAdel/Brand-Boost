@extends('admin.layouts.main')

@section('title', __('sidebar.dashboard') . ' - ' . __('forms.update_service'))

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
                            <h4>{{ __('forms.update_service') }}</h4>
                        </div>
                        <div class="widget-content widget-content-area">
                            <form action="{{ route('admin.services.update' , $service->id) }}" method="POST" class="px-3" enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')


                                <h5 class="my-3">{{ __('forms.basic_info') }}</h5>

                                <div class="form-group mb-4">
                                    <div class="form-group mb-4">
                                        <label for="icon">{{ __('forms.service_icon') }}</label>
                                        <input type="file" class="form-control" id="icon" name="icon">
                                        @if ($service->icon)
                                            <img src="{{ asset('images/services/' . $service->icon) }}" alt="icon"
                                                class="mt-2" style="max-width: 5rem;">
                                        @endif
                                    </div>
                                </div>

                 

                                <h5 class="my-3">{{ __('forms.translated_info') }} </h5>


                                <ul class="nav nav-pills mb-1 mt-4" id="pills-tab" role="tablist">

                                    @foreach (config('app.languages') as $key => $lang)
                                        <li class="nav-item">
                                            <a class="nav-link @if ($loop->index == 0) active @endif"
                                                id="home-tab" data-toggle="pill" href="#{{ $key }}"
                                                role="tab" aria-controls="pill-home"
                                                aria-selected="true">{{ $lang }}</a>
                                        </li>
                                    @endforeach
                                </ul>

                                <div class="tab-content mt-0" id="myTabContent">
                                    @foreach (config('app.languages') as $key => $lang)
                                        <div class="tab-pane mt-1 fade @if ($loop->index == 0) show active in @endif"
                                            id="{{ $key }}" role="tabpanel" aria-labelledby="home-tab">
                                            

                                            <div class="form-group mt-3 col-md-12">
                                                <label>{{ __('forms.name') }} - {{ $lang }}</label>
                                                <input type="text" name="{{ $key }}[name]" class="form-control"
                                                    placeholder="{{ __('forms.name') }}"
                                                    value="{{ optional($service->translate($key))->name }}">
                                            </div>

                                            <div class="form-group mt-3 col-md-12">
                                                <label>{{ __('forms.description') }} - {{ $lang }}</label>
                                                <textarea name="{{ $key }}[description]" class="form-control" rows="4" placeholder="{{ __('forms.description') }}"> {{ optional($service->translate($key))->description }}</textarea>
                                            </div>
                                
                                            <div class="form-group mt-3 col-md-12">
                                                <label>{{ __('forms.unit_of_price') }} - {{ $lang }}</label>
                                                <input type="text" name="{{ $key }}[unit_of_price]" class="form-control" placeholder="{{ __('forms.unit_of_price') }}" value="{{ optional($service->translate($key))->unit_of_price }}">
                                            </div>

                                        </div>
                                    @endforeach
                                </div>
                                <div class="d-flex justify-content-end mt-3">
                                    <button type="submit" class="btn btn-success mx-2">{{ __('forms.save') }}</button>
                                    <a href="{{ route('admin.services.index') }}" class="btn btn-secondary ms-2">{{ __('forms.cancel') }}</a>
                                </div>
                            </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
