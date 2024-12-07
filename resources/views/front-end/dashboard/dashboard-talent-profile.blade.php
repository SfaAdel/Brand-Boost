@extends('businessarea')

@section('title', 'Edit Profile')

@section('business-area-content')
    <div class="border-black border-2 bg-slate-50 h-full">
        <div class="flex items-center gap-4 p-10">
            <img src="{{ asset('images/freelancers/profile/' . $freelancer->profile_image) }}" alt="Talent Pic"
                class="w-24 h-24 border-2 border-black object-cover">
            <div>
                <h2 class="font-bold text-2xl">{{ $freelancer->name }}</h2>
                <h4 class="text-slate-500">{{ $freelancer->jobTitle->name }}</h4>
            </div>
        </div>

        <div class="my-3">
            @include('front-end.includes.alerts')
        </div>

        <div class="px-10">
            {{-- <form action="{{ route('dashboard-talent-profile.update',  Auth::guard('freelancer')->user()->id) }}" method="POST">
            @csrf
            @method('PATCH')
                   
            <div class="flex gap-5">
                <div class="flex-1">
                    <div class="flex flex-col my-2">
                        <label for="job-title"
                            class="text-gray-600 text-sm rubikv leading-relaxed">{{ __('website.job_title_label') }}</label>
                        <select name="job_title_id" id="job-title" class="p-2 border-black border-2 outline-none">
                            <option selected disabled>Select Job</option>
                            @foreach ($jobTitles as $jobTitle)
                            <option value="{{$jobTitle->id}}">{{$jobTitle->name}}</option>                                
                            @endforeach
                        </select>
                    </div>

                    <div class="flex flex-col my-2">
                        <label for="cash-number" class="text-gray-600 text-sm rubikv leading-relaxed">Bank account
                            number /
                            Wallet cash number</label>
                        <input type="number" name="cash_number" id="cash-number" value="{{$freelancer->cash_number}}"
                            class="p-2 border-black border-2 outline-none">
                    </div>
                </div>

                <div class="flex-1">
                    <div class="flex flex-col my-2">
                        <label for="phone-number"
                            class="text-gray-600 text-sm rubikv leading-relaxed">{{ __('website.phone_number_label') }}</label>
                        <input type="number" name="phone" id="phone" value="{{$freelancer->phone}}"
                            class="p-2 border-black border-2 outline-none">
                    </div>

                    <div class="flex flex-col my-2">
                        <label for="date_of_birth"
                            class="text-gray-600 text-sm rubikv leading-relaxed">{{ __('website.date_of_birth_label') }}</label>
                        <input type="date" name="date_of_birth" id="{{$freelancer->date_of_birth}}"
                            class="p-2 border-black border-2 outline-none" required>
                    </div>
                </div>
            </div>

            <div class="flex flex-col my-2">
                <label for="fields"
                    class="text-gray-600 text-sm rubikv leading-relaxed">{{ __('website.fields_label') }}</label>
                <select name="fields[]" id="skills" multiple class="p-2 border-black border-2 outline-none">
                    @foreach ($fields as $field)
                    <option value="{{$field->id}}">{{$field->name}}</option>                                
                    @endforeach
                </select>
                <small class="text-gray-500">{{ __('website.fields_help') }}</small>
            </div>

            <div class="flex flex-col my-2">
                <label for="en_bio"
                    class="text-gray-600 text-md rubikv leading-relaxed">{{ __('website.bio_en_label') }}</label>
                <textarea rows="3" cols="50" name="en[bio]" id="en_bio"
                    value="{{$freelancer->translate('en')?->bio}}"
                    class="p-2 border-black border-2 outline-none"></textarea>
            </div>

            <div class="flex flex-col my-2">
                <label for="ar_bio"
                    class="text-gray-600 text-md rubikv leading-relaxed">{{ __('website.bio_ar_label') }}</label>
                <textarea rows="3" cols="50" name="ar[bio]" id="ar_bio"
                    value="{{$freelancer->translate('ar')?->bio}}"
                    class="p-2 border-black border-2 outline-none"></textarea>
            </div>

            <div class="w-full flex justify-center items-center py-5">
                <button type="submit"
                    class="uppercase hepta w-full bg-green font-semibold py-2 px-4 border-2 border-black hover:bg-emerald-500 transition">update</button>
            </div>
        </form> --}}

            <form action="{{ route('dashboard-talent-profile.update', $freelancer->id) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                {{-- @method('PATCH') --}}

                <div class="flex gap-5">
                    <div class="flex-1">
                        {{-- Job Title --}}
                        <div class="flex flex-col my-2">
                            <label for="job-title"
                                class="text-gray-600 text-sm rubikv leading-relaxed">{{ __('website.job_title_label') }}</label>
                            <select name="job_title_id" id="job-title" class="p-2 border-black border-2 outline-none">
                                <option selected disabled>Select Job</option>
                                @foreach ($jobTitles as $jobTitle)
                                    <option value="{{ $jobTitle->id }}" @if ($jobTitle->id == $freelancer->job_title_id) selected @endif>
                                        {{ $jobTitle->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('job_title_id')
                                <small class="text-red-500">{{ $message }}</small>
                            @enderror
                        </div>

                        {{-- Cash Number --}}
                        <div class="flex flex-col my-2">
                            <label for="cash-number" class="text-gray-600 text-sm rubikv leading-relaxed">Bank account
                                number / Wallet cash number</label>
                            <input type="number" name="cash_number" id="cash-number" value="{{ $freelancer->cash_number }}"
                                class="p-2 border-black border-2 outline-none">
                            @error('cash_number')
                                <small class="text-red-500">{{ $message }}</small>
                            @enderror
                        </div>

                        <!-- English Name -->
                        <div class="flex flex-col my-2">
                            <label for="en_name" class="text-gray-600 text-md rubikv leading-relaxed">
                                {{ __('website.name_en_label') }}
                            </label>
                            <input type="text" name="en[name]" id="en_name"
                                value="{{ $freelancer->translate('en')?->name }}"
                                class="p-2 border-black border-2 outline-none">
                        </div>

                        <!-- Email -->
                        <div class="flex flex-col my-2">
                            <label for="email" class="text-gray-600 text-md rubikv leading-relaxed">
                                {{ __('website.email_label') }}
                            </label>
                            <input type="email" name="email" id="email" value="{{ $freelancer->email }}"
                                class="p-2 border-black border-2 outline-none">
                        </div>


                    </div>

                    <div class="flex-1">
                        {{-- Phone Number --}}
                        <div class="flex flex-col my-2">
                            <label for="phone-number"
                                class="text-gray-600 text-sm rubikv leading-relaxed">{{ __('website.phone_number_label') }}</label>
                            <input type="number" name="phone" id="phone" value="{{ $freelancer->phone }}"
                                class="p-2 border-black border-2 outline-none">
                            @error('phone')
                                <small class="text-red-500">{{ $message }}</small>
                            @enderror
                        </div>

                        {{-- Date of Birth --}}
                        <div class="flex flex-col my-2">
                            <label for="date_of_birth"
                                class="text-gray-600 text-sm rubikv leading-relaxed">{{ __('website.date_of_birth_label') }}</label>
                            <input type="date" name="date_of_birth" id="date_of_birth"
                                value="{{ $freelancer->date_of_birth }}" class="p-2 border-black border-2 outline-none"
                                required>
                            @error('date_of_birth')
                                <small class="text-red-500">{{ $message }}</small>
                            @enderror
                        </div>

                        <!-- Arabic Name -->
                        <div class="flex flex-col my-2">
                            <label for="ar_name" class="text-gray-600 text-md rubikv leading-relaxed">
                                {{ __('website.name_ar_label') }}
                            </label>
                            <input type="text" name="ar[name]" id="ar_name"
                                value="{{ $freelancer->translate('ar')?->name }}"
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


                    </div>
                </div>

                <input type="hidden" name="_method" value="PATCH">









                <!-- Gender -->
                <div class="flex flex-col my-2">
                    <label for="gender" class="text-gray-600 text-md rubikv leading-relaxed">
                        {{ __('website.gender_label') }}
                    </label>
                    <select name="gender" id="gender" class="p-2 border-black border-2 outline-none">
                        <option value="male" {{ $freelancer->gender === 'male' ? 'selected' : '' }}>
                            {{ __('website.male') }}
                        </option>
                        <option value="female" {{ $freelancer->gender === 'female' ? 'selected' : '' }}>
                            {{ __('website.female') }}
                        </option>
                    </select>
                </div>

                {{-- Fields --}}
                <div class="flex flex-col my-2">
                    <label for="fields"
                        class="text-gray-600 text-sm rubikv leading-relaxed">{{ __('website.fields_label') }}</label>
                    <select name="fields[]" id="skills" multiple class="p-2 border-black border-2 outline-none">
                        @foreach ($fields as $field)
                            <option value="{{ $field->id }}" @if (in_array($field->id, $freelancer->fields->pluck('id')->toArray())) selected @endif>
                                {{ $field->name }}
                            </option>
                        @endforeach
                    </select>
                    <small class="text-gray-500">{{ __('website.fields_help') }}</small>
                    @error('fields')
                        <small class="text-red-500">{{ $message }}</small>
                    @enderror
                </div>

                {{-- English Bio --}}
                <div class="flex flex-col my-2">
                    <label for="en_bio"
                        class="text-gray-600 text-md rubikv leading-relaxed">{{ __('website.bio_en_label') }}</label>
                    <textarea rows="3" cols="50" name="en[bio]" id="en_bio"
                        class="p-2 border-black border-2 outline-none">{{ $freelancer->translate('en')?->bio }}</textarea>
                    @error('en.bio')
                        <small class="text-red-500">{{ $message }}</small>
                    @enderror
                </div>

                {{-- Arabic Bio --}}
                <div class="flex flex-col my-2">
                    <label for="ar_bio"
                        class="text-gray-600 text-md rubikv leading-relaxed">{{ __('website.bio_ar_label') }}</label>
                    <textarea rows="3" cols="50" name="ar[bio]" id="ar_bio"
                        class="p-2 border-black border-2 outline-none">{{ $freelancer->translate('ar')?->bio }}</textarea>
                    @error('ar.bio')
                        <small class="text-red-500">{{ $message }}</small>
                    @enderror
                </div>

                <!-- Profile Image -->
                <div class="flex flex-col my-2">
                    <label for="profile_image" class="text-gray-600 text-md rubikv leading-relaxed">
                        {{ __('website.image_label') }}
                    </label>
                    <input type="file" name="profile_image" id="profile_image" accept="image/*"
                        class="p-2 border-black border-2 outline-none">
                    {{-- @if ($freelancer->profile_image)
                        <img src="{{ asset('images/freelancers/profile/' . $freelancer->profile_image) }}"
                            alt="Profile Image" class="w-20 h-20 mt-2">
                    @endif --}}
                    @error('profile_image')
                        <small class="text-red-500">{{ $message }}</small>
                    @enderror
                </div>

                <div class="w-full flex justify-center items-center py-5">
                    <button type="submit"
                        class="uppercase hepta w-full bg-green font-semibold py-2 px-4 border-2 border-black hover:bg-emerald-500 transition">update</button>
                </div>
            </form>
        </div>
    </div>
@endsection
