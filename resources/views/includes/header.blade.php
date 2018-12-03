<div class="site-navbar-top">
  <div class="container">
    <div class="row align-items-center">
      <!-- logo -->
      <div class="col-12 mb-3 mb-md-0 col-md-4 order-1 order-md-2 text-left">
        <div class="site-logo">
          <a href="{{ url('/home')}}" class="js-logo-clone">Konveksi Area</a>
        </div>
      </div>

      <div class="col-12 col-md-8 order-3 order-md-3 text-right">
        <div class="site-top-icons">
          <ul>
            <!-- Login -->
            <li><a href="#">Login</a></li>
            <li><a href="#">Register</a></li>
            <!-- Notifikasi -->
            <li><a href="#"><span class="icon icon-bell-o"></span></a></li>
            <!-- Keranjang Belanja -->
            <li>
              <a href="cart.html" class="site-cart">
                <span class="icon icon-shopping_cart"></span>
                <span class="count">2</span>
              </a>
            </li>

            <!-- Profil -->

            <li><a href="#"><span class="icon icon-person"></span></a></li>
            <li class="d-inline-block d-md-none ml-md-0"><a href="#" class="site-menu-toggle js-menu-toggle"><span class="icon-menu"></span></a></li>
          </ul>
        </div>
      </div>

    </div>
  </div>
</div>

<nav class="site-navigation text-center text-md-center" role="navigation">
  <div class="container">
    <ul class="site-menu js-clone-nav d-none d-md-block">
      <!-- Katalog -->

      <li class="has-children active">
        <a href="#katalog">Katalog</a>
        <ul class="dropdown">
          <li><a href="#">Kaos</a></li>
        </ul>
      </li>
      <!-- Kontak -->
      <li><a href="{{ url('/contact')}}">Contact</a></li>
    </ul>
  </div>
</nav>
