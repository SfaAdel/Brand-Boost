@extends('layout')

@section('title', 'Our Talents')

@section('content')
<section class="transparent-texture py-10">
    <h1 class="text-6xl font-bold text-center hepta uppercase pt-7">Our Talents</h1>
    <div class="flex flex-wrap justify-center gap-6 px-4 py-8 hepta">
        <!-- freelancers -->
        @foreach ($freelancers as $freelancer)

            <div id="freelancer-card" class="relative flex flex-col my-6 bg-white border-black border-4 w-72">
                <div class="relative h-56 m-2.5 overflow-hidden text-white">
                    <img src="{{ asset('front-end/SocialMedia/brand boost sm (7).png') }}" alt="card-image"
                        class="w-full h-full object-cover" />
                </div>
                <div class="p-4">
                    <h6 class="mb-2 text-slate-800 text-xl font-semibold">
                        {{$freelancer->name}}
                    </h6>
                    <hr class="border-1 border-slate-400" />
                    <p class="text-slate-800 text-sm font-semibold my-1">
                        {{$freelancer->jobTitle->name}}
                    </p>
                    <hr class="border-1 border-slate-400" />
                    <p id="freelancer-description" class="text-slate-600 leading-normal font-light mt-2">
                        {{$freelancer->bio}}
                    </p>
                </div>
                <div class="px-4 pb-4 pt-0 mt-auto flex">
                    <a href="{{route('freelancerName', ['id' => $freelancer->id])}}"
                        class="flex-1 bg-blue mt-auto font-bold uppercase py-2 px-4 border-black border-2 text-center text-sm text-black transition-all hover:bg-sky-800 disabled:pointer-events-none disabled:opacity-50"
                        type="button">
                        Visit Profile
                    </a>
                </div>
            </div>
        @endforeach
    </div>
</section>
@endsection