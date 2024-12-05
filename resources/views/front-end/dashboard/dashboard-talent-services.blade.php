@extends('businessarea')

@section('title', 'Services')

@section('business-area-content')
<a href="/business-area/talent-services/new-service"
    class="bg-green border-2 border-black py-3 px-5 text-xs font-semibold capitalize">Add a
    new service</a>
<div class="border-black border-2 bg-slate-50 h-full">
    <div class="p-6 px-0 pt-0 pb-2">
        <table class="w-full min-w-[640px] table-auto">
            <thead>
                <tr>
                    <th class="border-b border-blue-50 py-3 px-5 text-left">
                        <p class="block antialiased text-[11px] font-bold uppercase">service
                        </p>
                    </th>
                    <th class="border-b border-blue-50 py-3 px-5 text-left">
                        <p class="block antialiased text-[11px] font-bold uppercase">price per unit
                        </p>
                    </th>
                    <th class="border-b border-blue-50 py-3 px-5 text-left">
                        <p class="block antialiased text-[11px] font-bold uppercase">actions</p>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="py-3 px-5 ">
                        <div class="flex items-center gap-4">
                            <img src="{{ asset('front-end/SocialMedia/brand boost sm (1).jpg') }}" alt=""
                                class="inline-block relative object-cover object-center w-9 h-9 rounded-full">
                            <div>
                                <p class="block antialiased text-sm leading-normal font-semibold"
                                    id="dashboardServiceName">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ut error accusantium
                                    recusandae ducimus veritatis corrupti, earum iure qui, beatae veniam aperiam ad
                                    expedita et sint ullam dignissimos animi voluptates ex.</p>
                            </div>
                        </div>
                    </td>
                    <td class="py-3 px-5 ">
                        <p class="block antialiased text-xs font-semibold">$20</p>
                    </td>
                    <td class="py-3 px-5 ">
                        <a href="/business-area/talent-services/service"
                            class="inline mx-1 antialiased text-xs font-semibold capitalize">Open</a>
                        <span>|</span>
                        <button data-modal-open="edit-service-modal"
                            class="inline mx-1 antialiased text-xs font-semibold capitalize">Edit</button>
                        <span>|</span>
                        <button data-modal-open="delete-service-modal"
                            class="inline mx-1 antialiased text-xs font-semibold capitalize text-red-500">Delete</button>
                    </td>
                </tr>
            </tbody>
        </table>

        <div id="edit-service-modal" class="modal-overlay hidden fixed inset-0 z-50 bg-black/75 p-10 overflow-auto">
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
                        class="font-bold hepta border-black border-2 text-md p-2 bg-red-400 hover:bg-red-500 transition">{{ __('website.close') }}</button>
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
                        class="font-bold hepta border-black border-2 text-md p-2 bg-gray-200 hover:bg-gray-50 transition">{{ __('website.close') }}</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection