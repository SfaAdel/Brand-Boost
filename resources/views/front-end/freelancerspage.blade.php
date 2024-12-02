@extends('layout')

@section('title', 'Our Talents')

@section('content')
<section class="transparent-texture py-10">
    <h1 class="text-6xl font-bold text-center hepta uppercase pt-7">Our Talents</h1>
    <div class="flex flex-wrap justify-center gap-6 px-4 py-8 hepta">
        <div id="freelancer-card" class="relative flex flex-col my-6 bg-white border-black border-4 w-72">
            <div class="relative h-56 m-2.5 overflow-hidden text-white">
                <img src="{{ asset('front-end/SocialMedia/brand boost sm (7).png') }}" alt="card-image"
                    class="w-full h-full object-cover" />
            </div>
            <div class="p-4">
                <h6 class="mb-2 text-slate-800 text-xl font-semibold">
                    Momen Helmy
                </h6>
                <hr class="border-1 border-slate-400" />
                <p class="text-slate-800 text-sm font-semibold my-1">
                    Front-End Developer
                </p>
                <hr class="border-1 border-slate-400" />
                <p id="freelancer-description" class="text-slate-600 leading-normal font-light mt-2">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat sequi id praesentium tenetur
                    incidunt aliquam aperiam sed nesciunt aspernatur ducimus ab optio distinctio quod, quibusdam
                    mollitia quasi unde eum maxime ipsa expedita ratione. Libero, earum aspernatur ducimus error atque
                    dolorem quidem fugiat nostrum porro sit accusantium corrupti. In culpa laudantium delectus similique
                    atque excepturi qui, at recusandae quo quia, ut perspiciatis nam voluptas accusantium ipsum unde
                    porro repellat voluptate. Consectetur.
                </p>
            </div>
            <div class="px-4 pb-4 pt-0 mt-auto flex">
                <a href="/freelancers/freelancerName"
                    class="flex-1 bg-blue mt-auto font-bold uppercase py-2 px-4 border-black border-2 text-center text-sm text-black transition-all hover:bg-sky-800 disabled:pointer-events-none disabled:opacity-50"
                    type="button">
                    Visit Profile
                </a>
            </div>
        </div>

        <div id="freelancer-card" class="relative flex flex-col my-6 bg-white border-black border-4 w-72">
            <div class="relative h-56 m-2.5 overflow-hidden text-white">
                <img src="{{ asset('front-end/SocialMedia/brand boost sm (7).png') }}" alt="card-image"
                    class="w-full h-full object-cover" />
            </div>
            <div class="p-4">
                <h6 class="mb-2 text-slate-800 text-xl font-semibold">
                    Momen Helmy
                </h6>
                <hr class="border-1 border-slate-400" />
                <p class="text-slate-800 text-sm font-semibold my-1">
                    Front-End Developer
                </p>
                <hr class="border-1 border-slate-400" />
                <p id="freelancer-description" class="text-slate-600 leading-normal font-light mt-2">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat sequi id praesentium tenetur
                    incidunt aliquam aperiam sed nesciunt aspernatur ducimus ab optio distinctio quod, quibusdam
                    mollitia quasi unde eum maxime ipsa expedita ratione. Libero, earum aspernatur ducimus error atque
                    dolorem quidem fugiat nostrum porro sit accusantium corrupti. In culpa laudantium delectus similique
                    atque excepturi qui, at recusandae quo quia, ut perspiciatis nam voluptas accusantium ipsum unde
                    porro repellat voluptate. Consectetur.
                </p>
            </div>
            <div class="px-4 pb-4 pt-0 mt-auto flex">
                <a href="/freelancers/freelancerName"
                    class="flex-1 bg-blue mt-auto font-bold uppercase py-2 px-4 border-black border-2 text-center text-sm text-black transition-all hover:bg-sky-800 disabled:pointer-events-none disabled:opacity-50"
                    type="button">
                    Visit Profile
                </a>
            </div>
        </div>

        <div id="freelancer-card" class="relative flex flex-col my-6 bg-white border-black border-4 w-72">
            <div class="relative h-56 m-2.5 overflow-hidden text-white">
                <img src="{{ asset('front-end/SocialMedia/brand boost sm (7).png') }}" alt="card-image"
                    class="w-full h-full object-cover" />
            </div>
            <div class="p-4">
                <h6 class="mb-2 text-slate-800 text-xl font-semibold">
                    Momen Helmy
                </h6>
                <hr class="border-1 border-slate-400" />
                <p class="text-slate-800 text-sm font-semibold my-1">
                    Front-End Developer
                </p>
                <hr class="border-1 border-slate-400" />
                <p id="freelancer-description" class="text-slate-600 leading-normal font-light mt-2">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat sequi id praesentium tenetur
                    incidunt aliquam aperiam sed nesciunt aspernatur ducimus ab optio distinctio quod, quibusdam
                    mollitia quasi unde eum maxime ipsa expedita ratione. Libero, earum aspernatur ducimus error atque
                    dolorem quidem fugiat nostrum porro sit accusantium corrupti. In culpa laudantium delectus similique
                    atque excepturi qui, at recusandae quo quia, ut perspiciatis nam voluptas accusantium ipsum unde
                    porro repellat voluptate. Consectetur.
                </p>
            </div>
            <div class="px-4 pb-4 pt-0 mt-auto flex">
                <a href="/freelancers/freelancerName"
                    class="flex-1 bg-blue mt-auto font-bold uppercase py-2 px-4 border-black border-2 text-center text-sm text-black transition-all hover:bg-sky-800 disabled:pointer-events-none disabled:opacity-50"
                    type="button">
                    Visit Profile
                </a>
            </div>
        </div>

        <div id="freelancer-card" class="relative flex flex-col my-6 bg-white border-black border-4 w-72">
            <div class="relative h-56 m-2.5 overflow-hidden text-white">
                <img src="{{ asset('front-end/SocialMedia/brand boost sm (7).png') }}" alt="card-image"
                    class="w-full h-full object-cover" />
            </div>
            <div class="p-4">
                <h6 class="mb-2 text-slate-800 text-xl font-semibold">
                    Momen Helmy
                </h6>
                <hr class="border-1 border-slate-400" />
                <p class="text-slate-800 text-sm font-semibold my-1">
                    Front-End Developer
                </p>
                <hr class="border-1 border-slate-400" />
                <p id="freelancer-description" class="text-slate-600 leading-normal font-light mt-2">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat sequi id praesentium tenetur
                    incidunt aliquam aperiam sed nesciunt aspernatur ducimus ab optio distinctio quod, quibusdam
                    mollitia quasi unde eum maxime ipsa expedita ratione. Libero, earum aspernatur ducimus error atque
                    dolorem quidem fugiat nostrum porro sit accusantium corrupti. In culpa laudantium delectus similique
                    atque excepturi qui, at recusandae quo quia, ut perspiciatis nam voluptas accusantium ipsum unde
                    porro repellat voluptate. Consectetur.
                </p>
            </div>
            <div class="px-4 pb-4 pt-0 mt-auto flex">
                <a href="/freelancers/freelancerName"
                    class="flex-1 bg-blue mt-auto font-bold uppercase py-2 px-4 border-black border-2 text-center text-sm text-black transition-all hover:bg-sky-800 disabled:pointer-events-none disabled:opacity-50"
                    type="button">
                    Visit Profile
                </a>
            </div>
        </div>

        <div id="freelancer-card" class="relative flex flex-col my-6 bg-white border-black border-4 w-72">
            <div class="relative h-56 m-2.5 overflow-hidden text-white">
                <img src="{{ asset('front-end/SocialMedia/brand boost sm (7).png') }}" alt="card-image"
                    class="w-full h-full object-cover" />
            </div>
            <div class="p-4">
                <h6 class="mb-2 text-slate-800 text-xl font-semibold">
                    Momen Helmy
                </h6>
                <hr class="border-1 border-slate-400" />
                <p class="text-slate-800 text-sm font-semibold my-1">
                    Front-End Developer
                </p>
                <hr class="border-1 border-slate-400" />
                <p id="freelancer-description" class="text-slate-600 leading-normal font-light mt-2">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat sequi id praesentium tenetur
                    incidunt aliquam aperiam sed nesciunt aspernatur ducimus ab optio distinctio quod, quibusdam
                    mollitia quasi unde eum maxime ipsa expedita ratione. Libero, earum aspernatur ducimus error atque
                    dolorem quidem fugiat nostrum porro sit accusantium corrupti. In culpa laudantium delectus similique
                    atque excepturi qui, at recusandae quo quia, ut perspiciatis nam voluptas accusantium ipsum unde
                    porro repellat voluptate. Consectetur.
                </p>
            </div>
            <div class="px-4 pb-4 pt-0 mt-auto flex">
                <a href="/freelancers/freelancerName"
                    class="flex-1 bg-blue mt-auto font-bold uppercase py-2 px-4 border-black border-2 text-center text-sm text-black transition-all hover:bg-sky-800 disabled:pointer-events-none disabled:opacity-50"
                    type="button">
                    Visit Profile
                </a>
            </div>
        </div>
    </div>
</section>
@endsection