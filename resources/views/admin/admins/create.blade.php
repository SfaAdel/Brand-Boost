@extends('admin.layouts.main')

@section('title', __('sidebar.admins') . ' - ' . __('forms.add_new_admin'))

@section('content')
    <div class="card main-card m-1">
        <div class="container">

            <div class="my-3">
                @include('admin.includes.alerts')
            </div>

            <div class="row layout-top-spacing">
                <div class="col-lg-12 col-12 layout-spacing">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-header">
                            <h4>{{ __('forms.add_new_admin') }}</h4>
                        </div>
                        <div class="widget-content widget-content-area">
                            <form action="{{ route('admin.admins.store') }}" method="POST">
                                @csrf
                                <div class="form-group mb-4">
                                    <label for="name">{{ __('forms.name') }}</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="{{ __('forms.enter_name') }}" required>
                                </div>
                                <div class="form-group mb-4">
                                    <label for="email">{{ __('forms.email_address') }}</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="{{ __('forms.enter_email') }}" required>
                                </div>
                                <div class="form-group mb-4">
                                    <label for="password">{{ __('forms.password') }}</label>
                                    <input type="password" class="form-control" id="password" name="password" placeholder="{{ __('forms.enter_password') }}" required>
                                </div>
                                <div class="form-group mb-4">
                                    <label for="password_confirmation">{{ __('forms.confirm_password') }}</label>
                                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="{{ __('forms.confirm_password') }}" required>
                                </div>
                                <div class="form-group mb-4">
                                    <label for="role">{{ __('forms.role') }}</label>
                                    <select class="form-control" id="role" name="role" required>
                                        <option value="admin">{{ __('forms.admin') }}</option>
                                        <option value="super_admin">{{ __('forms.super_admin') }}</option>
                                        <option value="data_entry">{{ __('forms.data_entry') }}</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary mt-4">{{ __('forms.save') }}</button>
                                <a href="{{ route('admin.admins.index') }}" class="btn btn-secondary mt-4">{{ __('forms.cancel') }}</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
