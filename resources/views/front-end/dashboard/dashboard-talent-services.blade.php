@extends('businessarea')

@section('title', 'Services')

@section('business-area-content')
<div class="mb-5">
    <a href="{{ route('freelancer-services.create', Auth::guard('freelancer')->user()->id) }}"
        class="bg-gr border rounded-lg border-gray-500 py-3 px-5 text-xs font-semibold capitalize">{{__('website.add_a_new_service')}}</a>
</div>

<div class="bg-pr text-white border rounded-lg border-gray-200 h-[calc(100% - 10px)]">
    <div class="p-6 px-0 pt-0 pb-2">

        <div class="my-3">
            @include('front-end.includes.alerts')
        </div>

        <div class="my-5 flex flex-wrap justify-center items-center">
            @forelse($freelancerServices as $service)
                <div class="card dashboard-field flex flex-wrap justify-center gap-6 px-4 py-8 hepta">
                    <div class="relative flex flex-col my-6 bg-gr border rounded-lg border-purple-200 w-96">
                        <div class="relative h-56 m-2.5 overflow-hidden">
                            <img src="{{ asset('images/services/' . $service->service->icon) }}" alt="card-image"
                                class="w-full h-full object-cover rounded-lg" />
                        </div>
                        <div class="p-4">
                            <h6 class="mb-2 text-bl text-xl font-semibold">
                                {{ $service->service->name }}
                            </h6>
                            <p class="text-bl">
                                {{ $service->price_per_unit . ' Egy - ' . $service->service->unit_of_price }}
                            </p>
                            <small
                                class="text-bl">{{$service->active ? __('website.active') : __('website.not_active')}}</small>
                        </div>
                        <div class="px-4 pb-4 pt-0 mt-auto flex gap-3 items-center justify-center">
                            <a href="{{ route('freelancer-services.show', $service->id) }}"
                                class="px-5 py-2 rounded-full bg-pi text-bl hover:text-white hover:bg-pr transition"
                                type="button">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-eye">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                                    <path
                                        d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" />
                                </svg>
                            </a>
                            <button data-modal-open="edit-service-modal-{{ $service->id }}"
                                class="px-5 py-2 rounded-full bg-bu hover:text-white hover:bg-pr transition">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-pencil">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M4 20h4l10.5 -10.5a2.828 2.828 0 1 0 -4 -4l-10.5 10.5v4" />
                                    <path d="M13.5 6.5l4 4" />
                                </svg>
                            </button>

                            <button type="button" data-modal-open="delete-service-modal-{{ $service->id }}"
                                class="px-5 py-2 rounded-full bg-red-500 hover:text-white hover:bg-pr transition">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-trash">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M4 7l16 0" />
                                    <path d="M10 11l0 6" />
                                    <path d="M14 11l0 6" />
                                    <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                    <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Edit Modal -->
                <div id="edit-service-modal-{{ $service->id }}"
                    class="modal-overlay hidden fixed inset-0 z-10 bg-black/75 p-10 overflow-auto">
                    <div class="bg-gr w-3/4 m-auto p-10 border rounded-lg border-gray-200 shadow-lg">
                        <h1 class="text-2xl font-bold text-bl">Change Price Per Unit</h1>
                        <form action="{{ route('freelancer-services.update', $service->id) }}" method="POST" class="my-10">
                            @csrf
                            @method('PATCH')
                            <div class="flex flex-col gap-2">
                                <label for="price_per_unit_{{ $service->id }}"
                                    class="text-xs font-semibold uppercase text-bl">{{__('website.price_per_unit')}}</label>
                                <input type="number" name="price_per_unit" id="price_per_unit_{{ $service->id }}"
                                    value="{{ $service->price_per_unit }}"
                                    class="bg-white text-bl border border-gray-200 px-3 py-2 rounded-lg">
                            </div>
                            <div class="flex flex-col gap-2 mt-3">
                                <label class="radio text-bl">
                                    <input type="radio" name="active" value="1" @if (isset($service) && $service->active)
                                    checked @else checked @endif> {{__('website.active')}}
                                </label>
                                <label class="radio text-bl">
                                    <input type="radio" name="active" value="0" @if (isset($service) && !$service->active)
                                    checked @endif> {{__('website.not_active')}}
                                </label>
                            </div>
                            <div class="flex flex-col gap-3">
                                <button type="submit"
                                    class="font-bold bg-pr hover:bg-purple-500 transition text-white text-md p-2 mt-5 rounded-lg capitalize">
                                    {{__('website.update')}}
                                </button>
                                <button type="button" data-modal-close="edit-service-modal-{{ $service->id }}"
                                    class="font-bold bg-bl hover:bg-gray-800 transition text-white text-md p-2 rounded-lg capitalize">
                                    {{__('website.close')}}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>


                <!-- Delete Modal -->
                <div id="delete-service-modal-{{ $service->id }}"
                    class="modal-overlay hidden fixed inset-0 z-50 bg-black/75 p-10 overflow-auto">
                    <div class="bg-gr w-3/4 m-auto p-10 border rounded-lg border-gray-200 acworth">
                        <h1 class="text-2xl font-bold text-bl">{{__('website.sure_delete')}}?</h1>
                        <form action="{{ route('freelancer-services.destroy', $service->id) }}" method="POST" class="mt-5">
                            @csrf
                            @method('DELETE')
                            <div class="flex flex-col gap-2 mb-5">
                                <p class="text-xl text-gray-800">{{__('website.delete_warning')}}</p>
                            </div>
                            <div class="flex flex-col gap-3">
                                <button type="submit"
                                    class="bg-red-400 hover:bg-red-500 transition text-md p-2 rounded-lg text-white hepta capitalize">
                                    {{__('website.confirm')}}
                                </button>
                                <button type="button" data-modal-close="delete-service-modal-{{ $service->id }}"
                                    class="bg-black hover:bg-gray-800 transition text-md p-2 rounded-lg text-white hepta capitalize">
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
        </div>
    </div>
</div>

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
</script>
@endsection