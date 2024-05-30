<!DOCTYPE html>
<html lang="zxx">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    @include('fronted.layouts.includes.head')

</head>

<body class="light-version">
    <!-- Preloader -->
    <div id="preloader">
        <div class="preload-content">
            <div id="loader-load"></div>
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    @include('fronted.layouts.includes.header')
    <!-- ##### Header Area End ##### -->


    @yield('content')


    <!-- Mirrored from soscar.netlify.app/index-demo-1 by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 29 Feb 2024 17:56:02 GMT -->
</body>
@include('fronted.layouts.includes.footer')

@include('fronted.layouts.includes.script')

</html>
