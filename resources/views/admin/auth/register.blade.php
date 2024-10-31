@extends('admin.auth.layouts.index')

@section('title', __('auth.register_title'))

@section('body-class', 'form')

@section('content')
    <div class="form-container outer">
        <div class="form-form">
            <div class="form-form-wrap">
                <div class="form-container">
                    <div class="form-content">

                        <h1 class="">@lang('auth.register_title')</h1>
                        <p class="signup-link register">
                            @lang('auth.already_have_account')
                            <a href="{{ route('admin.login') }}">@lang('auth.login')</a>
                        </p>
                        <form class="text-left" action="{{ route('admin.register') }}" method="POST">
                            @csrf
                            <div class="form">
                                <div id="username-field" class="field-wrapper input">
                                    <label for="username">@lang('auth.username_label')</label>
                                    <input id="username" name="name" type="text" class="form-control"
                                        placeholder="@lang('auth.username_placeholder')">
                                    <x-input-error :messages="$errors->get('name')" class="mt-2 text-danger" />

                                </div>

                                <div id="email-field" class="field-wrapper input">
                                    <label for="email">@lang('auth.email_label')</label>
                                    <input id="email" name="email" type="text" value="" class="form-control"
                                        placeholder="@lang('auth.email_placeholder')">
                                    <x-input-error :messages="$errors->get('email')" class="mt-2 text-danger" />

                                </div>

                                <div id="password-field" class="field-wrapper input mb-2">
                                    <div class="d-flex justify-content-between">
                                        <label for="password">@lang('auth.password_label')</label>

                                    </div>
                                    <input id="password" name="password" type="password" class="form-control"
                                        placeholder="@lang('auth.password_placeholder')">
                                    <x-input-error :messages="$errors->get('password')" class="mt-2 text-danger" />

                                </div>

                                <!-- Confirm Password -->
                                <div id="password-confirmation-field" class="field-wrapper input mb-2">
                                    <label for="password_confirmation">@lang('auth.confirm_password_label')</label>
                                    <input id="password_confirmation" name="password_confirmation" type="password"
                                        class="form-control" placeholder="@lang('auth.confirm_password_placeholder')" required>
                                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 text-danger" />
                                </div>

                                <div class="field-wrapper terms_condition">
                                    <div class="n-chk">
                                        <label class="new-control new-checkbox checkbox-primary">
                                            <input type="checkbox" class="new-control-input" required>
                                            <span class="new-control-indicator"></span>
                                            <span>@lang('auth.agree_terms')
                                                <a href="javascript:void(0);">@lang('auth.terms_conditions')</a>
                                            </span>
                                        </label>
                                    </div>
                                </div>

                                <div class="d-sm-flex justify-content-between">
                                    <div class="field-wrapper">
                                        <button type="submit" class="btn btn-primary">@lang('auth.get_started')</button>
                                    </div>
                                </div>


                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
