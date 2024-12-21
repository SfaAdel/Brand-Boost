@extends('businessarea')

@section('title', 'Projects')

@section('business-area-content')

<div class="my-3">
    @include('front-end.includes.alerts')
</div>

<div class="mb-5">
    <a href="{{ route('freelancer-projects.create', Auth::guard('freelancer')->user()->id) }}"
        class="bg-gr border rounded-lg border-gray-500 py-3 px-5 text-xs font-semibold capitalize">{{__('website.add_project')}}</a>
</div>
<div class="bg-pr text-white border rounded-lg border-gray-200 h-full">
    <div class="p-6 px-0 pt-0 pb-2">
        <table class="w-full min-w-[640px] table-auto">
            <thead>
                <tr>
                    <th class="border-b border-blue-50 py-3 px-5 text-left">
                        <p class="block antialiased text-[11px] font-bold uppercase">{{__('website.project_name')}}
                        </p>
                    </th>
                    <th class="border-b border-blue-50 py-3 px-5 text-left">
                        <p class="block antialiased text-[11px] font-bold uppercase">
                            {{__('website.description')}}
                        </p>
                    </th>
                    <th class="border-b border-blue-50 py-3 px-5 text-left">
                        <p class="block antialiased text-[11px] font-bold uppercase">{{__('website.actions')}}</p>
                    </th>
                </tr>
            </thead>
            <tbody>
                @forelse($freelancerProjects as $freelancerProject)
                    <tr>
                        <td class="py-3 px-5 ">
                            <div class="flex items-center gap-4">
                                <img src="{{ asset('images/' . Auth::guard('freelancer')->user()->name . '_projects_images/' . $freelancerProject->image) }}"
                                    alt="" class="inline-block relative object-cover object-center w-9 h-9 rounded-full">
                                <div>
                                    <p class="block antialiased text-sm leading-normal font-semibold"
                                        id="dashboardProjectName"> {{ $freelancerProject->title }} </p>
                                </div>
                            </div>
                        </td>
                        <td class="py-3 px-5 ">
                            <p class="block antialiased text-xs font-normal" id="dashboardProjectDescription">
                                {{ $freelancerProject->description }}
                            </p>
                        </td>
                        <td class="py-3 px-5 ">
                            <a href="{{ route('freelancer-projects.show', $freelancerProject->id) }}"
                                class="inline mx-1 antialiased text-xs font-semibold capitalize">{{__('website.open')}}</a>
                            <span>|</span>
                            <a href="{{ route('freelancer-projects.edit', $freelancerProject->id) }}"
                                class="inline mx-1 antialiased text-xs font-semibold capitalize">{{__('website.edit')}}</a>
                            <span>|</span>
                            <button data-modal-open="delete-project-modal-{{ $freelancerProject->id }}"
                                class="inline mx-1 antialiased text-xs font-semibold capitalize text-red-500">{{__('website.delete')}}</button>
                        </td>
                    </tr>

                    <div id="delete-project-modal-{{ $freelancerProject->id }}"
                        class="modal-overlay hidden fixed inset-0 z-50 bg-black/75 p-10 overflow-auto">
                        <div class="bg-white w-3/4 m-auto p-10 border-black border-4 acworth">
                            <h1 class="text-2xl font-bold">Sure you want to delete this project ?</h1>
                            <form action="{{ route('freelancer-projects.destroy', $freelancerProject->id) }}" method="POST"
                                class="mt-5">
                                @csrf
                                @method('DELETE')
                                <div class="flex flex-col gap-2">
                                    <p class="text-sm text-gray-700">{{__('website.delete_warning')}}</p>
                                </div>
                                <div class="flex gap-3 mt-5">
                                    <button type="submit"
                                        class="bg-red-400 hover:bg-red-500 transition text-md p-2 border-black border-2 text-white hepta capitalize">
                                        {{__('website.delete')}}
                                    </button>
                                    <button type="button"
                                        data-modal-close="delete-service-modal-{{ $freelancerProject->id }}"
                                        class="bg-gray-200 hover:bg-gray-50 transition text-md p-2 border-black border-2 text-black hepta capitalize">
                                        {{__('website.close')}}
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                @empty
                    <tr>
                        <td colspan="3" class="py-3 px-5 text-center">{{__('website.no_projects')}}</td>
                    </tr>
                @endforelse
            </tbody>
        </table>


    </div>
</div>


@endsection


<!-- <td class="py-3 px-5 ">
    <div
        class="relative grid items-center uppercase whitespace-nowrap select-none bg-gradient-to-tr from-emerald-600 to-emerald-400 text-white py-0.5 px-2 text-[11px] font-medium w-fit">
        <span class="">active</span>
    </div>
</td> -->