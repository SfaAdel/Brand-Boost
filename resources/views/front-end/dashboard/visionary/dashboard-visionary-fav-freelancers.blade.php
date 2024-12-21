@extends('businessarea')

@section('title', 'Favourite Freelancers')

@section('business-area-content')
<div class="mb-5">
    <a href="/freelancers"
        class="bg-gr border rounded-lg border-gray-500 py-3 px-5 text-xs capitalize">{{__('website.explore_the_talents')}}</a>
</div>
<div class="bg-pr text-white border rounded-lg border-gray-200 h-full">
    <div class="p-6 px-0 pt-0 pb-2">
        <table class="w-full min-w-[640px] table-auto">
            <thead>
                <tr>
                    <th class="border-b border-blue-50 py-3 px-5 text-left">
                        <p class="block antialiased text-[11px] font-bold uppercase">{{__('website.talent')}}
                        </p>
                    </th>
                    <th class="border-b border-blue-50 py-3 px-5 text-left">
                        <p class="block antialiased text-[11px] font-bold uppercase">
                            {{__('website.job_title_label')}}
                        </p>
                    </th>
                    <th class="border-b border-blue-50 py-3 px-5 text-left">
                        <p class="block antialiased text-[11px] font-bold uppercase">{{__('website.actions')}}</p>
                    </th>
                </tr>
            </thead>
            <tbody>
                @forelse ($favFreelancers as $favFreelancer)
                    <tr>
                        <td class="py-3 px-5 ">
                            <div class="flex items-center gap-4">
                                <img src="{{ asset('images/freelancers/profile/' . $favFreelancer->freelancer->profile_image) }}"
                                    alt="" class="inline-block relative object-cover object-center w-9 h-9 rounded-full">
                                <div>
                                    <p class="block antialiased text-sm leading-normal font-semibold"
                                        id="dashboardProjectName">{{$favFreelancer->freelancer->name}}</p>
                                </div>
                            </div>
                        </td>
                        <td class="py-3 px-5 ">
                            <p class="block antialiased text-xs font-normal" id="dashboardProjectDescription">
                                {{$favFreelancer->freelancer->jobTitle->name}}
                            </p>
                        </td>
                        <td class="py-3 px-5 ">
                            <a href="{{ route('freelancerName', $favFreelancer->freelancer->id) }}"
                                class="inline mx-1 antialiased text-xs font-semibold capitalize">{{__('website.profile')}}</a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="py-3 px-5 text-center">
                            <p class="block antialiased text-sm font-semibold">{{__('website.no_fav_freelancers')}}</p>
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