<nav class="navbar top-navbar navbar-expand-md navbar-light">
    <!-- Logo -->
    <div class="navbar-header">
        <a class="navbar-brand" href="/sikorea/public/home">
            <!-- Logo icon -->
            <b><img src="{{ asset('assets/ElaAdmin/images/logo.png') }}" alt="homepage" class="logo" /></b>
            <!--End Logo icon -->

        </a>
    </div>
    <!-- End Logo -->
    <div class="navbar-collapse">
        <!-- toggle and nav items -->
        <ul class="navbar-nav mr-auto mt-md-0 text-center">
          <li class="nav-item nav-link"><a href="/sikorea/public/home"><i class="fa fa-shopping-basket"></i> Request</a></li>
          <li class="nav-item nav-link"><a href="/sikorea/public/pesanan"><i class="fa fa-hourglass-end"></i> Pesanan</a></li>
          <li class="nav-item nav-link"><a href="#"><i class="fa fa-book"></i> Katalog</a></li>
        </ul>
        <!-- User profile and notification -->
        <ul class="navbar-nav my-lg-0">
            <!-- Notification -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-muted text-muted  " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-bell"></i>
                   <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
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
                                    <div class="btn btn-danger btn-circle m-r-10"><i class="fa fa-link"></i></div>
                                    <div class="mail-contnet">
                                        <h5>This is title</h5> <span class="mail-desc">Just see the my new admin!</span> <span class="time">9:30 AM</span>
                                    </div>
                                </a>
                                <!-- Message -->
                                <a href="#">
                                    <div class="btn btn-success btn-circle m-r-10"><i class="ti-calendar"></i></div>
                                    <div class="mail-contnet">
                                        <h5>This is another title</h5> <span class="mail-desc">Just a reminder that you have event</span> <span class="time">9:10 AM</span>
                                    </div>
                                </a>
                                <!-- Message -->
                                <a href="#">
                                    <div class="btn btn-info btn-circle m-r-10"><i class="ti-settings"></i></div>
                                    <div class="mail-contnet">
                                        <h5>This is title</h5> <span class="mail-desc">You can customize this template as you want</span> <span class="time">9:08 AM</span>
                                    </div>
                                </a>
                                <!-- Message -->
                                <a href="#">
                                    <div class="btn btn-primary btn-circle m-r-10"><i class="ti-user"></i></div>
                                    <div class="mail-contnet">
                                        <h5>This is another title</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span>
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
            <!-- Profile -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-muted  " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{ asset('assets/ElaAdmin/images/users/5.jpg') }}" alt="user" class="profile-pic" /></a>
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
        </ul>
    </div>
</nav>
