@extends('businessarea')

@section('title', 'Edit Profile')

@section('business-area-content')
<div class="bg-pr border rounded-lg border-gray-200 h-full">

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
                    @if (!empty($businessOwner->profile_image))
                        <img src="{{ asset('images/business_owners/profile/' . $businessOwner->profile_image) }}"
                            alt="Business owner Pic" class="w-24 h-24 rounded-lg object-cover">
                    @endif
                    <div>
                        <h2 class="text-2xl text-white">{{ $businessOwner->name }}</h2>
                        <h4 class="text-slate-200">{{ $businessOwner->company_name }}</h4>
                    </div>
                </div>

                <div class="flex flex-col gap-2">
                    <label for="picture"
                        class="text-xs font-semibold uppercase text-white">{{__('website.profile_picture')}}</label>
                    <input type="file" name="profile_image" id="picture"
                        class="bg-gr border rounded-lg border-gray-200 px-3 py-2">
                </div>
            </div>

            <div class="flex gap-5">
                <div class="flex-1">
                    <!--  name -->

                    <div class="flex flex-col my-2 dashboard-field">
                        <label for="en-name"
                            class=" text-sm text-md hepta leading-relaxed text-white">{{ __('website.name_in_english') }}</label>
                        <input type="text" name="en[name]" id="en-name"
                            value="{{ $businessOwner->translate('en')?->name }}"
                            class="p-2 border rounded-lg border-gray-400 outline-none bg-gr">
                    </div>

                    <div class="flex flex-col my-2 dashboard-field">
                        <label for="ar-name"
                            class=" text-sm text-md hepta leading-relaxed text-white">{{ __('website.name_in_arabic') }}</label>
                        <input type="text" name="ar[name]" id="ar-name"
                            value="{{ $businessOwner->translate('ar')?->name }}"
                            class="p-2 border rounded-lg border-gray-400 outline-none bg-gr">
                    </div>


                    <!-- company name -->

                    <div class="flex flex-col my-2 dashboard-field">
                        <label for="en-company-name"
                            class=" text-sm text-md hepta leading-relaxed text-white">{{ __('website.company_in_english') }}</label>
                        <input type="text" name="en[company_name]" id="en-company-name"
                            value="{{ $businessOwner->translate('en')?->company_name }}"
                            class="p-2 border rounded-lg border-gray-400 outline-none bg-gr">
                    </div>

                    <div class="flex flex-col my-2 dashboard-field">
                        <label for="ar-company-name"
                            class=" text-sm text-md hepta leading-relaxed text-white">{{ __('website.company_in_arabic') }}</label>
                        <input type="text" name="ar[company_name]" id="ar-company-name"
                            value="{{ $businessOwner->translate('ar')?->company_name }}"
                            class="p-2 border rounded-lg border-gray-400 outline-none bg-gr">
                    </div>
                </div>
                <div class="flex-1">

                    <!-- phone -->

                    <div class="flex flex-col my-2 dashboard-field">
                        <label for="phone-number"
                            class=" text-sm text-md hepta leading-relaxed text-white">{{ __('website.phone_number') }}</label>
                        <input type="text" name="phone" id="phone-number" value="{{ $businessOwner->phone }}"
                            class="p-2 border rounded-lg border-gray-400 outline-none bg-gr">
                    </div>

                    <!-- Email -->
                    <div class="flex flex-col my-2 dashboard-field">
                        <label for="email" class="text-md rubikv leading-relaxed text-white">
                            {{ __('website.email_label') }}
                        </label>
                        <input type="email" name="email" id="email" value="{{ $businessOwner->email }}"
                            class="p-2 border rounded-lg border-gray-400 outline-none bg-gr">
                    </div>

                    <!-- Password -->
                    <div class="flex flex-col my-2 dashboard-field">
                        <label for="password" class=" text-md rubikv leading-relaxed text-white">
                            {{ __('website.password_label') }}
                        </label>
                        <input type="password" name="password" id="password" placeholder="Enter new password"
                            class="p-2 border rounded-lg border-gray-400 outline-none bg-gr">
                        <!-- <small class="text-gray-500">{{ __('website.password_help') }}</small> -->
                    </div>

                    <!-- field -->

                    <div class="flex flex-col my-2 dashboard-field">
                        <label for="Company-field"
                            class=" text-sm text-md hepta leading-relaxed text-white">{{ __('company_work_field') }}</label>
                        <select name="field_id" id="Company-field"
                            class="p-2 border rounded-lg border-gray-400 outline-none bg-gr">
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

            <div class="w-full flex justify-center items-center py-5 dashboard-field">
                <button type="submit"
                    class="uppercase hepta w-full bg-green font-semibold py-2 px-4 bg-gr text-bl border rounded-lg border-gray-200 hover:bg-emerald-500 transition">{{__('website.update')}}</button>
            </div>

        </form>
    </div>
</div>
@endsection