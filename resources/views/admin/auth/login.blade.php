@extends('admin.auth.layouts.index')

@section('title', __('auth.login_title'))

@section('body-class', 'form no-image-content')

@section('content')
<div class="form-container">
    <div class="form-form">
        <div class="form-form-wrap">
            <div class="form-container">
                <div class="form-content">

                    <h1 class="mb-3">@lang('auth.login_title') </h1>

                    <form class="text-left">
                        <div class="form">
                            <div id="username-field" class="field-wrapper input">
                                <input id="username" name="username" type="text" class="form-control" placeholder="@lang('auth.username_placeholder')">
                            </div>

                            <div id="password-field" class="field-wrapper input mb-2">
                                <input id="password" name="password" type="password" class="form-control" placeholder="@lang('auth.password_placeholder')">
                            </div>
                            <div class="d-sm-flex justify-content-between">
                                <div class="field-wrapper toggle-pass">
                                    <p class="d-inline-block">@lang('auth.show_password')</p>
                                    <label class="switch s-primary">
                                        <input type="checkbox" id="toggle-password" class="d-none">
                                        <span class="slider round"></span>
                                    </label>
                                </div>
                            </div>
<br>
                            <div class="d-sm-flex justify-content-between my-3">


                                <div class="field-wrapper">
                                    <button type="submit" class="btn btn-primary">@lang('auth.login_button')</button>
                                </div>
                            </div>

                            <div class="field-wrapper text-center keep-logged-in">
                                <div class="n-chk new-checkbox checkbox-outline-primary">
                                    <label class="new-control new-checkbox checkbox-outline-primary">
                                        <input type="checkbox" class="new-control-input">
                                        <span class="new-control-indicator"></span>@lang('auth.keep_logged_in')
                                    </label>
                                </div>
                            </div>

                            <div class="field-wrapper">
                                <a href="auth_pass_recovery.html" class="forgot-pass-link">@lang('auth.forgot_password')</a>
                            </div>
                        </div>
                    </form>
                    <p class="terms-conditions">
                        @lang('auth.terms_conditions', ['product' => '<a href="index.html">CORK</a>']) <a href="javascript:void(0);">@lang('auth.cookie_preferences')</a>, <a href="javascript:void(0);">@lang('auth.privacy')</a>, <a href="javascript:void(0);">@lang('auth.terms')</a>.
                    </p>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
