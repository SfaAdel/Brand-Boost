@extends('businessarea')

@section('title', 'Dashboard')

@section('business-area-content')
<div class="mb-7 flex justify-around items-center flex-col md:flex-row">
    <div class="w-full sm:w-[10rem] md:w-[13rem] bg-white p-5 border-black border-2 flex justify-between items-center">
        <div>
            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round"
                class="icon icon-tabler icons-tabler-outline icon-tabler-cash">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M7 9m0 2a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v6a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2z" />
                <path d="M14 14m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                <path d="M17 9v-2a2 2 0 0 0 -2 -2h-10a2 2 0 0 0 -2 2v6a2 2 0 0 0 2 2h2" />
            </svg>
        </div>
        <div class="text-right">
            <h3 class="text-sm">Total Balance</h3>
            <h1 class="font-bold text-3xl">$684.75</h1>
        </div>
    </div>

    <div class="w-full sm:w-[10rem] md:w-[13rem] bg-white p-5 border-black border-2 flex justify-between items-center">
        <div>
            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round"
                class="icon icon-tabler icons-tabler-outline icon-tabler-users">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M9 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                <path d="M21 21v-2a4 4 0 0 0 -3 -3.85" />
            </svg>
        </div>
        <div class="text-right">
            <h3 class="text-sm">Followers</h3>
            <h1 class="font-bold text-3xl">5</h1>
        </div>
    </div>

    <div class="w-full sm:w-[10rem] md:w-[13rem] bg-white p-5 border-black border-2 flex justify-between items-center">
        <div>
            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round"
                class="icon icon-tabler icons-tabler-outline icon-tabler-star">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path
                    d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
            </svg>
        </div>
        <div class="text-right">
            <h3 class="text-sm">Projects</h3>
            <h1 class="font-bold text-3xl">8</h1>
        </div>
    </div>

</div>

<div class="">
    <!-- rest of the content -->
</div>
@endsection