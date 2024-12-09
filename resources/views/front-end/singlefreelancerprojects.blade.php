@extends('freelancer-profile-layout')

@section('title', 'Freelancer Projects')

@section('freelancer-profile-content')
<div class="container mx-auto py-8 px-4 bg-sky-100 border-2 border-black">
    <h2 class="text-3xl capitalize font-bold my-5">{{__('website_projects')}}</h2>
    <div class="my-5">
        <div class="flex flex-wrap justify-center gap-6 px-4 py-8 hepta">
            <div class="relative flex flex-col my-6 bg-white border-black border-2 w-96">
                <div class="relative h-56 m-2.5 overflow-hidden text-white">
                    <img src="{{ asset('front-end/SocialMedia/brand boost sm (1).jpg') }}" alt="card-image"
                        class="w-full h-full object-cover" />
                </div>
                <div class="p-4">
                    <h6 class="mb-2 text-slate-800 text-xl font-semibold">
                        Development
                    </h6>
                    <p id="service-offer-description" class="text-slate-600 leading-normal font-light text-sm">
                        Development involves creating robust and scalable software solutions tailored to your needs.
                        From
                        websites to mobile applications, we focus on building seamless, high-performance digital
                        experiences
                        using cutting-edge technologies.
                    </p>
                </div>
                <div class="px-4 pb-4 pt-0 mt-auto flex">
                    <a href="/services/offers/offer"
                        class="flex-1 bg-purple mt-auto font-bold uppercase py-2 px-4 border-black border-2 text-center text-sm text-white transition-all hover:bg-sky-800 disabled:pointer-events-none disabled:opacity-50"
                        type="button">
                        {{__('website.offer_details')}}
                    </a>
                </div>
            </div>

            <div class="relative flex flex-col my-6 bg-white border-black border-2 w-96">
                <div class="relative h-56 m-2.5 overflow-hidden text-white">
                    <img src="{{ asset('front-end/SocialMedia/brand boost sm (2).jpg') }}" alt="card-image"
                        class="w-full h-full object-cover" />
                </div>
                <div class="p-4">
                    <h6 class="mb-2 text-slate-800 text-xl font-semibold">
                        Designing
                    </h6>
                    <p id="service-offer-description" class="text-slate-600 leading-normal font-light text-sm">
                        Designing is about crafting visually stunning and user-friendly interfaces that captivate your
                        audience. We specialize in modern, responsive, and intuitive designs that align with your
                        brand's
                        identity and goals.
                    </p>
                </div>
                <div class="px-4 pb-4 pt-0 mt-auto flex">
                    <a href="/services/offers/offer"
                        class="flex-1 bg-purple mt-auto font-bold uppercase py-2 px-4 border-black border-2 text-center text-sm text-white transition-all hover:bg-sky-800 disabled:pointer-events-none disabled:opacity-50"
                        type="button">
                        Offer Details
                    </a>
                </div>
            </div>

            <div class="relative flex flex-col my-6 bg-white border-black border-2 w-96">
                <div class="relative h-56 m-2.5 overflow-hidden text-white">
                    <img src="{{ asset('front-end/SocialMedia/brand boost sm (2).jpg') }}" alt="card-image"
                        class="w-full h-full object-cover" />
                </div>
                <div class="p-4">
                    <h6 class="mb-2 text-slate-800 text-xl font-semibold">
                        Designing
                    </h6>
                    <p id="service-offer-description" class="text-slate-600 leading-normal font-light text-sm">
                        Designing is about crafting visually stunning and user-friendly interfaces that captivate your
                        audience. We specialize in modern, responsive, and intuitive designs that align with your
                        brand's
                        identity and goals.
                    </p>
                </div>
                <div class="px-4 pb-4 pt-0 mt-auto flex">
                    <a href="/services/offers/offer"
                        class="flex-1 bg-purple mt-auto font-bold uppercase py-2 px-4 border-black border-2 text-center text-sm text-white transition-all hover:bg-sky-800 disabled:pointer-events-none disabled:opacity-50"
                        type="button">
                        Offer Details
                    </a>
                </div>
            </div>

            <div class="relative flex flex-col my-6 bg-white border-black border-2 w-96">
                <div class="relative h-56 m-2.5 overflow-hidden text-white">
                    <img src="{{ asset('front-end/SocialMedia/brand boost sm (4).jpg') }}" alt="card-image"
                        class="w-full h-full object-cover" />
                </div>
                <div class="p-4">
                    <h6 class="mb-2 text-slate-800 text-xl font-semibold">
                        Content Creation
                    </h6>
                    <p id="service-offer-description" class="text-slate-600 leading-normal font-light text-sm">
                        Content creation focuses on delivering engaging, high-quality text, images, and videos to
                        effectively communicate your message. We help you connect with your audience through compelling
                        stories and creative campaigns.
                    </p>
                </div>
                <div class="px-4 pb-4 pt-0 mt-auto flex">
                    <a href="/services/offers/offer"
                        class="flex-1 bg-purple mt-auto font-bold uppercase py-2 px-4 border-black border-2 text-center text-sm text-white transition-all hover:bg-sky-800 disabled:pointer-events-none disabled:opacity-50"
                        type="button">
                        Offer Details
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection