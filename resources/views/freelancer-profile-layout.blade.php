@extends('layout')

@section('title', $freelancer->name)

@section('content')
<section class="bg-pr hepta pt-20">
    <div class="relative bg-pr h-[70vh]">
        <div class="w-full bg-no-repeat bg-center bg-cover"
            style="aspect-ratio: 950/300; background-image: url('{{ asset('front-end/SVGs/blob-haikei.svg') }}">
        </div>
        <div class="absolute top-0 left-0 w-full text-white flex flex-col items-center py-16 px-[10vw] text-center">
            @if (!empty($freelancer->profile_image))
                <img src="{{ asset('images/freelancers/profile/' . $freelancer->profile_image) }}" alt="Offerer pic"
                    class="w-36 h-36 rounded-full object-cover">
            @endif
            <h1 class="text-5xl font-bold text-center capitalize">{{$freelancer->name}}</h1>
            <p class="text-2xl text-slate-300 text-center capitalize">{{$freelancer->jobTitle->name}}</p>
            @if (auth()->guard('business_owner')->check())
                    <button id="follow-button-{{ $freelancer->id }}" data-following="{{ $isFollowing ? 'true' : 'false' }}"
                        data-freelancer-id="{{ $freelancer->id }}"
                        data-business-owner-id="{{ Auth::guard('business_owner')->id() }}"
                        class="bg-gray-200 hover:bg-gray-50 transition p-2 mt-3.5 border-black border text-black hepta text-center text-sm">
                        <span
                            id="follow-text-{{ $freelancer->id }}">{{ $isFollowing ? __('website.unfollow') :
                __('website.follow')
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        }}</span>
                        <span>
                            <img id="follow-icon-{{ $freelancer->id }}"
                                src="{{ asset($isFollowing ? 'front-end/SVGs/heart-fill.svg' : 'front-end/SVGs/heart.svg') }}"
                                class="inline">
                        </span>
                    </button>
            @endif
        </div>
    </div>

    <section class="py-20 px-[10vw] bg-gr flex">
        <div class=" flex-1">
            <h4 class="capitalize text-5xl font-bold">{{__('website.about_me')}}</h4>
            <p class="p-5 text-xl">{{$freelancer->bio}}</p>
        </div>
        <div class="flex-1">
            <h4 class="capitalize text-5xl font-bold">{{__('website.skills')}}</h4>
            <ul class="flex flex-wrap">
                @forelse ($freelancer->fields as $field)
                    <li class="m-2 p-2 border border-slate-200 rounded-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" fill="none"
                            stroke="#520a70" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="icon icon-tabler icons-tabler-outline icon-tabler-accessible-off mx-auto">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M10 16.5l2 -3l2 3m-2 -3v-1.5m2.627 -1.376l.373 -.124m-6 0l2.231 .744" />
                            <path d="M20.042 16.045a9 9 0 0 0 -12.087 -12.087m-2.318 1.677a9 9 0 1 0 12.725 12.73" />
                            <path d="M12 8a.5 .5 0 1 0 -.5 -.5" />
                            <path d="M3 3l18 18" />
                        </svg>
                        <span>{{$field->name}}</span>
                    </li>
                @empty
                    <li class="m-2 p-2 text-pr capitalize">{{$freelancer->name}}
                        {{__('website.has_no_skills')}}
                    </li>
                @endforelse
            </ul>
        </div>
    </section>
    <section class="py-20 px-[10vw] bg-gr">
        <h2 class="text-3xl capitalize font-bold my-5">{{__('website.projects')}}</h2>
        <div class="my-5 flex flex-wrap lg:flex-nowrap">
            @forelse($freelancerProjects as $freelancerProject)
                <div>
                    <div>
                        <video src="{{ asset('images/'.$freelancerProject->freelancerService->freelancer->name.'_projects_videos/'. $freelancerProject->video) }}" controls class="rounded-lg"></video>
                    </div>
                    <h2 class="my-4 text-5xl capitalize">{{$freelancerProject->title}}</h2>
                </div>
            @empty
                <div>
                    <p class="py-3 px-5 text-center">{{__('website.no_projects_found')}}</p>
                </div>
            @endforelse
        </div>
    </section>
    <section class="py-20 px-[10vw] bg-gr">
        <h2 class="text-3xl capitalize font-bold my-5">{{__('website.services')}}</h2>
        <div class="my-5 flex flex-wrap lg:flex-nowrap justify-center items-center">
            @forelse($freelancerServices as $freelancerService)
                <div class="card flex flex-wrap justify-center gap-6 px-4 py-8 hepta">
                    <div class="relative flex flex-col my-6 bg-pr border rounded-lg border-purple-200 w-96">
                        <div class="relative h-56 m-2.5 overflow-hidden">
                            <img src="{{ asset('images/services/' . $freelancerService->service->icon) }}" alt="card-image"
                                class="w-full h-full object-cover rounded-lg" />
                        </div>
                        <div class="p-4">
                            <h6 class="mb-2 text-white text-xl font-semibold">
                                {{$freelancerService->service->name}}
                            </h6>
                            <p class="text-white"> {{$freelancerService->price_per_unit}} EGP - {{$freelancerService->service->unit_of_price}} </p>
                        </div>
                        <div class="px-4 pb-4 pt-0 mt-auto flex">
                            <button
                                class="capitalize px-3 flex items-center justify-center cursor-pointer text-purple-800 hover:text-bl transition font-bold relative text-[16px] w-full mx-auto h-[2em] text-center bg-gradient-to-r from-gr from-10% via-pi via-30% to-bu to-90% bg-[length:400%] rounded-[30px] z-10 hover:animate-gradient-xy hover:bg-[length:100%] before:content-[''] before:absolute before:-top-[5px] before:-bottom-[5px] before:-left-[5px] before:-right-[5px] before:bg-gradient-to-r before:from-gr before:from-10% before:via-pi before:via-30% before:to-bu before:bg-[length:400%] before:-z-10 before:rounded-[35px] before:hover:blur-xl before:transition-all before:ease-in-out before:duration-[1s] before:hover:bg-[length:10%] active:bg-bu focus:ring-bu"
                                type="button">
                                {{__('website.order_now')}}
                                </butt>
                        </div>
                    </div>
                </div>
            @empty
                <div>
                    <p class="py-3 px-5 text-center">{{__('website.no_services_found')}}</p>
                </div>
            @endforelse
        </div>
    </section>
</section>

<script>
    document.querySelectorAll('[id^="follow-button-"]').forEach(button => {
        button.addEventListener('click', function () {
            const freelancerId = this.getAttribute('data-freelancer-id');
            const businessOwnerId = this.getAttribute('data-business-owner-id');
            const isFollowing = this.getAttribute('data-following') === 'true';

            fetch("{{ route('favorite.toggle') }}", {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({
                    freelancer_id: freelancerId,
                    business_owner_id: businessOwnerId,
                })
            })
                .then(response => response.json())
                .then(data => {
                    const followText = document.getElementById(`follow-text-${freelancerId}`);
                    const followIcon = document.getElementById(`follow-icon-${freelancerId}`);

                    if (data.following) {
                        this.setAttribute('data-following', 'true');
                        followText.textContent = 'Unfollow';
                        followIcon.src = "{{ asset('front-end/SVGs/heart-fill.svg') }}";
                        this.classList.replace('bg-gray-200', 'bg-red-200');
                    } else {
                        this.setAttribute('data-following', 'false');
                        followText.textContent = 'Follow';
                        followIcon.src = "{{ asset('front-end/SVGs/heart.svg') }}";
                        this.classList.replace('bg-red-200', 'bg-gray-200');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                });
        });
    });
</script>

@endsection