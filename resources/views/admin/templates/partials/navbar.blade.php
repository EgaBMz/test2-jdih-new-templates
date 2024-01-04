    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="special_link">
                    <a href="{{ route('admin.dashboard') }}"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboards</span></a>
                </li>
                @if(auth()->user()->role == 'admin')
                <li class="{{ Request::is('*/rekap/opd*') ? 'active' : '' }}">
                    <a href="{{ route('admin.dokumen.index') }}"><i class="fa fa-clipboard"></i> <span class="nav-label">Upload Peraturan</span></a>
                </li>
                <li class="{{ Request::is('*/master/skpd*') ? 'active' : '' }}{{ Request::is('*master/klasifikasi*') ? 'active' : '' }}{{ Request::is('*/master/peraturan*') ? 'active' : '' }}">
                    <a href="#"><i class="fa fa-table"></i> <span class="nav-label">Data Master</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="{{ route('admin.skpd.index') }}">SKPD</a></li>
                        <li><a href="{{ route('admin.klasifikasi.index') }}">Klasifikasi</a></li>
                        <li><a href="{{ route('admin.peraturan.index') }}">Jenis Peraturan</a></li>
                        <li><a href="{{ route('admin.propemperda.index') }}">Propemperda</a></li>
                        <li><a href="{{ route('admin.bankumaskin.index') }}">Bankumaskin</a></li>
                        <li><a href="{{ route('admin.survey.gender.index') }}">Survey Gender</a></li>
                    </ul>
                </li>
                <li class="{{ Request::is('*/berita*') ? 'active' : '' }}">
                    <a href="{{ route('admin.berita.index') }}"><i class="fa fa-picture-o"></i> <span class="nav-label">Berita</span></a>
                </li>
                @elseif(auth()->user()->role == 'validator')
                <li class="{{ Request::is('*/rekap/opd*') ? 'active' : '' }}">
                    <a href="{{ route('admin.dokumen.index') }}"><i class="fa fa-clipboard"></i> <span class="nav-label">Verifikasi Peraturan</span></a>
                </li>
                @endif

                @if(auth()->user()->role == 'admin')
                <li class="{{ Request::is('*/pengaturan*') ? 'active' : '' }}">
                    <a href="{{ route('admin.pengaturan.index') }}"><i class="fa fa-gear"></i> <span class="nav-label">Pengaturan</span></a>
                </li>
                @endif

                <li class="{{ Request::is('*/profil*') ? 'active' : '' }}">
                    <a href="{{ route('admin.profil.index') }}"><i class="fa fa-user"></i> <span class="nav-label">Profil</span></a>
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