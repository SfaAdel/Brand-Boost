@extends('layout')

@section('content')
{{-- <div class="my-3">
    @include('front-end.includes.alerts')
</div> --}}

<div id="loader" class="font-hepta h-full w-full fixed top-0 bg-bl z-50 flex items-center justify-center gap-4">
    <h4 class="capitalize text-[2vw] text-white">{{ $heroSection1->h1 }}</h4>
    <h4 class="capitalize text-[2vw] text-gr">{{ $heroSection2->h1 }}</h4>
    <h4 class="capitalize text-[2vw] text-pi">{{ $heroSection3->h1 }}</h4>
</div>

<section id="hero" class="relative">
    <div class="relative w-[100vw] h-[100vh] overflow-hidden">
        <div class="absolute top-0 left-0 w-full h-full bg-pr opacity-75 z-10"></div>
        {{-- <video autoplay muted loop loading="lazy" src="{{ asset('front-end/assets/v2.mp4') }}"
            class="h-full w-full object-cover absolute"></video> --}}

        <video autoplay muted loop loading="lazy" src="{{ asset('videos/home/' . $heroVideo) }}"
            class="h-full w-full object-cover absolute"></video>

    </div>
    <div id="hero-content"
        class="w-full h-[60vh] px-10 md:px-16 absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 flex flex-col lg:flex-row justify-center items-center gap-1 md:gap-4 z-20">
        <div class="flex flex-col gap-5 text-white font-acworth text-center lg:text-start">

            <h2
                class="heroText opacity-0 translate-y-52 text-4xl sm:text-5xl md:text-6xl lg:text-7xl xl:text-8xl font-bold uppercase">
                {{ $heroSection1->h2 }}
            </h2>
            <h2
                class="heroText opacity-0 translate-y-52 text-3xl sm:text-4xl md:text-5xl lg:text-6xl xl:text-7xl font-bold uppercase">
                {{ $heroSection2->h2 }}
            </h2>
            <h2
                class="heroText opacity-0 translate-y-52 text-2xl sm:text-3xl md:text-4xl lg:text-5xl xl:text-6xl font-bold uppercase">
                {{ $heroSection3->h2 }}
            </h2>
        </div>
        <div id="hero-content-image"
            class="opacity-0 flex-[0] lg:flex-1 flex justify-center lg:justify-end items-center mt-5 lg:mt-0">
            <img class="w-[30vw] lg:w-1/2" src="{{ asset('front-end/logo/PNG/BB.png') }}" alt="Brand Boost Logo">
        </div>
    </div>
</section>

<div class="marquee-container bg-gr border-bl border-b-2 border-t-2 w-[100vw]">
    <ul>
        <li><img loading="lazy" src="{{ asset('front-end/logo/PNG/Artboard 10.png') }}" class="w-[2rem]"></li>
        <li><img loading="lazy" src="{{ asset('front-end/assets/star.svg') }}" class="w-[2rem]"></li>
        <li><img loading="lazy" src="{{ asset('front-end/logo/PNG/Artboard 23.png') }}" class="w-[2rem]"></li>
        <li><img loading="lazy" src="{{ asset('front-end/assets/star.svg') }}" class="w-[2rem]"></li>
        <li><img loading="lazy" src="{{ asset('front-end/logo/PNG/Artboard 19.png') }}" class="w-[2rem]"></li>
        <li><img loading="lazy" src="{{ asset('front-end/assets/star.svg') }}" class="w-[2rem]"></li>
        <li><img loading="lazy" src="{{ asset('front-end/logo/PNG/Artboard 25.png') }}" class="w-[2rem]"></li>
        <li><img loading="lazy" src="{{ asset('front-end/assets/star.svg') }}" class="w-[2rem]"></li>
        <li><img loading="lazy" src="{{ asset('front-end/logo/PNG/Artboard 33.png') }}" class="w-[2rem]"></li>
        <li><img loading="lazy" src="{{ asset('front-end/assets/star.svg') }}" class="w-[2rem]"></li>
        <li><img loading="lazy" src="{{ asset('front-end/logo/PNG/Artboard 9.png') }}" class="w-[2rem]"></li>
        <li><img loading="lazy" src="{{ asset('front-end/assets/star.svg') }}" class="w-[2rem]"></li>
        <li><img loading="lazy" src="{{ asset('front-end/logo/PNG/Artboard 37.png') }}" class="w-[2rem]"></li>
        <li><img loading="lazy" src="{{ asset('front-end/assets/star.svg') }}" class="w-[2rem]"></li>
    </ul>
    <ul>
        <li><img loading="lazy" src="{{ asset('front-end/logo/PNG/Artboard 10.png') }}" class="w-[2rem]"></li>
        <li><img loading="lazy" src="{{ asset('front-end/assets/star.svg') }}" class="w-[2rem]"></li>
        <li><img loading="lazy" src="{{ asset('front-end/logo/PNG/Artboard 23.png') }}" class="w-[2rem]"></li>
        <li><img loading="lazy" src="{{ asset('front-end/assets/star.svg') }}" class="w-[2rem]"></li>
        <li><img loading="lazy" src="{{ asset('front-end/logo/PNG/Artboard 19.png') }}" class="w-[2rem]"></li>
        <li><img loading="lazy" src="{{ asset('front-end/assets/star.svg') }}" class="w-[2rem]"></li>
        <li><img loading="lazy" src="{{ asset('front-end/logo/PNG/Artboard 25.png') }}" class="w-[2rem]"></li>
        <li><img loading="lazy" src="{{ asset('front-end/assets/star.svg') }}" class="w-[2rem]"></li>
        <li><img loading="lazy" src="{{ asset('front-end/logo/PNG/Artboard 33.png') }}" class="w-[2rem]"></li>
        <li><img loading="lazy" src="{{ asset('front-end/assets/star.svg') }}" class="w-[2rem]"></li>
        <li><img loading="lazy" src="{{ asset('front-end/logo/PNG/Artboard 9.png') }}" class="w-[2rem]"></li>
        <li><img loading="lazy" src="{{ asset('front-end/assets/star.svg') }}" class="w-[2rem]"></li>
        <li><img loading="lazy" src="{{ asset('front-end/logo/PNG/Artboard 37.png') }}" class="w-[2rem]"></li>
        <li><img loading="lazy" src="{{ asset('front-end/assets/star.svg') }}" class="w-[2rem]"></li>
    </ul>
</div>

<div id="shots" class="flex justify-center items-center h-[65rem] overflow-hidden w-[100vw]">
    <div id="shots-left-content"
        class="bg-gr h-full flex-[1] flex flex-col gap-0 md:gap-14 font-extrabold items-between font-rubiki justify-center items-center">
        <h2 class="text-pr text-5xl font-bold capitalize text-left">{{$aboutSection->title}}</h2>
        <p class="text-3xl px-10 my-5 text-bl">{{$aboutSection->short_description}}</p>
        <div class="w-1/2">
            <a href="/signin"
                class="flex items-center justify-center cursor-pointer text-white font-bold relative text-[16px] w-full mx-auto h-[2em] text-center bg-gradient-to-r from-pr from-10% via-pi via-30% to-bu to-90% bg-[length:400%] rounded-[30px] z-10 hover:animate-gradient-xy hover:bg-[length:100%] before:content-[''] before:absolute before:-top-[5px] before:-bottom-[5px] before:-left-[5px] before:-right-[5px] before:bg-gradient-to-r before:from-pr before:from-10% before:via-pi before:via-30% before:to-bu before:bg-[length:400%] before:-z-10 before:rounded-[35px] before:hover:blur-xl before:transition-all before:ease-in-out before:duration-[1s] before:hover:bg-[length:10%] active:bg-bu focus:ring-bu">{{ __('website.login') }}</a>
        </div>
    </div>
    <div id="shots-right-content" class="bg-pr h-full hidden lg:flex flex-[1] justify-center items-center w-[100vw]">
        <div class="flex flex-col mt-8 gap-10 items-center mx-5">
            <div class="shot-item-left w-[180px] h-[420px] max-w-xs mx-auto">
                <video src="{{ asset('front-end/assets/v2.mp4') }}" class="w-full h-full rounded-xl object-cover"
                    autoplay muted loop></video>
            </div>
            <div class="shot-item-left w-[180px] h-[420px] max-w-xs mx-auto">
                <video src="{{ asset('front-end/assets/v2.mp4') }}" class="w-full h-full rounded-xl object-cover"
                    autoplay muted loop></video>
            </div>
        </div>
        <div class="flex flex-col mb-8 gap-10 items-center mx-5">
            <div class="shot-item-right w-[180px] h-[420px] max-w-xs mx-auto">
                <video src="{{ asset('front-end/assets/v2.mp4') }}" class="w-full h-full rounded-xl object-cover"
                    autoplay muted loop></video>
            </div>
            <div class="shot-item-right w-[180px] h-[420px] max-w-xs mx-auto">
                <video src="{{ asset('front-end/assets/v2.mp4') }}" class="w-full h-full rounded-xl object-cover"
                    autoplay muted loop></video>
            </div>
        </div>

    </div>
</div>

<div id="howItWorks" style="direction: ltr">
    <h2 class="text-6xl hepta font-bold text-center py-10 bg-pr text-white w-[100vw]">{{$joinSection->title }}</h2>
    <div id="horizontal" class="flex overflow-x-hidden">
        @foreach ($advantages as $index => $advantage)
            <div id="horizontalContent"
                class="relative md:static h-[100vh] w-[100vw] 
                                                                                                                                                                                                                                                                        {{ $index == 0 ? 'bg-gr' : ($index == 1 ? 'bg-pi' : ($index == 2 ? 'bg-bu' : 'bg-pr text-white')) }} 
                                                                                                                                                                                                                                                                        flex-shrink-0 flex items-center"
                style="direction:{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }};">
                <div class="flex items-center justify-between h-full px-20">
                    <div
                        class="w-full text-center {{ app()->getLocale() === 'ar' ? 'md:text-right' : 'md:text-left' }} md:w-1/2">
                        <h1 class="text-7xl hepta font-bold">{{ $advantage->title }}</h1>
                        <p class="text-2xl rubikv mt-10">{{ $advantage->description }}</p>
                    </div>
                    <div class="block md:hidden absolute left-[5%] -z-10 opacity-45 md:static md:opacity-100">
                        <img src="{{ asset('images/advantages/' . $advantage->icon) }}" alt="Brand Boost Icon"
                            class="w-full">
                    </div>
                    <div class="hidden md:block absolute left-[5%] -z-10 opacity-45 md:static md:opacity-100">
                        <img src="{{ asset('images/advantages/' . $advantage->icon) }}" alt="Brand Boost Logo"
                            class="w-full">
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

<div id="services" class="min-h-[100vh] w-[100vw] relative pb-[100px] px-[70px] bg-gr">
    <h2
        class="text-6xl hepta font-bold text-center py-10 bg-clip-text text-transparent bg-gradient-to-b from-neutral-950 to-neutral-700">
        {{ $serviceSection->title }}
    </h2>

    <div id="services-container" class="flex flex-wrap gap-5 justify-center pb-24 font-rubikv">
        @forelse($services as $service)

            <div id="service" class="card flex flex-col bg-pr shadow-sm border border-purple-900 rounded-lg my-6 w-96">
                <div class="overflow-hidden rounded-md h-80 flex justify-center items-center">
                    <img class="w-full h-full object-cover" src="{{ asset('images/services/' . $service->icon) }}" />
                </div>
                <div class="p-6">
                    <h4 class="mb-1 text-2xl font-semibold text-slate-50 capitalize">
                        {{$service->name}}
                    </h4>
                    <p class="text-base text-slate-200 mt-4 font-light ">
                        {{$service->description}}
                    </p>
                </div>
                <div class="flex justify-center p-6 pt-2 gap-7">
                    <a href="{{route('service-offers', $service->id)}}"
                        class="mt-auto flex items-center justify-center cursor-pointer text-bl font-bold relative text-[14px] w-full mx-auto h-[2em] text-center bg-gradient-to-r from-bu from-10% via-pi via-30% to-gr to-90% bg-[length:400%] rounded-[30px] z-10 hover:animate-gradient-xy hover:bg-[length:100%] before:content-[''] before:absolute before:-top-[5px] before:-bottom-[5px] before:-left-[5px] before:-right-[5px] before:bg-gradient-to-r before:from-bu before:from-10% before:via-pi before:via-30% before:to-gr before:bg-[length:400%] before:-z-10 before:rounded-[35px] before:hover:blur-xl before:transition-all before:ease-in-out before:duration-[1s] before:hover:bg-[length:10%] active:bg-bu focus:ring-bu">{{ __('website.about') }}</a>
                </div>
            </div>
        @empty
            <div>
                <p class="py-3 px-5 text-center">No Services found.</p>
            </div>
        @endforelse
    </div>
</div>

@if(!empty($favFreelancers))
    <div id="talents" style="direction: ltr" class="font-hepta relative w-[100vw] h-fit overflow-x-hidden bg-pr">
        <h2
            class="text-6xl hepta font-bold text-center py-10 bg-clip-text text-transparent bg-gradient-to-b from-neutral-100 to-neutral-300">
            {{ $favFreelancersSection->title }}
        </h2>
        <div id="talents-container" class="flex overflow-x-hidden">
            @foreach($favFreelancers as $favFreelancer)
                <div id="horizontalTalentCard" style="direction:{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }};"
                    class="relative md:static h-[100vh] w-[100vw] bg-pr flex-shrink-0 flex items-center">
                    <div class="mx-auto flex flex-col md:flex-row items-center w-[80%] h-[80%]">
                        <img class="h-1/2 lg:h-full w-full lg:w-[30%] rounded-xl mx-auto sm:mx-0 sm:mr-4 my-4 sm:my-0 object-cover"
                            src="{{ asset('images/freelancers/profile/' . $favFreelancer->profile_image) }}"
                            alt="Developer Picture">
                        <div class="p-4 text-center {{ app()->getLocale() === 'ar' ? 'sm:text-right' : 'sm:text-left' }}">
                            <h2 class="text-2xl lg:text-4xl font-semibold text-slate-100">{{$favFreelancer->name}}</h2>
                            <p class="text-slate-300 mt-2 lg:text-xl">{{$favFreelancer->bio}}</p>
                            <a href="{{route('freelancerName', ['id' => $favFreelancer->id])}}"
                                class="mt-10 flex items-center justify-center cursor-pointer text-white font-bold relative text-[20px] w-1/2 h-[2em] text-center bg-gradient-to-r from-pr from-10% via-pi via-30% to-bu to-90% bg-[length:400%] rounded-lg z-10 hover:animate-gradient-xy hover:bg-[length:100%] before:content-[''] before:absolute before:-top-[5px] before:-bottom-[5px] before:-left-[5px] before:-right-[5px] before:bg-gradient-to-r before:from-pr before:from-10% before:via-pi before:via-30% before:to-bu before:bg-[length:400%] before:-z-10 before:rounded-[35px] before:hover:blur-xl before:transition-all before:ease-in-out before:duration-[1s] before:hover:bg-[length:10%] active:bg-bu focus:ring-bu">
                                {{__('website.visit_profile')}}</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="w-full flex items-center justify-center bg-pr py-12">
            <a href="/freelancers"
                class="flex items-center justify-center cursor-pointer text-bl font-bold relative text-[16px] w-1/2 mx-auto h-[2em] text-center bg-gradient-to-r from-gr from-10% via-pi via-30% to-bu to-90% bg-[length:400%] rounded-[30px] z-10 hover:animate-gradient-xy hover:bg-[length:100%] before:content-[''] before:absolute before:-top-[5px] before:-bottom-[5px] before:-left-[5px] before:-right-[5px] before:bg-gradient-to-r before:from-gr before:from-10% before:via-pi before:via-30% before:to-bu before:bg-[length:400%] before:-z-10 before:rounded-[35px] before:hover:blur-xl before:transition-all before:ease-in-out before:duration-[1s] before:hover:bg-[length:10%] active:bg-bu focus:ring-bu">
                {{ __('website.explore_the_talents') }}</a>
        </div>
    </div>
@endif
@endsection