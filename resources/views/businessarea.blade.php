@extends('layout')

@section('title', 'Business Area')

@php
    $dashboardLink = Request::is('en/business-area') ? 'bg-green border-y-2 border-black' : '';
    $editProfileLink = Request::is('en/business-area/talent-profile') ? 'bg-green border-y-2 border-black' : '';
    $servicesLink = Request::is('en/business-area/talent-services') ? 'bg-green border-y-2 border-black' : '';
    $projectsLink = Request::is('en/business-area/talent-projects') ? 'bg-green border-y-2 border-black' : '';
    $ordersLink = Request::is('en/business-area/talent-orders') ? 'bg-green border-y-2 border-black' : '';

    $visionaryEditProfileLink = Request::is('en/business-area/visionary-profile') ? 'bg-green border-y-2 border-black' : '';
    $visionaryFavTalentsLink = Request::is('en/business-area/visionary-fav-freelancers') ? 'bg-green border-y-2 border-black' : '';
    $visionaryOrdersLink = Request::is('en/business-area/visionary-orders') ? 'bg-green border-y-2 border-black' : '';
@endphp

@section('content')
<div class="min-h-[calc(100vh-60px)] grid grid-cols-[18rem,_1fr] bg-gray-200 hepta">
    <aside>
        <div class="fixed h-full border-black border-r-4 bg-white w-72">
            @if (auth()->guard('freelancer')->check())
                <ul class="">
                    <li class="capitalize my-4 hover:bg-green transition {{$dashboardLink}}">
                        <a href="/business-area" class="flex items-center gap-3 h-full w-full p-5">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-home">
                                <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                <polyline points="9 22 9 12 15 12 15 22"></polyline>
                            </svg>
                            <span class="font-bold">dashboard</span>
                        </a>
                    </li>

                    <li class="capitalize my-4 hover:bg-green transition {{$editProfileLink}}">
                        <a href="/business-area/talent-profile" class="flex items-center gap-3 p-5">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" />
                            </svg>
                            <span class="font-bold">profile</span>
                        </a>
                    </li>

                    <li class="capitalize my-4 hover:bg-green transition {{$servicesLink}}">
                        <a href="/business-area/talent-services" class="flex items-center gap-3 p-5">
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
                            <span class="font-bold">services</span>
                        </a>
                    </li>

                    <li class="capitalize my-4 hover:bg-green transition {{$projectsLink}}">
                        <a href="/business-area/talent-projects" class="flex items-center gap-3 p-5">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-star">
                                <polygon
                                    points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                </polygon>
                            </svg>
                            <span class="font-bold">projects</span>
                        </a>
                    </li>

                    <li class="capitalize my-4 hover:bg-green transition {{$ordersLink}}">
                        <a href="/business-area/talent-orders" class="flex items-center gap-3 p-5">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="icon icon-tabler icons-tabler-outline icon-tabler-shopping-cart">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M6 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                <path d="M17 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                <path d="M17 17h-11v-14h-2" />
                                <path d="M6 5l14 1l-1 7h-13" />
                            </svg>
                            <span class="font-bold">orders</span>
                        </a>
                    </li>
                </ul>
            @elseif(auth()->guard('business_owner')->check())
                <ul class="">
                    <li class="capitalize my-4 hover:bg-green transition {{$dashboardLink}}">
                        <a href="/business-area/visionary" class="flex items-center gap-3 h-full w-full p-5">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-home">
                                <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                <polyline points="9 22 9 12 15 12 15 22"></polyline>
                            </svg>
                            <span class="font-bold">dashboard</span>
                        </a>
                    </li>

                    <li class="capitalize my-4 hover:bg-green transition {{$visionaryEditProfileLink}}">
                        <a href="/business-area/visionary-profile" class="flex items-center gap-3 p-5">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" />
                            </svg>
                            <span class="font-bold">profile</span>
                        </a>
                    </li>

                    <li class="capitalize my-4 hover:bg-green transition {{$visionaryFavTalentsLink}}">
                        <a href="/business-area/visionary-fav-freelancers" class="flex items-center gap-3 p-5">
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
                            <span class="font-bold">Favourite Talents</span>
                        </a>
                    </li>

                    <li class="capitalize my-4 hover:bg-green transition {{$visionaryOrdersLink}}">
                        <a href="/business-area/visionary-orders" class="flex items-center gap-3 p-5">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="icon icon-tabler icons-tabler-outline icon-tabler-shopping-cart">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M6 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                <path d="M17 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                <path d="M17 17h-11v-14h-2" />
                                <path d="M6 5l14 1l-1 7h-13" />
                            </svg>
                            <span class="font-bold">orders</span>
                        </a>
                    </li>
                </ul>
            @endif
        </div>
    </aside>

    <div class="p-5">
        @yield('business-area-content')
    </div>
</div>
@endsection