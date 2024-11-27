<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Brand Boost')</title>
    <link rel="stylesheet" href="{{ asset('front-end/css/styles.css') }}">
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
    @unless(request()->routeIs('talent-signup', 'visionary-signup', 'signin'))
        <!-- Render the navbar unless the current route is "signup" -->
        <nav class="border-black border-b-4 px-10 uppercase font-semibold flex justify-between hepta">
            <ul class="flex items-center">
                <li class="p-4"><a href="/">home</a></li>
                <li class="p-4"><a href="/services">services</a></li>
                <li class="p-4"><a href="#">about</a></li>
                <li class="p-4"><a href="/contact">contact</a></li>
            </ul>

            <button data-modal-open="join-us-modal"
                class="bg-green px-4 py-4 border-black border-s-4 border-e-4 uppercase">Join us</button>
        </nav>
    @endunless

    @if (request()->routeIs('talent-signup', 'visionary-signup'))
        <nav class="border-black border-b-4 px-5 py-3 uppercase font-semibold flex justify-between hepta">
            <a href="/">
                <img src="{{ asset('front-end/logo/PNG/Artboard 15.png') }}" alt="Brand Boost Logo" class="w-[6rem]">
            </a>
        </nav>
    @endif

    <!-- Main content -->
    <main>
        @yield('content')
    </main>

    @unless(request()->routeIs('talent-signup', 'visionary-signup', 'signin'))
        <footer class="bg-purple pt-9 rubikv">
            <div class="mx-auto w-full max-w-[1166px] px-4 xl:px-0">
                <div class="flex flex-col justify-between sm:px-[18px] md:flex-row md:px-10">
                    <div class="md:w-[316px]">
                        <img src="{{ asset('front-end/logo/PNG/Artboard 37.png') }}" loading="lazy" class="w-1/2"
                            alt="Brand Boost Logo">
                        <p class="mt-[18px] text-[15px] font-normal text-white/[80%]">Lorem ipsum dolor sit amet
                            consectetur adipisicing
                            elit. Eos, fugit non. Incidunt dolorum adipisci, tempore asperiores nemo odio facere
                            officiis enim animi
                            placeat eaque nesciunt alias beatae id, at dicta.</p>
                    </div>
                    <div class="md:w-[316px] text-white">
                        <p class="text-[18px] font-medium leading-normal">Contact Info</p>
                        <div class="mt-[23px] flex">
                            <div class="flex h-[38px] w-[38px] items-center justify-center rounded-[75%]">
                                <img src="{{ asset('front-end/assets/phone.svg') }}" alt="call">
                            </div>
                            <div class="ml-[18px]">
                                <a href="tel:+911800123444" class="font-Inter text-[14px] font-medium text-white">+20
                                    1003391697</a>
                                <p class="font-Inter text-[12px] font-medium text-white">Support Number</p>
                            </div>
                        </div>
                        <div class="mt-[23px] flex">

                            <div class="flex h-[38px] w-[38px] items-center justify-center rounded-[75%]">
                                <img src="{{ asset('front-end/assets/mail.svg') }}" alt="call">
                            </div>
                            <div class="ml-[18px]">
                                <a href="mailto:help@lorem.com"
                                    class="font-Inter text-[14px] font-medium text-[#fff]">help@brandboost.com</a>
                                <p class="font-Inter text-[12px] font-medium text-[#fff]">Support Email</p>
                            </div>
                        </div>
                        <div class="mt-[23px] flex">
                            <div class="flex h-[38px] w-[38px] items-center justify-center rounded-[75%]">
                                <img src="{{ asset('front-end/assets/location.svg') }}" alt="call">
                            </div>
                            <div class="ml-[18px]">
                                <a href="mailto:help@lorem.com" class="font-Inter text-[14px] font-medium text-[#fff]">Makan
                                    Ma, Egypt</a>
                                <p class="font-Inter text-[12px] font-medium text-white">Address</p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-6 flex w-full flex-col justify-between text-white sm:flex-row md:mt-0 md:max-w-[341px]">
                        <div class="">
                            <p class="text-[18px] font-medium leading-normal">Pages</p>
                            <ul>
                                <li class="mt-[15px]"><a class="text-[15px] font-normal" href="/">Home</a></li>
                                <li class="mt-[15px]"><a class="text-[15px] font-normal" href="/services">Services</a>
                                </li>
                                <li class="mt-[15px]"><a class="text-[15px] font-normal" href="/about">About us</a></li>
                                <li class="mt-[15px]"><a class="text-[15px] font-normal" href="/talents">Talents</a>
                                </li>
                                <li class="mt-[15px]"><a class="text-[15px] font-normal" href="/contact">Contact us</a>
                                </li>
                            </ul>
                        </div>
                        <div class="">
                            <p class="text-deutziawhite font-inter text-[18px] font-medium leading-normal">Useful links
                            </p>
                            <ul>
                                <li class="mt-[15px]"><a class="text-[15px] font-normal" href="/talent-singup">Talent
                                        Signup</a>
                                </li>
                                <li class="mt-[15px]"><a class="text-[15px] font-normal" href="/visionary-singup">Visionary
                                        Signup</a>
                                </li>
                                <li class="mt-[15px]"><a class="text-[15px] font-normal" href="/signin">Sign in</a>
                                </li>
                                <li class="mt-[15px]"><a class="text-[15px] font-normal" href="/terms-and-conditions">Terms
                                        and conditions</a></li>
                                <li class="mt-[15px]"><a class="text-[15px] font-normal" href="/privacy-policy">Privcay
                                        policy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <hr class="mt-[30px] text-white" />
                <div class="flex items-center justify-center pb-8 pt-[9px] md:py-8">
                    <p class="text-[10px] font-normal text-white md:text-[12px]">
                        © Copyright
                        <!-- -->2024
                        <!-- -->, All Rights Reserved by Brand Boost LTD.
                    </p>
                </div>
            </div>
        </footer>
    @endunless

    @stack('scripts')
</body>

</html>