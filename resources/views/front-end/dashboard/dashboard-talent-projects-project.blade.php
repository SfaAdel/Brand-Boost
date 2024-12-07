@extends('businessarea')

@section('title', 'Project Name')

@section('business-area-content')
<div class="border-black border-2 bg-slate-50 h-full pb-5">
    <div class="flex gap-5">
        <div class="flex-1" >
            <div class="flex flex-col my-2">
            <img src="{{ asset('images/'. Auth::guard('freelancer')->user()->name.'_projects_images/'.$freelancerProject->image) }}" class="object-cover"width="320" height="240">
            </div>
        </div>
        <div class="flex-1" >
            <div class="flex flex-col my-2">
                <video width="320" height="240" controls>
                <source src="{{ asset('images/'. Auth::guard('freelancer')->user()->name.'_projects_videos/'.$freelancerProject->video) }}"
                    type="video/mp4">
                Your browser does not support the video tag.
                </video>
            </div>
        </div>
    </div>
<div class="flex flex-col gap-5 p-5">
        <h2 class="font-bold text-4xl">{{$freelancerProject->title}}</h2>
        <p class="text-slate-800">{{$freelancerProject->description}}</p>
    </div>

</div>
@endsection