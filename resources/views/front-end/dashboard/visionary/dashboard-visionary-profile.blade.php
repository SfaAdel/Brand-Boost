@extends('businessarea')

@section('title', 'Edit Profile')

@section('business-area-content')
<div class="border-black border-2 bg-slate-50 h-full">

    <div class="my-3">
        @include('front-end.includes.alerts')
    </div>

    <div class="px-10">
        <form action="{{ route('dashboard-visionary-profile.update', $businessOwner->id) }}" method="POST"
            enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="_method" value="PATCH">

            <div class="flex justify-between items-center flex-wrap">
                <div class="flex items-center gap-4 p-10">
                    <img src="{{ asset('images/business_owners/profile/' . $businessOwner->profile_image) }}"
                        alt="Talent Pic" class="w-24 h-24 border-2 border-black object-cover">
                    <div>
                        <h2 class="font-bold text-2xl">{{ $businessOwner->name }}</h2>
                        <h4 class="text-slate-500">{{ $businessOwner->company_name }}</h4>
                    </div>
                </div>

                <div class="flex flex-col gap-2">
                    <label for="picture"
                        class="text-xs font-semibold uppercase">{{__('website.profile_picture')}}</label>
                    <input type="file" name="profile_image" id="picture" class="border-2 border-black px-3 py-2">
                </div>
            </div>

            <div class="flex gap-5">
                <div class="flex-1">

                    <!--  name -->

                    <div class="flex flex-col my-2">
                        <label for="en-name"
                            class="font-bold text-md hepta leading-relaxed">{{ __('website.name_in_english') }}</label>
                        <input type="text" name="en[name]" id="en-name"
                            value="{{ $businessOwner->translate('en')?->name }}"
                            class="p-2 border-black border-2 outline-none">
                    </div>

                    <div class="flex flex-col my-2">
                        <label for="ar-name"
                            class="font-bold text-md hepta leading-relaxed">{{ __('website.name_in_arabic') }}</label>
                        <input type="text" name="ar[name]" id="ar-name"
                            value="{{ $businessOwner->translate('ar')?->name }}"
                            class="p-2 border-black border-2 outline-none">
                    </div>


                    <!-- company name -->

                    <div class="flex flex-col my-2">
                        <label for="en-company-name"
                            class="font-bold text-md hepta leading-relaxed">{{ __('website.company_in_english') }}</label>
                        <input type="text" name="en[company_name]" id="en-company-name"
                            value="{{ $businessOwner->translate('en')?->company_name }}"
                            class="p-2 border-black border-2 outline-none">
                    </div>

                    <div class="flex flex-col my-2">
                        <label for="ar-company-name"
                            class="font-bold text-md hepta leading-relaxed">{{ __('website.company_in_arabic') }}</label>
                        <input type="text" name="ar[company_name]" id="ar-company-name"
                            value="{{ $businessOwner->translate('ar')?->company_name }}"
                            class="p-2 border-black border-2 outline-none">
                    </div>

                    <!-- phone -->

                    <div class="flex flex-col my-2">
                        <label for="phone-number"
                            class="font-bold text-md hepta leading-relaxed">{{ __('website.phone_number') }}</label>
                        <input type="text" name="phone" id="phone-number" value="{{ $businessOwner->phone }}"
                            class="p-2 border-black border-2 outline-none">
                    </div>

                    <!-- Email -->
                    <div class="flex flex-col my-2">
                        <label for="email" class="text-gray-600 text-md rubikv leading-relaxed">
                            {{ __('website.email_label') }}
                        </label>
                        <input type="email" name="email" id="email" value="{{ $businessOwner->email }}"
                            class="p-2 border-black border-2 outline-none">
                    </div>

                    <!-- Password -->
                    <div class="flex flex-col my-2">
                        <label for="password" class="text-gray-600 text-md rubikv leading-relaxed">
                            {{ __('website.password_label') }}
                        </label>
                        <input type="password" name="password" id="password" placeholder="Enter new password"
                            class="p-2 border-black border-2 outline-none">
                        <small class="text-gray-500">{{ __('website.password_help') }}</small>
                    </div>

                    <!-- field -->

                    <div class="flex flex-col my-2">
                        <label for="Company-field"
                            class="font-bold text-md hepta leading-relaxed">{{ __('company_work_field') }}</label>
                        <select name="field_id" id="Company-field" class="p-2 border-black border-2 outline-none">
                            <option selected disabled>{{ __('Choose yours') }}</option>
                            @foreach ($fields as $field)
                                <option value="{{ $field->id }}" @if ($field->id == $businessOwner->field_id) selected @endif>
                                    {{ $field->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>

            <div class="w-full flex justify-center items-center py-5">
                <button type="submit"
                    class="uppercase hepta w-full bg-green font-semibold py-2 px-4 border-2 border-black hover:bg-emerald-500 transition">{{__('website.update')}}</button>
            </div>

        </form>
    </div>
</div>
@endsection