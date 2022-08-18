<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <title>@yield('title')</title>
    @include('frontend.inc.header')


</head>

<body>
    <!-- Start Main Top -->
    @include('frontend.inc.top_nav')
    <!-- End Main Top -->

    <!-- Start Main Top -->

    @include('frontend.inc.main_nav')
    <!-- End Main Top -->

    <!-- Start Slider -->
    @yield('slider')
    <!-- End Slider -->

    {{-- start main content --}}

    @yield('main_content')

    {{-- end main content --}}


    <!-- Start Footer  -->

    @include('frontend.inc.footer')

    <!-- End Footer  -->

</body>

</html>
