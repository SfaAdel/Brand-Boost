@extends('businessarea')

@section('title', $freelancerProject->title)

@section('business-area-content')
<div class="bg-pr border rounded-lg border-gray-200 h-full pb-5">
    <div class="mx-auto">
        <div class="flex flex-col gap-5 p-5">
            <h2 class="font-bold text-4xl capitalize text-gr">{{$freelancerProject->title}}</h2>
            <p class="text-slate-100">{{$freelancerProject->description}}</p>
        </div>
        <div class="px-48">
            @if (!@empty($freelancerProject->image))
                <div class="flex flex-col my-2">
                    <img src="{{ asset('images/' . Auth::guard('freelancer')->user()->name . '_projects_images/' . $freelancerProject->image) }}"
                        class="object-cover">
                </div>
            @endif
        </div>
        <div class="px-48">
            <div>
                <div class="flex flex-col my-2 w-full max-w-screen-lg mx-auto">
                    <video controls class="w-full h-auto object-cover rounded-lg shadow-md">
                        <source
                            src="{{ asset('images/' . Auth::guard('freelancer')->user()->name . '_projects_videos/' . $freelancerProject->video) }}"
                            type="video/mp4">
                        {{ __('website.video_not_supported') }}
                    </video>
                </div>
            </div>

        </div>
    </div>

</div>
@endsection