@extends('layout')

@section('title', $service->name)

@section('content')
<section class="bg-pr py-24">
    <h1 class="text-6xl font-bold text-center hepta capitalize pt-7 text-slate-50"> {{ __('website.service_name') }} 
        {{ $service->name }} 
    </h1>
    <p id="service-offer-description" class="text-slate-200 leading-normal text-xl hepta text-center mt-10 ">
        {{ $service->description }}
    </p>

    <div class="my-3">
        @include('front-end.includes.alerts')
    </div>


    <div class="flex flex-wrap justify-center gap-6 px-4 py-8 hepta">
        @forelse($freelancerServices as $freelancerService)
            <div
                class="card relative flex flex-col my-6 bg-gr border rounded-lg border-purple-200 hover:border-bu w-96 p-5">
                <div class="flex items-center gap-3 mb-5">
                    <img src="{{ asset('images/freelancers/profile/'.$freelancerService->freelancer->profile_image) }}" alt="Offerer pic"
                        class="w-12 h-12 rounded-full">
                    <a href="/freelancers/freelancerName">
                        <p class="text-sm font-bold">{{ $freelancerService->freelancer->name }}</p>
                        <p class="text-xs">{{ $freelancerService->freelancer->job_title }}</p>
                    </a>
                </div>
                <div class="p-4">
                    <h6 class="mb-2 text-bl text-xl font-semibold">
                        {{$freelancerService->service->name}}
                    </h6>
                    <p class="text-bl"> {{$freelancerService->price_per_unit}} EGP -
                        {{$freelancerService->service->unit_of_price}}
                    </p>
                </div>
                <div class="px-4 pb-4 pt-0 mt-auto flex">
                    <button data-modal-open="offer-modal-{{ $freelancerService->id }}"
                        class="capitalize px-3 flex items-center justify-center cursor-pointer text-gr hover:text-bl transition
                                                                                                                                                                                                font-bold relative text-[16px] w-full mx-auto h-[2em] text-center bg-gradient-to-r from-pr from-10% via-pi
                                                                                                                                                                                                via-30% to-bu to-90% bg-[length:400%] rounded-[30px] z-10 hover:animate-gradient-xy hover:bg-[length:100%]
                                                                                                                                                                                                before:content-[''] before:absolute before:-top-[5px] before:-bottom-[5px] before:-left-[5px]
                                                                                                                                                                                                before:-right-[5px] before:bg-gradient-to-r before:from-pr before:from-10% before:via-pi before:via-30%
                                                                                                                                                                                                before:to-bu before:bg-[length:400%] before:-z-10 before:rounded-[35px] before:hover:blur-xl
                                                                                                                                                                                                before:transition-all before:ease-in-out before:duration-[1s] before:hover:bg-[length:10%] active:bg-bu
                                                                                                                                                                                                focus:ring-bu"
                        type="button">
                        {{__('website.order_now')}}
                    </button>
                </div>
            </div>

            <div id="offer-modal-{{ $freelancerService->id }}"
                class="modal-overlay hidden fixed inset-0 z-50 bg-black/75 p-10 overflow-auto">
                <div class="bg-gr w-3/4 m-auto p-10 font-acworth rounded-lg">
                    @if (auth()->guard('business_owner')->check())
                        <h1 class="text-5xl font-bold">{{__('website.start_order')}}</h1>
                        <div class="my-10 flex gap-5 flex-wrap lg:flex-nowrap">
                            <div class="flex flex-col gap-3">
                                <h2 class="text-2xl text-slate-800">{{__('website.freelancer')}} :
                                    {{ $freelancerService->freelancer->name }}
                                </h2>
                                <h2 class="text-2xl text-slate-800">{{__('website.price_per_unit')}}
                                    {{ $freelancerService->service->unit_of_price }} :
                                    {{ $freelancerService->price_per_unit }} Egy
                                </h2>
                                <h2 class="text-2xl text-slate-800">{{__('website.service')}} :
                                    {{ $freelancerService->service->name }}
                                </h2>
                            </div>
                        </div>

                        <script>
                            // Price per unit from server-side variable
                            const pricePerUnit = {{ $freelancerService->price_per_unit }};

                            // Elements
                            const amountInput = document.getElementById('amount');
                            const totalPriceInput = document.getElementById('total_price');

                            // Update total price on amount input change
                            amountInput.addEventListener('input', () => {
                                const amount = parseFloat(amountInput.value) || 0; // Default to 0 if empty
                                totalPriceInput.value = (amount * pricePerUnit).toFixed(2); // Format to 2 decimal places
                            });
                        </script>

                        <div class="flex flex-col">
                            <form action="{{ route('orders.store') }}" method="POST" class="mb-3 flex flex-col gap-3">
                                @csrf
                                <input type="number" hidden name="freelancer_service_id" value="{{ $freelancerService->id }}">
                                <input type="number" hidden name="business_owner_id"
                                    value="{{ Auth::guard('business_owner')->user()->id }}">

                                <label for="expected_receive_date"
                                    class="text-slate-800 capitalize">{{__('website.expected_receive_date')}}</label>
                                <input type="date" name="expected_receive_date" class="bg-white text-bl rounded-full">

                                <label for="description"
                                    class="text-slate-800 capitalize">{{__('website.order_description')}}</label>
                                <input type="text" name="description" class="bg-white text-bl rounded-full">

                                <label for="amount" class="text-slate-800 capitalize"> {{ __('website.amount') }}</label>
                                <input type="number" name="amount" id="amount" min="1" class="bg-white text-bl rounded-full"
                                    required>

                                <label for="total_price" class="text-slate-800 capitalize"> {{ __('website.total_price') }}</label>
                                <input type="number" id="total_price" name="total_price" disabled
                                    class="bg-slate-300 text-bl rounded-full">

                                <button type="submit"
                                    class="mt-5 capitalize px-3 flex items-center justify-center cursor-pointer text-bl transition
                                                                                                                                                                                        font-bold relative text-[16px] w-full mx-auto h-[2em] text-center bg-gradient-to-r from-pr from-10% via-pi
                                                                                                                                                                                        via-30% to-bu to-90% bg-[length:400%] rounded-[30px] z-10 hover:animate-gradient-xy hover:bg-[length:100%]
                                                                                                                                                                                        before:content-[''] before:absolute before:-top-[5px] before:-bottom-[5px] before:-left-[5px]
                                                                                                                                                                                        before:-right-[5px] before:bg-gradient-to-r before:from-pr before:from-10% before:via-pi before:via-30%
                                                                                                                                                                                        before:to-bu before:bg-[length:400%] before:-z-10 before:rounded-[35px] before:hover:blur-xl
                                                                                                                                                                                        before:transition-all before:ease-in-out before:duration-[1s] before:hover:bg-[length:10%] active:bg-bu
                                                                                                                                                                                        focus:ring-bu">
                                     {{ __('website.order') }}
                                </button>
                            </form>
                            <button data-modal-close="offer-modal-{{ $freelancerService->id }}"
                                class="capitalize px-3 flex items-center justify-center cursor-pointer text-white transition rounded-full font-bold text-[16px] w-full mx-auto h-[2em] text-center bg-bl hover:bg-gray-800">
                                {{ __('website.close') }}
                            </button>
                        </div>
                    @else
                        <h1 class="text-5xl font-bold">{{__('website.not_logged_in_to_order_phrase')}}</h1>
                        <a href="{{ route('visionary-signup') }}"
                            class="block rounded-full bg-pr hover:bg-pi hover:text-bl transitions px-3 py-4 text-white w-1/2 text-center font-hepta mx-auto mt-5">{{__('website.have_vision')}}</a>
                    @endif
                </div>
            </div>

        @empty
            <div>
                <p class="py-3 px-5 text-center">{{__('website.no_offers_found')}}</p>
            </div>
        @endforelse


    </div>
</section>


@endsection