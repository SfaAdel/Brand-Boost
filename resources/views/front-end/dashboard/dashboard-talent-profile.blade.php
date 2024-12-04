@extends('businessarea')

@section('title', 'Edit Profile')

@section('business-area-content')
<div class="border-black border-2 bg-slate-50 h-full">
    <div class="flex items-center gap-4 p-10">
        <img src="{{ asset('front-end/SocialMedia/brand boost sm (6).png') }}" alt="Talent Pic"
            class="w-24 h-24 border-2 border-black object-cover">
        <div>
            <h2 class="font-bold text-2xl">Freelancer Name</h2>
            <h4 class="text-slate-500">Specialization</h4>
        </div>
    </div>
    <div class="px-10">
        <form action="">
            <div class="flex gap-5">
                <div class="flex-1">
                    <div class="flex flex-col my-2">
                        <label for="job-title"
                            class="text-gray-600 text-sm rubikv leading-relaxed">{{ __('website.job_title_label') }}</label>
                        <select name="job_title_id" id="job-title" class="p-2 border-black border-2 outline-none">
                            <option selected disabled>Select Job</option>
                            <option value="">Job no. 1</option>
                            <option value="" selected>Job no. 2</option>
                        </select>
                    </div>

                    <div class="flex flex-col my-2">
                        <label for="cash-number" class="text-gray-600 text-sm rubikv leading-relaxed">Bank account
                            number /
                            Wallet cash number</label>
                        <input type="number" name="cash_number" id="cash-number" value="123456789"
                            class="p-2 border-black border-2 outline-none">
                    </div>
                </div>

                <div class="flex-1">
                    <div class="flex flex-col my-2">
                        <label for="phone-number"
                            class="text-gray-600 text-sm rubikv leading-relaxed">{{ __('website.phone_number_label') }}</label>
                        <input type="number" name="phone" id="phone-number" value="123456789"
                            class="p-2 border-black border-2 outline-none">
                    </div>

                    <div class="flex flex-col my-2">
                        <label for="date_of_birth"
                            class="text-gray-600 text-sm rubikv leading-relaxed">{{ __('website.date_of_birth_label') }}</label>
                        <input type="date" name="date_of_birth" id="date_of_birth"
                            class="p-2 border-black border-2 outline-none" required>
                    </div>
                </div>
            </div>

            <div class="flex flex-col my-2">
                <label for="fields"
                    class="text-gray-600 text-sm rubikv leading-relaxed">{{ __('website.fields_label') }}</label>
                <select name="fields[]" id="skills" multiple class="p-2 border-black border-2 outline-none">
                    <option value="">Skill no. 1</option>
                    <option value="">Skill no. 2</option>
                    <option value="">Skill no. 3</option>
                </select>
                <small class="text-gray-500">{{ __('website.fields_help') }}</small>
            </div>

            <div class="flex flex-col my-2">
                <label for="en_bio"
                    class="text-gray-600 text-md rubikv leading-relaxed">{{ __('website.bio_en_label') }}</label>
                <textarea rows="3" cols="50" name="en[bio]" id="en_bio"
                    value="Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit delectus tenetur unde quo vero expedita distinctio eum reprehenderit? Temporibus ipsam repellendus repudiandae ullam expedita illo consequuntur sed asperiores, omnis modi?"
                    class="p-2 border-black border-2 outline-none"></textarea>
            </div>

            <div class="flex flex-col my-2">
                <label for="ar_bio"
                    class="text-gray-600 text-md rubikv leading-relaxed">{{ __('website.bio_ar_label') }}</label>
                <textarea rows="3" cols="50" name="ar[bio]" id="ar_bio"
                    value="Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit delectus tenetur unde quo vero expedita distinctio eum reprehenderit? Temporibus ipsam repellendus repudiandae ullam expedita illo consequuntur sed asperiores, omnis modi?"
                    class="p-2 border-black border-2 outline-none"></textarea>
            </div>

            <div class="w-full flex justify-center items-center py-5">
                <button type="submit"
                    class="uppercase hepta w-full bg-green font-semibold py-2 px-4 border-2 border-black hover:bg-emerald-500 transition">update</button>
            </div>
        </form>
    </div>
</div>
@endsection