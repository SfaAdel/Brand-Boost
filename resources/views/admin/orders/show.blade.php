@extends('admin.layouts.main')

@section('title', __('sidebar.dashboard') . ' - ' . __('messages.home'))

@section('body-class', 'sidebar-noneoverflow')

@section('content')
<div class="layout-px-spacing">
    <div class="page-header">
        <div class="page-title">
            <h3>{{ __('forms.settings') }}</h3>
        </div>
    </div>

    <div class="my-3">
        @include('admin.includes.alerts')
    </div>

    <div class="row p-0">
        <div class="col-xl-6 col-lg-6 col-md-5 col-sm-12 layout-top-spacing mx-auto">
            <div class="user-profile ">
                <div class="widget-content widget-content-area">
                    <div class="d-flex justify-content-between">
                        <h3 class="">{{ __('forms.settings_info') }}</h3>
                        <a href="{{ route('admin.settings.edit', 1) }}" class="mt-2 edit-profile">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3">
                                <path d="M12 20h9"></path>
                                <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path>
                            </svg>
                        </a>
                    </div>
                    <div class="text-center user-info">
                        <div class="d-flex justify-content-around">
                            @if ($settings->logo)
                            <div>
                                <label for=""> {{ __('forms.logo') }}</label>
                                <img src="{{ asset('images/settings/' . $settings->logo) }}" alt="Logo" class="m-2 p-2" style="max-width: 5rem;">
    
                            </div>
                            @endif
                            @if ($settings->favicon)
                            <div>
                                <label for="">{{ __('forms.favicon') }}</label>
                                <img src="{{ asset('images/settings/' . $settings->favicon) }}" alt="Favicon" class="m-2 p-2" style="max-width: 5rem;">
    
                            </div>
                        @endif
                        </div>
                       
                        <p class="">{{ $settings->name }}</p>
                    </div>
                    <div class="user-info-list ">
                        <div class="">
                            <ul class="contacts-block list-unstyled">
                                <li class="contacts-block__item">
                                    <a href="tel:{{ $settings->phone }}" target="_blank">
                                        <i class="fa-solid fa-phone"></i>
                                        {{ $settings->whatsapp }}
                                    </a>
                                </li>
                                <li class="contacts-block__item">
                                    <a href="mailto:{{ $settings->email }}">
                                        <i class="fa-solid fa-envelope"></i>
                                        {{ $settings->email }}
                                    </a>
                                </li>
                                <li class="contacts-block__item">
                                    <a href="#">
                                        <i class="fa-solid fa-location-dot"></i>
                                        {{ $settings->address }}
                                    </a>
                                </li>
                                <li class="contacts-block__item">
                                    <a href="tel:{{ $settings->whatsapp }}" target="_blank">
                                        <i class="fa-brands fa-whatsapp"></i>
                                        {{ $settings->whatsapp }}
                                    </a>
                                </li>
                                <li class="contacts-block__item">
                                    <a href="{{ $settings->facebook }}" target="_blank">
                                        <i class="fa-brands fa-facebook"></i>
                                        {{ $settings->facebook }}
                                    </a>
                                </li>
                                <li class="contacts-block__item">
                                    <a href="{{ $settings->instagram }}" target="_blank">
                                        <i class="fa-brands fa-instagram"></i>
                                        {{ $settings->instagram }}
                                    </a>
                                </li>
                                <li class="contacts-block__item">
                                    <a href="{{ $settings->youtube }}" target="_blank">
                                        <i class="fa-brands fa-youtube"></i>
                                       {{ $settings->youtube }}
                                    </a>
                                </li>
                                <li class="contacts-block__item">
                                    <a href="{{ $settings->linkedin }}" target="_blank">
                                        <i class="fa-brands fa-linkedin"></i>
                                        {{ $settings->linkedin }}
                                    </a>
                                </li>
                                <li class="contacts-block__item">
                                    <a href="{{ $settings->tiktok }}" target="_blank">
                                        <i class="fa-brands fa-tiktok"></i>
                                        {{ $settings->tiktok }}
                                    </a>
                                </li>
                                <li class="contacts-block__item">
                                    <a href="{{ $settings->x }}" target="_blank">
                                        <i class="fa-brands fa-x-twitter"></i>
                                        {{ $settings->x }}
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <hr>
                    <div class="mt-4">
                        <h5>{{ __('forms.other_information') }}</h5>
                        <p><strong>{{ __('forms.created_at') }}: </strong>{{ $settings->created_at->format('Y-m-d') }}</p>
                        <p><strong>{{ __('forms.updated_at') }}: </strong>{{ $settings->updated_at->format('Y-m-d') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
