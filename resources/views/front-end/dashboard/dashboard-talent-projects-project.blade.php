@extends('businessarea')

@section('title', 'Project Details')

@section('business-area-content')
<div class="bg-white border rounded-lg border-gray-200 h-full pb-5">
    <div class="mx-auto">
        <div class="flex flex-col gap-5 p-5">
            <h2 class="font-bold text-4xl capitalize">{{$freelancerProject->title}}</h2>
            <p class="text-slate-800">{{$freelancerProject->description}}</p>
        </div>
        <div>
            <div class="flex flex-col my-2">
                <img src="{{ asset('images/' . Auth::guard('freelancer')->user()->name . '_projects_images/' . $freelancerProject->image) }}"
                    class="object-cover">
            </div>
        </div>
        <div>
            <div class="flex flex-col my-2">
                <video controls>
                    <source
                        src="{{ asset('images/' . Auth::guard('freelancer')->user()->name . '_projects_videos/' . $freelancerProject->video) }}"
                        type="video/mp4">
                    {{__('website.video_not_supported')}}
                </video>
            </div>
        </div>
    </div>

</div>
@endsection