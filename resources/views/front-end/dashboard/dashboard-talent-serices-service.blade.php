@extends('businessarea')

@section('title', $freelancerService->service->name)

@section('business-area-content')
<div class="bg-white border rounded-lg border-gray-200 h-full pb-5">
    <!-- <div>
        <img src="{{ asset('images/services/'. $freelancerService->service->icon ) }}" class="object-cover">
    </div> -->
    <div class="flex flex-col gap-5 p-5">
        <h2 class="font-bold text-4xl"> {{$freelancerService->service->name}}</h2>
        <p class="text-slate-800">{{$freelancerService->service->description}}</p>
        <h4 class="font-bold">
            {{$freelancerService->price_per_unit . ' Egy - ' . $freelancerService->service->unit_of_price}}
        </h4>
    </div>


    {{-- <div id="edit-service-modal" class="modal-overlay hidden fixed inset-0 z-50 bg-black/75 p-10 overflow-auto">
        <div class="bg-white w-3/4 m-auto p-10 border-black border-4 acworth">
            <h1 class="text-2xl font-bold">Want to change the price per unit ?</h1>
            <div class="my-10 ">
                <div class="flex flex-col gap-2">
                    <label for="price" class="text-xs font-semibold uppercase">service price per unit</label>
                    <input type="number" name="price" id="price" class="border-2 border-black px-3 py-2">
                </div>
            </div>

            <div class="flex flex-col gap-3">
                <a href="#"
                    class="font-bold bg-blue hover:bg-sky-500 transition text-md p-2 mt-5 border-black border-2 text-black hepta text-center text-sm capitalize">Update</a>
                <button data-modal-close="edit-service-modal"
                    class="font-bold hepta border-black border-2 text-md p-2 bg-red-400 hover:bg-red-500 transition">{{
                    __('website.close') }}</button>
            </div>
        </div>
    </div>

    <div id="delete-service-modal" class="modal-overlay hidden fixed inset-0 z-50 bg-black/75 p-10 overflow-auto">
        <div class="bg-white w-3/4 m-auto p-10 border-black border-4 acworth">
            <h1 class="text-2xl font-bold">Sure you want to delete this service ?</h1>

            <div class="flex flex-col gap-3">
                <a href="#"
                    class="font-bold bg-red-400 hover:bg-red-500 transition text-md p-2 mt-5 border-black border-2 text-black hepta text-center text-sm capitalize">Delete</a>
                <button data-modal-close="delete-service-modal"
                    class="font-bold hepta border-black border-2 text-md p-2 bg-gray-200 hover:bg-gray-50 transition">{{
                    __('website.close') }}</button>
            </div>
        </div>
    </div> --}}
</div>
@endsection