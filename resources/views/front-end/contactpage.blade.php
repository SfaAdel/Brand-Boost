@extends('layout')

@section('title', 'Contact Us')

@section('content')
<div id="contact-page" class="bg-pr flex items-center justify-center relative">
    <div class=" bg-gr border border-green-200 my-20 px-6 py-16 lg:px-8 hepta rounded-lg">
        <div class="mx-auto max-w-2xl text-center">
            <h2 class="text-balance text-4xl font-semibold tracking-tight text-gray-900 sm:text-5xl uppercase">
                {{__('website.contact_us')}}
            </h2>
            <p class="rubikv mt-2 text-lg/8 text-gray-600">{{__('website.contact_us_description')}}
            </p>
        </div>

        <div class="my-3">
            @include('front-end.includes.alerts')
        </div>

        <form action="{{ route('contacts.store') }}" method="POST" class="mx-auto mt-16 max-w-xl sm:mt-20">
            @csrf
            <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
                <div id="contact-input">
                    <label for="first-name"
                        class="block text-sm/6 font-semibold text-gray-900">{{__('website.name')}}</label>
                    <div class="mt-2.5">
                        <input type="text" name="name" id="first-name" autocomplete="given-name"
                            class="bg-white rounded-lg block w-full px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
                    </div>
                </div>
                <div id="contact-input">
                    <label for="title"
                        class="block text-sm/6 font-semibold text-gray-900">{{__('website.message_title')}}</label>
                    <div class="mt-2.5">
                        <input type="text" name="title" id="title" autocomplete="family-name"
                            class="bg-white rounded-lg block w-full px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
                    </div>
                </div>
                <div id="contact-input" class="sm:col-span-2">
                    <label for="email"
                        class="block text-sm/6 font-semibold text-gray-900">{{__('website.email')}}</label>
                    <div class="mt-2.5">
                        <input type="email" name="email" id="email" autocomplete="email"
                            class="bg-white rounded-lg block w-full px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
                    </div>
                </div>
                <div id="contact-input" class="sm:col-span-2">
                    <label for="phone-number"
                        class="block text-sm/6 font-semibold text-gray-900">{{__('website.phone')}}</label>
                    <div class="mt-2.5">
                        <input type="tel" name="phone" id="phone-number" autocomplete="tel" pattern="[0-9]{11}"
                            maxlength="11" maxlength="11"
                            class="bg-white rounded-lg block w-full px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
                    </div>
                </div>
                <div id="contact-input" class="sm:col-span-2">
                    <label for="message"
                        class="block text-sm/6 font-semibold text-gray-900">{{__('website.message')}}</label>
                    <div class="mt-2.5">
                        <textarea name="message" id="message" rows="4"
                            class="bg-white rounded-lg block w-full px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6"></textarea>
                    </div>
                </div>
            </div>
            <div class="mt-10">
                <button type="submit"
                    class="block w-full bg-pi px-3.5 py-2.5 text-center text-sm font-bold uppercase hover:bg-pr hover:text-white transition-all rounded-lg text-black">{{__("website.let's_talk")}}</button>
            </div>
        </form>
    </div>
    <div
        class="hidden lg:block bg-bu my-20 px-6 py-16 lg:px-8 hepta {{app()->getLocale() === 'ar' ? 'lg:rounded-l-lg' : 'lg:rounded-r-lg'}}">
        <div class="max-w-2xl text-center text-white flex flex-col gap-5">
            <div class="flex items-center">
                <div class="flex h-[38px] w-[38px] items-center justify-center rounded-[75%]">
                    <img src="{{ asset('front-end/assets/phone.svg') }}" alt="call">
                </div>
                <div class="{{app()->getLocale() === 'ar' ? 'text-right' : 'text-left'}}">
                    <p class="font-hepta text-[12px] font-medium text-white">
                        {{ __('website.support_number') }}
                    </p>
                    <a href="tel:{{ $setting->phone }}" class="font-hepta text-[14px] font-medium text-white">
                        {{ $setting->phone }}
                    </a>
                </div>
            </div>
            <div class="flex items-center">
                <div class="flex h-[38px] w-[38px] items-center justify-center rounded-[75%]">
                    <img src="{{ asset('front-end/assets/mail.svg') }}" alt="mail">
                </div>
                <div class="{{app()->getLocale() === 'ar' ? 'text-right' : 'text-left'}}">
                    <p class="font-hepta text-[12px] font-medium text-[#fff]">
                        {{ __('website.support_email') }}
                    </p>
                    <a href="mailto:{{ $setting->email }}"
                        class="font-hepta text-[14px] font-medium text-[#fff]">{{ $setting->email }}</a>
                </div>
            </div>
            <div class="flex items-center">
                <div class="flex h-[38px] w-[38px] items-center justify-center rounded-[75%]">
                    <img src="{{ asset('front-end/assets/location.svg') }}" alt="location">
                </div>
                <div class="{{app()->getLocale() === 'ar' ? 'text-right' : 'text-left'}}">
                    <p class="font-hepta text-[12px] font-medium text-white">{{ __('website.address') }}</p>
                    <p class="font-hepta text-[14px] font-medium text-[#fff]">
                        {{ $setting->address }}
                    </p>

                </div>
            </div>
            <div class="flex items-center">
                <div class="flex h-[38px] w-[38px] items-center justify-center rounded-[75%]">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="icon icon-tabler icons-tabler-outline icon-tabler-brand-x">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M4 4l11.733 16h4.267l-11.733 -16z" />
                        <path d="M4 20l6.768 -6.768m2.46 -2.46l6.772 -6.772" />
                    </svg>
                </div>
                <div class="{{app()->getLocale() === 'ar' ? 'text-right' : 'text-left'}}">
                    <a href="{{ $setting->x }}"
                        class="font-hepta text-[14px] font-medium text-[#fff]">{{ $setting->x }}</a>

                </div>
            </div>
            <div class="flex items-center">
                <div class="flex h-[38px] w-[38px] items-center justify-center rounded-[75%]">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="icon icon-tabler icons-tabler-outline icon-tabler-brand-facebook">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3" />
                    </svg>
                </div>
                <div class="{{app()->getLocale() === 'ar' ? 'text-right' : 'text-left'}}">
                    <a href="{{ $setting->facebook }}"
                        class="font-hepta text-[14px] font-medium text-[#fff]">{{ $setting->facebook }}</a>

                </div>
            </div>
            <div class="flex items-center">
                <div class="flex h-[38px] w-[38px] items-center justify-center rounded-[75%]">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="icon icon-tabler icons-tabler-outline icon-tabler-brand-youtube">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M2 8a4 4 0 0 1 4 -4h12a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-12a4 4 0 0 1 -4 -4v-8z" />
                        <path d="M10 9l5 3l-5 3z" />
                    </svg>
                </div>
                <div class="{{app()->getLocale() === 'ar' ? 'text-right' : 'text-left'}}">
                    <a href="{{ $setting->youtube }}"
                        class="font-hepta text-[14px] font-medium text-[#fff]">{{ $setting->youtube }}</a>

                </div>
            </div>
            <div class="flex items-center">
                <div class="flex h-[38px] w-[38px] items-center justify-center rounded-[75%]">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="icon icon-tabler icons-tabler-outline icon-tabler-brand-tiktok">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path
                            d="M21 7.917v4.034a9.948 9.948 0 0 1 -5 -1.951v4.5a6.5 6.5 0 1 1 -8 -6.326v4.326a2.5 2.5 0 1 0 4 2v-11.5h4.083a6.005 6.005 0 0 0 4.917 4.917z" />
                    </svg>
                </div>
                <div class="{{app()->getLocale() === 'ar' ? 'text-right' : 'text-left'}}">
                    <a href="{{ $setting->tiktok }}"
                        class="font-hepta text-[14px] font-medium text-[#fff]">{{ $setting->tiktok }}</a>

                </div>
            </div>
        </div>
    </div>
</div>
</div>

<script>
    document.querySelector('#phone-number').addEventListener('input', (event) => {
        event.target.value = event.target.value.replace(/[^0-9]/g, '');
    })
</script>
@endsection