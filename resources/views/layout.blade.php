<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

@php
$setting = App\Models\Setting::first();
@endphp

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', $setting->name ?? 'Brand Boost')</title>
    <link rel="stylesheet" href="{{ asset('front-end/css/styles.css') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('front-end/logo/PNG/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('front-end/logo/PNG/favicon-16x16.png') }}">
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
    <script type="module" src="{{ asset('front-end/js/script.js') }}" defer></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        green: '#c5fb79',
                        pink: '#d695f5',
                        black: '#09060a',
                        purple: '#520a70',
                        blue: '#6383f0'
                    }
                }
            }
        }
    </script>
    @stack('styles')
</head>

<body>
    @unless (request()->routeIs('talent-signup', 'visionary-signup', 'signin'))
        <!-- Render the navbar unless the current route is "signup" -->
        <nav
            class="hidden lg:flex sticky top-0 bg-white z-40 border-black border-b-4 px-10 uppercase font-semibold justify-between hepta">
            <ul class="flex items-center">
                <li class="p-4"><a href="/">{{ __('website.home') }}</a></li>
                <li class="p-4"><a href="/services">{{ __('website.services') }}</a></li>
                <li class="p-4"><a href="/freelancers">{{ __('website.talents') }}</a></li>
                <li class="p-4"><a href="about">{{ __('website.about') }}</a></li>
                <li class="p-4"><a href="/contact">{{ __('website.contact') }}</a></li>
                <li class="p-4"><a href="/blogs">Blogs</a></li>
            </ul>

            <div class="flex">
                <div class="relative ">
                    <!-- <label for="language-switcher">&#127760;</label> -->
                    <select class="uppercase translationSelection" id="language-switcher">
                        @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                        <option value="{{ LaravelLocalization::getLocalizedURL($localeCode) }}"
                        {{ app()->getLocale() == $localeCode ? 'selected' : '' }}>
                            {{ $properties['native'] }}
                        </option>
                    @endforeach
                    </select>
                </div>


                @if (!auth()->guard('business_owner')->check() && !auth()->guard('freelancer')->check())
                    <button data-modal-open="join-us-modal"
                        class="bg-green px-4 py-4 border-black border-s-4 border-e-4 uppercase">{{ __('website.join_us') }}</button>
                @else
                    <div id="dropdown-container" class="relative">
                        <button id="dropdown-btn" 
                            class="bg-green px-4 py-4 border-black border-s-4 border-e-4 uppercase"
                            aria-expanded="false" aria-haspopup="true">my area</button>
                        <ul id="dropdown-menu" class="hidden absolute border-black border-4 bg-white right-0 z-[1] w-52 capitalize transition duration-300 ease-in-out">
                            <li class="my-2 hover:bg-green transition">
                                <a href="{{ route('business-area', Auth::guard('freelancer')->user()->id) }}" class="block w-full h-full px-3 py-2">Dashboard</a>
                            </li>
                            <li class="my-2 hover:bg-green transition">
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="w-full h-full px-3 py-2 text-left text-red-500 hover:text-white hover:bg-red-500" title=" {{ __('website.logout') }}">{{ __('website.logout') }} </button>
                                </form>
                            </li>
                        </ul>
                    </div>
                @endif
            </div>
        </nav>

        <nav
            class="flex lg:hidden sticky top-0 bg-white z-40 border-black border-b-4 px-5 items-center font-semibold justify-between hepta">
            <a href="/">
                <img src="{{ asset('front-end/logo/PNG/Artboard 15.png') }}" alt="Brand Boost Logo" class="w-[6rem]">
            </a>
            <div class="flex items-center">
                <select class="bg-white m-0 px-4 py-4 uppercase outline-none" id="language-switcher">
                    @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                        <option value="{{ LaravelLocalization::getLocalizedURL($localeCode) }}"
                            {{ app()->getLocale() == $localeCode ? 'selected' : '' }}>
                            {{ $properties['native'] }}
                        </option>
                    @endforeach
                </select>
                <button data-modal-open="nav-modal"
                    class="bg-green px-4 py-4 border-black border-s-4 border-e-4 uppercase">Menu</button>
            </div>
        </nav>
    @endunless

    @if (request()->routeIs('talent-signup', 'visionary-signup'))
        <nav
            class="sticky top-0 bg-white z-40 border-black border-b-4 px-5 py-3 uppercase font-semibold flex justify-between hepta">
            <a href="/">
                <img src="{{ asset('front-end/logo/PNG/Artboard 15.png') }}" alt="Brand Boost Logo" class="w-[6rem]">
            </a>
            <select class="bg-white m-0 px-4 py-4 uppercase outline-none" id="language-switcher">
                @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                    <option value="{{ LaravelLocalization::getLocalizedURL($localeCode) }}"
                        {{ app()->getLocale() == $localeCode ? 'selected' : '' }}>
                        {{ $properties['native'] }}
                    </option>
                @endforeach
            </select>
        </nav>
    @endif

    <div id="nav-modal" class="modal-overlay hidden fixed inset-0 z-50 bg-black/75 p-10 overflow-auto">
        <ul class="flex flex-col bg-purple uppercase text-center font-bold text-md p-5 border-black border-4">
            <li class="uppercase border-black border-2 p-4 bg-gray-100 hover:bg-gray-50 my-2 text-black hepta"><a href="/"
                    class="w-full block"> {{ __('website.home') }}</a>
            </li>
            <li class="uppercase border-black border-2 p-4 bg-gray-100 hover:bg-gray-50 my-2 text-black hepta"><a href="/services"
                    class="w-full block"> {{ __('website.services') }}</a></li>
            <li class="uppercase border-black border-2 p-4 bg-gray-100 hover:bg-gray-50 my-2 text-black hepta"><a
                    href="/freelancers" class="w-full block">{{ __('website.talents') }}</a></li>
            <li class="uppercase border-black border-2 p-4 bg-gray-100 hover:bg-gray-50 my-2 text-black hepta"><a href="about"
                    class="w-full block"> {{ __('website.about') }}</a>
            </li>
            <li class="uppercase border-black border-2 p-4 bg-gray-100 hover:bg-gray-50 my-2 text-black hepta"><a href="/contact"
                    class="w-full block"> {{ __('website.contact') }}</a></li>
            <li class="uppercase border-black border-2 p-4 bg-gray-100 hover:bg-gray-50 my-2 text-black hepta"><a href="/blogs"
                class="w-full block">Blogs</a></li>
            @if (!auth()->guard('business_owner')->check() && !auth()->guard('freelancer')->check())
                <li class="border-black border-2 p-4 bg-sky-300 hover:bg-sky-200 my-2 text-black hepta"><a href="/signin"
                    class="w-full block"> {{ __('website.login') }} </a></li>
                <li class="border-black border-2 p-4 bg-pink hover:bg-fuchsia-400 my-2 text-black hepta"><a
                    href="/visionary-signup" class="w-full block"> {{ __('website.have_vision') }}</a></li>
                <li class="border-black border-2 p-4 bg-green hover:bg-emerald-600 my-2 text-black hepta"><a
                    href="/talent-signup" class="w-full block"> {{ __('website.have_talent') }}</a></li>
            @else
            <li class="border-black border-2 p-4 bg-sky-300 hover:bg-sky-200 my-2 text-black hepta"><a href="/signin"
                    class="w-full block">My place</a></li>
            <li>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="w-full block border-black border-2 p-4 bg-red-400 hover:bg-red-500 my-2 text-black hepta" title=" {{ __('website.logout') }}">{{ __('website.logout') }} </button>
                </form>
            </li>
            @endif
        </ul>
    </div>

    <div id="join-us-modal" class="modal-overlay hidden fixed inset-0 z-50 bg-black/75 p-10 overflow-auto">
        <div class="bg-white w-3/4 m-auto p-10 border-black border-4 acworth">
            <h1 class="text-5xl font-bold">{{ __('website.choose_who_you_are') }}</h1>
            <div class="my-10 flex gap-5 flex-wrap lg:flex-nowrap">
                <div class="flex flex-col gap-3">
                    <p class="text-gray-600 text-sm leading-relaxed">
                        {{ __('website.talent_description') }}
                    </p>
                    <a href="/talent-signup"
                        class="font-bold bg-green hover:bg-emerald-600 transition p-2 mt-5 border-black border-2 text-black hepta text-center text-sm">I
                        {{ __('website.have_talent') }}
                    </a>
                </div>
                <hr class="border-black border bg-black rotate-90" />
                <div class="flex flex-col gap-3">
                    <p class="text-gray-600 text-sm leading-relaxed">
                        {{ __('website.visionary_description') }}
                    </p>
                    <a href="/visionary-signup"
                        class="font-bold bg-pink hover:bg-fuchsia-400 transition p-2 mt-5 border-black border-2 text-black hepta text-center text-sm">I
                        {{ __('website.have_vision') }}
                    </a>
                </div>
            </div>

            <div class="flex flex-col gap-3">
                <a href="/signin"
                    class="font-bold bg-blue hover:bg-sky-500 transition p-2 mt-5 border-black border-2 text-black hepta text-center text-sm">{{ __('website.login') }}</a>
                <button data-modal-close="join-us-modal"
                    class="font-bold hepta border-black border-2 p-2 bg-red-400 hover:bg-red-500 transition">{{ __('website.close') }}</button>
            </div>
        </div>

        <script>
            
            document.addEventListener("DOMContentLoaded", () => {
                const dropdownBtn = document.getElementById("dropdown-btn");
                const dropdownMenu = document.getElementById("dropdown-menu");

                if (dropdownBtn && dropdownMenu) {
                    dropdownBtn.addEventListener("click", function () {
                        dropdownMenu.classList.toggle("hidden");
                    });

                    document.addEventListener("click", function (event) {
                        if (
                            !dropdownBtn.contains(event.target) &&
                            !dropdownMenu.contains(event.target)
                        ) {
                            dropdownMenu.classList.add("hidden");
                        }
                    });
                }
            });
        </script>
    </div>

    <main>
        @yield('content')
    </main>

    @php
        use Illuminate\Support\Str;
    @endphp

    @unless (Str::contains(request()->path(), ['talent-signup', 'visionary-signup', 'signin', 'business-area']))
        <footer class="bg-purple pt-9 rubikv">
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
                                <a href="tel:{{$setting->phone}}" class="font-Inter text-[14px] font-medium text-white">
                                    {{$setting->phone}}
                                </a>
                                <p class="font-Inter text-[12px] font-medium text-white">{{ __('website.support_number') }}</p>
                            </div>
                        </div>
                        <div class="mt-[23px] flex">

                            <div class="flex h-[38px] w-[38px] items-center justify-center rounded-[75%]">
                                <img src="{{ asset('front-end/assets/mail.svg') }}" alt="call">
                            </div>
                            <div class="ml-[18px]">
                                <a href="mailto:{{$setting->email}}"
                                    class="font-Inter text-[14px] font-medium text-[#fff]">{{$setting->email}}</a>
                                <p class="font-Inter text-[12px] font-medium text-[#fff]">{{ __('website.support_email') }}</p>
                            </div>
                        </div>
                        <div class="mt-[23px] flex">
                            <div class="flex h-[38px] w-[38px] items-center justify-center rounded-[75%]">
                                <img src="{{ asset('front-end/assets/location.svg') }}" alt="call">
                            </div>
                            <div class="ml-[18px]">
                                <a href="#"
                                    class="font-Inter text-[14px] font-medium text-[#fff]">
                                    {{$setting->address}}
                                </a>
                                <p class="font-Inter text-[12px] font-medium text-white">{{ __('website.address') }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-6 flex w-full flex-col justify-between text-white sm:flex-row md:mt-0 md:max-w-[341px]">
                        <div class="">
                            <p class="text-[18px] font-medium leading-normal">{{ __('website.pages') }}</p>
                            <ul>
                                <li class="mt-[15px]"><a class="text-[15px] font-normal" href="/"> {{ __('website.home') }}</a></li>
                                <li class="mt-[15px]"><a class="text-[15px] font-normal" href="/services"> {{ __('website.services') }}</a>
                                </li>
                                <li class="mt-[15px]"><a class="text-[15px] font-normal" href="/about"> {{ __('website.about') }}</a></li>
                                <li class="mt-[15px]"><a class="text-[15px] font-normal" href="/talents"> {{ __('website.talents') }}</a>
                                </li>
                                <li class="mt-[15px]"><a class="text-[15px] font-normal" href="/contact"> {{ __('website.contact') }}</a>
                                </li>
                            </ul>
                        </div>
                        <div class="">
                            <p class="text-deutziawhite font-inter text-[18px] font-medium leading-normal"> {{ __('website.useful_links') }}
                            </p>
                            <ul>
                                <li class="mt-[15px]"><a class="text-[15px] font-normal" href="/talent-singup">
                                        {{ __('website.talent_signup') }}
                                    </a>
                                </li>
                                <li class="mt-[15px]"><a class="text-[15px] font-normal"
                                        href="/visionary-singup">{{ __('website.visionary_signup') }}</a>
                                </li>
                                <li class="mt-[15px]"><a class="text-[15px] font-normal" href="/signin">{{ __('website.login') }}</a>
                                </li>
                                <li class="mt-[15px]"><a class="text-[15px] font-normal"
                                        href="/terms-and-conditions"> {{ __('website.terms_and_conditions') }}</a></li>
                                <li class="mt-[15px]"><a class="text-[15px] font-normal" href="/privacy-policy">{{ __('website.privacy_policy') }}</a></li>
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
                </div>
            </div>
        </footer>
    @endunless

    @stack('scripts')

    <script>
        document.getElementById('language-switcher').addEventListener('change', function() {
            window.location.href = this.value;
        });
    </script>
</body>

</html>
