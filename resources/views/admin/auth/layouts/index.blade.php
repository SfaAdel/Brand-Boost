<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>@yield('title', 'CORK Admin Template')</title>

    <link rel="icon" type="image/x-icon" href="{{ asset('admin/assets/img/favicon.ico') }}" />

    <!-- Load RTL or LTR CSS based on locale -->
    @if (app()->getLocale() == 'ar')
        <link href="{{ asset('admin/assets/css/loader.css') }}" rel="stylesheet" type="text/css" />

        <!-- Bootstrap CSS -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">


        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">


        <!-- Global Mandatory Styles -->
        <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&display=swap" rel="stylesheet">
        <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('admin/assets/css/plugins.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('admin/assets/css/structure.css') }}" rel="stylesheet" type="text/css" class="structure" />
        <!-- End Global Mandatory Styles -->



        <!-- Cork Admin bootstrap Stylesheets -->
        <link rel="stylesheet" href="{{ asset('admin/rtl/bootstrap/css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ asset('admin/rtl/bootstrap/css/bootstrap.min.css') }}">


        <!-- main css files -->
        <link rel="stylesheet" href="{{ asset('admin/rtl/assets/css/color-pallet.css') }}">
        <link rel="stylesheet" href="{{ asset('admin/rtl/assets/css/loader.css') }}">
        <link rel="stylesheet" href="{{ asset('admin/rtl/assets/css/main.css') }}">
        <link rel="stylesheet" href="{{ asset('admin/rtl/assets/css/plugins.css') }}">
        <link rel="stylesheet" href="{{ asset('admin/rtl/assets/css/scrollspyNav.css') }}">
        <link rel="stylesheet" href="{{ asset('admin/rtl/assets/css/structure.css') }}">

        <!-- apps css files -->
        <link rel="stylesheet" href="{{ asset('admin/rtl/assets/css/apps/contacts.css') }}">
        <link rel="stylesheet" href="{{ asset('admin/rtl/assets/css/apps/invoice.css') }}">
        <link rel="stylesheet" href="{{ asset('admin/rtl/assets/css/apps/mailbox.css') }}">
        <link rel="stylesheet" href="{{ asset('admin/rtl/assets/css/apps/mailing-chat.css') }}">
        <link rel="stylesheet" href="{{ asset('admin/rtl/assets/css/apps/notes.css') }}">
        <link rel="stylesheet" href="{{ asset('admin/rtl/assets/css/apps/scrumboard.css') }}">
        <link rel="stylesheet" href="{{ asset('admin/rtl/assets/css/apps/todolist.css') }}">



        <!-- authentication css files -->
        <link rel="stylesheet" href="{{ asset('admin/rtl/assets/css/authentication/form-1.css') }}">
        <link rel="stylesheet" href="{{ asset('admin/rtl/assets/css/authentication/form-2.css') }}">

        <!-- forms css files -->
        <link rel="stylesheet" href="{{ asset('admin/rtl/assets/css/forms/bootstrap-form.css') }}">
        <link rel="stylesheet" href="{{ asset('admin/rtl/assets/css/forms/custom-clipboard.css') }}">
        <link rel="stylesheet" href="{{ asset('admin/rtl/assets/css/forms/switches.css') }}">
        <link rel="stylesheet" href="{{ asset('admin/rtl/assets/css/forms/theme-checkbox-radio.css') }}">
    @elseif (app()->getLocale() == 'en')
        <link href="{{ asset('admin/assets/css/loader.css') }}" rel="stylesheet" type="text/css" />

        <!-- Bootstrap CSS -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">


        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">


        <!-- Global Mandatory Styles -->
        <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&display=swap" rel="stylesheet">
        <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('admin/assets/css/plugins.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('admin/assets/css/structure.css') }}" rel="stylesheet" type="text/css"
            class="structure" />
        <!-- End Global Mandatory Styles -->



        <!-- Cork Admin bootstrap Stylesheets -->
        <link rel="stylesheet" href="{{ asset('admin/ltr/bootstrap/css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ asset('admin/ltr/bootstrap/css/bootstrap.min.css') }}">


        <!-- main css files -->
        <link rel="stylesheet" href="{{ asset('admin/ltr/assets/css/color-pallet.css') }}">
        <link rel="stylesheet" href="{{ asset('admin/ltr/assets/css/loader.css') }}">
        <link rel="stylesheet" href="{{ asset('admin/ltr/assets/css/main.css') }}">
        <link rel="stylesheet" href="{{ asset('admin/ltr/assets/css/plugins.css') }}">
        <link rel="stylesheet" href="{{ asset('admin/ltr/assets/css/scrollspyNav.css') }}">
        <link rel="stylesheet" href="{{ asset('admin/ltr/assets/css/structure.css') }}">

        <!-- apps css files -->
        <link rel="stylesheet" href="{{ asset('admin/ltr/assets/css/apps/contacts.css') }}">
        <link rel="stylesheet" href="{{ asset('admin/ltr/assets/css/apps/invoice.css') }}">
        <link rel="stylesheet" href="{{ asset('admin/ltr/assets/css/apps/mailbox.css') }}">
        <link rel="stylesheet" href="{{ asset('admin/ltr/assets/css/apps/mailing-chat.css') }}">
        <link rel="stylesheet" href="{{ asset('admin/ltr/assets/css/apps/notes.css') }}">
        <link rel="stylesheet" href="{{ asset('admin/ltr/assets/css/apps/scrumboard.css') }}">
        <link rel="stylesheet" href="{{ asset('admin/ltr/assets/css/apps/todolist.css') }}">


        <!-- authentication css files -->
        <link rel="stylesheet" href="{{ asset('admin/ltr/assets/css/authentication/form-1.css') }}">
        <link rel="stylesheet" href="{{ asset('admin/ltr/assets/css/authentication/form-2.css') }}">

        <!-- forms css files -->
        <link rel="stylesheet" href="{{ asset('admin/ltr/assets/css/forms/bootstrap-form.css') }}">
        <link rel="stylesheet" href="{{ asset('admin/ltr/assets/css/forms/custom-clipboard.css') }}">
        <link rel="stylesheet" href="{{ asset('admin/ltr/assets/css/forms/switches.css') }}">
        <link rel="stylesheet" href="{{ asset('admin/ltr/assets/css/forms/theme-checkbox-radio.css') }}">
    @endif

</head>

<body class="@yield('body-class', 'form')">


    @yield('content')

    <!-- Load RTL or LTR JS based on locale -->
    @if (app()->getLocale() == 'ar')
        <!-- Bootstrap JS, Popper.js, and jQuery -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        <!-- Cork Admin bootstrap Scripts -->
        <script src="{{ asset('admin/rtl/bootstrap/js/bootstrap.js') }}"></script>
        <script src="{{ asset('admin/rtl/bootstrap/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('admin/rtl/bootstrap/js/popper.min.js') }}"></script>


        <!-- main Scripts files -->
        <script src="{{ asset('admin/rtl/assets/js/app.js') }}"></script>
        <script src="{{ asset('admin/rtl/assets/js/custom.js') }}"></script>
        <script src="{{ asset('admin/rtl/assets/js/loader.js') }}"></script>
        <script src="{{ asset('admin/rtl/assets/js/scrollspyNav.js') }}"></script>

        <!-- apps Scripts files -->
        <script src="{{ asset('admin/rtl/assets/js/apps/contact.js') }}"></script>
        <script src="{{ asset('admin/rtl/assets/js/apps/custom-mailbox.js') }}"></script>
        <script src="{{ asset('admin/rtl/assets/js/apps/invoice.js') }}"></script>
        <script src="{{ asset('admin/rtl/assets/js/apps/mailbox-chat.js') }}"></script>
        <script src="{{ asset('admin/rtl/assets/js/apps/notes.js') }}"></script>
        <script src="{{ asset('admin/rtl/assets/js/apps/scrumboard.js') }}"></script>
        <script src="{{ asset('admin/rtl/assets/js/apps/todoList.js') }}"></script>

        <!-- authentication Scripts files -->
        <script src="{{ asset('admin/rtl/assets/js/authentication/form-1.js') }}"></script>
        <script src="{{ asset('admin/rtl/assets/js/authentication/form-2.js') }}"></script>
    @elseif (app()->getLocale() == 'en')
        <!-- Bootstrap JS, Popper.js, and jQuery -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        <!-- Cork Admin bootstrap Scripts -->
        <script src="{{ asset('admin/ltr/bootstrap/js/bootstrap.js') }}"></script>
        <script src="{{ asset('admin/ltr/bootstrap/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('admin/ltr/bootstrap/js/popper.min.js') }}"></script>


        <!-- main Scripts files -->
        <script src="{{ asset('admin/ltr/assets/js/app.js') }}"></script>
        <script src="{{ asset('admin/ltr/assets/js/custom.js') }}"></script>
        <script src="{{ asset('admin/ltr/assets/js/loader.js') }}"></script>
        <script src="{{ asset('admin/ltr/assets/js/scrollspyNav.js') }}"></script>

        <!-- apps Scripts files -->
        <script src="{{ asset('admin/ltr/assets/js/apps/contact.js') }}"></script>
        <script src="{{ asset('admin/ltr/assets/js/apps/custom-mailbox.js') }}"></script>
        <script src="{{ asset('admin/ltr/assets/js/apps/invoice.js') }}"></script>
        <script src="{{ asset('admin/ltr/assets/js/apps/mailbox-chat.js') }}"></script>
        <script src="{{ asset('admin/ltr/assets/js/apps/notes.js') }}"></script>
        <script src="{{ asset('admin/ltr/assets/js/apps/scrumboard.js') }}"></script>
        <script src="{{ asset('admin/ltr/assets/js/apps/todoList.js') }}"></script>

        <!-- authentication Scripts files -->
        <script src="{{ asset('admin/ltr/assets/js/authentication/form-1.js') }}"></script>
        <script src="{{ asset('admin/ltr/assets/js/authentication/form-2.js') }}"></script>
    @endif



</body>

</html>
