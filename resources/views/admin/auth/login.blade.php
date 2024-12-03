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
                        <x-auth-session-status class="mb-4" :status="session('status')" />

                        <form class="text-left" action="{{ route('admin.login') }}" method="post">
                            @csrf
                            <div class="form">
                                <div id="email-field" class="field-wrapper input">
                                    <label for="email" class="field-wrapper lable mx-3"> @lang('auth.email_placeholder')</label>
                                    <input id="email" name="email" type="text" class="form-control"
                                        placeholder="@lang('auth.email_placeholder')">
                                    <x-input-error :messages="$errors->get('email')" class="mt-2 text-danger" />

                                </div>

                                <div id="password-field" class="field-wrapper input mb-2">
                                    <label for="password" class="field-wrapper lable mx-3"> @lang('auth.password_placeholder')</label>

                                    <input id="password" name="password" type="password" class="form-control"
                                        placeholder="@lang('auth.password_placeholder')">
                                    <x-input-error :messages="$errors->get('password')" class="mt-2 text-danger" />

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
                                            <input type="checkbox" class="new-control-input" name="remember">
                                            <span class="new-control-indicator"></span>@lang('auth.remember_me')
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <p class="terms-conditions">
                            @lang('auth.terms_conditions', ['product' => '<a href="index.html">CORK</a>']) <a href="javascript:void(0);">@lang('auth.cookie_preferences')</a>, <a
                                href="javascript:void(0);">@lang('auth.privacy')</a>, <a
                                href="javascript:void(0);">@lang('auth.terms')</a>.
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('toggle-password').addEventListener('change', function () {
    const passwordInput = document.getElementById('password');
    if (this.checked) {
        passwordInput.type = 'text';
    } else {
        passwordInput.type = 'password';
    }
});

    </script>
@endsection
