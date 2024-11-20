@extends('admin.layouts.main')

@section('title', __('sidebar.dashboard') . ' - ' . __('forms.blog_details'))

@section('body-class', 'sidebar-noneoverflow')

@section('content')
<div class="layout-px-spacing">
    <div class="page-header">
        <div class="page-title">
            <h3>{{ __('forms.blog').' : '. $blog->main_title }}</h3>
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
                        <h3 class="">{{ __('forms.blog_info') }}</h3>
                        <a href="{{ route('admin.blogs.edit', $blog->id) }}" class="mt-2 edit-profile">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3">
                                <path d="M12 20h9"></path>
                                <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path>
                            </svg>
                        </a>
                    </div>
                    <div class="text-center user-info">
                        <div class="d-flex justify-content-around">
                            @if ($blog->icon)
                            <div>
                                <label for=""> {{ __('forms.icon') }}</label>
                                <img src="{{ asset('images/blogs/' . $blog->icon) }}" alt="Logo" class="m-2 p-2" style="max-width: 5rem;">
    
                            </div>
                            @endif
                            @if ($blog->banner)
                            <div>
                                <label for="">{{ __('forms.banner') }}</label>
                                <img src="{{ asset('images/blog_banners/' . $blog->banner) }}" alt="Favicon" class="m-2 p-2" style="max-width: 5rem;">
    
                            </div>
                        @endif
                        </div>
                       
                        <p class="">{{ $blog->main_title }}</p>
                    </div>
                    <div class="user-info-list ">
                        <div >
                            <ul class="contacts-block list-unstyled">

                                                <!-- Tags -->
                                <li class="contacts-block__item">
                                    <h5 class="text-primary mb-3"> <i class="fa-solid fa-star"></i> {{ __('forms.tags') }}</h5>
                                    <p>
                                        @if($blog->tags->isNotEmpty())
                                            @foreach($blog->tags as $tag)
                                                <span class="badge badge-primary">{{ $tag->name }}</span>
                                            @endforeach
                                        @else
                                            {{ __('forms.no_tags_available') }}
                                        @endif
                                    </p>
                                </li>
                                <hr>
                                <li class="contacts-block__item">
                                    <h5 class="text-primary mb-3"> <i class="fa-solid fa-star"></i> {{ __('forms.short_description') }}</h5>
                                    <p>
                                        {{-- <i class="fa-solid fa-location-dot"></i> --}}
                                        {{ $blog->short_description }}
                                    </p>
                                </li>
                                <hr>
                                <li class="contacts-block__item">
                                    <h5 class="text-primary mb-3"> <i class="fa-solid fa-star"></i> {{ __('forms.long_description') }}</h5>
                                    <p>
                                        {{-- <i class="fa-solid fa-location-dot"></i> --}}
                                        {!! $blog->long_description !!}
                                    </p>
                                </li>
                       
                            </ul>
                        </div>
                    </div>
                    <hr>
                    <div class="mt-4">
                        <h5>{{ __('forms.other_information') }}</h5>
                        <p><strong>{{ __('forms.created_at') }}: </strong>{{ $blog->created_at->format('Y-m-d') }}</p>
                        <p><strong>{{ __('forms.updated_at') }}: </strong>{{ $blog->updated_at->format('Y-m-d') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
