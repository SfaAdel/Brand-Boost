@extends('businessarea')

@section('title', 'Services')

@section('business-area-content')
    <a href="{{ route('freelancer-services.create', Auth::guard('freelancer')->user()->id) }}"
        class="bg-green border-2 border-black py-3 px-5 text-xs font-semibold capitalize">Add a New Service</a>

    <div class="border-black border-2 bg-slate-50 h-full">
        <div class="p-6 px-0 pt-0 pb-2">

            <div class="my-3">
                @include('front-end.includes.alerts')
            </div>

            <table class="w-full min-w-[640px] table-auto">
                <thead>
                    <tr>
                        <th class="border-b border-blue-50 py-3 px-5 text-left">Service</th>
                        <th class="border-b border-blue-50 py-3 px-5 text-left">Price Per Unit</th>
                        <th class="border-b border-blue-50 py-3 px-5 text-left">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($freelancerServices as $service)
                        <tr>
                            <td class="py-3 px-5 ">
                                <p class="block antialiased text-sm leading-normal font-semibold">
                                    {{ $service->service->name }}</p>
                            </td>
                            <td class="py-3 px-5 ">
                                <p class="block antialiased text-xs font-semibold">
                                     {{ $service->price_per_unit . ' Egy - ' . $service->service->unit_of_price }} </p>
                            </td>
                            <td class="py-3 px-5 ">
                                <a href="{{ route('freelancer-services.show',$service->id) }}"
                                    class="inline mx-1 antialiased text-xs font-semibold capitalize">Open</a>
                                <span>|</span>
                                <button data-modal-open="edit-service-modal-{{ $service->id }}"
                                    class="inline mx-1 antialiased text-xs font-semibold capitalize">Edit</button>
                                <span>|</span>

                                <button type="button" data-modal-open="delete-service-modal-{{ $service->id }}"
                                    class="inline mx-1 antialiased text-xs font-semibold capitalize text-red-500">
                                    Delete
                                </button>

                            </td>
                        </tr>

                        <!-- Edit Modal -->
                        <div id="edit-service-modal-{{ $service->id }}"
                            class="modal-overlay hidden fixed inset-0 z-50 bg-black/75 p-10 overflow-auto">
                            <div class="bg-white w-3/4 m-auto p-10 border-black border-4 acworth">
                                <h1 class="text-2xl font-bold">Change Price Per Unit</h1>
                                <form action="{{ route('freelancer-services.update', $service->id) }}" method="POST"
                                    class="my-10">
                                    @csrf
                                    @method('PATCH')
                                    <div class="flex flex-col gap-2">
                                        <label for="price_per_unit_{{ $service->id }}"
                                            class="text-xs font-semibold uppercase">Service Price Per Unit</label>
                                        <input type="number" name="price_per_unit" id="price_per_unit_{{ $service->id }}"
                                            value="{{ $service->price_per_unit }}" class="border-2 border-black px-3 py-2">
                                    </div>
                                    <div class="flex flex-col gap-3">
                                        <button type="submit"
                                            class="font-bold bg-blue hover:bg-sky-500 transition text-md p-2 mt-5 border-black border-2 text-black hepta text-center text-sm capitalize">
                                            Update
                                        </button>
                                        <button type="button" data-modal-close="edit-service-modal-{{ $service->id }}"
                                            class="font-bold hepta border-black border-2 text-md p-2 bg-red-400 hover:bg-red-500 transition">
                                            Close
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <!-- Delete Modal -->
                        <div id="delete-service-modal-{{ $service->id }}"
                            class="modal-overlay hidden fixed inset-0 z-50 bg-black/75 p-10 overflow-auto">
                            <div class="bg-white w-3/4 m-auto p-10 border-black border-4 acworth">
                                <h1 class="text-2xl font-bold">Are you sure you want to delete this service?</h1>
                                <form action="{{ route('freelancer-services.destroy', $service->id) }}" method="POST"
                                    class="mt-5">
                                    @csrf
                                    @method('DELETE')
                                    <div class="flex flex-col gap-2">
                                        <p class="text-sm text-gray-700">This action cannot be undone.</p>
                                    </div>
                                    <div class="flex gap-3 mt-5">
                                        <button type="submit"
                                            class="bg-red-400 hover:bg-red-500 transition text-md p-2 border-black border-2 text-white hepta capitalize">
                                            Confirm
                                        </button>
                                        <button type="button" data-modal-close="delete-service-modal-{{ $service->id }}"
                                            class="bg-gray-200 hover:bg-gray-50 transition text-md p-2 border-black border-2 text-black hepta capitalize">
                                            Cancel
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>




                    @empty
                        <tr>
                            <td colspan="3" class="py-3 px-5 text-center">No services found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection

{{-- <script>
    document.addEventListener('DOMContentLoaded', () => {
    // Open modal
    document.querySelectorAll('[data-modal-open]').forEach(button => {
        button.addEventListener('click', () => {
            const modalId = button.getAttribute('data-modal-open');
            document.getElementById(modalId).classList.remove('hidden');
        });
    });

    // Close modal
    document.querySelectorAll('[data-modal-close]').forEach(button => {
        button.addEventListener('click', () => {
            const modalId = button.getAttribute('data-modal-close');
            document.getElementById(modalId).classList.add('hidden');
        });
    });
});

</script> --}}
