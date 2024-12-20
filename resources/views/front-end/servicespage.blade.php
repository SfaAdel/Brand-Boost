@extends('layout')

@section('title', 'Our Services')

@section('content')
<section class="bg-gr py-24">
    <h1 class="text-6xl font-bold text-center hepta uppercase pt-7">{{__('website.our_services')}}</h1>
    <div id="services-page" class="flex flex-wrap justify-center gap-6 px-4 py-8 hepta">
        @forelse($services as $service)
            <div id="service-card-inpage"
                class="card flex flex-col bg-pr shadow-sm border border-purple-900 rounded-lg my-6 w-96">
                <div class="overflow-hidden rounded-md h-80 flex justify-center items-center">
                    <img class="w-full h-full object-cover"
                        src="{{$service->icon ? asset('images/services/' . $service->icon) : asset('front-end/SocialMedia/brand boost sm (8).png') }}"
                        alt="{{$service->name}}" />
                </div>
                <div class="p-6">
                    <h4 class="mb-1 text-2xl font-semibold text-slate-50 capitalize">
                        {{$service->name}}
                    </h4>
                    <p id="service-description" class="text-base text-slate-200 mt-4 font-light ">
                        {{$service->description}}
                    </p>
                </div>
                <div class="flex justify-center mt-auto p-6 pt-2 gap-7">
                    <a href="{{route('service-offers', $service->id)}}"
                        class="flex items-center justify-center cursor-pointer text-bl font-bold relative text-[14px] w-full mx-auto h-[2em] text-center bg-gradient-to-r from-bu from-10% via-pi via-30% to-gr to-90% bg-[length:400%] rounded-[30px] z-10 hover:animate-gradient-xy hover:bg-[length:100%] before:content-[''] before:absolute before:-top-[5px] before:-bottom-[5px] before:-left-[5px] before:-right-[5px] before:bg-gradient-to-r before:from-bu before:from-10% before:via-pi before:via-30% before:to-gr before:bg-[length:400%] before:-z-10 before:rounded-[35px] before:hover:blur-xl before:transition-all before:ease-in-out before:duration-[1s] before:hover:bg-[length:10%] active:bg-bu focus:ring-bu">{{__('website.see_offers')}}</a>
                </div>
            </div>
        @empty
            <div>
                <p class="py-3 px-5 text-center">{{__('website.no_services_found')}}</p>
            </div>
        @endforelse

    </div>
</section>
@endsection