@extends('businessarea')

@section('title', 'Services')

@section('business-area-content')
<div class="mb-5">
    <a href="{{ route('freelancer-services.create', Auth::guard('freelancer')->user()->id) }}"
        class="bg-gr border rounded-lg border-gray-500 py-3 px-5 text-xs font-semibold capitalize">{{__('website.add_a_new_service')}}</a>
</div>

<div class="bg-white border rounded-lg border-gray-200 h-full">
    <div class="p-6 px-0 pt-0 pb-2">

        <div class="my-3">
            @include('front-end.includes.alerts')
        </div>

        <table class="w-full min-w-[640px] table-auto">
            <thead>
                <tr>
                    <th class="border-b border-blue-50 py-3 px-5 text-left">{{_(('website.service'))}}</th>
                    <th class="border-b border-blue-50 py-3 px-5 text-left">{{__('website.price_per_unit')}}</th>
                    <th class="border-b border-blue-50 py-3 px-5 text-left">{{__('website.actions')}}</th>
                </tr>
            </thead>
            <tbody>
                @forelse($freelancerServices as $service)
                    <tr>
                        <td class="py-3 px-5 ">
                            <p class="block antialiased text-sm leading-normal font-semibold">
                                {{ $service->service->name }}
                            </p>
                        </td>
                        <td class="py-3 px-5 ">
                            <p class="block antialiased text-xs font-semibold">
                                {{ $service->price_per_unit . ' Egy - ' . $service->service->unit_of_price }}
                            </p>
                        </td>
                        <td class="py-3 px-5 ">
                            <a href="{{ route('freelancer-services.show', $service->id) }}"
                                class="inline mx-1 antialiased text-xs font-semibold capitalize">{{__('website.open')}}</a>
                            <span>|</span>

                            <button data-modal-open="edit-service-modal-{{ $service->id }}"
                                class="inline mx-1 antialiased text-xs font-semibold capitalize">
                                {{__('website.edit')}}
                            </button>

                            <span>|</span>

                            <button type="button" data-modal-open="delete-service-modal-{{ $service->id }}"
                                class="inline mx-1 antialiased text-xs font-semibold capitalize text-red-500">
                                {{__('website.delete')}}
                            </button>

                        </td>
                    </tr>

                    <!-- Edit Modal -->
                    <div id="edit-service-modal-{{ $service->id }}"
                        class="modal-overlay hidden fixed inset-0 z-10 bg-black/75 p-10 overflow-auto">
                        <div class="bg-white w-3/4 m-auto p-10 border rounded-lg border-gray-200 shadow-lg">
                            <h1 class="text-2xl font-bold">Change Price Per Unit</h1>
                            <form action="{{ route('freelancer-services.update', $service->id) }}" method="POST"
                                class="my-10">
                                @csrf
                                @method('PATCH')
                                <div class="flex flex-col gap-2">
                                    <label for="price_per_unit_{{ $service->id }}"
                                        class="text-xs font-semibold uppercase">{{__('website.price_per_unit')}}</label>
                                    <input type="number" name="price_per_unit" id="price_per_unit_{{ $service->id }}"
                                        value="{{ $service->price_per_unit }}"
                                        class="bg-white border border-gray-200 px-3 py-2 rounded-lg">
                                </div>
                                <div class="flex flex-col gap-2 mt-3">
                                    <label class="radio">
                                        <input type="radio" name="active" value="1" @if (isset($service) && $service->active) checked @else checked @endif> {{__('website.active')}}
                                    </label>
                                    <label class="radio">
                                        <input type="radio" name="active" value="0" @if (isset($service) && !$service->active) checked @endif> {{__('website.not_active')}}
                                    </label>
                                </div>
                                <div class="flex flex-col gap-3">
                                    <button type="submit"
                                        class="font-bold bg-gr hover:bg-green-500 text-black text-md p-2 mt-5 border border-gray-200 rounded-lg capitalize">
                                        {{__('website.update')}}
                                    </button>
                                    <button type="button" data-modal-close="edit-service-modal-{{ $service->id }}"
                                        class="font-bold bg-bl hover:bg-gray-800 text-white text-md p-2 border border-gray-200 rounded-lg transition capitalize">
                                        {{__('website.close')}}
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>


                    <!-- Delete Modal -->
                    <div id="delete-service-modal-{{ $service->id }}"
                        class="modal-overlay hidden fixed inset-0 z-50 bg-black/75 p-10 overflow-auto">
                        <div class="bg-white w-3/4 m-auto p-10 border rounded-lg border-gray-200 acworth">
                            <h1 class="text-2xl font-bold">{{__('website.sure_delete')}}?</h1>
                            <form action="{{ route('freelancer-services.destroy', $service->id) }}" method="POST"
                                class="mt-5">
                                @csrf
                                @method('DELETE')
                                <div class="flex flex-col gap-2">
                                    <p class="text-sm text-gray-700">{{__('website.delete_warning')}}</p>
                                </div>
                                <div class="flex flex-col gap-3">
                                    <button type="submit"
                                        class="bg-red-400 hover:bg-red-500 transition text-md p-2 border rounded-lg border-gray-200 text-white hepta capitalize">
                                        {{__('website.confirm')}}
                                    </button>
                                    <button type="button" data-modal-close="delete-service-modal-{{ $service->id }}"
                                        class="bg-black hover:bg-gray-800 transition text-md p-2 border rounded-lg border-gray-200 text-white hepta capitalize">
                                        {{__('website.cancel')}}
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>




                @empty
                    <tr>
                        <td colspan="3" class="py-3 px-5 text-center">{{__('website.no_services')}}</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection

{{--
<script>
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