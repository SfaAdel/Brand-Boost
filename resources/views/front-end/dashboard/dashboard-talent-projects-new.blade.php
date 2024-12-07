@extends('businessarea')

@section('title', 'New Project')

@section('business-area-content')
<div class="border-black border-2 bg-slate-50 h-full p-5">

    <div class="my-3">
        @include('front-end.includes.alerts')
    </div>

    <form action="{{ route('freelancer-projects.store') }}" method="POST"enctype="multipart/form-data">
        @csrf
        <div class="flex flex-col gap-5">
            <div class="flex flex-col gap-2">
                <label for="picture" class="text-xs font-semibold uppercase">project picture</label>
                <input type="file" name="image" id="picture" class="border-2 border-black px-3 py-2">
            </div>
            <div class="flex flex-col gap-2">
                <label for="video" class="text-xs font-semibold uppercase">project Video </label>
                <input type="file" name="video" id="video" accept="video/*" class="border-2 border-black px-3 py-2">
            </uploader>
            </div>
            <div class="flex flex-col gap-2">
                <label for="service" class="text-xs font-semibold uppercase">service</label>
                <select name="freelancer_service_id" id="service" class="border-2 border-black px-3 py-2">
                    <option value="" selected disabled>Select Service</option>

                    @foreach($freelancerServices as $freelancerService)
                    <option value="{{$freelancerService->id}}">{{$freelancerService->service->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="flex flex-col gap-2">
                <label for="ar_title" class="text-xs font-semibold uppercase">project title in English</label>
                <input type="text" name="en[title]" id="ar_title" class="border-2 border-black px-3 py-2">
            </div>
            <div class="flex flex-col gap-2">
                <label for="ar_title" class="text-xs font-semibold uppercase">project title in Arabic</label>
                <input type="text" name="ar[title]" id="ar_title" class="border-2 border-black px-3 py-2">
            </div>
            <div class="flex flex-col gap-2">
                <label for="en_description" class="text-xs font-semibold uppercase">project description in English</label>
                <input type="text" name="en[description]" id="en_description" class="border-2 border-black px-3 py-2">
            </div>
            <div class="flex flex-col gap-2">
                <label for="ar_description" class="text-xs font-semibold uppercase">project description in Arabic</label>
                <input type="text" name="ar[description]" id="ar_description" class="border-2 border-black px-3 py-2">
            </div>
        </div>
        <div class="flex justify-center mt-5">
            <button type="submit"
                class="bg-green border-2 border-black py-3 px-5 text-sm font-semibold capitalize w-full hover:bg-emerald-300 transition">Add
                a new project</button>
        </div>
    </form>
</div>
@endsection


<!-- <td class="py-3 px-5 ">
    <div
        class="relative grid items-center uppercase whitespace-nowrap select-none bg-gradient-to-tr from-emerald-600 to-emerald-400 text-white py-0.5 px-2 text-[11px] font-medium w-fit">
        <span class="">active</span>
    </div>
</td> -->




  

  