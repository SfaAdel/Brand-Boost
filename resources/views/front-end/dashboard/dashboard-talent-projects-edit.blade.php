@extends('businessarea')

@section('title', 'Edit Project')

@section('business-area-content')
<div class="bg-pr border rounded-lg border-gray-200 h-full p-5">

    <div class="my-3">
        @include('front-end.includes.alerts')
    </div>

    <form action="{{ route('freelancer-projects.update', $freelancerProject->id) }}" method="POST"
        enctype="multipart/form-data">
        @csrf
        @method('PATCH') <!-- Use PATCH for updates -->
        <div class="flex flex-col gap-5">
            <!-- Project Picture -->
            <div class="flex flex-col gap-2">
                <label for="picture" class="text-xs font-semibold uppercase">{{__('website.project_picture')}}</label>
                <input type="file" name="image" id="picture"
                    class="bg-white border rounded-lg border-gray-200 px-3 py-2">
                @if($freelancerProject->image)
                    <img src="{{ asset('images/' . Auth::guard('freelancer')->user()->name . '_projects_images/' . $freelancerProject->image) }}"
                        alt="Project Image" class="w-20 mt-2">
                @endif
            </div>

            <!-- Project Video -->
            <div class="flex flex-col gap-2">
                <label for="video" class="text-xs font-semibold uppercase">{{__('website.project_video')}}</label>
                <input type="file" name="video" id="video" accept="video/*"
                    class="bg-white border rounded-lg border-gray-200 px-3 py-2">
                @if($freelancerProject->video)
                    <video class="mt-2 w-40" controls>
                        <source
                            src="{{ asset('images/' . Auth::guard('freelancer')->user()->name . '_projects_videos/' . $freelancerProject->video) }}"
                            type="video/mp4">
                        {{__('website.video_not_supported')}}
                    </video>
                @endif
            </div>

            <!-- Service Selection -->
            <div class="flex flex-col gap-2">
                <label for="service" class="text-xs font-semibold uppercase">{{_('website.service')}}</label>
                <select name="freelancer_service_id" id="service"
                    class="bg-white border rounded-lg border-gray-200 px-3 py-2">
                    <option value="" disabled>Select Service</option>
                    @foreach($freelancerServices as $freelancerService)
                        <option value="{{ $freelancerService->id }}" {{ $freelancerService->id == $freelancerProject->freelancer_service_id ? 'selected' : '' }}>
                            {{ $freelancerService->service->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <!-- English Title -->
            <div class="flex flex-col my-2">
                <label for="en_title" class="text-gray-600 text-md rubikv leading-relaxed">
                    {{ __('website.title_en_label') }}
                </label>


                <input type="text" name="en[title]" id="en_title"
                    value="{{ $freelancerProject->translate('en')?->title }}"
                    class="p-2 bg-white border rounded-lg border-gray-200 outline-none">

                @error('en.title')
                    <small class="text-red-500">{{ $message }}</small>
                @enderror
            </div>

            <!-- Arabic Title -->
            <div class="flex flex-col my-2">
                <label for="ar_title" class="text-gray-600 text-md rubikv leading-relaxed">
                    {{ __('website.title_ar_label') }}
                </label>
                <input type="text" name="ar[title]" id="ar_title"
                    value="{{ $freelancerProject->translate('ar')?->title }}"
                    class="p-2 bg-white border rounded-lg border-gray-200 outline-none">

                @error('ar.title')
                    <small class="text-red-500">{{ $message }}</small>
                @enderror

            </div>

            <!-- English Description -->
            <div class="flex flex-col my-2">
                <label for="en_description" class="text-gray-600 text-md rubikv leading-relaxed">
                    {{ __('website.description_en_label') }}
                </label>
                <textarea rows="3" cols="50" name="en[description]" id="en_description"
                    class=" bg-white border rounded-lg border-gray-200 outline-none">
                    {{ old('en.description', $freelancerProject->translate('en')?->description) }}
                </textarea>
                @error('en.description')
                    <small class="text-red-500">{{ $message }}</small>
                @enderror
            </div>

            <!-- Arabic Description -->
            <div class="flex flex-col my-2">
                <label for="ar_description" class="text-gray-600 text-md rubikv leading-relaxed">
                    {{ __('website.description_ar_label') }}
                </label>
                <textarea rows="3" cols="50" name="ar[description]" id="ar_description"
                    class=" bg-white border rounded-lg border-gray-200 outline-none">
                    {{ old('ar.description', $freelancerProject->translate('ar')?->description) }}
                </textarea>
                @error('ar.description')
                    <small class="text-red-500">{{ $message }}</small>
                @enderror
            </div>
        </div>

        <!-- Submit Button -->
        <div class="flex justify-center mt-5">
            <button type="submit"
                class="bg-gr border rounded-lg border-gray-200 py-3 px-5 text-sm font-semibold capitalize w-full hover:bg-green-400 transition">
                Update Project
            </button>
        </div>
    </form>
</div>
@endsection