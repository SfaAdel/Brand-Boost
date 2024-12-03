@extends('layout')

@section('title', 'Freelancer Name')

@php
    $currentUrl = request()->url();
    $isProjectsActive = str_contains($currentUrl, 'projects');
@endphp

@section('content')
<section class="transparent-texture hepta">
    <div class="bg-gray-100 flex flex-col items-center py-16 px-[10vw] text-center">
        <img src="{{ asset('front-end/SocialMedia/brand boost sm (6).png') }}" alt="Offerer pic"
            class="w-36 h-36 rounded-full object-cover">
        <h1 class="text-4xl font-bold text-center capitalize">{{$freelancer->name}}</h1>
        <p class="text-2xl font-bold text-center capitalize">Specialization</p>
        <div class="flex gap-4 flex-wrap my-1">
            <div class="flex items-center">
                <img src="{{ asset('front-end/assets/position.svg') }}" class="w-5 h-5">
                <p class="text-sm text-slate-700 capitalize">country</p>
            </div>
        </div>
    </div>
    <div class="bg-gray-100">
        <div id="tabs" class="container bg-gray-100 mx-auto -mb-0.5">
            <a id="informations-tab" href="{{route('freelancerName', ['id' => $freelancer->id])}}"
                class="bg-red-100 border-2 border-black {{ $isProjectsActive ? 'border-b-2' : 'border-b-red-100' }} p-2 text-xl inline-block">Informations</a>
            <a id="projects-tab" href="{{route('freelancerNameProjects', ['id' => $freelancer->id])}}"
                class="bg-sky-100 border-2 border-black {{ $isProjectsActive ? 'border-b-sky-100' : 'border-b-2' }} p-2 text-xl inline-block">Projects</a>
        </div>
        @yield('freelancer-profile-content')
    </div>
</section>
@endsection