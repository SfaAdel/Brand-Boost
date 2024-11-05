@extends('admin.layouts.main')

@section('title', __('sidebar.admins') . ' - ' . __('forms.edit_admin'))

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
                            <h4>{{ __('forms.edit_admin') }}</h4>
                        </div>
                        <div class="widget-content widget-content-area">
                            <form action="{{ route('admin.admins.update', $admin->id) }}" method="POST">
                                @csrf
                                @method('PATCH')
                                
                                <div class="form-group mb-4">
                                    <label for="name">{{ __('forms.name') }}</label>
                                    <input type="text" class="form-control" id="name" name="name" 
                                           placeholder="{{ __('forms.enter_name') }}" 
                                           value="{{ old('name', $admin->name) }}" required>
                                </div>
                                
                                <div class="form-group mb-4">
                                    <label for="email">{{ __('forms.email_address') }}</label>
                                    <input type="email" class="form-control" id="email" name="email" 
                                           placeholder="{{ __('forms.enter_email') }}" 
                                           value="{{ old('email', $admin->email) }}" required>
                                </div>

                                <div class="form-group mb-4">
                                    <label for="password">{{ __('forms.password') }}</label>
                                    <input type="password" class="form-control" id="password" name="password" 
                                           placeholder="{{ __('forms.enter_new_password') }}">
                                    <small class="form-text text-muted">{{ __('forms.leave_blank_to_keep_current_password') }}</small>
                                </div>

                                <div class="form-group mb-4">
                                    <label for="password_confirmation">{{ __('forms.confirm_password') }}</label>
                                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" 
                                           placeholder="{{ __('forms.confirm_password') }}">
                                </div>

                                <div class="form-group mb-4">
                                    <label for="role">{{ __('forms.role') }}</label>
                                    <select class="form-control" id="role" name="role" required>
                                        <option value="admin" {{ old('role', $admin->role) == 'admin' ? 'selected' : '' }}>{{ __('forms.admin') }}</option>
                                        <option value="super_admin" {{ old('role', $admin->role) == 'super_admin' ? 'selected' : '' }}>{{ __('forms.super_admin') }}</option>
                                        <option value="data_entry" {{ old('role', $admin->role) == 'data_entry' ? 'selected' : '' }}>{{ __('forms.data_entry') }}</option>
                                    </select>
                                </div>
                                
                                <button type="submit" class="btn btn-primary mt-4">{{ __('forms.update') }}</button>
                                <a href="{{ route('admin.admins.index') }}" class="btn btn-secondary mt-4">{{ __('forms.cancel') }}</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
