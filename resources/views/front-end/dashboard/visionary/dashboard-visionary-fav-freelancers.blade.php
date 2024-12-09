@extends('businessarea')

@section('title', 'Favourite Freelancers')

@section('business-area-content')
<a href="/freelancers" class="bg-green border-2 border-black py-3 px-5 text-xs font-semibold capitalize">Explore
    talents</a>
<div class="border-black border-2 bg-slate-50 h-full">
    <div class="p-6 px-0 pt-0 pb-2">
        <table class="w-full min-w-[640px] table-auto">
            <thead>
                <tr>
                    <th class="border-b border-blue-50 py-3 px-5 text-left">
                        <p class="block antialiased text-[11px] font-bold uppercase">Talent
                        </p>
                    </th>
                    <th class="border-b border-blue-50 py-3 px-5 text-left">
                        <p class="block antialiased text-[11px] font-bold uppercase">
                            Job Title</p>
                    </th>
                    <th class="border-b border-blue-50 py-3 px-5 text-left">
                        <p class="block antialiased text-[11px] font-bold uppercase">actions</p>
                    </th>
                </tr>
            </thead>
            <tbody>
                @forelse ($favFreelancers as $favFreelancer)
                <tr>
                    <td class="py-3 px-5 ">
                        <div class="flex items-center gap-4">
                            <img src="{{ asset('images/freelancers/profile/' . $favFreelancer->freelancer->profile_image) }}" alt=""
                                class="inline-block relative object-cover object-center w-9 h-9 rounded-full">
                            <div>
                                <p class="block antialiased text-sm leading-normal font-semibold"
                                    id="dashboardProjectName">{{$favFreelancer->freelancer->name}}</p>
                            </div>
                        </div>
                    </td>
                    <td class="py-3 px-5 ">
                        <p class="block antialiased text-xs font-normal" id="dashboardProjectDescription">{{$favFreelancer->freelancer->jobTitle->name}}
                        </p>
                    </td>
                    <td class="py-3 px-5 ">
                        <a href="{{ route('freelancerName', $favFreelancer->freelancer->id) }}" 
                            class="inline mx-1 antialiased text-xs font-semibold capitalize">profile</a>
                        {{-- <a href="{{ route('fav_freelancer.destroy', $favFreelancer->id) }}"
                            class="inline mx-1 antialiased text-xs font-semibold capitalize text-red-500">remove</a> --}}
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="py-3 px-5 text-center">
                        <p class="block antialiased text-sm font-semibold">No Favourite Talents Yet.</p>
                    </td>
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