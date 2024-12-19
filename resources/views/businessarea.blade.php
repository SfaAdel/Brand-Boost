@extends('layout')

@section('title', 'Business Area')

@php
    $dashboardLink = preg_match('/business-area\/[0-9]+/', Request::path()) ? 'bg-gr rounded-lg' : '';
    $editProfileLink = Request::is('*talent-profile*') ? 'bg-gr rounded-lg' : '';
    $servicesLink = Request::is('*talent-services*') ? 'bg-gr rounded-lg' : '';
    $projectsLink = Request::is('*talent-projects*') ? 'bg-gr rounded-lg' : '';
    $ordersLink = Request::is('*talent-orders*') ? 'bg-gr rounded-lg' : '';

    $visionaryEditProfileLink = Request::is('*visionary-profile*') ? 'bg-gr rounded-lg' : '';
    $visionaryFavTalentsLink = Request::is('*visionary-fav-freelancers*') ? 'bg-gr rounded-lg' : '';
    $visionaryOrdersLink = Request::is('*visionary-orders*') ? 'bg-gr rounded-lg' : '';
@endphp


@section('content')
<div class="min-h-[100vh] grid grid-cols-[18rem,_1fr] bg-gray-200 hepta">
    <aside>
        <div class="fixed h-full bg-white border-r border-gray-200 w-72">
            @if (auth()->guard('freelancer')->check())
                <ul class="">
                    <li class="capitalize my-4 px-3">
                        <a href="{{ route('business-area', Auth::guard('freelancer')->user()->id) }}"
                            class="flex items-center gap-3 h-full w-full p-3 hover:bg-gr hover:rounded-lg transition {{$dashboardLink}}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-home">
                                <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                <polyline points="9 22 9 12 15 12 15 22"></polyline>
                            </svg>
                            <span class="font-bold">{{__('website.dashboard')}}</span>
                        </a>
                    </li>

                    <li class="capitalize my-4 px-3">
                        <a href="{{ route('dashboard-talent-profile', Auth::guard('freelancer')->user()->id) }}"
                            class="flex items-center gap-3 h-full w-full p-3 hover:bg-gr hover:rounded-lg transition {{$editProfileLink}}">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" />
                            </svg>
                            <span class="font-bold">{{__('website.profile')}}</span>
                        </a>
                    </li>

                    <li class="capitalize my-4 px-3">
                        <a href="{{ route('dashboard-talent-services', Auth::guard('freelancer')->user()->id) }}"
                            class="flex items-center gap-3 h-full w-full p-3 hover:bg-gr hover:rounded-lg transition {{$servicesLink}}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="icon icon-tabler icons-tabler-outline icon-tabler-heart-handshake">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                                <path
                                    d="M12 6l-3.293 3.293a1 1 0 0 0 0 1.414l.543 .543c.69 .69 1.81 .69 2.5 0l1 -1a3.182 3.182 0 0 1 4.5 0l2.25 2.25" />
                                <path d="M12.5 15.5l2 2" />
                                <path d="M15 13l2 2" />
                            </svg>
                            <span class="font-bold">{{__('website.services')}}</span>
                        </a>
                    </li>

                    <li class="capitalize my-4 px-3">
                        <a href=" {{ route('dashboard-talent-projects', Auth::guard('freelancer')->user()->id) }} "
                            class="flex items-center gap-3 h-full w-full p-3 hover:bg-gr hover:rounded-lg transition {{$projectsLink}}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-star">
                                <polygon
                                    points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                </polygon>
                            </svg>
                            <span class="font-bold">{{__('website.projects')}}</span>
                        </a>
                    </li>

                    <li class="capitalize my-4 px-3">
                        <a href="{{ route('dashboard-talent-orders', Auth::guard('freelancer')->user()->id) }}"
                            class="flex items-center gap-3 h-full w-full p-3 hover:bg-gr hover:rounded-lg transition {{$ordersLink}}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="icon icon-tabler icons-tabler-outline icon-tabler-shopping-cart">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M6 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                <path d="M17 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                <path d="M17 17h-11v-14h-2" />
                                <path d="M6 5l14 1l-1 7h-13" />
                            </svg>
                            <span class="font-bold">{{__('website.orders')}}</span>
                        </a>
                    </li>

                    <li class="capitalize my-4 px-3">
                        <a href="/"
                            class="flex items-center gap-3 h-full w-full p-3 hover:bg-gr hover:rounded-lg transition {{$visionaryOrdersLink}}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="icon icon-tabler icons-tabler-outline icon-tabler-arrow-narrow-left">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M5 12l14 0" />
                                <path d="M5 12l4 4" />
                                <path d="M5 12l4 -4" />
                            </svg>
                            <span class="font-bold">{{__('website.back_home')}}</span>
                        </a>
                    </li>
                </ul>
            @elseif(auth()->guard('business_owner')->check())
                <ul class="">
                    <li class="capitalize my-4 px-3">
                        <a href="{{ route('business-area-b', Auth::guard('business_owner')->user()->id) }}"
                            class="flex items-center gap-3 h-full w-full p-3 hover:bg-gr hover:rounded-lg transition {{$dashboardLink}}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-home">
                                <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                <polyline points="9 22 9 12 15 12 15 22"></polyline>
                            </svg>
                            <span class="font-bold">{{__('website.dashboard')}}</span>
                        </a>
                    </li>

                    <li class="capitalize my-4 px-3 ">
                        <a href="{{ route('dashboard-visionary-profile') }}"
                            class="flex items-center gap-3 h-full w-full p-3 hover:bg-gr hover:rounded-lg transition {{$visionaryEditProfileLink}}">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" />
                            </svg>
                            <span class="font-bold">{{__('website.profile')}}</span>
                        </a>
                    </li>

                    <li class="capitalize my-4 px-3 ">
                        <a href="{{ route('dashboard-visionary-fav-freelancers') }}"
                            class="flex items-center gap-3 h-full w-full p-3 hover:bg-gr hover:rounded-lg transition {{$visionaryFavTalentsLink}}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="icon icon-tabler icons-tabler-outline icon-tabler-heart-handshake">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                                <path
                                    d="M12 6l-3.293 3.293a1 1 0 0 0 0 1.414l.543 .543c.69 .69 1.81 .69 2.5 0l1 -1a3.182 3.182 0 0 1 4.5 0l2.25 2.25" />
                                <path d="M12.5 15.5l2 2" />
                                <path d="M15 13l2 2" />
                            </svg>
                            <span class="font-bold">{{__('website.fav_talents')}}</span>
                        </a>
                    </li>

                    <li class="capitalize my-4 px-3">
                        <a href="{{ route('dashboard-visionary-orders') }}"
                            class="flex items-center gap-3 h-full w-full p-3 hover:bg-gr hover:rounded-lg transition {{$visionaryOrdersLink}}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="icon icon-tabler icons-tabler-outline icon-tabler-shopping-cart">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M6 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                <path d="M17 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                <path d="M17 17h-11v-14h-2" />
                                <path d="M6 5l14 1l-1 7h-13" />
                            </svg>
                            <span class="font-bold">{{__('website.orders')}}</span>
                        </a>
                    </li>

                    <li class="capitalize my-4 px-3">
                        <a href="/"
                            class="flex items-center gap-3 h-full w-full p-3 hover:bg-gr hover:rounded-lg transition {{$visionaryOrdersLink}}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="icon icon-tabler icons-tabler-outline icon-tabler-arrow-narrow-left">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M5 12l14 0" />
                                <path d="M5 12l4 4" />
                                <path d="M5 12l4 -4" />
                            </svg>
                            <span class="font-bold">{{__('website.back_home')}}</span>
                        </a>
                    </li>
                </ul>
            @endif
        </div>
    </aside>

    <div class="p-5 bg-gray-100">
        @yield('business-area-content')
    </div>
</div>

<script>
    document.addEventListener("click", (event) => {
        const target = event.target;

        // Open modal
        if (target.dataset.modalOpen) {
            const modalId = target.dataset.modalOpen;
            const modal = document.getElementById(modalId);
            if (modal) {
                modal.classList.remove("hidden");
                document.body.classList.add("overflow-hidden");
            }
        }

        // Close modal
        if (target.dataset.modalClose) {
            const modalId = target.dataset.modalClose;
            const modal = document.getElementById(modalId);
            if (modal) {
                modal.classList.add("hidden");
                document.body.classList.remove("overflow-hidden");
            }
        }

        // Close modal by clicking outside the modal content
        if (
            target.classList.contains("modal-overlay") &&
            !target.contains(event.target.closest(".modal-content"))
        ) {
            target.classList.add("hidden");
            document.body.classList.remove("overflow-hidden");
        }
    });
</script>
@endsection