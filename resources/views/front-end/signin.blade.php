@extends('layout')

@section('title', 'Signin')

@section('content')
<div class="flex min-h-[100vh] flex-col justify-center px-6 pt-12 lg:px-8 bg-[#f2f4f7]">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
        <a href="/">
            <img class="mx-auto h-10 w-auto" src="{{ asset('front-end/logo/PNG/Artboard 15.png') }}"
                alt="Brand Boost Logo">
            <!-- <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-gray-900">{{__('website.welcome_back')}}</h2> -->
        </a>
    </div>

    <div class="my-3">
        @include('front-end.includes.alerts')
    </div>

    <div class="mt-4 sm:mx-auto sm:w-full sm:max-w-sm">
        <form class="space-y-6 font-rubikv" action="{{ route('signin.store') }}" method="POST">
            @csrf
            <div>
                <!-- <label for="email"
                    class="block text-sm/6 font-medium text-gray-900">{{__('website.email_label')}}</label> -->
                <div class="mt-2">
                    <input type="email" name="email" id="email" autocomplete="email" required
                        placeholder="Email Address"
                        class="placeholder:text-gray-700 block w-full rounded-xl bg-white px-3 py-1.5 text-base text-gray-900 sm:text-sm/6">
                </div>
            </div>

            <div>
                <!-- <label for="password"
                    class="block text-sm/6 font-medium text-gray-900">{{__('website.password_label')}}</label> -->
                <div class="mt-2">
                    <input type="password" name="password" id="password" autocomplete="current-password" required
                        placeholder="Password"
                        class="placeholder:text-gray-700 block w-full rounded-xl bg-white px-3 py-1.5 text-base text-gray-900 sm:text-sm/6">
                </div>
            </div>

            <div class="mt-4">
                <label class="block text-sm font-bold text-gray-900">{{__('website.signin_as')}}:</label>
                <div class="flex items-center space-x-4 mt-2">
                    <label class="flex items-center">
                        <input type="radio" name="user_type" value="freelancer" required class="mr-2">
                        {{__('website.freelancer')}}
                    </label>
                    <label class="flex items-center">
                        <input type="radio" name="user_type" value="business_owner" required class="mr-2">
                        {{__('website.business_owner')}}
                    </label>
                </div>
            </div>

            <div>
                <button type="submit"
                    class="flex w-full justify-center rounded-xl bg-bu px-3 py-1.5 text-sm/6 font-semibold text-white shadow-sm transition hover:bg-blue-400">{{__('website.signin')}}</button>
            </div>
        </form>

        <div class="mt-4">
            <p class="text-center mb-3">{{__('website.dont_have_account')}}</p>
            <div class="text-center text-sm/6 flex flex-col gap-2">
                <a href="/talent-signup"
                    class="flex w-full justify-center rounded-xl bg-gr px-3 py-1.5 text-sm/6 font-semibold text-black shadow-sm transition hover:bg-green-400">{{__('website.have_talent')}}</a>
                <a href="/visionary-signup"
                    class="flex w-full justify-center rounded-xl bg-pi px-3 py-1.5 text-sm/6 font-semibold text-black shadow-sm transition hover:bg-pink-400">{{__('website.have_vision')}}</a>
            </div>
        </div>
    </div>
</div>
@endsection