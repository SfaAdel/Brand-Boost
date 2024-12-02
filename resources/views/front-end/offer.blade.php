@extends ('layout')

@section('title', 'Service Offer')

@section('content')
<section class="transparent-texture hepta py-10 px-5">
    <h1 class="text-5xl font-bold uppercase pt-5">a name of the offer of the field of the service of the website</h1>
    <div class="mt-5 flex gap-10 flex-col md:flex-row">
        <div class="flex-1">
            <img src="{{ asset('front-end/SocialMedia/brand boost sm (1).jpg') }}" alt="Offer Image"
                class="object-cover">
        </div>
        <div class="flex-1 flex flex-col justify-between">
            <div>
                <div class="flex items-center gap-3 mb-5">
                    <img src="{{ asset('front-end/SocialMedia/brand boost sm (1).jpg') }}" alt="Offerer pic"
                        class="w-12 h-12 rounded-full">
                    <a href="/freelancers/freelancerName">
                        <p class="text-sm font-bold">Service Offer Offerer</p>
                        <p class="text-xs">Offerer Specialization</p>
                    </a>
                </div>
                <p class="text-sm font-light text-slate-700 my-5">Service Field</p>
                <p id="offer-description" class="leading-normal text-md">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam magni tenetur illum earum, temporibus
                    ipsa
                    officia architecto minima nisi. Suscipit quae quod quidem adipisci accusantium saepe nesciunt,
                    mollitia
                    modi voluptatum harum aut itaque dolorem deleniti dicta voluptatem placeat corrupti dolorum eos
                    veniam.
                    Quam vero, facilis, veritatis et provident aut animi aperiam illum iure perferendis libero autem
                    atque,
                    cumque quis sapiente! Blanditiis reprehenderit maxime eum vel rerum quaerat quod quidem ducimus
                    illo.
                    Repellendus quidem veniam reprehenderit ipsa illum minus provident, et unde nemo necessitatibus
                    cumque
                    voluptatum! Modi delectus, temporibus, unde odio ipsum architecto ab dolores quibusdam odit commodi
                    expedita excepturi optio adipisci tempore eveniet doloremque error reiciendis nulla minus quam
                    dolore.
                    Dolorum minima ratione nostrum temporibus. Eveniet ex, porro dolores deserunt saepe quidem atque
                    earum
                    ipsam sunt nam eligendi blanditiis veritatis exercitationem tempore praesentium. Placeat quae
                    voluptatum
                    praesentium. Fugit inventore doloremque voluptatem non eligendi eius suscipit dolor voluptatum amet
                    officia quo, obcaecati porro odio? Veritatis harum atque ullam asperiores enim vero doloremque alias
                    quam inventore!
                </p>
                <p class="capitalize text-slate-700 text-sm my-5">i used :</p>
                <p class="flex gap-5 flex-wrap">
                    <span>React</span>
                    <span>Laravel</span>
                    <span>Tailwind</span>
                    <span>Anything else</span>
                    <span>React</span>
                    <span>Laravel</span>
                    <span>Tailwind</span>
                    <span>Anything else</span>
                    <span>React</span>
                    <span>Laravel</span>
                    <span>Tailwind</span>
                    <span>Anything else</span>
                    <span>React</span>
                    <span>Laravel</span>
                    <span>Tailwind</span>
                    <span>Anything else</span>
                </p>
            </div>
            <div class="flex flex-col gap-3">
                <a href="#"
                    class="border-black border-2 uppercase flex w-full justify-center bg-pink px-3 py-1.5 text-sm/6 font-semibold text-black hover:bg-fuchsia-700 hover:text-white transition">
                    order me</a>
                <a href="/freelancers/freelancerName"
                    class="border-black border-2 uppercase flex w-full justify-center bg-green px-3 py-1.5 text-sm/6 font-semibold text-black hover:bg-emerald-600 hover:text-white transition">
                    See my work</a>
            </div>
        </div>
    </div>
</section>
@endsection