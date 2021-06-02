<!-- start: header -->
<header class="header" style="background-color:#132241;">
    <div class="logo-container">
        <a href=""class="logo">
            {{-- <img src="{{asset('img/logol.png')}}" width="54" height="41"  alt="Porto Admin" /> --}}
            {{-- <img src="front-end/images/iccoon.png" width="54" height="41"  alt="Porto Admin" /> --}}
        </a>
        <div class="d-md-none toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
            <i class="fas fa-bars" aria-label="Toggle sidebar"></i>
        </div>
    </div>

    <!-- start: search & user box -->
    <div class="header-right">
        <span class="separator"></span>

        <div id="userbox" class="userbox">
            <a href="#" data-toggle="dropdown">
                <figure class="profile-picture">
                    <img src="{{asset('img/!logged-user.jpg')}}" alt="Joseph Doe" class="rounded-circle" data-lock-picture="img/!logged-user.jpg" />
                </figure>
                <div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@okler.com">
        <!-- @if(Auth::user()) -->
                    <!-- <span class="name">{{ Auth::user()->name }}</span>
                    <span class="role">{{ Auth::user()->email }}</span> -->
                    <!-- @endif -->
                </div>

                <i class="fa custom-caret"></i>
            </a>

            <div class="dropdown-menu">
                <ul class="list-unstyled mb-2">
                    <li class="divider"></li>
                    <li>
                        <a role="menuitem" tabindex="-1" href="">
                            <i class="fas fa-user"></i>
                            My Profile
                        </a>
                    </li>
                    {{-- <li>
                        <a role="menuitem" tabindex="-1" href="{{ url('change-password') }}">
                            <i class="fas fa-lock"></i>
                            Change Password
                        </a>
                    </li> --}}
                    <li>
                        <a role="menuitem" tabindex="-1" href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            <i class="fas fa-power-off"></i>
                            Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>

                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- end: search & user box -->
</header>
<!-- end: header -->
