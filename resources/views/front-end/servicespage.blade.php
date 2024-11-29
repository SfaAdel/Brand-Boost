@extends('layout')

@section('title', 'Our Services')

@section('content')
<section class="transparent-texture py-10">
    <h1 class="text-6xl font-bold text-center hepta uppercase pt-7">Our Services</h1>
    <div class="flex flex-wrap justify-center gap-6 px-4 py-8 hepta">
        <div id="service-card" class="relative flex flex-col my-6 bg-white border-black border-4 w-96">
            <div class="relative h-56 m-2.5 overflow-hidden text-white">
                <img src="{{ asset('front-end/SocialMedia/brand boost sm (1).jpg') }}" alt="card-image"
                    class="w-full h-full object-cover" />
            </div>
            <div class="p-4">
                <h6 class="mb-2 text-slate-800 text-xl font-semibold">
                    Development
                </h6>
                <p id="service-description" class="text-slate-600 leading-normal font-light">
                    Development involves creating robust and scalable software solutions tailored to your needs. From
                    websites to mobile applications, we focus on building seamless, high-performance digital experiences
                    using cutting-edge technologies.
                </p>
            </div>
            <div class="px-4 pb-4 pt-0 mt-auto">
                <a href="/services/offers"
                    class="bg-purple mt-auto font-bold uppercase py-2 px-4 border-black border-2 text-center text-sm text-white transition-all hover:bg-sky-800 disabled:pointer-events-none disabled:opacity-50"
                    type="button">
                    See the talents' services
                </a>
            </div>
        </div>

        <div id="service-card" class="relative flex flex-col my-6 bg-white border-black border-4 w-96">
            <div class="relative h-56 m-2.5 overflow-hidden text-white">
                <img src="{{ asset('front-end/SocialMedia/brand boost sm (1).jpg') }}" alt="card-image"
                    class="w-full h-full object-cover" />
            </div>
            <div class="p-4">
                <h6 class="mb-2 text-slate-800 text-xl font-semibold">
                    Designing
                </h6>
                <p id="service-description" class="text-slate-600 leading-normal font-light">
                    Designing is about crafting visually stunning and user-friendly interfaces that captivate your
                    audience.
                    We specialize in modern, responsive, and intuitive designs that align with your brand's identity and
                    goals.
                </p>
            </div>
            <div class="px-4 pb-4 pt-0 mt-auto">
                <a href="/services/offers"
                    class="bg-purple mt-auto font-bold uppercase py-2 px-4 border-black border-2 text-center text-sm text-white transition-all hover:bg-sky-800 disabled:pointer-events-none disabled:opacity-50"
                    type="button">
                    See the talents' services
                </a>
            </div>
        </div>

        <div id="service-card" class="relative flex flex-col my-6 bg-white border-black border-4 w-96">
            <div class="relative h-56 m-2.5 overflow-hidden text-white">
                <img src="{{ asset('front-end/SocialMedia/brand boost sm (1).jpg') }}" alt="card-image"
                    class="w-full h-full object-cover" />
            </div>
            <div class="p-4">
                <h6 class="mb-2 text-slate-800 text-xl font-semibold">
                    Content Creation
                </h6>
                <p id="service-description" class="text-slate-600 leading-normal font-light">
                    Content creation focuses on delivering engaging, high-quality text, images, and videos to
                    effectively
                    communicate your message. We help you connect with your audience through compelling stories and
                    creative
                    campaigns.
                </p>
            </div>
            <div class="px-4 pb-4 pt-0 mt-auto">
                <a href="/services/offers"
                    class="bg-purple mt-auto font-bold uppercase py-2 px-4 border-black border-2 text-center text-sm text-white transition-all hover:bg-sky-800 disabled:pointer-events-none disabled:opacity-50"
                    type="button">
                    See the talents' services
                </a>
            </div>
        </div>
    </div>
</section>
@endsection