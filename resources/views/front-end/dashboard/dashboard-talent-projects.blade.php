@extends('businessarea')

@section('title', 'Projects')

@section('business-area-content')
<a href="/business-area/talent-projects/new-project"
    class="bg-green border-2 border-black py-3 px-5 text-xs font-semibold capitalize">Add a
    new project</a>
<div class="border-black border-2 bg-slate-50 h-full">
    <div class="p-6 px-0 pt-0 pb-2">
        <table class="w-full min-w-[640px] table-auto">
            <thead>
                <tr>
                    <th class="border-b border-blue-50 py-3 px-5 text-left">
                        <p class="block antialiased text-[11px] font-bold uppercase">project
                        </p>
                    </th>
                    <th class="border-b border-blue-50 py-3 px-5 text-left">
                        <p class="block antialiased text-[11px] font-bold uppercase">
                            description</p>
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
                                    id="dashboardProjectName">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta labore a, ipsam,
                                    debitis error quidem maxime consequatur quisquam sequi, aperiam vero ullam? Hic
                                    ipsum non, quae deserunt repellendus molestias voluptas?</p>
                            </div>
                        </div>
                    </td>
                    <td class="py-3 px-5 ">
                        <p class="block antialiased text-xs font-normal" id="dashboardProjectDescription">Lorem ipsum
                            dolor,
                            sit amet consectetur
                            adipisicing elit. Eaque ullam culpa ut suscipit deleniti ratione quos beatae quia quisquam!
                            Fugiat expedita quae fugit hic, molestiae nemo odio animi velit quisquam.</p>
                    </td>
                    <td class="py-3 px-5 ">
                        <a href="/business-area/talent-projects/project"
                            class="inline mx-1 antialiased text-xs font-semibold capitalize">open</a>
                        <button data-modal-open="delete-project-modal"
                            class="inline mx-1 antialiased text-xs font-semibold capitalize text-red-500">delete</button>
                    </td>
                </tr>
            </tbody>
        </table>

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
</div>
@endsection


<!-- <td class="py-3 px-5 ">
    <div
        class="relative grid items-center uppercase whitespace-nowrap select-none bg-gradient-to-tr from-emerald-600 to-emerald-400 text-white py-0.5 px-2 text-[11px] font-medium w-fit">
        <span class="">active</span>
    </div>
</td> -->