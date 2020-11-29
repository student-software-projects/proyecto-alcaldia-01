
<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>SENA</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <link rel="stylesheet" href="{{ url('css/app.css') }}">

</head>


<body data-sidebar="dark">

<!-- <body data-layout="horizontal" data-topbar="dark"> -->

<!-- Begin page -->
<div id="layout-wrapper">

    @include('layouts.admin.componets.navbar')

    @include('layouts.admin.componets.sidebar')

    <div class="main-content">

        <div class="page-content">
            @yield('content')
        </div>
        <!-- End Page-content -->


    @include('layouts.admin.componets.footer')
    </div>
    <!-- end main content-->

</div>
<div class="rightbar-overlay"></div>

<script src="{{ url('js/app.js') }}"></script>

</body>
</html>
