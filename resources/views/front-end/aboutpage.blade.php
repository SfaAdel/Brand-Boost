@extends('layout')

@section('title', 'About Us')

@section('content')
<div class="hepta overflow-x-hidden">
    <section class="relative flex flex-col items-center min-h-96 py-24 px-[10vw] text-center bg-emerald-500">
        <h1 class="text-7xl font-bold uppercase text-center">What is<br />Brand Boost</h1>
        <p class="text-2xl mt-10">This small journy on this page will let you know more about us.</p>
    </section>

    <div class="w-full bg-no-repeat bg-center bg-cover"
        style="aspect-ratio: 950/300; background-image: url('{{ asset('front-end/SVGs/stacked-peaks-haikei.svg') }}">
    </div>

    <section class="relative flex flex-col items-center min-h-96 py-24 px-[10vw] text-center bg-sky-600">
        <h1 class="text-7xl font-bold uppercase text-center">What is<br />Brand Boost</h1>
        <p class="text-2xl mt-10">This small journy on this page will let you know more about us.</p>
    </section>

    <section class="relative flex flex-col items-center min-h-96 py-24 px-[10vw] text-center bg-pink">
        <div class="absolute top-0 left-0 w-full overflow-hidden leading-none">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120"
                preserveAspectRatio="none" class="relative block w-[calc(139%+1.3px)] h-[150px]">
                <path
                    d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z"
                    class="fill-[#0284C7]"></path>
            </svg>
        </div>
        <h1 class="text-7xl font-bold uppercase text-center mt-24">What is<br />Brand Boost</h1>
        <p class="text-2xl mt-10">This small journy on this page will let you know more about us.</p>
    </section>

    <div class="w-full bg-no-repeat bg-center bg-cover"
        style="aspect-ratio: 950/300; background-image: url('{{ asset('front-end/SVGs/stacked-waves.svg') }}">
    </div>

    <section class="relative flex flex-col items-center min-h-96 py-24 px-[10vw] text-center bg-purple text-white">
        <h1 class="text-7xl font-bold uppercase text-center">What is<br />Brand Boost</h1>
        <p class="text-2xl mt-10">This small journy on this page will let you know more about us.</p>
    </section>
</div>
@endsection