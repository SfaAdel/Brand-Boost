@extends('admin.layouts.main')

@section('title', __('sidebar.contacts') . ' - ' . __('forms.contact_details'))

@section('body-class', 'sidebar-noneoverflow')

@section('content')
<div class="layout-px-spacing">
    <div class="page-header">
        <div class="page-title">
            <h3>{{ __('forms.contact_details') }}</h3>
        </div>
    </div>

    <div class="my-3">
        @include('admin.includes.alerts')
    </div>

    <div class="row p-0">
        <div class="col-xl-6 col-lg-6 col-md-5 col-sm-12 layout-top-spacing mx-auto">
            <div class="user-profile">
                <div class="widget-content widget-content-area">
                    <div class="d-flex justify-content-between">
                        <h3 class="">{{ __('forms.contact_info') }}</h3>
                    </div>

                    <div class="text-center user-info">
                        <p><strong>{{ __('forms.name') }}:</strong> {{ $contact->name }}</p>
                        <p><strong>{{ __('forms.email') }}:</strong> <a href="mailto:{{ $contact->email }}">{{ $contact->email }}</a></p>
                        <p><strong>{{ __('forms.phone') }}:</strong> <a href="tel:+2{{ $contact->phone }}">{{ $contact->phone }}</a></p>
                    </div>

                    <div class="user-info-list">
                        <div class="">
                            <ul class="contacts-block list-unstyled">
                                <li class="contacts-block__item">
                                    <i class="fa-solid fa-message"></i>
                                    {{ __('forms.message') }}:
                                    <p>{{ $contact->message }}</p>
                                </li>
                                <li class="contacts-block__item">
                                    <i class="fa-solid fa-calendar"></i>
                                    {{ __('forms.msg_sent_at') }}:
                                    {{ $contact->created_at->format('Y-m-d H:i:s') }}
                                </li>
                            </ul>
                        </div>
                    </div>

                    <hr>
                    <div class="mt-4">
                        <h5>{{ __('forms.change_status') }}</h5>
                        <form action="{{ route('admin.contacts.update', $contact->id) }}" method="POST">
                            @csrf
                            @method('PATCH')
                            <div class="form-group">
                                <label for="status">{{ __('forms.status') }}</label>
                                <select name="status" id="status" class="form-control">
                                    <option value="pending" {{ $contact->status == 'pending' ? 'selected' : '' }}>
                                        {{ __('forms.pending') }}
                                    </option>
                                    <option value="done" {{ $contact->status == 'done' ? 'selected' : '' }}>
                                        {{ __('forms.done') }}
                                    </option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary mt-3">
                                {{ __('forms.update_status') }}
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
