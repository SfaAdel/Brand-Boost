<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<!-- dir="{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }}" -->

@php
    $setting = App\Models\Setting::first();
@endphp

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', $setting->name ?? 'Brand Boost')</title>
    <link rel="stylesheet" href="{{ asset('front-end/css/styles.css') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('front-end/logo/PNG/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('front-end/logo/PNG/favicon-16x16.png') }}">
    <script src="{{ asset('front-end/js/script.js') }}" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    @stack('styles')
</head>

<body class="overflow-x-hidden">
    @unless (Str::contains(request()->path(), ['talent-signup', 'visionary-signup', 'signin', 'business-area', 'freelancer-services/create', 'freelancer-projects/create', 'freelancer-projects', 'freelancer-services', 'talent-orders']))
        <nav id="navbar-lg"
            class="hidden transition-all lg:flex font-hepta uppercase fixed z-40 w-full px-10 py-5 items-center justify-between">
            <div id="nav-logo" class="w-[50px]">
                <img id="navbar-logo" src="{{ asset('front-end/logo/PNG/Artboard 19.png') }}" alt="Brand Boost Logo"
                    class="w-full">
            </div>
            <ul class="flex gap-6 items-center">
                <li><a class="text-white" href="/">{{ __('website.home') }}</a></li>
                <li><a class="text-white" href="/services">{{ __('website.services') }}</a></li>
                <li><a class="text-white" href="/freelancers">{{ __('website.talents') }}</a></li>
                <li><a class="text-white" href="/about">{{ __('website.about') }}</a></li>
                <li><a class="text-white" href="/contact">{{ __('website.contact') }}</a></li>
                <li><a class="text-white" href="/blogs">{{__('website.blogs')}}</a></li>
            </ul>
            <div class="flex gap-4 items-center">
                <select class="bg-gr transition outline-none border-none rounded-[30px] text-sm" id="language-switcher">
                    @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                            <option value="{{ LaravelLocalization::getLocalizedURL($localeCode) }}" {{ app()->getLocale() == $localeCode
                        ? 'selected' : '' }}>
                                {{ $properties['native'] }}
                            </option>
                    @endforeach
                </select>
                @if(!auth()->guard('business_owner')->check() && !auth()->guard('freelancer')->check())
                    <a class="flex items-center justify-center cursor-pointer text-white font-bold relative text-[16px] w-full mx-auto h-[2em] text-center bg-gradient-to-r from-pr from-10% via-pi via-30% to-bu to-90% bg-[length:400%] rounded-[30px] z-10 hover:animate-gradient-xy hover:bg-[length:100%] before:content-[''] before:absolute before:-top-[5px] before:-bottom-[5px] before:-left-[5px] before:-right-[5px] before:bg-gradient-to-r before:from-pr before:from-10% before:via-pi before:via-30% before:to-bu before:bg-[length:400%] before:-z-10 before:rounded-[35px] before:hover:blur-xl before:transition-all before:ease-in-out before:duration-[1s] before:hover:bg-[length:10%] active:bg-bu focus:ring-bu"
                        href="/signin">{{__('website.login')}}</a>
                @else
                    <div class="flex gap-4 bg-gr transition px-[5px] py-[6px] rounded-[30px] text-sm">
                        <div>
                            @if (auth()->guard('business_owner')->check())
                                <a href="{{ route('business-area-b', Auth::guard('business_owner')->user()->id) }}"
                                    class="text-gray-800">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="icon icon-tabler icons-tabler-outline icon-tabler-layout-dashboard">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M5 4h4a1 1 0 0 1 1 1v6a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1v-6a1 1 0 0 1 1 -1" />
                                        <path d="M5 16h4a1 1 0 0 1 1 1v2a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1v-2a1 1 0 0 1 1 -1" />
                                        <path d="M15 12h4a1 1 0 0 1 1 1v6a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1v-6a1 1 0 0 1 1 -1" />
                                        <path d="M15 4h4a1 1 0 0 1 1 1v2a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1v-2a1 1 0 0 1 1 -1" />
                                    </svg>
                                </a>
                            @elseif (auth()->guard('freelancer')->check())
                                <a href="{{ route('business-area', Auth::guard('freelancer')->user()->id) }}" class="text-gray-800">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="icon icon-tabler icons-tabler-outline icon-tabler-layout-dashboard">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M5 4h4a1 1 0 0 1 1 1v6a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1v-6a1 1 0 0 1 1 -1" />
                                        <path d="M5 16h4a1 1 0 0 1 1 1v2a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1v-2a1 1 0 0 1 1 -1" />
                                        <path d="M15 12h4a1 1 0 0 1 1 1v6a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1v-6a1 1 0 0 1 1 -1" />
                                        <path d="M15 4h4a1 1 0 0 1 1 1v2a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1v-2a1 1 0 0 1 1 -1" />
                                    </svg>
                                </a>
                            @endif
                        </div>
                        <div>
                            <form method="POST" action="{{ route('logout') }}" class="flex items-center">
                                @csrf
                                <button type="submit" class="text-red-500" title=" {{ __('website.logout') }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="icon icon-tabler icons-tabler-outline icon-tabler-logout">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path
                                            d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2" />
                                        <path d="M9 12h12l-3 -3" />
                                        <path d="M18 15l3 -3" />
                                    </svg>
                                </button>
                            </form>
                        </div>
                    </div>
                @endif
            </div>
        </nav>
        <nav id="navbar" class="lg:hidden fixed z-40 w-full px-5 py-4 flex items-center justify-between">
            <div id="nav-logo" class="w-[50px]">
                <img id="navbar-logo" src="{{ asset('front-end/logo/PNG/Artboard 19.png') }}" alt="Brand Boost Logo"
                    class="w-full">
            </div>
            <div class="flex gap-5">
                <button class="nav-toggle-button" data-active="false">
                    <div class="w-full h-[4px] bg-white" style="transition: 0.2s all ease-in-out;"></div>
                    <div class="w-full h-[4px] bg-white" style="transition: 0.2s all ease-in-out;"></div>
                    <div class="w-full h-[4px] bg-white" style="transition: 0.2s all ease-in-out;"></div>
                </button>
            </div>
        </nav>
        <div class="nav-container w-[100vw] h-[100vh] fixed top-0 left-0 z-30 bg-gr font-hepta -translate-y-full">
            <div class="nav-container-content relative w-full h-full p-[2rem]">
                <ul class="absolute bottom-[2rem] left-[2rem]">
                    <li class="opacity-0 -translate-x-full"><a class="text-bl font-extrabold text-[3rem]"
                            href="/">{{ __('website.home') }}</a></li>
                    <li class="opacity-0 -translate-x-full"><a class="text-bl font-extrabold text-[3rem]"
                            href="/services">{{ __('website.services') }}</a></li>
                    <li class="opacity-0 -translate-x-full"><a class="text-bl font-extrabold text-[3rem]"
                            href="/freelancers">{{ __('website.talents') }}</a></li>
                    <li class="opacity-0 -translate-x-full"><a class="text-bl font-extrabold text-[3rem]"
                            href="/about">{{ __('website.about') }}</a></li>
                    <li class="opacity-0 -translate-x-full"><a class="text-bl font-extrabold text-[3rem]"
                            href="/contact">{{ __('website.contact') }}</a></li>
                    <li class="opacity-0 -translate-x-full"><a class="text-bl font-extrabold text-[3rem]"
                            href="/blogs">{{__('website.blogs')}}</a></li>
                    @if(!auth()->guard('business_owner')->check() && !auth()->guard('freelancer')->check())
                        <li class="opacity-0 -translate-x-full"><a class="text-bl font-extrabold text-[3rem]"
                                href="/signin">{{__('website.login')}}</a></li>
                    @else
                        <li class="opacity-0 -translate-x-full">
                            @if (auth()->guard('business_owner')->check())
                                <a href="{{ route('business-area-b', Auth::guard('business_owner')->user()->id) }}"
                                    class="text-bl font-extrabold text-[3rem]">{{__('website.dashboard')}}</a>
                            @elseif (auth()->guard('freelancer')->check())
                                <a href="{{ route('business-area', Auth::guard('freelancer')->user()->id) }}"
                                    class="text-bl font-extrabold text-[3rem]">{{__('website.dashboard')}}</a>
                            @endif
                        </li>
                        <li class="opacity-0 -translate-x-full">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="text-red-500 font-extrabold text-[3rem]"
                                    title=" {{ __('website.logout') }}">{{ __('website.logout') }} </button>
                            </form>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    @endunless

    <main>
        @yield('content')
    </main>

    @php
        use Illuminate\Support\Str;
    @endphp

    @unless (Str::contains(request()->path(), ['talent-signup', 'visionary-signup', 'signin', 'business-area', 'freelancer-services/create', 'freelancer-projects/create', 'freelancer-projects', 'freelancer-services', 'talent-orders']))
        <footer class="bg-pr pt-9 rubikv w-full">
            <div class="mx-auto w-full max-w-[1166px] px-4 xl:px-0">
                <div class="flex flex-col justify-between sm:px-[18px] md:flex-row md:px-10">
                    <div class="md:w-[316px]">
                        <img src="{{ asset('front-end/logo/PNG/Artboard 37.png') }}" loading="lazy" class="w-1/2"
                            alt="Brand Boost Logo">
                        <p class="mt-[18px] text-[15px] font-normal text-white/[80%]">
                            {{ __('website.footer_description') }}
                        </p>
                    </div>
                    <div class="md:w-[316px] text-white">
                        <p class="text-[18px] font-medium leading-normal">{{ __('website.contact_info') }}</p>
                        <div class="mt-[23px] flex">
                            <div class="flex h-[38px] w-[38px] items-center justify-center rounded-[75%]">
                                <img src="{{ asset('front-end/assets/phone.svg') }}" alt="call">
                            </div>
                            <div class="ml-[18px]">
                                <a href="tel:{{ $setting->phone }}" class="font-Inter text-[14px] font-medium text-white">
                                    {{ $setting->phone }}
                                </a>
                                <p class="font-Inter text-[12px] font-medium text-white">
                                    {{ __('website.support_number') }}
                                </p>
                            </div>
                        </div>
                        <div class="mt-[23px] flex">

                            <div class="flex h-[38px] w-[38px] items-center justify-center rounded-[75%]">
                                <img src="{{ asset('front-end/assets/mail.svg') }}" alt="call">
                            </div>
                            <div class="ml-[18px]">
                                <a href="mailto:{{ $setting->email }}"
                                    class="font-Inter text-[14px] font-medium text-[#fff]">{{ $setting->email }}</a>
                                <p class="font-Inter text-[12px] font-medium text-[#fff]">
                                    {{ __('website.support_email') }}
                                </p>
                            </div>
                        </div>
                        <div class="mt-[23px] flex">
                            <div class="flex h-[38px] w-[38px] items-center justify-center rounded-[75%]">
                                <img src="{{ asset('front-end/assets/location.svg') }}" alt="call">
                            </div>
                            <div class="ml-[18px]">
                                <a href="#" class="font-Inter text-[14px] font-medium text-[#fff]">
                                    {{ $setting->address }}
                                </a>
                                <p class="font-Inter text-[12px] font-medium text-white">{{ __('website.address') }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-6 flex w-full flex-col justify-between text-white sm:flex-row md:mt-0 md:max-w-[341px]">
                        <div class="">
                            <p class="text-[18px] font-medium leading-normal">{{ __('website.pages') }}</p>
                            <ul>
                                <li class="mt-[15px]"><a class="text-[15px] font-normal" href="/">
                                        {{ __('website.home') }}</a></li>
                                <li class="mt-[15px]"><a class="text-[15px] font-normal" href="/services">
                                        {{ __('website.services') }}</a>
                                </li>
                                <li class="mt-[15px]"><a class="text-[15px] font-normal" href="/about">
                                        {{ __('website.about') }}</a></li>
                                <li class="mt-[15px]"><a class="text-[15px] font-normal" href="/talents">
                                        {{ __('website.talents') }}</a>
                                </li>
                                <li class="mt-[15px]"><a class="text-[15px] font-normal" href="/contact">
                                        {{ __('website.contact') }}</a>
                                </li>
                            </ul>
                        </div>
                        <div class="">
                            <p class="text-deutziawhite font-inter text-[18px] font-medium leading-normal">
                                {{ __('website.useful_links') }}
                            </p>
                            <ul>
                                <li class="mt-[15px]"><a class="text-[15px] font-normal" href="/talent-singup">
                                        {{ __('website.talent_signup') }}
                                    </a>
                                </li>
                                <li class="mt-[15px]"><a class="text-[15px] font-normal"
                                        href="/visionary-singup">{{ __('website.visionary_signup') }}</a>
                                </li>
                                <li class="mt-[15px]"><a class="text-[15px] font-normal"
                                        href="/signin">{{ __('website.login') }}</a>
                                </li>
                                <li class="mt-[15px]"><a class="text-[15px] font-normal" href="/terms-and-conditions">
                                        {{ __('website.terms_and_conditions') }}</a></li>
                                <li class="mt-[15px]"><a class="text-[15px] font-normal"
                                        href="/privacy-policy">{{ __('website.privacy_policy') }}</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <hr class="mt-[30px] text-white" />
                <div class="flex items-center justify-center pb-8 pt-[9px] md:py-8">
                    <p class="text-[10px] font-normal text-white md:text-[12px]">
                        {{ __('website.copyright', ['year' => now()->year]) }}
                        {{-- <!-- -->, All Rights Reserved by Brand Boost LTD. --}}
                    </p>
                    <br>
                    <p class="mx-2 text-[10px] font-normal text-white md:text-[12px]">
                        {{ __('website.developed_by') }}
                    </p>
                </div>
            </div>
        </footer>
    @endunless

    @stack('scripts')

    <script>
        document.getElementById('language-switcher').addEventListener('change', function () {
            window.location.href = this.value;
        });

    </script>
</body>

</html>