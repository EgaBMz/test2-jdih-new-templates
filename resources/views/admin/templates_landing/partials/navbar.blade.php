  <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
    <div class="container d-flex align-items-center justify-content-between">
      <div class="d-flex align-items-center">
        <i class="icofont-home"></i> Sekretariat DPRD
      </div>
      <div class="d-flex align-items-center">
        <i class="icofont-building"></i> Pemerintah Kota Madiun
      </div>
    </div>
  </div>

  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
      <!-- <a href="" class="logo mr-auto"><img src="{{ asset('assets/dokumen/logo_mad1-1.png') }}"></a> -->
      <a href="" class="logo mr-auto"><img src="{{ asset('assets/dokumen/logo_jdihn.png') }}"></a>
      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="{{ Request::is('*beranda*') ? 'active' : '' }}"><a href="{{ route('index') }}">Beranda</a></li>
          <li class="{{ Request::is('*profil*') ? 'active' : '' }}"><a href="{{ route('profil') }}">Profil</a></li>
          <li class="{{ Request::is('*berita*') ? 'active' : '' }}"><a href="{{ route('berita') }}">Berita</a></li>
          <li class="{{ Request::is('*produk_hukum*') ? 'active' : '' }}"><a href="{{ route('produk_hukum') }}">Produk Hukum</a></li>
          <li class="{{ Request::is('*propemperda*') ? 'active' : '' }}"><a href="{{ route('propemperda') }}">Propemperda</a></li>
          <li class="{{ Request::is('*bankumaskin*') ? 'active' : '' }}"><a href="{{ route('bankumaskin') }}">Bankumaskin</a></li>
          <!-- <li class="{{ Request::is('*statistik*') ? 'active' : '' }}"><a href="{{ route('statistik') }}">Statistik</a></li> -->
          <!-- <li class="{{ Request::is('*kontak*') ? 'active' : '' }}"><a href="{{ route('kontak') }}">Kontak</a></li> -->
        </ul>
      </nav>
      <a href="https://hukum.madiunkota.go.id/" target="_blank" class="appointment-btn scrollto">Website Bagian Hukum</a>
      <a href="{{ route('kontak') }}" class="appointment-btn scrollto">Kontak</a>
    </div>
  </header>