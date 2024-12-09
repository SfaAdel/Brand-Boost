@extends('layout')

@section('title', 'Service Offers')

@section('content')
<section class="transparent-texture py-10">
    <h1 class="text-6xl font-bold text-center hepta uppercase pt-7">{{__('website.offers_of_service')}}
        {{ $service->name }}
    </h1>
    <p id="service-offer-description" class="text-slate-800 leading-normal text-xl hepta text-center">
        {{ $service->description }}
    </p>
    <div class="flex flex-wrap justify-center gap-6 px-4 py-8 hepta">
        @forelse($freelancerServices as $freelancerService)
            <div id="service-card" class="relative flex flex-col my-6 bg-white border-black border-4 w-96">

                <div class="p-4">
                    <div class="flex items-center gap-3 mb-5">
                        <img src="{{ asset('front-end/SocialMedia/brand boost sm (1).jpg') }}" alt="Offerer pic"
                            class="w-12 h-12 rounded-full">
                        <a href="/freelancers/freelancerName">
                            <p class="text-sm font-bold">{{ $freelancerService->freelancer->name }}</p>
                            <p class="text-xs">{{ $freelancerService->freelancer->job_title }}</p>
                        </a>
                    </div>
                    <h6 class="mb-2 text-slate-800 text-xl font-semibold">
                        ${{ $freelancerService->price_per_unit . ' - ' . $freelancerService->service->unit_of_price }}
                    </h6>

                </div>
                <div class="px-4 pb-4 pt-0 mt-auto flex">
                    <button data-modal-open="offer-modal-{{ $freelancerService->id }}"
                        class="flex-1 bg-purple mt-auto font-bold uppercase py-2 px-4 border-black border-2 text-center text-sm text-white transition-all hover:bg-sky-800 disabled:pointer-events-none disabled:opacity-50"
                        type="button">
                        {{__('website.order')}}
                    </button>
                </div>

            </div>
        @empty
            <div>
                <p class="py-3 px-5 text-center">{{__('website.no_services_found')}}</p>
            </div>
        @endforelse

        <div id="offer-modal-{{ $freelancerService->id }}"
            class="modal-overlay hidden fixed inset-0 z-50 bg-black/75 p-10 overflow-auto">
            <div class="bg-white w-3/4 m-auto p-10 border-black border-4 acworth">
                <h1 class="text-5xl font-bold">{{ __('website.choose_who_you_are') }}</h1>
                <div class="my-10 flex gap-5 flex-wrap lg:flex-nowrap">
                    <div class="flex flex-col gap-3">
                        <h2 class="text-2xl text-slate-800">{{__('website.talent')}} :
                            {{$freelancerService->freelancer->name}}
                        </h2>
                        <h2 class="text-2xl text-slate-800">{{__('website.price_per_unit')}} :
                            ${{$freelancerService->price_per_unit}}
                        </h2>
                        <h2 class="text-2xl text-slate-800">{{__('website.service')}} :
                            {{$freelancerService->service->name}}
                        </h2>
                    </div>
                </div>

                <div class="flex flex-col">
                    <form action="" class="mb-3 flex flex-col gap-3">
                        <label for="describtion"
                            clas="text-slate-800 capitalize">{{__('website.offer_description')}}</label>
                        <input type="text" name="describtion" class="outline-none border-2 border-black p-2 w-full">
                        <button href=""
                            class="font-bold bg-blue hover:bg-sky-500 transition p-2 mt-5 border-black border-2 text-black hepta text-center text-sm capitalize">Order</button>
                    </form>
                    <button data-modal-close="offer-modal-{{ $freelancerService->id }}"
                        class="font-bold hepta border-black border-2 p-2 bg-red-400 hover:bg-red-500 transition">{{ __('website.close') }}</button>
                </div>
            </div>
        </div>

    </div>
</section>
@endsection