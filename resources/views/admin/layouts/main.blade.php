<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>@yield('title', 'CORK Admin Template')</title>
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('front-end/logo/PNG/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('front-end/logo/PNG/favicon-16x16.png') }}">
    {{-- <link rel="icon" type="image/x-icon" href="{{ asset('admin/assets/img/favicon.ico') }}" /> --}}

    <!-- Load RTL or LTR CSS based on locale -->
    @if (app()->getLocale() == 'ar')
        @include('admin.includes.css.rtl_css')
    @elseif (app()->getLocale() == 'en')
        @include('admin.includes.css.ltr_css')
    @endif

    @stack('custom-css')

</head>

<body class="@yield('body-class', 'dashboard-analytics')">

    <!-- BEGIN LOADER -->
    <div id="load_screen">
        <div class="loader">
            <div class="loader-content">
                <div class="spinner-grow align-self-center"></div>
            </div>
        </div>
    </div>
    <!--  END LOADER -->

    <!-- Navbar -->
    @include('admin.includes.navbar')

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="search-overlay"></div>

        <!--  BEGIN SIDEBAR  -->
        @include('admin.includes.sidebar')
        <!--  END SIDEBAR  -->

        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content mt-0">
            @yield('content')

            <!-- Footer -->
            @include('admin.includes.footer')
        </div>
        <!--  END CONTENT AREA  -->

    </div>
    <!-- END MAIN CONTAINER -->



    <!-- Load RTL or LTR JS based on locale -->
    @if (app()->getLocale() == 'ar')
        @include('admin.includes.js.rtl_js')
    @elseif (app()->getLocale() == 'en')
        @include('admin.includes.js.ltr_js')
    @endif

    @stack('custom-js')

    <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            @foreach (config('app.languages') as $key => $lang)
                ClassicEditor
                    .create(document.querySelector('#long_description_{{ $key }}'), {
                        toolbar: [
                            'heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote', 'imageUpload', 'undo', 'redo'
                        ]
                    })
                    .catch(error => {
                        console.error(error);
                    });
            @endforeach
        });
    </script>
</body>

</html>
