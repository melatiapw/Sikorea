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
        <div class="navbar-collapse">
          <ul class="navbar-nav my-lg-0">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                    <!-- Notifikasi -->
                    <li class="nav-item dropdown">
                      <a class="site-cart" data-toggle="dropdown">
                        <span class="icon icon-bell"></span>
                        <span class="count">2</span>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right mailbox animated zoomIn">
                            <ul>
                                <li>
                                    <div class="drop-title">Notifications</div>
                                </li>
                                <li>
                                    <div class="message-center">
                                        <!-- Message -->
                                        <a href="#">
                                            <div class="mail-contnet">
                                                <h5>This is title</h5> <span class="mail-desc">Just see the my new admin!</span> <span class="time">9:30 AM</span>
                                            </div>
                                        </a>

                                    </div>
                                </li>
                                <li>
                                    <a class="nav-link text-center" href="javascript:void(0);"> <strong>Check all notifications</strong> <i class="fa fa-angle-right"></i> </a>
                                </li>
                            </ul>
                      </div>
                    </li>
                    <!-- Cart -->
                    <li>
                      <a href="{{ url('/cart')}}" class="site-cart">
                        <span class="icon icon-shopping_cart"></span>
                        <span class="count">2</span>
                      </a>
                    </li>
                    <!-- End Cart -->
                    <!-- Profil -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-muted  " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="icon icon-person"></span></a>
                        <div class="dropdown-menu dropdown-menu-right animated zoomIn">
                            <ul class="dropdown-user">
                                <li><a href="#"><i class="ti-user"></i> Profile</a></li>
                                <li><a href="#"><i class="ti-wallet"></i> Balance</a></li>
                                <li><a href="#"><i class="ti-email"></i> Inbox</a></li>
                                <li><a href="#"><i class="ti-settings"></i> Setting</a></li>
                                <li><a class="fa fa-power-off" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form></li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="#"><span class="icon icon-person"></span></a></li>
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                        <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            <!-- Login -->
            <!-- <li><a href="#">Login</a></li>
            <li><a href="#">Register</a></li> -->

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
          <li><a href="/order">Kaos</a></li>
        </ul>
      </li>
      <!-- Kontak -->
      <li><a href="{{ url('/contact')}}">Contact</a></li>
    </ul>
  </div>
</nav>
