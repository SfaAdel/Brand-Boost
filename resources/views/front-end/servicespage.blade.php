@extends('layout')

@section('title', 'Our Services')

@section('content')
<section class="transparent-texture py-10">
    <h1 class="text-6xl font-bold text-center hepta uppercase pt-7">{{__('website.our_services')}}</h1>
    <div class="flex flex-wrap justify-center gap-6 px-4 py-8 hepta">
        @forelse($services as $service)
            <div id="service-card" class="relative flex flex-col my-6 bg-white border-black border-4 w-96">
                <div class="relative h-56 m-2.5 overflow-hidden text-white">
                    <img src="{{ asset('images/services/' . $service->icon) }}" alt="{{$service->name}}"
                        class="w-full h-full object-cover" />
                </div>
                <div class="p-4">
                    <h6 class="mb-2 text-slate-800 text-xl font-semibold">
                        {{$service->name}}
                    </h6>
                    <p id="service-description" class="text-slate-600 leading-normal font-light">
                        {{$service->description}}
                    </p>
                </div>
                <div class="px-4 pb-4 pt-0 mt-auto">
                    <a href="{{route('service-offers', $service->id)}}"
                        class="bg-purple mt-auto font-bold uppercase py-2 px-4 border-black border-2 text-center text-sm text-white transition-all hover:bg-sky-800 disabled:pointer-events-none disabled:opacity-50"
                        type="button">
                        {{__('website.see_offers')}}
                    </a>
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