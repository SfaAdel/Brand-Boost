@extends('businessarea')

@section('title', 'Project Name')

@section('business-area-content')
<div class="border-black border-2 bg-slate-50 h-full pb-5">
    <div>
        <img src="{{ asset('front-end/SocialMedia/brand boost sm (4).png') }}" class="object-cover">
    </div>
    <div class="flex flex-col gap-5 p-5">
        <h2 class="font-bold text-4xl">Project Name</h2>
        <p class="text-slate-800">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis neque, omnis animi
            nisi eum a quibusdam atque odio distinctio deleniti illum accusamus necessitatibus rerum minus enim
            nesciunt! Adipisci, assumenda quae.</p>
        <button data-modal-open="delete-project-modal"
            class="bg-red-400 hover:bg-red-600 text-white border-2 border-black py-3 px-5 text-xs font-semibold capitalize">Delete</button>
    </div>


    <div id="delete-project-modal" class="modal-overlay hidden fixed inset-0 z-50 bg-black/75 p-10 overflow-auto">
        <div class="bg-white w-3/4 m-auto p-10 border-black border-4 acworth">
            <h1 class="text-2xl font-bold">Sure you want to delete this project ?</h1>

            <div class="flex flex-col gap-3">
                <a href="#"
                    class="font-bold bg-red-400 hover:bg-red-500 transition text-md p-2 mt-5 border-black border-2 text-black hepta text-center text-sm capitalize">Delete</a>
                <button data-modal-close="delete-service-modal"
                    class="font-bold hepta border-black border-2 text-md p-2 bg-gray-200 hover:bg-gray-50 transition">{{ __('website.close') }}</button>
            </div>
        </div>
    </div>
</div>
@endsection