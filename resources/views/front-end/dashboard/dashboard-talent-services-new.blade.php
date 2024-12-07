@extends('businessarea')

@section('title', 'New Serice')

@section('business-area-content')
<div class="border-black border-2 bg-slate-50 h-full p-5">

    <div class="my-3">
        @include('front-end.includes.alerts')
    </div>

    <form action="{{ route('freelancer-services.store') }}" method="POST">
        @csrf
         <div class="flex flex-col gap-5">
            <div class="flex flex-col gap-2">
                <label for="title" class="text-xs font-semibold uppercase">service</label>
                <select name="service_id" id="title" class="border-2 border-black px-3 py-2">
                    <option value="" selected disabled>Select Service</option>

                    @foreach($services as $service)
                    <option value="{{$service->id}}">{{$service->name}} - Its unit is : {{$service->unit_of_price}} </option>
                    @endforeach
                </select>
            </div>
            <div class="flex flex-col gap-2">
                <label for="price" class="text-xs font-semibold uppercase">service price per unit</label>
                <input type="number" name="price_per_unit" id="price" class="border-2 border-black px-3 py-2">
            </div>
            <div class="control">
                <label class="radio">
                    <input type="radio" name="active" value="1"> Active
                </label>
                <label class="radio">
                    <input type="radio" name="active" value="0">  Not Active
                </label>
            </div>
        </div>
        <div class="flex justify-center mt-5">
            <button type="submit"
                class="bg-green border-2 border-black py-3 px-5 text-sm font-semibold capitalize w-full hover:bg-emerald-300 transition">Add
                a new service</button>
        </div>
    </form>
</div>
@endsection


<!-- <td class="py-3 px-5 ">
    <div
        class="relative grid items-center uppercase whitespace-nowrap select-none bg-gradient-to-tr from-emerald-600 to-emerald-400 text-white py-0.5 px-2 text-[11px] font-medium w-fit">
        <span class="">active</span>
    </div>
</td> -->