@extends('layout')

@section('title', 'About Us')

@section('content')
<style>
    .accordion.active {
        background-color: #c5fb79;
    }

    .accordion.active h5 {
        color: #520a70;
        font-weight: 600;
    }

    .accordion.active .icon {
        stroke: #520a70;
    }
</style>

<div class="hepta overflow-x-hidden w-[100vw]">
    <section class="flex flex-col items-center min-h-96 py-36 px-[10vw] text-center bg-bu">
        <h1 class="text-7xl font-bold uppercase text-center">
            <p>{{__('website.what_is')}}</p>
            <p>{{__('website.brand_boost')}}</p>
        </h1>
        <p class="text-2xl mt-10">{{__('website.about_journey')}}</p>
    </section>

    <div class="bg-gr">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M1200 120L0 16.48 0 0 1200 0 1200 120z" class="fill-bu"></path>
        </svg>
    </div>

    <section class="min-h-96 py-20 px-6 md:px-10 lg:px-[7vw] bg-gr">
        <h3 class="text-2xl sm:text-3xl md:text-5xl lg:text-6xl font-bold mb-6">{{ __('website.our_mission') }}</h3>
        <p class="text-base sm:text-lg md:text-xl lg:text-2xl leading-relaxed">
            {{ $aboutSection->short_description }}
        </p>
    </section>

    <div class="bg-gr">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M598.97 114.72L0 0 0 120 1200 120 1200 0 598.97 114.72z" class="fill-pi">
            </path>
        </svg>
    </div>

    <section class="min-h-96 py-20 px-6 md:px-10 lg:px-[7vw] bg-pi">
        <h3 class="text-2xl sm:text-3xl md:text-5xl lg:text-6xl font-bold mb-6">{{ __('website.our_vision') }}</h3>
        <p class="text-base sm:text-lg md:text-xl lg:text-2xl leading-relaxed">{{ $aboutSection->long_description }}
        </p>
    </section>

    @if($faqs->count() > 0)
        <section class="min-h-96 py-20 px-6 md:px-10 lg:px-[7vw] bg-pr">
            <h3 class="text-2xl sm:text-3xl md:text-5xl lg:text-6xl font-bold mb-6 text-white">{{ __('website.faqs') }}
            </h3>
            <div class="accordion-group flex flex-col gap-5">
                @foreach ($faqs as $index => $faq)
                    <div
                        class="accordion py-8 px-6 bg-pi transition-all duration-500 rounded-2xl hover:bg-gr accordion-active:bg-indigo-50">
                        <button
                            class="accordion-toggle group inline-flex items-center justify-between leading-8 text-gray-900 w-full transition duration-500 text-left hover:text-gr accordion-active:font-medium accordion-active:text-indigo-600">
                            <h5>{{__('website.q')}} - {{$faq->question}}</h5>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="icon icon-tabler icons-tabler-outline icon-tabler-sparkles">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path
                                    d="M16 18a2 2 0 0 1 2 2a2 2 0 0 1 2 -2a2 2 0 0 1 -2 -2a2 2 0 0 1 -2 2zm0 -12a2 2 0 0 1 2 2a2 2 0 0 1 2 -2a2 2 0 0 1 -2 -2a2 2 0 0 1 -2 2zm-7 12a6 6 0 0 1 6 -6a6 6 0 0 1 -6 -6a6 6 0 0 1 -6 6a6 6 0 0 1 6 6z" />
                            </svg>
                        </button>
                        <div class="accordion-content w-full px-0 overflow-hidden max-h-0">
                            <p class="text-base text-gray-900 leading-6">
                                {{$faq->answer}}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
    @endif
</div>
@endsection