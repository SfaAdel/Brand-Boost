@extends('layout')

@section('title', 'Signin')

@section('content')
<div class="hepta flex min-h-[100vh] flex-col justify-center px-6 py-12 lg:px-8 transparent-texture">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
        <a href="/">
            <img class="mx-auto h-10 w-auto" src="{{ asset('front-end/logo/PNG/Artboard 15.png') }}"
                alt="Brand Boost Logo">
        </a>
        <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-gray-900">{{__('website.welcome_back')}}
        </h2>
    </div>

    <div class="my-3">
        @include('front-end.includes.alerts')
    </div>

    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
        <form class="space-y-6" action="{{ route('signin.store') }}" method="POST">
            @csrf

            <div>
                <label for="email"
                    class="rubikv block text-sm font-bold text-gray-900">{{__('website.email_label')}}</label>
                <div class="mt-2">
                    <input id="email" name="email" type="email" autocomplete="email" required
                        class="outline-none border-black border-2 block w-full py-1.5 text-gray-900 placeholder:text-gray-400 sm:text-sm/6">
                </div>
            </div>

            <div>
                <label for="password"
                    class="rubikv block text-sm font-bold text-gray-900">{{__('website.password_label')}}</label>
                <div class="mt-2">
                    <input id="password" name="password" type="password" autocomplete="current-password" required
                        class="outline-none border-black border-2 block w-full py-1.5 text-gray-900 placeholder:text-gray-400 sm:text-sm/6">
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
                    class="border-black border-2 uppercase flex w-full justify-center bg-blue px-3 py-1.5 text-sm/6 font-semibold text-white hover:bg-indigo-500">
                    {{__('website.signin')}}
                </button>
            </div>
        </form>


        <p class="mt-10 text-center text-sm/6 text-gray-900 font-bold">
            {{__('website.dont_have_account')}}
            <a href="/talent-signup"
                class="border-black border-2 uppercase flex w-full justify-center bg-green px-3 py-1.5 text-sm/6 font-semibold text-black hover:bg-emerald-700 transition">{{__('website.have_talent')}}</a>
            <a href="/visionary-signup"
                class="border-black mt-2 border-2 uppercase flex w-full justify-center bg-pink px-3 py-1.5 text-sm/6 font-semibold text-black hover:bg-fuchsia-700 transition">{{__('website.have_vision')}}</a>
        </p>
    </div>
</div>
@endsection