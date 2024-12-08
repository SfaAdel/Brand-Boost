@extends('layout')

@section('title', 'Contact Us')

@section('content')
<div class="backgrounded">
    <div class="isolate bg-white px-6 py-24 sm:py-32 lg:px-8 hepta">
        <div class="mx-auto max-w-2xl text-center">
            <h2 class="text-balance text-4xl font-semibold tracking-tight text-gray-900 sm:text-5xl uppercase">Contact
                sales
            </h2>
            <p class="rubikv mt-2 text-lg/8 text-gray-600">Get in touch with us and we'll get back to you as soon as we
                can.
            </p>
        </div>

        <div class="my-3">
            @include('front-end.includes.alerts')
        </div>

        <form action="{{ route('contacts.store') }}" method="POST" class="mx-auto mt-16 max-w-xl sm:mt-20">
            @csrf
            <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
                <div>
                    <label for="first-name" class="block text-sm/6 font-semibold text-gray-900">Name</label>
                    <div class="mt-2.5">
                        <input type="text" name="name" id="first-name" autocomplete="given-name"
                            class="border-2 border-black block w-full px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
                    </div>
                </div>
                <div>
                    <label for="title" class="block text-sm/6 font-semibold text-gray-900">Message Title</label>
                    <div class="mt-2.5">
                        <input type="text" name="title" id="title" autocomplete="family-name"
                            class="border-2 border-black block w-full px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
                    </div>
                </div>
                <div class="sm:col-span-2">
                    <label for="email" class="block text-sm/6 font-semibold text-gray-900">Email</label>
                    <div class="mt-2.5">
                        <input type="email" name="email" id="email" autocomplete="email"
                            class="border-2 border-black block w-full px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
                    </div>
                </div>
                <div class="sm:col-span-2">
                    <label for="phone-number" class="block text-sm/6 font-semibold text-gray-900">Phone number</label>
                    <div class="relative mt-2.5">
                        <div class="absolute inset-y-0 left-0 flex items-center">
                            <label for="country" class="sr-only">Country</label>
                            <select id="country" name=""
                                class="border-2 border-black h-full rounded-mdansparent bg-none py-0 pl-4 pr-9 text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm">
                                <option>EG</option>
                                <option>US</option>
                                <option>CA</option>
                                <option>EU</option>
                            </select>
                        </div>
                        <input type="tel" name="phone" id="phone-number" autocomplete="tel"
                            class="border-2 border-black block w-full px-3.5 py-2 pl-20 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
                    </div>
                </div>
                <div class="sm:col-span-2">
                    <label for="message" class="block text-sm/6 font-semibold text-gray-900">Message</label>
                    <div class="mt-2.5">
                        <textarea name="message" id="message" rows="4"
                            class="border-2 border-black block w-full px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6"></textarea>
                    </div>
                </div>
            </div>
            <div class="mt-10">
                <button type="submit"
                    class="block w-full bg-pink px-3.5 py-2.5 text-center text-sm font-bold uppercase hover:bg-fuchsia-500 border-2 border-black text-black">Let's
                    talk</button>
            </div>
        </form>
    </div>
</div>
@endsection