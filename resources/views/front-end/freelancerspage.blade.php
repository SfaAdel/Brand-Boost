@extends('layout')

@section('title', 'Our Talents')

@section('content')
<section class="transparent-texture py-10">
    <h1 class="text-6xl font-bold text-center hepta uppercase pt-7">{{__('website.talents')}}</h1>

    <div>
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
    </div>

    <div class="flex flex-wrap justify-center gap-6 px-4 py-8 hepta">
        <!-- freelancers -->
        @foreach ($freelancers as $freelancer)

            <div id="freelancer-card" class="relative flex flex-col my-6 bg-white border-black border-4 w-72">
                <div class="relative h-56 m-2.5 overflow-hidden text-white">
                    <img src="{{ asset('front-end/SocialMedia/brand boost sm (7).png') }}" alt="card-image"
                        class="w-full h-full object-cover" />
                </div>
                <div class="p-4">
                    <h6 class="mb-2 text-slate-800 text-xl font-semibold">
                        {{$freelancer->name}}
                    </h6>
                    <hr class="border-1 border-slate-400" />
                    <p class="text-slate-800 text-sm font-semibold my-1">
                        {{$freelancer->jobTitle->name}}
                    </p>
                    <hr class="border-1 border-slate-400" />
                    <p id="freelancer-description" class="text-slate-600 leading-normal font-light mt-2">
                        {{$freelancer->bio}}
                    </p>
                </div>
                <div class="px-4 pb-4 pt-0 mt-auto flex">
                    <a href="{{route('freelancerName', ['id' => $freelancer->id])}}"
                        class="flex-1 bg-blue mt-auto font-bold uppercase py-2 px-4 border-black border-2 text-center text-sm text-black transition-all hover:bg-sky-800 disabled:pointer-events-none disabled:opacity-50"
                        type="button">
                        {{__('website.visit_profile')}}
                    </a>
                </div>
            </div>
        @endforeach
    </div>
</section>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        const jobTitle = document.getElementById("job-title");
        const checkboxes = document.querySelectorAll("input[name='fields[]']");
        const filterBtn = document.getElementById("filter-btn");
        const form = document.getElementById("filter-form");

        function updateButtonState() {
            const isJobTitleSelected = jobTitle.value !== "";
            const isAnyCheckboxChecked = Array.from(checkboxes).some((checkbox) => checkbox.checked);

            filterBtn.disabled = !(isJobTitleSelected || isAnyCheckboxChecked);
            filterBtn.classList.toggle("bg-green", !filterBtn.disabled);
            filterBtn.classList.toggle("bg-gray-500", filterBtn.disabled);
            filterBtn.classList.toggle("cursor-not-allowed", filterBtn.disabled);
        }

        // Listen for changes in dropdown and checkboxes
        jobTitle.addEventListener("change", updateButtonState);
        checkboxes.forEach((checkbox) => checkbox.addEventListener("change", updateButtonState));

        // Handle filter button click
        filterBtn.addEventListener("click", () => {
            const searchParams = new URLSearchParams(new FormData(form)).toString();
            const currentUrl = window.location.origin + window.location.pathname;
            window.location.href = `${currentUrl}?${searchParams}`;
        });
    });


</script>

@endsection