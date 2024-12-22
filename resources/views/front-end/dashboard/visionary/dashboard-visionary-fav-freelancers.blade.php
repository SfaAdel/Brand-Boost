@extends('businessarea')

@section('title', 'Favourite Freelancers')

@section('business-area-content')
<div class="mb-5">
    <a href="/freelancers"
        class="bg-gr border rounded-lg border-gray-500 py-3 px-5 text-xs capitalize">{{__('website.explore_the_talents')}}</a>
</div>
<div class="bg-pr text-white border rounded-lg border-gray-200 h-full">
    <div class="p-6 px-0 pt-0 pb-2">
        <div class="flex flex-wrap justify-center gap-6 px-4 py-8 hepta">
            @forelse ($favFreelancers as $favFreelancer)
                <div id="freelancer-card-inpage"
                    class="card relative flex flex-col my-6 bg-gr border rounded-lg border-gray-200 w-72">
                    <div class="relative h-56 m-2.5 overflow-hidden text-white">
                        <img src="{{ asset('images/freelancers/profile/' . $favFreelancer->freelancer->profile_image) }}"
                            alt="Talent Pic" class="w-full h-full object-cover rounded-lg">
                    </div>
                    <div class="p-4 text-center">
                        <h6 class="mb-2 text-slate-800 text-xl font-semibold">
                            {{$favFreelancer->freelancer->name}}
                        </h6>
                        <p class="text-slate-800 text-md font-semibold my-1">
                            {{$favFreelancer->freelancer->jobTitle->name}}
                        </p>
                        <p class="text-slate-600 text-sm leading-normal font-light mt-2 freelancer-description">
                            {{$favFreelancer->freelancer->bio}}
                        </p>
                    </div>
                    <div class="px-4 pb-4 pt-0 mt-auto flex">
                        <a href="{{ route('freelancerName', $favFreelancer->freelancer->id) }}"
                            class="flex items-center justify-center cursor-pointer text-white font-bold relative text-[14px] w-full mx-auto h-[2em] text-center bg-gradient-to-r from-pr from-10% via-pi via-30% to-bu to-90% bg-[length:400%] rounded-[30px] z-10 hover:animate-gradient-xy hover:bg-[length:100%] before:content-[''] before:absolute before:-top-[5px] before:-bottom-[5px] before:-left-[5px] before:-right-[5px] before:bg-gradient-to-r before:from-pr before:from-10% before:via-pi before:via-30% before:to-bu before:bg-[length:400%] before:-z-10 before:rounded-[35px] before:hover:blur-xl before:transition-all before:ease-in-out before:duration-[1s] before:hover:bg-[length:10%] active:bg-bu focus:ring-bu"
                            type="button">
                            {{__('website.visit_profile')}}
                        </a>
                    </div>
                </div>
            @empty
                <tr>
                    <td colspan="5" class="py-3 px-5 text-center">
                        <p class="block antialiased text-sm font-semibold">{{__('website.no_fav_freelancers')}}</p>
                    </td>
                </tr>
            @endforelse
        </div>
    </div>
</div>
@endsection