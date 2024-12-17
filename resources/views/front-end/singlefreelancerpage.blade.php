
@extends('freelancer-profile-layout')

@section('title', 'Freelancer Name')

@section('freelancer-profile-content')
<div class="container mx-auto py-8 px-4 bg-red-100 border-2 border-black">
    <h2 class="text-3xl capitalize font-bold my-5">Informations</h2>
    <div class="my-5">
        <h4 class="capitalize font-bold my-2">About me</h4>
        <p>{{$freelancer->bio}}</p>
    </div>

    <div class="my-5">
        <h4 class="capitalize font-bold my-2">My Skills</h4>
        <ul class="flex flex-wrap">
            @forelse ($freelancer->fields as $field )
            <li class="m-2 bg-green p-2 border border-black">{{$field->name}}</li>
            @empty
            <li class="m-2 bg-red p-2 border border-black">No Skills Found</li>
            @endforelse
        </ul>
    </div>
</div>
@endsection