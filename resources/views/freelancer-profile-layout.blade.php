@extends('layout')

@section('title', 'Freelancer Name')

@php
    $currentUrl = request()->url();
    $isProjectsActive = str_contains($currentUrl, 'projects');
@endphp

@section('content')
<section class="transparent-texture hepta">
    <div class="bg-gray-100 flex flex-col items-center py-16 px-[10vw] text-center">
        <img src="{{ asset('front-end/SocialMedia/brand boost sm (6).png') }}" alt="Offerer pic"
            class="w-36 h-36 rounded-full object-cover">
        <h1 class="text-4xl font-bold text-center capitalize">{{$freelancer->name}}</h1>
        <p class="text-2xl font-bold text-center capitalize">Specialization</p>
        <div class="flex gap-4 flex-wrap my-1">
            <div class="flex items-center">
                <img src="{{ asset('front-end/assets/position.svg') }}" class="w-5 h-5">
                <p class="text-sm text-slate-700 capitalize">country</p>
            </div>
        </div>
        @if (auth()->guard('business_owner')->check())
        <button 
            id="follow-button-{{ $freelancer->id }}" 
            data-following="{{ $isFollowing ? 'true' : 'false' }}" 
            data-freelancer-id="{{ $freelancer->id }}" 
            data-business-owner-id="{{ Auth::guard('business_owner')->id() }}"
            class="bg-gray-200 hover:bg-gray-50 transition p-2 mt-3.5 border-black border text-black hepta text-center text-sm">
            <span id="follow-text-{{ $freelancer->id }}">{{ $isFollowing ? 'Unfollow' : 'Follow' }}</span>
            <span>
                <img id="follow-icon-{{ $freelancer->id }}" 
                     src="{{ asset($isFollowing ? 'front-end/SVGs/heart-fill.svg' : 'front-end/SVGs/heart.svg') }}" 
                     class="inline">
            </span>
        </button>
    @endif
    
    

    
    </div>
    <div class="bg-gray-100">
        <div id="tabs" class="container bg-gray-100 mx-auto -mb-0.5">
            <a id="informations-tab" href="{{route('freelancerName', ['id' => $freelancer->id])}}"
                class="bg-red-100 border-2 border-black {{ $isProjectsActive ? 'border-b-2' : 'border-b-red-100' }} p-2 text-xl inline-block">Informations</a>
            <a id="projects-tab" href="{{route('freelancerNameProjects', ['id' => $freelancer->id])}}"
                class="bg-sky-100 border-2 border-black {{ $isProjectsActive ? 'border-b-sky-100' : 'border-b-2' }} p-2 text-xl inline-block">Projects</a>
        </div>
        @yield('freelancer-profile-content')
    </div>
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