@extends('layout')

@section('title', __('website.talent_signup_title'))

@section('content')
<div class="bg-green acworth px-5 bg-green">
    <div class="py-5 text-center md:text-justify">
        <h1 class="text-5xl font-bold hepta uppercase">{{ __('website.talent_signup_header') }}</h1>
        <p class="text-md rubikv text-gray-800">{{ __('website.talent_signup_subheader') }}</p>
    </div>

    <div class="my-3">
        @include('front-end.includes.alerts')
    </div>

    <div>
        <form action="{{ route('freelancer.register') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="flex justify-between gap-5 flex-wrap">
                <div class="flex-1">
                    <div class="flex flex-col my-2">
                        <label for="name_en"
                            class="text-gray-600 text-md rubikv leading-relaxed">{{ __('website.name_in_english') }}</label>
                        <input type="text" name="en[name]" id="name_en" class="p-2 border-black border-2 outline-none">
                    </div>

                    <div class="flex flex-col my-2">
                        <label for="name_ar"
                            class="text-gray-600 text-md rubikv leading-relaxed">{{ __('website.name_in_arabic') }}</label>
                        <input type="text" name="ar[name]" id="name_ar" class="p-2 border-black border-2 outline-none">
                    </div>

                    <div class="flex flex-col my-2">
                        <label for="email"
                            class="text-gray-600 text-md rubikv leading-relaxed">{{ __('website.email_label') }}</label>
                        <input type="email" name="email" id="email" class="p-2 border-black border-2 outline-none">
                    </div>

                    <div class="flex flex-col my-2">
                        <label for="password"
                            class="text-gray-600 text-md rubikv leading-relaxed">{{ __('website.password_label') }}</label>
                        <input type="password" name="password" id="password"
                            class="p-2 border-black border-2 outline-none">
                    </div>
                </div>
                <div class="flex-1">
                    <div class="flex flex-col my-2">
                        <label for="cash-number"
                            class="text-gray-600 text-md rubikv leading-relaxed">{{ __('website.cash_number_label') }}</label>
                        <input type="text" name="cash_number" id="cash-number"
                            class="p-2 border-black border-2 outline-none">
                    </div>

                    <div class="flex flex-col my-2">
                        <label for="phone-number"
                            class="text-gray-600 text-md rubikv leading-relaxed">{{ __('website.phone_number_label') }}</label>
                        <input type="text" name="phone" id="phone-number"
                            class="p-2 border-black border-2 outline-none">
                    </div>


                    <div class="flex flex-col my-2">
                        <label for="date_of_birth"
                            class="text-gray-600 text-md rubikv leading-relaxed">{{ __('website.date_of_birth_label') }}</label>
                        <input type="date" name="date_of_birth" id="date_of_birth"
                            class="p-2 border-black border-2 outline-none" required>
                    </div>



                    <div class="flex flex-col my-2">
                        <label for="job-title"
                            class="text-gray-600 text-md rubikv leading-relaxed">{{ __('website.job_title_label') }}</label>
                        <select name="job_title_id" id="job-title" class="p-2 border-black border-2 outline-none">
                            <option selected disabled>{{ __('website.job_title_placeholder') }}</option>
                            @foreach ($jobTitles as $jobTitle)
                                <option value="{{ $jobTitle->id }}">{{ $jobTitle->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>

            <div class="flex flex-col my-2 font-thin">
                <label for="gender"
                    class="text-gray-600 text-md rubikv leading-relaxed">{{ __('website.gender_label') }}</label>
                <div class="flex gap-5">
                    <div class="flex-1 items-center radio">
                        <input type="radio" id="male" name="gender" value="male" class="hidden peer">
                        <label for="male"
                            class="block bg-sky-200 border-black border-2 text-gray-600 p-2 cursor-pointer hover:bg-sky-400 hover:text-white peer-checked:bg-sky-400 peer-checked:text-white">{{ __('website.male') }}</label>
                    </div>
                    <div class="flex-1 items-center radio">
                        <input type="radio" id="female" name="gender" value="female" class="hidden peer">
                        <label for="female"
                            class="block bg-fuchsia-200 border-black border-2 text-gray-600 p-2 cursor-pointer hover:bg-fuchsia-400 hover:text-white peer-checked:bg-fuchsia-400 peer-checked:text-white">{{ __('website.female') }}</label>
                    </div>
                </div>
            </div>

            <div class="flex flex-col my-2">
                <label for="fields"
                    class="text-gray-600 text-md rubikv leading-relaxed">{{ __('website.fields_label') }}</label>
                <select name="fields[]" id="skills" multiple class="p-2 border-black border-2 outline-none">
                    @foreach ($fields as $field)
                        <option value="{{ $field->id }}">{{ $field->name }}</option>
                    @endforeach
                </select>
                <small class="text-gray-500">{{ __('website.fields_help') }}</small>
            </div>

            <div class="flex flex-col my-2">
                <label for="en_bio"
                    class="text-gray-600 text-md rubikv leading-relaxed">{{ __('website.bio_en_label') }}</label>
                <textarea rows="3" cols="50" name="en[bio]" id="en_bio"
                    class="p-2 border-black border-2 outline-none"></textarea>
            </div>
            <div class="flex flex-col my-2">
                <label for="ar_bio"
                    class="text-gray-600 text-md rubikv leading-relaxed">{{ __('website.bio_ar_label') }}</label>
                <textarea rows="3" cols="50" name="ar[bio]" id="ar_bio"
                    class="p-2 border-black border-2 outline-none"></textarea>
            </div>

            <div class="w-full flex justify-center items-center py-5">
                <button type="submit"
                    class="text-3xl uppercase hepta w-1/2 mx-auto bg-emerald-400 font-semibold py-2 px-4 border-2 border-black hover:bg-emerald-500 transition"
                    style="box-shadow: -5px 10px 0 black;">{{ __('website.signup_button') }}</button>
            </div>


        </form>
        <div class="text-sm md:text-lg uppercase flex gap-5 items-center w-full justify-center">
            <p class="rubikv">{{ __('website.already_have_account') }}</p>
            <a href="/signin"
                class="hepta bg-emerald-400 py-1 px-2 border-2 border-black">{{ __('website.login_link') }}</a>
        </div>
    </div>
</div>
@endsection