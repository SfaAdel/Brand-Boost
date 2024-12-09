@extends('businessarea')

@section('title', 'New Project')

@section('business-area-content')
<div class="border-black border-2 bg-slate-50 h-full p-5">

    <div class="my-3">
        @include('front-end.includes.alerts')
    </div>

    <form action="{{ route('freelancer-projects.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="flex flex-col gap-5">
            <div class="flex flex-col gap-2">
                <label for="picture" class="text-xs font-semibold uppercase">{{__('website.project_picture')}}</label>
                <input type="file" name="image" id="picture" class="border-2 border-black px-3 py-2">
            </div>
            <div class="flex flex-col gap-2">
                <label for="video" class="text-xs font-semibold uppercase">{{__('website.project_video')}}</label>
                <input type="file" name="video" id="video" accept="video/*" class="border-2 border-black px-3 py-2">
                </uploader>
            </div>
            <div class="flex flex-col gap-2">
                <label for="service" class="text-xs font-semibold uppercase">{{__('website.service')}}</label>
                <select name="freelancer_service_id" id="service" class="border-2 border-black px-3 py-2">
                    <option value="" selected disabled>Select Service</option>

                    @foreach($freelancerServices as $freelancerService)
                        <option value="{{$freelancerService->id}}">{{$freelancerService->service->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="flex flex-col gap-2">
                <label for="ar_title"
                    class="text-xs font-semibold uppercase">__{{__('website.project_title_english')}}</label>
                <input type="text" name="en[title]" id="ar_title" class="border-2 border-black px-3 py-2">
            </div>
            <div class="flex flex-col gap-2">
                <label for="ar_title"
                    class="text-xs font-semibold uppercase">{{_('website.project_title_arabic')}}</label>
                <input type="text" name="ar[title]" id="ar_title" class="border-2 border-black px-3 py-2">
            </div>
            <div class="flex flex-col gap-2">
                <label for="en_description"
                    class="text-xs font-semibold uppercase">{{__('website.project_description_english')}}</label>
                <input type="text" name="en[description]" id="en_description" class="border-2 border-black px-3 py-2">
            </div>
            <div class="flex flex-col gap-2">
                <label for="ar_description"
                    class="text-xs font-semibold uppercase">{{__('website.project_description_arabic')}}</label>
                <input type="text" name="ar[description]" id="ar_description" class="border-2 border-black px-3 py-2">
            </div>
        </div>
        <div class="flex justify-center mt-5">
            <button type="submit"
                class="bg-green border-2 border-black py-3 px-5 text-sm font-semibold capitalize w-full hover:bg-emerald-300 transition">{{__('website.add_project')}}</button>
        </div>
    </form>
</div>
@endsection