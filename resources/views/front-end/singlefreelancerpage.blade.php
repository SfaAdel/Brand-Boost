@extends('freelancer-profile-layout')

@section('title', 'Freelancer Name')

@section('freelancer-profile-content')
<div class="container mx-auto py-8 px-4 bg-red-100 border-2 border-black">
    <h2 class="text-3xl capitalize font-bold my-5">{{__('website.informations')}}</h2>
    <div class="my-5">
        <h4 class="capitalize font-bold my-2">{{__('website.about_me')}}</h4>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Optio cupiditate ipsa temporibus similique tempore
            et quibusdam natus. Animi magnam quo, in ea, enim praesentium perspiciatis nihil, necessitatibus
            reprehenderit quaerat accusantium, Lorem ipsum, dolor sit amet consectetur adipisicing elit. Optio
            cupiditate ipsa temporibus similique tempore
            et quibusdam natus. Animi magnam quo, in ea, enim praesentium perspiciatis nihil, necessitatibus
            reprehenderit quaerat accusantium.</p>
    </div>

    <div class="my-5">
        <h4 class="capitalize font-bold my-2">{{__('website.my_skills')}}</h4>
        <ul class="flex flex-wrap">
            <li class="m-2 bg-green p-2 border border-black">React</li>
            <li class="m-2 bg-green p-2 border border-black">Next</li>
            <li class="m-2 bg-green p-2 border border-black">Node</li>
            <li class="m-2 bg-green p-2 border border-black">Express</li>
            <li class="m-2 bg-green p-2 border border-black">Vue</li>
            <li class="m-2 bg-green p-2 border border-black">Angular</li>
            <li class="m-2 bg-green p-2 border border-black">PHP</li>
            <li class="m-2 bg-green p-2 border border-black">Python</li>
            <li class="m-2 bg-green p-2 border border-black">Java</li>
            <li class="m-2 bg-green p-2 border border-black">Flutter</li>
            <li class="m-2 bg-green p-2 border border-black">Swift</li>
            <li class="m-2 bg-green p-2 border border-black">Go</li>
            <li class="m-2 bg-green p-2 border border-black">Kotlin</li>
            <li class="m-2 bg-green p-2 border border-black">Ruby</li>
            <li class="m-2 bg-green p-2 border border-black">Rust</li>
            <li class="m-2 bg-green p-2 border border-black">Scala</li>
            <li class="m-2 bg-green p-2 border border-black">Typescript</li>
            <li class="m-2 bg-green p-2 border border-black">GraphQL</li>
            <li class="m-2 bg-green p-2 border border-black">Android</li>
        </ul>
    </div>
</div>
@endsection