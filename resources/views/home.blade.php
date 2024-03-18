<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Jaringan Dokumentasi dan Informasi Hukum Kota Madiun</title>
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


<body>

  @if($status == 'tidak ada')   
  <div class="modal fade show" id="modal-popus" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" style="padding-right: 17px; display: block;" aria-modal="true">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header" style=" border-bottom: 0 none;">  
          </div>
          <center><h1>Survey Pengunjung<h1></center>
          <div class="modal-body"> 
              <div class="card">
              <div class="col-sm-12 grid-margin">
              <div class="rotate-img">
   <body>

    <div class="center-container">
      <form action="{{route('simpan_surveygender')}}" method="POST" class="text-center">
        @csrf
        <p><h4>Jenis Kelamin</h4></p>
        <input class="form-check-input" type="hidden" name='ip' value="{{ $ip }}">
       <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name='jenis_kelamin' value='pria' checked>
          <label class="form-check-label" for="inlineRadio1"><i class="bx bx-male-sign"></i> Pria </label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name='jenis_kelamin' value='perempuan'>
          <label class="form-check-label" for="inlineRadio2"><i class='bx bx-female-sign'></i> Perempuan </label>
        </div>
        </div></br></br>
        <div style="display: flex; align-items: center; justify-content: center;">
          <button type="submit" class="btn btn-info" onclick="return radioValidation();"><i class="bx bxs-save"></i> Simpan </button>
        </div>          
      </form> 
      <script type="text/javascript">
          function radioValidation(){
      
              var jenis_kelamin = document.getElementsByName('jenis_kelamin');
              var genValue = false;
      
              for(var i=0; i<jenis_kelamin.length;i++){
                  if(jenis_kelamin[i].checked == true){
                      genValue = true;    
                  }
              }
              if(!genValue){
                  alert("Pilih Jenis Kelamin terlebih dahulu");
                  return false;
              }
      
          }
      </script>
</body>
<script src="{{ asset('gender.png') }}"></script>
              </div>
            </div>
            </div>
          </div>
                           
        </div>
     
    </div>
</div>
</div>
@endif 

  <!-- ======= Header ======= -->
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
          <li><a class="nav-link scrollto" href="{{ route('profil') }}">Profil</a></li>
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

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container" data-aos="fade-up">
      <h2><b style="color:#ffffff; font-size: 15px;">~ Beranda ~</b></h2></br></br>
      <h1><b style="color:#ffffff; font-size: 35px;">Jaringan Dokumentasi dan Informasi Hukum</b> <b style="color:#00ccff; font-size: 35px;">Kota Madiun</b></h1>
      <h2><b style="color:#ffffff; font-size: 28px;">Kumpulan Produk & Informasi Hukum Kota Madiun</b></h2>
      <a href="#about" class="btn-get-started scrollto"><i class="bx bx-chevrons-down"></i></a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row no-gutters">
          <div class="content col-xl-5 d-flex align-items-center" data-aos="fade-up">
            <div class="content text-center">
              <img src="{{ asset('assets/dokumen/logo_mad1-1.png') }}" alt="Logo Madiun">
              <h3><b style="color:#00ccff;"></b></h3>
              <p>
                JDIH adalah wadah pendayagunaan bersama atas dokumen hukum secara tertib, terpadu, dan berkesinambungan, serta merupakan sarana pemberian pelayanan informasi hukum secara lengkap, akurat, mudah dan cepat. Keberadaan sebuah wadah yang dapat menyajikan informasi hukum dan data produk hukum yang berlaku yang selalu diperbarui menjadi sesuatu yang sangat dibutuhkan.
              </p>
              <a href="{{ Request::is('*profil*') ? 'active' : '' }}"><a href="{{ route('profil') }}" class="about-btn"> Selengkapnya <i class="bx bx-chevron-right"></i></a>
            </div>
          </div>
          <div class="col-xl-7 d-flex align-items-stretch">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                  <i class="bx bx-receipt"></i>
                  <h4>Struktur Organisasi</h4>
                  <p>Susunan Keanggotaan Organisasi JDIH Kota Madiun</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                  <i class="bx bx-cube-alt"></i>
                  <h4>Dasar Hukum JDIH</h4>
                  <p>Dasar Hukum JDIH</p>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    
    <section id="features" class="features">
      <div class="container" data-aos="fade-up">
                <div class="section-title">
                  <h2>Dokumen Hukum</h2>
                </div>

                    <div class="row ">
                      <div class="col-xl-3 col-lg-6">
                          <div class="card l-bg-green">
                              <div class="card-statistic-3 p-4">
                                  <div class="card-icon card-icon-large"><i class="icofont-law-book" style= "font-size: 93px;"></i></div>
                                  <div class="mb-4">
                                      <h5 class="card-title mb-0">Peraturan Daerah</h5>
                                  </div>
                                  <div class="row align-items-center mb-2 d-flex">
                                      <div class="col-8">
                                          <h2 class="d-flex align-items-center mb-0">
                                            {{ number_format(count($perda), 0, ',', '.') }}
                                          </h2>
                                      </div>
                                  </div>
                                  <div class="progress mt-1 " data-height="10" style="height: 10px;">
                                      <div class="progress-bar l-bg-cyan" role="progressbar" data-width="25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;"></div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-xl-3 col-lg-6">
                          <div class="card l-bg-cyan">
                              <div class="card-statistic-3 p-4">
                                  <div class="card-icon card-icon-large"><i class="icofont-law-book" style= "font-size: 93px;"></i></div>
                                  <div class="mb-4">
                                      <h5 class="card-title mb-0">Peraturan Wali Kota</h5>
                                  </div>
                                  <div class="row align-items-center mb-2 d-flex">
                                      <div class="col-8">
                                          <h2 class="d-flex align-items-center mb-0">
                                            {{ number_format(count($perwal), 0, ',', '.') }}
                                          </h2>
                                      </div>
                                  </div>
                                  <div class="progress mt-1 " data-height="10" style="height: 10px;">
                                      <div class="progress-bar l-bg-blue" role="progressbar" data-width="25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;"></div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-xl-3 col-lg-6">
                          <div class="card l-bg-cherry">
                              <div class="card-statistic-3 p-4">
                                  <div class="card-icon card-icon-large"><i class="icofont-law-book" style= "font-size: 93px;"></i></div>
                                  <div class="mb-4">
                                      <h5 class="card-title mb-0">Keputusan Wali Kota</h5>
                                  </div>
                                  <div class="row align-items-center mb-2 d-flex">
                                      <div class="col-8">
                                          <h2 class="d-flex align-items-center mb-0">
                                            {{ number_format(count($kepwal), 0, ',', '.') }}
                                          </h2>
                                      </div>
                                  </div>
                                  <div class="progress mt-1 " data-height="10" style="height: 10px;">
                                      <div class="progress-bar l-bg-blue" role="progressbar" data-width="25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;"></div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-xl-3 col-lg-6">
                          <div class="card l-bg-orange">
                              <div class="card-statistic-3 p-4">
                                  <div class="card-icon card-icon-large"><i class="icofont-law-book" style= "font-size: 93px;"></i></div>
                                  <div class="mb-4">
                                      <h5 class="card-title mb-0">Instruksi Wali Kota</h5>
                                  </div>
                                  <div class="row align-items-center mb-2 d-flex">
                                      <div class="col-8">
                                          <h2 class="d-flex align-items-center mb-0">
                                            {{ number_format(count($inwal), 0, ',', '.') }}
                                          </h2>
                                      </div>
                                  </div>
                                  <div class="progress mt-1 " data-height="10" style="height: 10px;">
                                      <div class="progress-bar l-bg-cyan" role="progressbar" data-width="25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;"></div>
                                  </div>
                              </div>
                          </div>
                      </div>
                    </div>

                    <head>
                      <link href="{{ asset('home/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
                      <link href="{{ asset('home/assets/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
                    <style type="text/css">
                      #container {
                        height: 500px; 
                      }
                      .highcharts-figure, .highcharts-data-table table {
                        min-width: 310px; 
                        max-width: 800px;
                        margin: 1em auto;
                      }
                      .highcharts-data-table table {
                        font-family: Verdana, sans-serif;
                        border-collapse: collapse;
                        border: 1px solid #EBEBEB;
                        margin: 10px auto;
                        text-align: center;
                        width: 100%;
                        max-width: 500px;
                      }
                      .highcharts-data-table caption {
                        padding: 1em 0;
                        font-size: 1.2em;
                        color: #555;
                      }
                      .highcharts-data-table th {
                      font-weight: 600;
                      padding: 0.5em;
                       }
    .highcharts-data-table td, .highcharts-data-table th, .highcharts-data-table caption {
      padding: 0.5em;
    }
    .highcharts-data-table thead tr, .highcharts-data-table tr:nth-child(even) {
      background: #f8f8f8;
    }
    .highcharts-data-table tr:hover {
      background: #f1f7ff;
    }
	</style>

  <style type="text/css">
    #container2 {
      height: 500px; 
    }

    .highcharts-figure, .highcharts-data-table table {
        min-width: 310px; 
        max-width: 800px;
        margin: 1em auto;
    }

    .highcharts-data-table table {
        font-family: Verdana, sans-serif;
        border-collapse: collapse;
        border: 1px solid #EBEBEB;
        margin: 10px auto;
        text-align: center;
        width: 100%;
        max-width: 500px;
    }
    .highcharts-data-table caption {
        padding: 1em 0;
        font-size: 1.2em;
        color: #555;
    }
    .highcharts-data-table th {
      font-weight: 600;
        padding: 0.5em;
    }
    .highcharts-data-table td, .highcharts-data-table th, .highcharts-data-table caption {
        padding: 0.5em;
    }
    .highcharts-data-table thead tr, .highcharts-data-table tr:nth-child(even) {
        background: #f8f8f8;
    }
    .highcharts-data-table tr:hover {
        background: #f1f7ff;
    }
    .card {
        background-color: #fff;
        border-radius: 10px;
        border: none;
        position: relative;
        margin-bottom: 30px;
        box-shadow: 0 0.46875rem 2.1875rem rgba(90,97,105,0.1), 0 0.9375rem 1.40625rem rgba(90,97,105,0.1), 0 0.25rem 0.53125rem rgba(90,97,105,0.12), 0 0.125rem 0.1875rem rgba(90,97,105,0.1);
    }
    .l-bg-cherry {
        background: linear-gradient(to right, #5222ff, #708dff) !important;
        color: #fff;
    }

    .l-bg-blue-dark {
        background: linear-gradient(to right, #1eff00, #fff700) !important;
        color: #fff;
    }

    .l-bg-green-dark {
        background: linear-gradient(to right, #0a504a, #38ef7d) !important;
        color: #fff;
    }

    .l-bg-orange-dark {
        background: linear-gradient(to right, #1eff00, #fff700) !important;
        color: #fff;
    }

    .card .card-statistic-3 .card-icon-large .fas, .card .card-statistic-3 .card-icon-large .far, .card .card-statistic-3 .card-icon-large .fab, .card .card-statistic-3 .card-icon-large .fal {
        font-size: 110px;
    }
    .card .card-statistic-3 .card-icon {
        text-align: center;
        line-height: 50px;
        margin-left: 15px;
        color: #000;
        position: absolute;
        right: 10px;
        top: 20px;
        opacity: 0.1;
    }

    .l-bg-cyan {
        background: linear-gradient(135deg, #1eff00 #fff700) !important;
        color: #fff;
    }

    .l-bg-green {
        background: linear-gradient(135deg, #1eff00 0%, #fff700 100%) !important;
        color: #fff;
    }

    .l-bg-orange {
        background: linear-gradient(to right, #ff0000, #ff6161) !important;
        color: #fff;
    }

    .l-bg-cyan {
        background: linear-gradient(135deg, #00FFFF, #AFEEEE) !important;
        color: #fff;
    }
    .order-card {
        color: #fff;
    }
    .bg-c-blue {
        background: linear-gradient(45deg,#4099ff,#73b4ff);
    }

    .bg-c-green {
        background: linear-gradient(45deg,#2ed8b6,#59e0c5);
    }

    .bg-c-yellow {
        background: linear-gradient(45deg,#FFB64D,#ffcb80);
    }

    .bg-c-pink {
        background: linear-gradient(45deg,#FF5370,#ff869a);
    }
    .card {
        border-radius: 5px;
        -webkit-box-shadow: 0 1px 2.94px 0.06px rgba(4,26,55,0.16);
        box-shadow: 0 1px 2.94px 0.06px rgba(4,26,55,0.16);
        border: none;
        margin-bottom: 30px;
        -webkit-transition: all 0.3s ease-in-out;
        transition: all 0.3s ease-in-out;
    }

    .card .card-block {
        padding: 20px;
    }

    .order-card i {
        font-size: 40px;
    }

    .f-left {
        float: left;
    }

    .f-right {
        float: right;
    }
    </style>
                      </head>
    </section><!-- End Services Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts  section-bg">
      <div class="container">

        <div class="row no-gutters">

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-center justify-content-md-center text-center">
            <div class="count-box">
              <i class="icofont-court"></i></br>
              <a href="{{ route('kategori', encrypt(1)) }}" style="color:#17a2b8">Peraturan Daerah</a></p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-center justify-content-md-center text-center">
            <div class="count-box">
              <i class="icofont-court"></i><br>
              <a href="{{ route('kategori', encrypt(2)) }}" style="color:#17a2b8">Peraturan Wali Kota</a></p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-center justify-content-md-center text-center">
            <div class="count-box">
              <i class="icofont-court"></i></br>
              <a href="{{ route('kategori', encrypt(3)) }}" style="color:#17a2b8">Keputusan Wali Kota</a></p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-center justify-content-md-center text-center">
            <div class="count-box">
              <i class="icofont-court"></i></br>
              <a href="{{ route('kategori', encrypt(4)) }}" style="color:#17a2b8">Instruksi Wali Kota</a></p>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="text-center">
          <h3>Pemerintah Kota Madiun</h3>
          <p>Website Resmi Pemerintah Kota Madiun</p>
          <a class="cta-btn" href="https://www.madiunkota.go.id/" target="_blank" >Pemkot Madiun</a>
        </div>

      </div>
    </section><!-- End Cta Section -->

    <!-- ======= Portfolio Section ======= -->
    
    
   <!-- End Portfolio Section -->

    <!-- ======= Testimonials Section ======= -->
    <!-- End Testimonials Section -->

    <!-- ======= Team Section ======= -->
    <div class="section-title">
      <h2>Dokumen Hukum Terbaru</h2>
    </div>

    @foreach($terbaru as $terbaru)
    <div class="row">
      <div class="col-sm-12 mb-3 mb-sm-0">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">{{ $terbaru->jenis_peraturan }}</h5>
            <p class="card-text">{{ $terbaru->judul_peraturan }}</p>
            <i style="color:orange">Diunggah pada : {{ $terbaru->created_at }}</i>
          </div>
        </div>
      </div>
    </div>
    @endforeach
  </div>

  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Detail Dokumen Hukum</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body" id="modal-konten">
          <p>This is a large modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
        </div>
      </div>
    </div>
  </div>
</section>
<style>
  .custom-height-card {
      min-height: -100px; /* Adjust the value as needed */
  }
</style>

<section id="doctors" class="pricing section-bg">
  <div class="container" data-aos="fade-up">
    <!-- <div class="container"> -->
      <div class="section-title">
        <h2>Pengunjung</h2>
      </div>

      <div class="row">
          <!-- <div class="col-md-4 col-xl-3">
              <div class="card bg-c-blue order-card">
                  <div class="card-block">
                      <h6 class="m-b-20">Orders Received</h6>
                      <h2 class="text-right"><i class="fa fa-users f-left"></i><span>486</span></h2>
                      <p class="m-b-0">Completed Orders<span class="f-right">351</span></p>
                  </div>
              </div>
          </div> -->
          
          <div class="col-md-4 col-xl-4">
              <div class="card bg-c-green order-card">
                  <div class="card-block">
                      <h6 class="m-b-20">Hari Ini</h6>
                      <h2 class="text-left"><i class="icofont-people f-right" style="font-size: 50px;"></i><span>{{ count($hariini) }}</span>
                        <p class="m-b-0" style="font-size:13px">
                          <i class="bx bx-male-sign" style="font-size: 20px;"></i> Laki-Laki : {{ count($hariini_laki_laki) }}<br>
                          <i class="bx bx-female-sign" style="font-size: 20px;"></i> Perempuan : {{ count($hariini_perempuan) }}
                      </p>
                      
                      </h2>
                      <!-- <p class="m-b-0">Completed Orders<span class="f-right">351</span></p> -->
                  </div>
              </div>
          </div>
          
          <div class="col-md-4 col-xl-4">
              <div class="card bg-c-blue order-card">
                  <div class="card-block">
                      <h6 class="m-b-20">Minggu Ini</h6>
                      <h2 class="text-left"><i class="icofont-people f-right" style="font-size: 50px;"></i><span>{{ count($mingguini) }}</span>
                        <p class="m-b-0" style="font-size:13px">
                          <i class="bx bx-male-sign" style="font-size: 20px;"></i> Laki-Laki : {{ count($mingguini_laki_laki) }}<br>
                          <i class="bx bx-female-sign" style="font-size: 20px;"></i> Perempuan : {{ count($mingguini_perempuan) }}
                      </p>
                      
                      </h2>
                      <!-- <p class="m-b-0">Completed Orders<span class="f-right">351</span></p> -->
                  </div>
              </div>
          </div>
          
          <div class="col-md-4 col-xl-4">
              <div class="card bg-c-yellow order-card">
                  <div class="card-block">
                      <h6 class="m-b-20">Total</h6>
                      <h2 class="text-left"><i class="icofont-people f-right" style="font-size: 50px;"></i><span>{{ count($total) }}</span>
                        <p class="m-b-0" style="font-size:13px">
                          <i class="bx bx-male-sign" style="font-size: 20px;"></i> Laki-Laki : {{ count($total_laki_laki) }}<br>
                          <i class="bx bx-female-sign" style="font-size: 20px;"></i> Perempuan : {{ count($total_perempuan) }}
                      </p>
                      </h2>
                      <!-- <p class="m-b-0">Completed Orders<span class="f-right">351</span></p> -->
                  </div>
              </div>
          </div>
      </div>
    <!-- </div> -->
  </div>
</section>


<main id="main">

  <!-- Other sections and content -->

  <section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

      <div class="row">

        <div class="col-lg-6">
          <!-- Map iframe -->
          <iframe class="mb-4 mb-lg-0" src="https://maps.app.goo.gl/uZedVJESZw8dbaNE7" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
        </div>

        <div class="col-lg-6">
          <!-- Image -->
          <img src="1.jpg" alt="Your Image" class="img-fluid" style="border:0; width: 100%; height: 384px;">
        </div>

      </div>

    </div>
  </section><!-- End Contact Section -->

</main><!-- End #main -->


  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="footer-info">
                <img src="https://jdih.unsrat.ac.id/wp-content/themes/website-bphn/images/logo-awal-jdihn.png" class="custom-img" alt="">
                <p><br>
                  <h3 class="custom-heading">Sosial Media Kami</h3>
                </p>
              <div class="social-links mt-3">
                <a href="https://twitter.com/JdihMadiun" target="_blank" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="https://www.facebook.com/jdihkpukotamadiun/" target="_blank" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="https://www.instagram.com/pemkotmadiun_/?hl=en" target="_blank" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="https://www.youtube.com/watch?app=desktop&v=Pwzr1xBjrWM" target="_blank" class="youtube"><i class="bx bxl-youtube"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Link Navigasi</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ route('index') }}">Beranda</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ route('profil') }}" >Profil</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ route('berita') }}">Berita</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ route('produk_hukum') }}">Produk Hukum</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ route('propemperda') }}">Propemperda</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ route('bankumaskin') }}">Bankumaskin</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Link Terkait</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="https://jdihn.go.id/" target="_blank" >Portal JDIH Nasional</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="https://jdih.kemendag.go.id/" target="_blank" >JDIH Kemendagri</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="https://www.setneg.go.id/" target="_blank" >Kemensetneg RI</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="https://bphn.jdihn.go.id/" target="_blank" >JDIHN BPHN</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="https://ppid.madiunkota.go.id/" target="_blank" >PPID Kota Madiun</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Kota Madiun</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Pemkot Madiun</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">LHKPN</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="https://kominfo.madiunkota.go.id/" target="_blank" >Diskominfo Kota Madiun</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="">Dokumentasi</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>#</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/squadfree-free-bootstrap-template-creative/ -->
        Designed by <a href=# target="_blank">#</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>