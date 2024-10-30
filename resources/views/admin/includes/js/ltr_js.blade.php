

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

    {{-- <!-- authentication Scripts files -->
    <script src="{{ asset('admin/ltr/assets/js/authentication/form-1.js') }}"></script>
    <script src="{{ asset('admin/ltr/assets/js/authentication/form-2.js') }}"></script> --}}

    <!-- clipboard Scripts files -->
    <script src="{{ asset('admin/ltr/assets/js/clipboard/clipboard.min.js') }}"></script>

    <!-- components Scripts files -> main -->
    <script src="{{ asset('admin/ltr/assets/js/components/custom-carousel.js') }}"></script>
    <script src="{{ asset('admin/ltr/assets/js/components/custom-countdown.js') }}"></script>
    <script src="{{ asset('admin/ltr/assets/js/components/custom-counter.js') }}"></script>
    <script src="{{ asset('admin/ltr/assets/js/components/ui-accordions.js') }}"></script>
    <!-- components Scripts files -> notification -->
    <script src="{{ asset('admin/ltr/assets/js/components/notification/custom-snackbar.js') }}"></script>
    <!-- components Scripts files -> session-timeout -->
    <script src="{{ asset('admin/ltr/assets/js/components/session-timeout/bootstrap-session-timeout.js') }}"></script>
    <script src="{{ asset('admin/ltr/assets/js/components/session-timeout/custom-bootstrap_session_timeout.js') }}"></script>


    <!-- dashboard Scripts files -->
    <script src="{{ asset('admin/ltr/assets/js/dashboard/dash_1.js') }}"></script>
    <script src="{{ asset('admin/ltr/assets/js/dashboard/dash_2.js') }}"></script>

    <!-- elements Scripts files -->
    <script src="{{ asset('admin/ltr/assets/js/elements/custom-search.js') }}"></script>
    <script src="{{ asset('admin/ltr/assets/js/elements/popovers.js') }}"></script>
    <script src="{{ asset('admin/ltr/assets/js/elements/tooltip.js') }}"></script>

    <!-- forms Scripts files -> main -->
    <script src="{{ asset('admin/ltr/assets/js/forms/custom-clipboard.js') }}"></script>
    <!-- forms Scripts files -> bootstrap_validation -->
    <script src="{{ asset('admin/ltr/assets/js/forms/bootstrap_validation/bs_validation_script.js') }}"></script>

    <!-- ie11fix Scripts files -->
    <script src="{{ asset('admin/ltr/assets/js/ie11fix/fn.fix-padStart.js') }}"></script>

    <!-- libs Scripts files -->
    <script src="{{ asset('admin/ltr/assets/js/libs/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ asset('admin/ltr/assets/js/libs/jquery-ui.js') }}"></script>

    <!-- pages Scripts files -> main -->
    <script src="{{ asset('admin/ltr/assets/js/pages/helpdesk.js') }}"></script>
    <!-- pages Scripts files -> coming-soon -->
    <script src="{{ asset('admin/ltr/assets/js/pages/coming-soon/coming-soon.js') }}"></script>
    <!-- pages Scripts files -> faq -->
    <script src="{{ asset('admin/ltr/assets/js/pages/faq/faq.js') }}"></script>
    <script src="{{ asset('admin/ltr/assets/js/pages/faq/faq2.js') }}"></script>


   <!-- users Scripts files -->
   <script src="{{ asset('admin/ltr/assets/js/users/account-settings.js') }}"></script>

   <!-- widgets Scripts files -->
   <script src="{{ asset('admin/ltr/assets/js/widgets/modules-widgets.js') }}"></script>

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->

    <script src=" {{ asset('admin/ltr/plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <script src=" {{ asset('admin/ltr/plugins/apex/apexcharts.min.js') }}"></script>
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
