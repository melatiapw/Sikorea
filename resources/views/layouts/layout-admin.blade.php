<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.head-admin')
</head>

<body class="fix-header fix-sidebar">
    <!-- Preloader - style you can find in spinners.css -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
			       <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
        </svg>
    </div>
    <!-- Main wrapper  -->
    <div id="main-wrapper">
        <!-- header header  -->
        <div class="header">
            @include('includes.header-admin')
        </div>
        <!-- End header header -->
        <!-- Page wrapper  -->
        <div class="home-wrapper">
          @yield('content')
          <!-- footer -->

          <!-- End footer -->
        </div>
        <!-- End Page wrapper  -->
        <footer class="footer">
          @include('includes.footer-admin')
        </footer>
    </div>
    <!-- End Wrapper -->
    <!-- All Jquery -->
    <script src="{{ asset('assets/ElaAdmin/js/lib/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ asset('assets/ElaAdmin/js/lib/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/ElaAdmin/js/lib/bootstrap/js/bootstrap.min.js') }}"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{ asset('assets/ElaAdmin/js/jquery.slimscroll.js') }}"></script>
    <!--Menu sidebar -->
    <script src="{{ asset('assets/ElaAdmin/js/sidebarmenu.js') }}"></script>
    <!--stickey kit -->
    <script src="{{ asset('assets/ElaAdmin/js/lib/sticky-kit-master/dist/sticky-kit.min.js') }}"></script>
    <!--Custom JavaScript -->


    <!-- Amchart -->
     <script src="{{ asset('assets/ElaAdmin/js/lib/morris-chart/raphael-min.js') }}"></script>
    <script src="{{ asset('assets/ElaAdmin/js/lib/morris-chart/morris.js') }}"></script>
    <script src="{{ asset('assets/ElaAdmin/js/lib/morris-chart/dashboard1-init.js') }}"></script>


	<script src="{{ asset('assets/ElaAdmin/js/lib/calendar-2/moment.latest.min.js') }}"></script>
    <!-- scripit init-->
    <script src="{{ asset('assets/ElaAdmin/js/lib/calendar-2/semantic.ui.min.js') }}"></script>
    <!-- scripit init-->
    <script src="{{ asset('assets/ElaAdmin/js/lib/calendar-2/prism.min.js') }}"></script>
    <!-- scripit init-->
    <script src="{{ asset('assets/ElaAdmin/js/lib/calendar-2/pignose.calendar.min.js') }}"></script>
    <!-- scripit init-->
    <script src="{{ asset('assets/ElaAdmin/js/lib/calendar-2/pignose.init.js') }}"></script>

    <script src="{{ asset('assets/ElaAdmin/js/lib/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/ElaAdmin/js/lib/owl-carousel/owl.carousel-init.js') }}"></script>
    <script src="{{ asset('assets/ElaAdmin/js/scripts.js') }}"></script>
    <!-- scripit init-->

    <script src="{{ asset('assets/ElaAdmin/js/custom.min.js') }}"></script>

</body>

</html>
