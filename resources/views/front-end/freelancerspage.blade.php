@extends('layout')

@section('title', 'Our Talents')

@section('content')
<section class="py-10 bg-pr">
    <div class="container mx-auto p-6">
        <h1 class="text-6xl font-bold text-center hepta uppercase pt-7 text-white">{{__('website.talents')}}</h1>

        <div id="filters" class="hepta mx-auto w-[80%] py-8">
            <form id="filter-form" action="{{ route('freelancers') }}" method="GET" class="flex flex-wrap gap-4">
                <div>
                    <select name="service" id="service" class="p-2 bg-gr rounded-md outline-none text-sm">
                        <option value="">{{__('website.all')}}</option>
                        @foreach ($services as $service)
                            <option value="{{ $service->id }}" {{ request('service') == $service->id ? 'selected' : '' }}>
                                {{ $service->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </form>
        </div>

        <hr class="w-[80%] mx-auto">

        <div class="flex flex-wrap justify-center gap-6 px-4 py-8 hepta">
            <!-- freelancers -->
            @if($noFreelancersMessage)
                <div class="text-center w-full">
                    <p>{{ $noFreelancersMessage }}</p>
                </div>
            @else
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
                            <p class="text-slate-600 text-sm leading-normal font-light mt-2 freelancer-description">
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
            @endif
        </div>
    </div>
</section>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        const filterForm = document.getElementById("filter-form");
        const service = document.getElementById("service");

        // Automatically submit form when filter changes
        service.addEventListener("change", () => filterForm.submit());
    });
</script>

@endsection