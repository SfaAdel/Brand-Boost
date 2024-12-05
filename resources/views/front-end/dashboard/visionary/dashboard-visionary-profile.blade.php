@extends('businessarea')

@section('title', 'Edit Profile')

@section('business-area-content')
<div class="border-black border-2 bg-slate-50 h-full">
    <div class="px-10">
        <form action="">
            <div class="flex justify-between items-center flex-wrap">
                <div class="flex items-center gap-4 p-10">
                    <img src="{{ asset('front-end/SocialMedia/brand boost sm (6).png') }}" alt="Talent Pic"
                        class="w-24 h-24 border-2 border-black object-cover">
                    <div>
                        <h2 class="font-bold text-2xl">Visionary Name</h2>
                        <h4 class="text-slate-500">Specialization</h4>
                    </div>
                </div>

                <div class="flex flex-col gap-2">
                    <label for="picture" class="text-xs font-semibold uppercase">update picture</label>
                    <input type="file" name="picture" id="picture" class="border-2 border-black px-3 py-2">
                </div>
            </div>

            <div class="flex gap-5">
                <div class="flex-1">
                    <div class="flex flex-col my-2">
                        <label for="en-company-name"
                            class="font-bold text-md hepta leading-relaxed">{{ __('Company Name in English') }}</label>
                        <input type="text" name="en[company_name]" id="en-company-name" value="Company Name"
                            class="p-2 border-black border-2 outline-none">
                    </div>

                    <div class="flex flex-col my-2">
                        <label for="ar-company-name"
                            class="font-bold text-md hepta leading-relaxed">{{ __('Company Name in Arabic') }}</label>
                        <input type="text" name="ar[company_name]" id="ar-company-name" value="الشركة"
                            class="p-2 border-black border-2 outline-none">
                    </div>

                    <div class="flex flex-col my-2">
                        <label for="phone-number"
                            class="font-bold text-md hepta leading-relaxed">{{ __('Phone number') }}</label>
                        <input type="text" name="phone" id="phone-number" value="123456789"
                            class="p-2 border-black border-2 outline-none">
                    </div>

                    <div class="flex flex-col my-2">
                        <label for="Company-field"
                            class="font-bold text-md hepta leading-relaxed">{{ __('Company Work Field') }}</label>
                        <select name="field_id" id="Company-field" class="p-2 border-black border-2 outline-none">
                            <option selected disabled>{{ __('Choose yours') }}</option>
                            <option selected disabled>{{ __('Choose yours') }}</option>
                            <option selected disabled>{{ __('Choose yours') }}</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="w-full flex justify-center items-center py-5">
                <button type="submit"
                    class="uppercase hepta w-full bg-green font-semibold py-2 px-4 border-2 border-black hover:bg-emerald-500 transition">update</button>
            </div>
        </form>
    </div>
</div>
@endsection