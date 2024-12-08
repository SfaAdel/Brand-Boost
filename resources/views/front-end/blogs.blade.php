@extends('layout')

@section('title', 'Blogs')

@section('content')
<section class="transparent-texture py-10">
    <h1 class="text-6xl font-bold text-center hepta uppercase pt-7">Our blogs</h1>

    <!--  -->
    <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <div class="grid lg:grid-cols-2 lg:gap-y-16 gap-10">

            <a class="group block border-black border-2 overflow-hidden focus:outline-none bg-slate-50 hepta"
                href="/blogs/blog">
                <div class="flex flex-col sm:flex-row sm:items-center gap-3 sm:gap-5">
                    <div class="shrink-0 relative overflow-hidden w-full sm:w-56 h-44">
                        <img class="group-hover:scale-105 group-focus:scale-105 transition-transform duration-500 ease-in-out size-full absolute top-0 start-0 object-cover"
                            src="{{ asset('front-end/socialMedia/brand boost sm (4).jpg') }}" alt="Blog Image">
                    </div>

                    <div class="grow px-5 py-3 md:p-0">
                        <h3 class="text-xl font-semibold text-black group-hover:text-gray-800">
                            First Blog
                        </h3>
                        <p id="blogDescription" class="mt-3 text-gray-600 dark:text-neutral-400">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Mollitia numquam iusto voluptatum
                            reprehenderit odio, vero alias vel excepturi ea, similique tempora! Fugit quibusdam quisquam
                            dignissimos amet doloribus tempore blanditiis ut.
                        </p>
                        <p
                            class="mt-4 inline-flex items-center gap-x-1 text-sm text-blue decoration-2 group-hover:underline group-focus:underline font-medium dark:text-blue-500">
                            Read more
                            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path d="m9 18 6-6-6-6" />
                            </svg>
                        </p>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <!--  -->
    </div>
</section>
@endsection