@extends('layout')

@section('title', 'Contact Us')

@section('content')
<div id="contact-page" class="bg-pr flex justify-center">
    <div class=" bg-gr border border-green-200 w-1/2 mx-auto my-20 px-6 py-16 lg:px-8 hepta rounded-lg">
        <div class="mx-auto max-w-2xl text-center">
            <h2 class="text-balance text-4xl font-semibold tracking-tight text-gray-900 sm:text-5xl uppercase">
                {{__('website.contact_us')}}
            </h2>
            <p class="rubikv mt-2 text-lg/8 text-gray-600">{{__('website.contact_us_description')}}
            </p>
        </div>

        <div class="my-3">
            @include('front-end.includes.alerts')
        </div>

        <form action="{{ route('contacts.store') }}" method="POST" class="mx-auto mt-16 max-w-xl sm:mt-20">
            @csrf
            <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
                <div id="contact-input">
                    <label for="first-name"
                        class="block text-sm/6 font-semibold text-gray-900">{{__('website.name')}}</label>
                    <div class="mt-2.5">
                        <input type="text" name="name" id="first-name" autocomplete="given-name"
                            class="bg-white rounded-lg block w-full px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
                    </div>
                </div>
                <div id="contact-input">
                    <label for="title"
                        class="block text-sm/6 font-semibold text-gray-900">{{__('website.message_title')}}</label>
                    <div class="mt-2.5">
                        <input type="text" name="title" id="title" autocomplete="family-name"
                            class="bg-white rounded-lg block w-full px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
                    </div>
                </div>
                <div id="contact-input" class="sm:col-span-2">
                    <label for="email"
                        class="block text-sm/6 font-semibold text-gray-900">{{__('website.email')}}</label>
                    <div class="mt-2.5">
                        <input type="email" name="email" id="email" autocomplete="email"
                            class="bg-white rounded-lg block w-full px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
                    </div>
                </div>
                <div id="contact-input" class="sm:col-span-2">
                    <label for="phone-number"
                        class="block text-sm/6 font-semibold text-gray-900">{{__('website.phone')}}</label>
                    <div class="mt-2.5">
                        <input type="tel" name="phone" id="phone-number" autocomplete="tel" pattern="[0-9]{11}"
                            maxlength="11" maxlength="11"
                            class="bg-white rounded-lg block w-full px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
                    </div>
                </div>
                <div id="contact-input" class="sm:col-span-2">
                    <label for="message"
                        class="block text-sm/6 font-semibold text-gray-900">{{__('website.message')}}</label>
                    <div class="mt-2.5">
                        <textarea name="message" id="message" rows="4"
                            class="bg-white rounded-lg block w-full px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6"></textarea>
                    </div>
                </div>
            </div>
            <div class="mt-10">
                <button type="submit"
                    class="block w-full bg-pi px-3.5 py-2.5 text-center text-sm font-bold uppercase hover:bg-pr hover:text-white transition-all rounded-lg text-black">{{__("website.let's_talk")}}</button>
            </div>
        </form>
    </div>
</div>

<script>
    document.querySelector('#phone-number').addEventListener('input', (event) => {
        event.target.value = event.target.value.replace(/[^0-9]/g, '');
    })
</script>
@endsection