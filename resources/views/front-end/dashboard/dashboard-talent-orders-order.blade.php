@extends('businessarea')

@section('title', 'Order')

@section('business-area-content')
<div class="border-black border-2 bg-slate-50 h-full">
    <div class="p-5 flex flex-col gap-5">
        <h1 class="text-2xl font-bold">Order #1</h1>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Animi expedita, debitis dolorem omnis eligendi
            pariatur in necessitatibus eos consectetur, officiis obcaecati dolorum quibusdam saepe aspernatur?
            Voluptatum eveniet perferendis nobis natus earum autem facere quas ab. Distinctio aut quaerat iusto
            doloribus laborum! Fugiat nulla asperiores suscipit!</p>

        <div class="flex flex-col gap-3">
            <button
                class="font-bold bg-green hover:bg-emerald-500 transition text-md p-2 mt-5 border-black border-2 text-black hepta text-center text-sm capitalize">Accept</button>
        </div>
    </div>
</div>
@endsection