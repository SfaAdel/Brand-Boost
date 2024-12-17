@extends('layout')

@section('title', 'Service Offers')

@section('content')
    <section class="transparent-texture py-10">
        <h1 class="text-6xl font-bold text-center hepta uppercase pt-7"> Recently Offers of {{ $service->name }} Service
        </h1>
        <p id="service-offer-description" class="text-slate-800 leading-normal text-xl hepta text-center">
            {{ $service->description }}
        </p>

        <div class="my-3">
            @include('front-end.includes.alerts')
        </div>


        <div class="flex flex-wrap justify-center gap-6 px-4 py-8 hepta">
            @forelse($freelancerServices as $freelancerService)
                <div id="service-card" class="relative flex flex-col my-6 bg-white border-black border-4 w-96">

                    <div class="p-4">
                        <div class="flex items-center gap-3 mb-5">
                            <img src="{{ asset('front-end/SocialMedia/brand boost sm (1).jpg') }}" alt="Offerer pic"
                                class="w-12 h-12 rounded-full">
                            <a href="/freelancers/freelancerName">
                                <p class="text-sm font-bold">{{ $freelancerService->freelancer->name }}</p>
                                <p class="text-xs">{{ $freelancerService->freelancer->job_title }}</p>
                            </a>
                        </div>
                        <h6 class="mb-2 text-slate-800 text-xl font-semibold">
                            ${{ $freelancerService->price_per_unit . ' - ' . $freelancerService->service->unit_of_price }}
                        </h6>

                    </div>


                    <div class="px-4 pb-4 pt-0 mt-auto flex">
                        @if (auth()->guard('business_owner')->check())
                            <button data-modal-open="offer-modal-{{ $freelancerService->id }}"
                                class="flex-1 bg-purple mt-auto font-bold uppercase py-2 px-4 border-black border-2 text-center text-sm text-white transition-all hover:bg-sky-800 disabled:pointer-events-none disabled:opacity-50"
                                type="button">
                                Order
                            </button>
                            @else
                            <a href="{{ route('visionary-signup') }}"
                                class="flex-1 bg-purple mt-auto font-bold uppercase py-2 px-4 border-black border-2 text-center text-sm text-white transition-all hover:bg-sky-800 disabled:pointer-events-none disabled:opacity-50"
                                type="button">
                                Create Account as a Business Owner to Order The Service
                            </a>
                            @endif
                    </div>

                </div>

                <div id="offer-modal-{{ $freelancerService->id }}"
                    class="modal-overlay hidden fixed inset-0 z-50 bg-black/75 p-10 overflow-auto">
                    <div class="bg-white w-3/4 m-auto p-10 border-black border-4 acworth">
                        <h1 class="text-5xl font-bold">Start Your Order</h1>
                        <div class="my-10 flex gap-5 flex-wrap lg:flex-nowrap">
                            <div class="flex flex-col gap-3">
                                <h2 class="text-2xl text-slate-800">Talent : {{ $freelancerService->freelancer->name }}</h2>
                                <h2 class="text-2xl text-slate-800">Price {{ $freelancerService->service->unit_of_price }} :
                                    {{ $freelancerService->price_per_unit }} Egy
                                </h2>
                                <h2 class="text-2xl text-slate-800">Service : {{ $freelancerService->service->name }}</h2>
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
                                <input type="number" hidden name="business_owner_id" value="{{ Auth::guard('business_owner')->user()->id }}">
                                
                                <label for="expected_receive_date" class="text-slate-800 capitalize">Expected Receive Date</label>
                                <input type="date" name="expected_receive_date" class="outline-none border-2 border-black p-2 w-full">
                        
                                <label for="description" class="text-slate-800 capitalize">Write a Description for your order</label>
                                <input type="text" name="description" class="outline-none border-2 border-black p-2 w-full">
                        
                                <label for="amount" class="text-slate-800 capitalize">Amount</label>
                                <input type="number" name="amount" id="amount" min="1" class="outline-none border-2 border-black p-2 w-full" required>
                        
                                <label for="total_price" class="text-slate-800 capitalize">Total Price</label>
                                <input type="number" id="total_price" name="total_price" disabled class="outline-none border-2 border-black p-2 w-full">
                        
                                <button type="submit" class="font-bold bg-blue hover:bg-sky-500 transition p-2 mt-5 border-black border-2 text-black hepta text-center text-sm capitalize">
                                    Order
                                </button>
                            </form>
                            <button data-modal-close="offer-modal-{{ $freelancerService->id }}" class="font-bold hepta border-black border-2 p-2 bg-red-400 hover:bg-red-500 transition">
                                {{ __('website.close') }}
                            </button>
                        </div>
                    </div>
                </div>
            @empty
                <div>
                    <p class="py-3 px-5 text-center">No Offers found.</p>
                </div>
            @endforelse



        </div>
    </section>


@endsection