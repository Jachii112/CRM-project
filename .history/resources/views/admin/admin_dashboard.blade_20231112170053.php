<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Responsive HTML Admin Dashboard">
    <meta name="author" content="AWESmanila">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Admin Panel - AWES</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <!-- End fonts -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/5.11.5/main.min.css"
        integrity="sha512-1P/SRFqI1do4eNtBsGIAqIZIlnmOQkaY7ESI2vkl+q+hl9HSXmdPqotN0McmeZVyR4AWV+NvkP6pKOiVdY/V5A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- custom css -->

    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('backend/assets/vendors/datatables.net-bs5/dataTables.bootstrap5.css') }}">
    <!-- End plugin css for this page -->

    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('backend/assets/vendors/prismjs/themes/prism.css') }}">
    <!-- End plugin css for this page -->

    <!-- core:css -->
    <link rel="stylesheet" href="{{ asset('backend/assets/vendors/core/core.css') }}">
    <!-- endinject -->

    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('backend/assets/vendors/flatpickr/flatpickr.min.css') }}">
    <!-- End plugin css for this page -->

    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('backend/assets/fonts/feather-font/css/iconfont.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/vendors/flag-icon-css/css/flag-icon.min.css') }}">
    <!-- endinject -->

    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('backend/assets/css/demo1/style.css') }}">
    <!-- End layout styles -->

    <link rel="stylesheet" href="{{ asset('backend/assets/css/custom_css/select_element_custom.css') }}">

    <link rel="stylesheet" href="{{ asset('backend/assets/css/custom_css/custom_card.css') }}">

    <link rel="stylesheet" href="{{ asset('backend/assets/css/custom_css/custom_link.css') }}">

    <link rel="stylesheet" href="{{ asset('backend/assets/css/custom_css/stylesheetsform.css') }}">

    <link rel="stylesheet" href="{{ asset('backend/assets/css/custom_css/add_purchaseOrder.css') }}">

    <link rel="stylesheet" href="{{ asset('backend/assets/css/custom_css/purchaseOrder.css') }}">

    <link rel="shortcut icon" href="{{ asset('backend/assets/images/favicon.png') }}" />

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
</head>

<body>
    <div class="main-wrapper">

        <!-- partial:partials/_sidebar.html -->
        @include('admin.body.sidebar')
        <!-- partial -->

        <div class="page-wrapper">

            <!-- partial:partials/_navbar.html -->
            @include('admin.body.header')
            <!-- partial -->

            @yield('admin')

            <!-- partial:partials/_footer.html -->
            @include('admin.body.footer')
            <!-- partial -->

        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/5.11.5/main.min.js"
        integrity="sha512-VyGX7HXwa9yMgIfDPYcj7+XFjtSEzqY7LTf2Tvn2FAf4O6MkD5UzNkrlkMHyLQMbdYfor8SNYKyyeBhTazNgPw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>

    <script src="{{ asset('backend/assets/vendors/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/tinymce.js') }}"></script>

    <!-- core:js -->
    <script src="{{ asset('backend/assets/vendors/core/core.js') }}"></script>
    <!-- endinject -->

    <!-- Plugin js for this page -->
    <script src="{{ asset('backend/assets/vendors/flatpickr/flatpickr.min.js') }}"></script>
    <script src="{{ asset('backend/assets/vendors/apexcharts/apexcharts.min.js') }}"></script>
    <!-- End plugin js for this page -->

    <!-- inject:js -->
    <script src="{{ asset('backend/assets/vendors/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/template.js') }}"></script>
    <!-- endinject -->

    <!-- Custom js for this page -->
    <script src="{{ asset('backend/assets/js/dashboard-dark.js') }}"></script>
    <!-- End custom js for this page -->

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        @if (Session::has('message'))
            var type = "{{ Session::get('alert-type', 'info') }}"
            switch (type) {
                case 'info':
                    toastr.info(" {{ Session::get('message') }} ");
                    break;

                case 'success':
                    toastr.success(" {{ Session::get('message') }} ");
                    break;

                case 'warning':
                    toastr.warning(" {{ Session::get('message') }} ");
                    break;

                case 'error':
                    toastr.error(" {{ Session::get('message') }} ");
                    break;
            }
        @endif
    </script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <script>
        $(document).ready(function() {
            $('.dataTableExample').DataTable();
        });
    </script>

    <script src="{{ asset('backend/assets/js/custom_js/alert.js') }}"></script>

    <script src="{{ asset('backend/assets/js/custom_js/addRows.js') }}"></script>

    <script src="{{ asset('backend/assets/js/custom_js/radiobutton.js') }}"></script>

    <!-- Start DataTable -->
    <script src="{{ asset('backend/assets/vendors/datatables.net/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('backend/assets/vendors/datatables.net-bs5/dataTables.bootstrap5.js') }}"></script>

    <script src="{{ asset('backend/assets/js/data-table.js') }}"></script>
    <!-- End DataTable -->

    <!-- Plugin js for this page -->
    <script src="{{ asset('backend/assets/vendors/prismjs/prism.js') }}"></script>
    <script src="{{ asset('backend/assets/vendors/clipboard/clipboard.min.js') }}"></script>
    <!-- End plugin js for this page -->

    <script src="{{ asset('backend/assets/js/custom_js/other-option.js') }}"></script>

    <script src="{{ asset('backend/assets/js/custom_js/unit-counter.js') }}"></script>

    <script src="{{ asset('backend/assets/js/custom_js/customer-or-organization.js') }}"></script>

    <script src="{{ asset('backend/assets/js/custom_js/popup.js') }}"></script>

    <script src="{{ asset('backend/assets/js/custom_js/submitAsOpen.js') }}"></script>

    <script src="{{ asset('backend/assets/js/custom_js/submitAsResolved.js') }}"></script>

    <script src="{{ asset('backend/assets/js/custom_js/addunit.js') }}"></script>

    <script src="{{ asset('backend/assets/js/custom_js/addRows2.js') }}"></script>

    <script src="{{ asset('backend/assets/js/custom_js/editCustomer.js') }}"></script>

    <script src="{{ asset('backend/assets/js/custom_js/fetchCustomerData.js') }}"></script>

    <script>
        var storePurchaseMaterialsUrl = "{{ route('store.purchaseOrders.materials') }}";
    </script>

</body>

</html>
