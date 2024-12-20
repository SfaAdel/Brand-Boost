@extends('layout')

@section('title', __('Visionary Signup'))

@section('content')
<div class="bg-gr flex min-h-[100vh] flex-col justify-center px-6 pt-12 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
        <a href="/">
            <img class="mx-auto h-10 w-auto" src="{{ asset('front-end/logo/PNG/Artboard 15.png') }}"
                alt="Brand Boost Logo">
        </a>
        <h2 class="mt-4 font-hepta text-center text-2xl/9 font-bold tracking-tight text-gray-900">
            {{ __('website.welcome_visionary') }}
        </h2>
        <p class="text-center block text-gray-700">{{ __('website.fill_form') }}</p>
    </div>

    <div class="mt-4 sm:mx-auto sm:w-full sm:max-w-sm">
        @include('front-end.includes.alerts')
    </div>

    <div class="mt-4 sm:mx-auto sm:w-full px-10 md:px-32 pb-10">
        <form class="space-y-6 font-rubikv" action="{{ route('business_owner.register') }}" method="POST">
            @csrf
            <div class="w-full h-full flex flex-col md:flex-row gap-2 md:gap-10">
                <div class="flex-1 flex flex-col gap-2">
                    <div>
                        <label for="en-name"
                            class="block text-sm/6 font-medium text-gray-900">{{ __('website.name_in_english') }}</label>
                        <div class="mt-2">
                            <input type="text" name="en[name]" id="en-name" required
                                class="block w-full rounded-xl bg-white px-3 py-1.5 text-base text-gray-900 placeholder:text-gray-400 sm:text-sm/6">
                        </div>
                    </div>

                    <div>
                        <label for="ar-name"
                            class="block text-sm/6 font-medium text-gray-900">{{ __('website.name_in_arabic') }}</label>
                        <div class="mt-2">
                            <input type="text" name="ar[name]" id="ar-name" required
                                class="block w-full rounded-xl bg-white px-3 py-1.5 text-base text-gray-900 placeholder:text-gray-400 sm:text-sm/6">
                        </div>
                    </div>

                    <div>
                        <label for="email"
                            class="block text-sm/6 font-medium text-gray-900">{{ __('website.email_label') }}</label>
                        <div class="mt-2">
                            <input type="email" name="email" id="email" required
                                class="block w-full rounded-xl bg-white px-3 py-1.5 text-base text-gray-900 placeholder:text-gray-400 sm:text-sm/6">
                        </div>
                    </div>

                    <div>
                        <label for="password"
                            class="block text-sm/6 font-medium text-gray-900">{{ __('website.password_label') }}</label>
                        <div class="mt-2">
                            <input type="password" name="password" id="password" required
                                class="block w-full rounded-xl bg-white px-3 py-1.5 text-base text-gray-900 placeholder:text-gray-400 sm:text-sm/6">
                        </div>
                    </div>
                </div>
                <div class="flex-1 flex flex-col gap-2">
                    <div>
                        <label for="en-company-name"
                            class="block text-sm/6 font-medium text-gray-900">{{ __('website.company_in_english') }}</label>
                        <div class="mt-2">
                            <input type="text" name="en[company_name]" id="en-company-name" required
                                class="block w-full rounded-xl bg-white px-3 py-1.5 text-base text-gray-900 placeholder:text-gray-400 sm:text-sm/6">
                        </div>
                    </div>

                    <div>
                        <label for="ar-company-name"
                            class="block text-sm/6 font-medium text-gray-900">{{ __('website.company_in_arabic') }}</label>
                        <div class="mt-2">
                            <input type="text" name="ar[company_name]" id="ar-company-name" required
                                class="block w-full rounded-xl bg-white px-3 py-1.5 text-base text-gray-900 placeholder:text-gray-400 sm:text-sm/6">
                        </div>
                    </div>

                    <div>
                        <label for="phone-number"
                            class="block text-sm/6 font-medium text-gray-900">{{ __('website.phone_number') }}</label>
                        <div class="mt-2">
                            <input type="text" name="phone" id="phone-number" required
                                class="block w-full rounded-xl bg-white px-3 py-1.5 text-base text-gray-900 placeholder:text-gray-400 sm:text-sm/6">
                        </div>
                    </div>

                    <div>
                        <label for="Company-field"
                            class="block text-sm/6 font-medium text-gray-900">{{ __('website.company_work_field') }}</label>
                        <div class="mt-2">
                            <select name="field_id" id="Company-field"
                                class="block w-full rounded-xl bg-white px-3 py-1.5 text-base text-gray-900 placeholder:text-gray-400 sm:text-sm/6">
                                <option selected disabled>{{ __('Choose yours') }}</option>

                                @foreach ($fields as $field)
                                    <option value="{{ $field->id }}">{{ $field->name }}</option>
                                @endforeach
                            </select>
                            <small class="text-gray-500">{{ __('website.fields_help') }}</small>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <button type="submit"
                    class="flex w-full justify-center rounded-xl bg-bu px-3 py-2 text-sm/6 font-semibold text-white shadow-sm transition hover:bg-blue-400">{{__('website.signin')}}</button>
            </div>
        </form>

        <div class="mt-4">
            <p class="text-center">{{__('website.already_have_account')}}</p>
            <div class="text-center text-sm/6 flex flex-col gap-2">
                <a href="/signin"
                    class="flex w-full justify-center rounded-xl bg-pr px-3 py-2 text-sm/6 font-semibold text-white shadow-sm transition hover:bg-pink-400">{{__('website.have_talent')}}</a>
            </div>
        </div>
    </div>
</div>
@endsection