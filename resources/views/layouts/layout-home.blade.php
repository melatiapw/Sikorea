<!DOCTYPE html>
<html lang="en">
  <head>
    @include('includes.head')
  </head>
  <body>

  <div class="site-wrap">
    <header class="site-navbar" role="banner">
      @include('includes.header')
    </header>
    @yield('content')
    <footer class="site-footer border-top">
      @include('includes.footer')
    </footer>
  </div>

  <script src="{{ asset('assets/shoppers/js/jquery-3.3.1.min.js') }}"></script>
  <script src="{{ asset('assets/shoppers/js/jquery-ui.js') }}"></script>
  <script src="{{ asset('assets/shoppers/js/popper.min.js') }}"></script>
  <script src="{{ asset('assets/shoppers/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('assets/shoppers/js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('assets/shoppers/js/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{ asset('assets/shoppers/js/aos.js') }}"></script>

  <script src="{{ asset('assets/shoppers/js/main.js') }}"></script>

  </body>
</html>
