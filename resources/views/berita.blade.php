<!DOCTYPE html>
<html lang="en">

@include('admin.templates_landing.partials.head')

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
  margin-top: 20px; /* You can adjust the value according to your design */
}
</style>

<body>

  @include('admin.templates_landing.partials.navbar')

    <section id="hero">
      <div class="hero-container" data-aos="fade-up">
        <h2><b style="color:#ffffff; font-size: 15px;">~ Berita ~</b></h2></br></br>
        <h1><b style="color:#ffffff; font-size: 35px;">Jaringan Dokumentasi dan Informasi Hukum</b> <b style="color:#00ccff; font-size: 35px;">Kota Madiun</b></h1>
        <h2><b style="color:#ffffff; font-size: 28px;">Kumpulan Produk & Informasi Hukum Kota Madiun</b></h2>
        <a href="#services" class="btn-get-started scrollto"><i class="bx bx-chevrons-down"></i></a>
      </div>
    </section><!-- End Hero -->
  
    <main id="main">
    <section id="services" class="services services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Berita</h2>
        </div>

        @php 
          $height_youtube = '565'; 
          $youtube_link = \App\Pengaturan::where('id', 8)->value('value'); 
        @endphp

        <div class="row">
          <div class="col-lg-12 col-md-12 icon-box" data-aos="zoom-in" data-aos-delay="300">
                
                                
                <!-- <h3 class="h4 from-top">{{ $youtube_title ?? 'TES' }}</h3> -->
            </div>
        </div>

        <iframe class="position-relative rounded-3 zindex-5"
        height="{{ $height_youtube }}"
        width="100%"
        src="https://www.youtube.com/embed/xBLddF8yCcQ?autoplay=1"
        title="YouTube video player"
        frameborder="0"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
        allowfullscreen>
        </iframe></br></br>

        <div class="row">
          @foreach($berita as $berita)
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="300">
            <div class="card h-100">
              <img src="{{ route('file.berita', encrypt($berita->file)) }}" class="card-img-top" alt="...">
              <div class="card-body">
                <a href="{{ route('berita.detail', $berita->id) }}" style="color:black"><h5 class="card-title">{{ $berita->judul }}</h5></a>
                <!-- <p class="card-text">{!! Illuminate\Support\Str::limit($berita->deskripsi, 350) !!}</p> -->
                </br>
                <a href="{{ route('berita.detail', $berita->id) }}" type="submit" class="btn btn-info" style="background-color: #00ccff; color: white;"><span>Selengkapnya...</span></a>

              </div>
              <div class="card-footer">
                <small class="text-muted">Dibuat : {{ $berita->created_at }}</small>
              </div>
            </div>
          </div>
          @endforeach
        </div>
    </section>

  </main><!-- End #main -->

  @include('admin.templates_landing.partials.footer')

  @include('admin.templates_landing.partials.script')

</body>

</html>