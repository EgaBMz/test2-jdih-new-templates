    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="special_link">
                    <a href="{{ route('user.dashboard') }}"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboards</span></a>
                </li>
                <!-- <li>
                    <a href="layouts.html"><i class="fa fa-bar-chart"></i> <span class="nav-label">Daftar Belanja</span></a>
                </li> -->
                <li class="{{ Request::is('*/profil*') ? 'active' : '' }}">
                    <a href=""><i class="fa fa-user"></i> <span class="nav-label">Profil</span></a>
                </li>
                <li>
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-database"></i> <span class="nav-label">Logout</span></a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>
        </div>
    </nav>

    