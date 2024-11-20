

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

    <!-- clipboard Scripts files -->
    <script src="{{ asset('admin/rtl/assets/js/clipboard/clipboard.min.js') }}"></script>

    <!-- components Scripts files -> main -->
    <script src="{{ asset('admin/rtl/assets/js/components/custom-carousel.js') }}"></script>
    <script src="{{ asset('admin/rtl/assets/js/components/custom-countdown.js') }}"></script>
    <script src="{{ asset('admin/rtl/assets/js/components/custom-counter.js') }}"></script>
    <script src="{{ asset('admin/rtl/assets/js/components/ui-accordions.js') }}"></script>
    <!-- components Scripts files -> notification -->
    <script src="{{ asset('admin/rtl/assets/js/components/notification/custom-snackbar.js') }}"></script>
    <!-- components Scripts files -> session-timeout -->
    <script src="{{ asset('admin/rtl/assets/js/components/session-timeout/bootstrap-session-timeout.js') }}"></script>
    <script src="{{ asset('admin/rtl/assets/js/components/session-timeout/custom-bootstrap_session_timeout.js') }}"></script>


    <!-- dashboard Scripts files -->
    <script src="{{ asset('admin/rtl/assets/js/dashboard/dash_1.js') }}"></script>
    <script src="{{ asset('admin/rtl/assets/js/dashboard/dash_2.js') }}"></script>

    <!-- elements Scripts files -->
    <script src="{{ asset('admin/rtl/assets/js/elements/custom-search.js') }}"></script>
    <script src="{{ asset('admin/rtl/assets/js/elements/popovers.js') }}"></script>
    <script src="{{ asset('admin/rtl/assets/js/elements/tooltip.js') }}"></script>

    <!-- forms Scripts files -> main -->
    <script src="{{ asset('admin/rtl/assets/js/forms/custom-clipboard.js') }}"></script>
    <!-- forms Scripts files -> bootstrap_validation -->
    <script src="{{ asset('admin/rtl/assets/js/forms/bootstrap_validation/bs_validation_script.js') }}"></script>

    <!-- ie11fix Scripts files -->
    <script src="{{ asset('admin/rtl/assets/js/ie11fix/fn.fix-padStart.js') }}"></script>

    <!-- libs Scripts files -->
    <script src="{{ asset('admin/rtl/assets/js/libs/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ asset('admin/rtl/assets/js/libs/jquery-ui.js') }}"></script>

    <!-- pages Scripts files -> main -->
    <script src="{{ asset('admin/rtl/assets/js/pages/helpdesk.js') }}"></script>
    <!-- pages Scripts files -> coming-soon -->
    <script src="{{ asset('admin/rtl/assets/js/pages/coming-soon/coming-soon.js') }}"></script>
    <!-- pages Scripts files -> faq -->
    <script src="{{ asset('admin/rtl/assets/js/pages/faq/faq.js') }}"></script>
    <script src="{{ asset('admin/rtl/assets/js/pages/faq/faq2.js') }}"></script>


   <!-- users Scripts files -->
   <script src="{{ asset('admin/rtl/assets/js/users/account-settings.js') }}"></script>

   <!-- widgets Scripts files -->
   <script src="{{ asset('admin/rtl/assets/js/widgets/modules-widgets.js') }}"></script>


    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->

    <script src=" {{ asset('admin/rtl/plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <script src=" {{ asset('admin/rtl/plugins/apex/apexcharts.min.js') }}"></script>
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->

    <script src=" {{ asset('admin/rtl/plugins/table/datatable/datatables.js') }}"></script>
    <!-- NOTE TO Use Copy CSV Excel PDF Print Options You Must Include These Files  -->

    <script src=" {{ asset('admin/rtl/plugins/table/datatable/button-ext/dataTables.buttons.min.js') }}"></script>
    <script src=" {{ asset('admin/rtl/plugins/table/datatable/button-ext/jszip.min.js') }}"></script>
    <script src=" {{ asset('admin/rtl/plugins/table/datatable/button-ext/buttons.html5.min.js') }}"></script>
    <script src=" {{ asset('admin/rtl/plugins/table/datatable/button-ext/buttons.print.min.js') }}"></script>

    <script src=" {{ asset('admin/rtl/plugins/highlight/highlight.pack.js') }}"></script>

    <script>
        $('#html5-extension').DataTable({
            dom: '<"row"<"col-md-12"<"row"<"col-md-6"B><"col-md-6"f> > ><"col-md-12"rt> <"col-md-12"<"row"<"col-md-5"i><"col-md-7"p>>> >',
            buttons: {
                buttons: [{
                        extend: 'copy',
                        className: 'btn'
                    },
                    {
                        extend: 'csv',
                        className: 'btn'
                    },
                    {
                        extend: 'excel',
                        className: 'btn'
                    },
                    {
                        extend: 'print',
                        className: 'btn'
                    }
                ]
            },
            "oLanguage": {
                "oPaginate": {
                    "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>',
                    "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>'
                },
                "sInfo": "Showing page _PAGE_ of _PAGES_",
                "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                "sSearchPlaceholder": "Search...",
                "sLengthMenu": "Results :  _MENU_",
            },
            "stripeClasses": [],
            "lengthMenu": [7, 10, 20, 50],
            "pageLength": 7
        });
    </script>