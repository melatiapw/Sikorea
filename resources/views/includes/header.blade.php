<div class="site-navbar-top">
  <div class="container">
    <div class="row align-items-center">
      <!-- logo -->
      <div class="col-12 mb-3 mb-md-0 col-md-4 order-1 order-md-2 text-left">
        <div class="site-logo">
          <a href="{{ url('/')}}" class="js-logo-clone">Konveksi Area</a>
        </div>
      </div>

      <div class="col-12 col-md-8 order-3 order-md-3 text-right">
        <div class="site-top-icons">
          <ul>
            <!-- Login -->
            @if (Route::has('login'))
            @Auth
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
              <!-- End Notification -->
              <!-- Profil -->
              <li class="nav-item dropdown">
                <a class="site-menu" data-toggle="dropdown">
                  <span class="icon icon-person"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right mailbox animated zoomIn">
                      <ul>
                        <li>
                            <div class="profile-center">
                                <!-- Message -->
                                <a class="nav-link text-right">
                                  <span class="text-left"><i class="fa fa-hourglass-end"></i></span>
                                  Pesanan Saya
                                </a>
                                <a class="nav-link text-right">
                                  <span class="icon icon-pencil text-left"></span>
                                  Edit profil saya
                                </a>
                                <a class="nav-link text-right">
                                  <span class="icon icon-switch text-left"></span>
                                  Log Out
                                </a>
                            </div>
                        </li>

                      </ul>
                </div>
              </li>
              <!-- End Profil -->
            @else
              <li><a href="{{ route('login') }}">Login</a></li>
              @if (Route::has('register'))
                <li><a href="{{ route('register') }}">Register</a></li>
              @endif
            @endauth
            <!-- Cart -->
            <li>
              <a href="{{ url('/cart')}}" class="site-cart">
                <span class="icon icon-shopping_cart"></span>
                <span class="count">2</span>
              </a>
            </li>
            <!-- End Cart -->
            <!-- Profil -->
          @endif
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
          <li><a href="{{ url('/order')}}">Kaos</a></li>
        </ul>
      </li>
      <!-- Kontak -->
      <li><a href="{{ url('/contact')}}">Contact</a></li>
    </ul>
  </div>
</nav>
