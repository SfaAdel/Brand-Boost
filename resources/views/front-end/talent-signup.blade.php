@extends('layout')

@section('title', __('website.talent_signup_title'))

@section('content')
<div class="flex min-h-[100vh] flex-col justify-center px-6 pt-12 lg:px-8 bg-pr text-white">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
        <a href="/">
            <img class="mx-auto h-10 w-auto" src="{{ asset('front-end/logo/PNG/BB.png') }}" alt="Brand Boost Logo">
        </a>
        <h2 class="mt-4 font-hepta text-center text-2xl/9 font-bold tracking-tight text-gray-100">
            {{ __('website.talent_signup_header') }}
        </h2>
        <p class="text-center block text-gray-300">{{ __('website.talent_signup_subheader') }}</p>
    </div>

    <div class="mt-4 sm:mx-auto sm:w-full sm:max-w-sm">
        @include('front-end.includes.alerts')
    </div>

    <div class="mt-4 sm:mx-auto sm:w-full px-10 md:px-32 pb-10">
        <form class="space-y-6 font-rubikv" action="{{ route('freelancer.register') }}" method="POST">
            @csrf
            <div class="w-full h-full flex flex-col md:flex-row gap-2 md:gap-10">
                <div class="flex-1 flex flex-col gap-2">
                    <div>
                        <label for="name_en"
                            class="block text-sm/6 font-medium text-gray-100">{{ __('website.name_in_english') }}</label>
                        <div class="mt-2">
                            <input type="text" name="en[name]" id="name_en" required
                                class="block w-full rounded-xl bg-white px-3 py-1.5 text-base text-gray-900 placeholder:text-gray-400 sm:text-sm/6">
                        </div>
                    </div>

                    <div>
                        <label for="name_ar"
                            class="block text-sm/6 font-medium text-gray-100">{{ __('website.name_in_arabic') }}</label>
                        <div class="mt-2">
                            <input type="text" name="ar[name]" id="name_ar" required
                                class="block w-full rounded-xl bg-white px-3 py-1.5 text-base text-gray-900 placeholder:text-gray-400 sm:text-sm/6">
                        </div>
                    </div>

                    <div>
                        <label for="cash_number"
                            class="block text-sm/6 font-medium text-gray-100">{{ __('website.cash_number_label') }}</label>
                        <div class="mt-2">
                            <input type="number" name="cash_number" id="cash_number" required
                                class="block w-full rounded-xl bg-white px-3 py-1.5 text-base text-gray-900 placeholder:text-gray-400 sm:text-sm/6">
                        </div>
                    </div>

                    <div>
                        <label for="phone-number"
                            class="block text-sm/6 font-medium text-gray-100">{{ __('website.phone_number_label') }}</label>
                        <div class="mt-2">
                            <input type="number" name="phone" id="phone-number" required
                                class="block w-full rounded-xl bg-white px-3 py-1.5 text-base text-gray-900 placeholder:text-gray-400 sm:text-sm/6">
                        </div>
                    </div>

                    <div>
                        <label for="date_of_birth"
                            class="block text-sm/6 font-medium text-gray-100">{{ __('website.date_of_birth_label') }}</label>
                        <div class="mt-2">
                            <input type="date" name="date_of_birth" id="date_of_birth" required
                                class="block w-full rounded-xl bg-white px-3 py-1.5 text-base text-gray-900 placeholder:text-gray-400 sm:text-sm/6">
                        </div>
                    </div>
                </div>
                <div class="flex-1 flex flex-col gap-2">
                    <div>
                        <label for="email"
                            class="block text-sm/6 font-medium text-gray-100">{{ __('website.email_label') }}</label>
                        <div class="mt-2">
                            <input type="email" name="email" id="email" required
                                class="block w-full rounded-xl bg-white px-3 py-1.5 text-base text-gray-900 placeholder:text-gray-400 sm:text-sm/6">
                        </div>
                    </div>

                    <div>
                        <label for="job-title"
                            class="block text-sm/6 font-medium text-gray-100">{{ __('website.job_title_label') }}</label>
                        <div class="mt-2">
                            <select name="job_title_id" id="job-title" required
                                class="block w-full rounded-xl bg-white px-3 py-1.5 text-base text-gray-900 placeholder:text-gray-400 sm:text-sm/6">
                                <option selected disabled>{{ __('website.job_title_placeholder') }}</option>
                                @foreach ($jobTitles as $jobTitle)
                                    <option value="{{ $jobTitle->id }}">{{ $jobTitle->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div>
                        <label for="gender"
                            class="block text-sm font-bold text-gray-900">{{ __('website.gender_label') }}</label>
                        <div class="flex items-center space-x-4 mt-2">
                            <label for="male" class="flex items-center">
                                <input type="radio" id="male" name="gender" value="male" required class="mr-2">
                                {{ __('website.male') }}
                            </label>
                            <label for="female" class="flex items-center">
                                <input type="radio" id="female" name="gender" value="female" required class="mr-2">
                                {{ __('website.female') }}
                            </label>
                        </div>
                    </div>

                    <div>
                        <label for="fields"
                            class="block text-sm/6 font-medium text-gray-100">{{ __('website.fields_label') }}</label>
                        <div class="mt-2">
                            <select name="fields[]" id="skills" multiple
                                class="block w-full rounded-xl bg-white px-3 py-1.5 text-base text-gray-900 placeholder:text-gray-400 sm:text-sm/6">
                                @foreach ($fields as $field)
                                    <option value="{{ $field->id }}">{{ $field->name }}</option>
                                @endforeach
                            </select>
                            <small class="text-gray-500">{{ __('website.fields_help') }}</small>
                        </div>
                    </div>

                    <div>
                        <label for="password"
                            class="block text-sm/6 font-medium text-gray-100">{{__('website.password_label')}}</label>
                        <div class="mt-2">
                            <input type="password" name="password" id="password" autocomplete="current-password"
                                required
                                class="block w-full rounded-xl bg-white px-3 py-1.5 text-base text-gray-900 placeholder:text-gray-400 sm:text-sm/6">
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <label for="en_bio"
                    class="block text-sm/6 font-medium text-gray-100">{{ __('website.bio_en_label') }}</label>
                <div class="mt-2">
                    <textarea rows="3" cols="50" name="en[bio]" id="en_bio" required
                        class="block w-full rounded-xl bg-white px-3 py-1.5 text-base text-gray-900 placeholder:text-gray-400 sm:text-sm/6"></textarea>
                </div>
            </div>

            <div>
                <label for="ar_bio"
                    class="block text-sm/6 font-medium text-gray-100">{{ __('website.bio_ar_label') }}</label>
                <div class="mt-2">
                    <textarea rows="3" cols="50" name="ar[bio]" id="ar_bio" required
                        class="block w-full rounded-xl bg-white px-3 py-1.5 text-base text-gray-900 placeholder:text-gray-400 sm:text-sm/6"></textarea>
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
                    class="flex w-full justify-center rounded-xl bg-gr px-3 py-2 text-sm/6 font-semibold text-black shadow-sm transition hover:bg-green-400">{{__('website.have_talent')}}</a>
            </div>
        </div>
    </div>
</div>
@endsection