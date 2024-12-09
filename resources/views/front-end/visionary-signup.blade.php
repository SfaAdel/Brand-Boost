@extends('layout')

@section('title', __('Visionary Signup'))

@section('content')
<div class="bg-green acworth px-5 bg-pink">
    <div class="py-5 text-center md:text-justify">
        <h1 class="text-5xl font-bold hepta uppercase">{{ __('website.welcome_visionary') }}</h1>
        <p class="text-md rubikv text-gray-800">{{ __('website.fill_form') }}</p>
    </div>

    <div class="my-3">
        @include('front-end.includes.alerts')
    </div>

    <div>
        <form action="{{ route('business_owner.register') }}" method="POST">
            @csrf
            <div class="flex justify-between gap-5 flex-wrap">
                <div class="flex-1">
                    <div class="flex flex-col my-2">
                        <label for="en-name"
                            class="font-bold text-md rubikv leading-relaxed">{{ __('website.name_in_english') }}</label>
                        <input type="text" name="en[name]" id="en-name" class="p-2 border-black border-2 outline-none">
                    </div>

                    <div class="flex flex-col my-2">
                        <label for="ar-name"
                            class="font-bold text-md rubikv leading-relaxed">{{ __('website.name_in_arabic') }}</label>
                        <input type="text" name="ar[name]" id="ar-name" class="p-2 border-black border-2 outline-none">
                    </div>

                    <div class="flex flex-col my-2">
                        <label for="email"
                            class="font-bold text-md rubikv leading-relaxed">{{ __('website.email_label') }}</label>
                        <input type="email" name="email" id="email" class="p-2 border-black border-2 outline-none">
                    </div>

                    <div class="flex flex-col my-2">
                        <label for="password"
                            class="font-bold text-md rubikv leading-relaxed">{{ __('website.password_label') }}</label>
                        <input type="password" name="password" id="password"
                            class="p-2 border-black border-2 outline-none">
                    </div>
                </div>
                <div class="flex-1">
                    <div class="flex flex-col my-2">
                        <label for="en-company-name"
                            class="font-bold text-md rubikv leading-relaxed">{{ __('website.company_in_english') }}</label>
                        <input type="text" name="en[company_name]" id="en-company-name"
                            class="p-2 border-black border-2 outline-none">
                    </div>

                    <div class="flex flex-col my-2">
                        <label for="ar-company-name"
                            class="font-bold text-md rubikv leading-relaxed">{{ __('website.company_in_arabic') }}</label>
                        <input type="text" name="ar[company_name]" id="ar-company-name"
                            class="p-2 border-black border-2 outline-none">
                    </div>

                    <div class="flex flex-col my-2">
                        <label for="phone-number"
                            class="font-bold text-md rubikv leading-relaxed">{{ __('website.phone_number') }}</label>
                        <input type="text" name="phone" id="phone-number"
                            class="p-2 border-black border-2 outline-none">
                    </div>
                </div>
            </div>

            <div class="flex flex-col my-2">
                <label for="Company-field"
                    class="font-bold text-md rubikv leading-relaxed">{{ __('website.company_work_field') }}</label>
                <select name="field_id" id="Company-field" class="p-2 border-black border-2 outline-none">
                    <option selected disabled>{{ __('Choose yours') }}</option>

                    @foreach ($fields as $field)
                        <option value="{{ $field->id }}">{{ $field->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="w-full flex justify-center items-center py-5">
                <button type="submit"
                    class="text-3xl uppercase hepta w-1/2 mx-auto bg-fuchsia-700 text-white font-semibold py-2 px-4 border-2 border-black hover:bg-fuchsia-500 transition"
                    style="box-shadow: -5px 10px 0 black;">{{ __('website.signup_button') }}</button>
            </div>
        </form>

        <div class="text-sm md:text-lg uppercase flex gap-5 items-center w-full justify-center">
            <p class="rubikv">{{ __('website.already_signed?') }}</p>
            <a href="/signin"
                class="hepta bg-fuchsia-700 text-white py-1 px-2 border-2 border-black">{{ __('website.login_here') }}</a>
        </div>
    </div>
</div>
@endsection