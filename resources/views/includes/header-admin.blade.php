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
          <li class="nav-item nav-link"><a href="{{ url('/home')}}"><i class="fa fa-shopping-basket"></i> Request</a></li>
          <li class="nav-item nav-link"><a href="{{ url('/pesanan')}}"><i class="fa fa-hourglass-end"></i> Pesanan</a></li>
          <li class="nav-item nav-link"><a href="{{ url('/katalog')}}"><i class="fa fa-book"></i> Katalog</a></li>
        </ul>
        <!-- User profile and notification -->
        <ul class="navbar-nav my-lg-0">
            <!-- Notification -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-bell-o"></i>
                  @if(count(auth()->user()->unreadNotifications) != 0)
                  <div class="notify-label">
                    {{count(auth()->user()->unreadNotifications)}}
                  </div>
                  @endif
              </a>
                <div class="dropdown-menu dropdown-menu-right mailbox animated zoomIn">
                  <ul>
                      <li>
                          <div class="drop-title">Anda memiliki {{count(auth()->user()->unreadNotifications)}} notifikasi baru</div>
                      </li>

                      <li>
                          <div class="message-center">
                              <!-- Message -->
                              <!-- Notifikasi -->
                              @foreach((Auth::user()->Notifications) as $notif)
                                <a href="{{url('notifications/'.$notif->id)}}" class="{{ $notif->read_at == null ? 'unread' : ''}}">
                                  <div class="{{$notif->read_at == null ? 'fa fa-circle' : ''}}"></div>
                                  <div class="mail-content">
                                    <h5 >{!! $notif->data['data'] !!}</h5>
                                    <span class="mail-desc">{!! $notif->data['isi_notifikasi'] !!}</span><br>
                                    <span class="time">{!! $notif->data['waktu'] !!}</span>
                                  </div>
                                </a>
                              @endforeach
                          </div>
                      </li>
                      <!-- <li>
                          <a class="nav-link text-center" href="javascript:void(0);"> <strong>Check all notifications</strong> <i class="fa fa-angle-right"></i> </a>
                      </li> -->
                  </ul>
                </div>
            </li>
            <!-- End Notification -->
            <!-- Profile -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-muted  " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{ asset('assets/ElaAdmin/images/users/5.jpg') }}" alt="user" class="profile-pic" /></a>
                <div class="dropdown-menu dropdown-menu-right animated zoomIn">
                    <ul class="dropdown-user">
                        <li> <a href="{{ route('logout') }}"  onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                          <i class="ti-power-off"> </i>{{ __('Logout') }}
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form></a></li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</nav>
