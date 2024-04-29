@include('frontEnd.include.style')
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience</p>
<![endif]-->
<!--Main Wrapper Start-->
<div class="wrapper bg-white fix">
    <!--Bg White Start-->
    <div class="bg-white">
        <!--Header Area Start-->
        @include('frontEnd.include.header')
        <!-- End of Header Area -->
        @yield('content')
        <!-- Start of Footer area -->
        @include('frontEnd.include.footer')
        <!-- End of Footer area -->
    </div>
    <!--End of Bg White-->
</div>
<!--End of Main Wrapper Area-->
<!-- all js here -->
@include('frontEnd.include.script')