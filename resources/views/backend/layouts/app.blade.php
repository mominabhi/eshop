<!DOCTYPE html>
<html lang="en">

<head>
    @include('backend.inc.header')
</head>

<body class="">


    <!-- [ navigation menu ] start -->

    @include('backend.inc.side_nav')

    <!-- [ navigation menu ] end -->

    <!-- [ Header ] start -->
    @include('backend.inc.header_nav')
    <!-- [ Header ] end -->

    <!-- [ Main Content ] start -->
    <div class="pcoded-main-container">
        <div class="pcoded-wrapper">
            <div class="pcoded-content">
                <div class="pcoded-inner-content">
                    <div class="main-body">
                        <div class="page-wrapper">

                            @yield('main_content')

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('backend.inc.footer')
</body>

</html>
