@extends('layout')

@section('title', 'Blogs')

@section('content')
<section class="bg-pr py-10 px-5">
    <div class="relative overflow-hidden w-full h-[30rem] mb-10">
        <img class="size-full absolute top-0 start-0 object-cover"
            src="{{ asset('front-end/socialMedia/brand boost sm (4).jpg') }}" alt="Blog Image">
    </div>
    <div class="bg-gr py-6 px-3 border rounded-t-lg border-green-200">
        <h1 class="text-5xl font-bold hepta capitalize pt-5">First blog</h1>
        <p class="text-lg mt-5 rubikv ms-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti
            exercitationem
            unde
            expedita, delectus a eos quis nobis! Consectetur voluptatem debitis est praesentium exercitationem
            accusantium nihil quidem quis beatae aspernatur odit sint distinctio voluptate, dolor repellat architecto
            repellendus et maxime dolorum asperiores in nesciunt adipisci eos? Est ipsum pariatur debitis. Sequi laborum
            sint veritatis quasi vel. Aperiam maxime minima quidem dolorem natus, harum quod, officia, a nihil culpa
            fugiat beatae ratione fuga ullam voluptas distinctio architecto optio ipsum recusandae itaque animi
            inventore laudantium deleniti dicta. Maiores, quod. Eligendi, quod obcaecati necessitatibus iste dolorem
            voluptatibus inventore ex quidem dicta ipsa repellendus, soluta sint. Eveniet aliquid optio molestias ad,
            qui mollitia sit. Quod at enim excepturi libero sapiente.</p>
    </div>
    <a href="/blogs"
        class="border rounded-b-lg border-purple-200 py-2 px-5 bg-pi hover:bg-purple-500 transition text-black block hepta text-lg uppercase font-bold text-center border-t-transparent">{{__('website.back_to_blogs')}}</a>
</section>
@endsection