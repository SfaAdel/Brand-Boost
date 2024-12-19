@extends('layout')

@section('title', 'Our Talents')

@section('content')
<section class="py-10 bg-pr">
    <div class="container mx-auto p-6">
        <h1 class="text-6xl font-bold text-center hepta uppercase pt-7 text-white">{{__('website.talents')}}</h1>

        <!-- <div>
            <button data-modal-open="filters-modal" id="toggle-filters" class="bg-black p-2 text-white mx-auto hepta block">{{__('website.filter')}} ?</button>
        </div>

        <div id="filters-modal" class="modal-overlay hidden fixed inset-0 z-10 bg-black/75 p-10 overflow-auto">
            <div id="filters" class="bg-pink my-5 hepta transition border-black border-t-2 border-r-2 px-4 py-8 absolute z-10 top-[20px] left-0 h-[100vh] w-[30%]">
                <form id="filter-form" action="{{ route('freelancers') }}" method="GET" class="flex flex-wrap gap-4">
                    <div class="w-full">
                        <label for="job-title" class="block text-sm font-medium">Job Title</label>
                        <select name="job_title" id="job-title" class="w-full p-2 border-black border-2 outline-none">
                            <option value="">{{__('website.all_job_titles')}}</option>
                            @foreach ($jobTitles as $jobTitle)
                                <option value="{{ $jobTitle->id }}" {{ request('job_title') == $jobTitle->id ? 'selected' : '' }}>
                                    {{ $jobTitle->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="w-full">
                        <fieldset>
                            <legend class="text-sm font-medium">{{__('website.skills')}}</legend>
                            <div class="flex flex-wrap gap-2">
                                @foreach ($fields as $field)
                                    <label class="flex items-center">
                                        <input type="checkbox" name="fields[]" value="{{ $field->id }}" 
                                            {{ in_array($field->id, (array) request('fields')) ? 'checked' : '' }} class="mr-1">
                                        {{ $field->name }}
                                    </label>
                                @endforeach
                            </div>
                        </fieldset>
                    </div>

                    <div class="w-full flex flex-col gap-2">
                        <button id="filter-btn" type="submit" class="block px-4 py-2 bg-black text-white font-bold hover:bg-gray-800 capitalize">
                        {{__('website.filter')}}
                        </button>
                        <button type="button" data-modal-close="filters-modal" id="close-filters" class="block px-4 py-2 bg-white text-black border-black border-2 font-bold hover:bg-gray-300 capitalize">
                        {{__('website.close')}}
                        </button>
                    </div>
                </form>
            </div>
        </div> -->

        <div id="filters" class="hepta mx-auto w-[80%] py-8 ">
            <form id="filter-form" action="{{ route('freelancers') }}" method="GET" class="flex flex-wrap gap-4">
                <div>
                    <!-- <label for="job-title" class="block text-sm font-medium">Job Title</label> -->
                    <select name="job_title" id="job-title"
                        class="w-full p-2 bg-white border rounded-lg border-gray-200 outline-none text-sm">
                        <option value="">{{__('website.all_job_titles')}}</option>
                        @foreach ($jobTitles as $jobTitle)
                            <option value="{{ $jobTitle->id }}" {{ request('job_title') == $jobTitle->id ? 'selected' : '' }}>
                                {{ $jobTitle->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </form>
        </div>

        <hr class="w-[80%] mx-auto">

        <div class="flex flex-wrap justify-center gap-6 px-4 py-8 hepta">
            <!-- freelancers -->
            @foreach ($freelancers as $freelancer)
                    <div id="freelancer-card-inpage"
                        class="relative flex flex-col my-6 bg-white border rounded-lg border-gray-200 w-72">
                        <div class="relative h-56 m-2.5 overflow-hidden text-white">
                            <img src="{{ isset($freelancer->profile_image) && $freelancer->profile_image != ''
                ? asset('images/freelancers/profile/' . $freelancer->profile_image)
                : asset('front-end/socialMedia/brand boost sm (8).png') }}" alt="Talent Pic"
                                class="w-full h-full object-cover rounded-lg">
                        </div>
                        <div class="p-4 text-center">
                            <h6 class="mb-2 text-slate-800 text-xl font-semibold">
                                {{$freelancer->name}}
                            </h6>
                            <p class="text-slate-800 text-md font-semibold my-1">
                                {{$freelancer->jobTitle->name}}
                            </p>
                            <p id="freelancer-description" class="text-slate-600 text-sm leading-normal font-light mt-2">
                                {{$freelancer->bio}}
                            </p>
                        </div>
                        <div class="px-4 pb-4 pt-0 mt-auto flex">
                            <a href="{{route('freelancerName', ['id' => $freelancer->id])}}"
                                class="flex items-center justify-center cursor-pointer text-white font-bold relative text-[14px] w-full mx-auto h-[2em] text-center bg-gradient-to-r from-pr from-10% via-pi via-30% to-bu to-90% bg-[length:400%] rounded-[30px] z-10 hover:animate-gradient-xy hover:bg-[length:100%] before:content-[''] before:absolute before:-top-[5px] before:-bottom-[5px] before:-left-[5px] before:-right-[5px] before:bg-gradient-to-r before:from-pr before:from-10% before:via-pi before:via-30% before:to-bu before:bg-[length:400%] before:-z-10 before:rounded-[35px] before:hover:blur-xl before:transition-all before:ease-in-out before:duration-[1s] before:hover:bg-[length:10%] active:bg-bu focus:ring-bu"
                                type="button">
                                {{__('website.visit_profile')}}
                            </a>
                        </div>
                    </div>
            @endforeach
        </div>
    </div>
</section>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        const jobTitle = document.getElementById("job-title");
        const form = document.getElementById("filter-form");

        // Handle filter
        jobTitle.addEventListener("change", () => {
            const searchParams = new URLSearchParams(new FormData(form)).toString();
            const currentUrl = window.location.origin + window.location.pathname;
            window.location.href = `${currentUrl}?${searchParams}`;
        });
    });


</script>

@endsection