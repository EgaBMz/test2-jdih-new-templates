<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>JDIH Kota Madiun</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/jdihn.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Squadfree
  * Updated: Jan 29 2024 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/squadfree-free-bootstrap-template-creative/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<style>
  #header {
    margin-top: -30px; /* You can adjust the value according to your design */
  }
</style>

<header id="header" class="fixed-top header-transparent">
  <div class="container d-flex align-items-center justify-content-between position-relative">

    <div class="logo">
      
      <a href="http://127.0.0.1:8000/" style="color: #ffffff; text-decoration: none; line-height: 1.5;">
        <img src="https://jdih.unsrat.ac.id/wp-content/themes/website-bphn/images/logo-awal-jdihn.png" class="img-fluid" alt=""> <img src="{{ asset('assets/dokumen/logo_mad1-1.png') }}" alt="Logo Madiun">
      </a>   
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
    </div>

    <nav id="navbar" class="navbar">
      <ul>
        <li><a class="{{ Request::is('*beranda*') ? 'active' : '' }}" href="{{ route('index') }}">Beranda</a></li>
        <li><a class="{{ Request::is('*profil*') ? 'active' : '' }}" href="{{ route('profil') }}">Profil</a></li>
        <li><a class="{{ Request::is('*berita*') ? 'active' : '' }}" href="{{ route('berita') }}">Berita</a></li>
        <li><a class="{{ Request::is('*portofolio*') ? 'active' : '' }}" href="{{ route('portofolio') }}">Dokumentasi</a></li>
        <li class="dropdown"><a href="#"><span>Bagian Hukum</span> <i class="bi bi-chevron-down"></i></a>
          <ul>
            <li class="{{ Request::is('*statistik*') ? 'active' : '' }}"><a href="{{ route('statistik') }}">Produk Hukum</a></li>
            
            <li class="dropdown"><a href="#"><span>Kategori</span> <i class="bi bi-chevron-right"></i></a>
              <ul>
                <li><a href="https://www.madiunkota.go.id/">Penyuluhan & Bantuan Hukum</a></li>
                <li><a href="https://peraturan.bpk.go.id/Details/149463/perda-kota-madiun-no-1-tahun-2020">Perundang-undangan</a></li>
                <li><a href="https://peraturan.bpk.go.id/Details/213309/perwali-kota-madiun-no-21-tahun-2022">Peraturan</a></li>
                <li><a href="https://hukum.madiunkota.go.id/">Hukum</a></li>
                <li><a href="https://peraturan.bpk.go.id/Download/305353/17.pdf">Daftar Peraturan</a></li>
                <li><a href="#">Kota Madiun</a></li>
                <li><a href="#">Wali Kota</a></li>
                <li><a href="#">Pemerintah</a></li>
              </ul>
            </li>
            <li class="{{ Request::is('*propemperda*') ? 'active' : '' }}"><a href="{{ route('propemperda') }}">Propemperda</a></li>
            <li class="{{ Request::is('*bankumaskin*') ? 'active' : '' }}"><a href="{{ route('bankumaskin') }}">Bankumaskin</a></li>
          </ul>
        </li>
        <li class=""><a href="https://hukum.madiunkota.go.id/" target="_blank">Website Bagian Hukum</a></li>
       <li class="{{ Request::is('*kontak*') ? 'active' : '' }}"><a href="{{ route('kontak') }}">Kontak</a></li>
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->

  </div>
</header><!-- End Header -->