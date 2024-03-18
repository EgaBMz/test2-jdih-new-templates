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
  .icon-box {
  text-align: center;
  margin-bottom: 30px;
}

.icon {
  font-size: 36px;
  color: #00ccff; /* Set your preferred icon color */
}

.title {
  font-size: 20px;
  margin-top: 15px;
  margin-bottom: 10px;
  color: #333; /* Set your preferred title color */
}

.title a {
  text-decoration: none;
  color: #333; /* Set your preferred link color */
}

.description {
  font-size: 16px;
  color: #666; /* Set your preferred description color */
}

#home-icon {
  cursor: pointer;
  transition: transform 0.3s ease-in-out;
}

#home-icon:hover {
  transform: scale(1.1);
}

</style>

<body>

  @include('admin.templates_landing.partials.navbar')

  <section id="hero">
    <div class="hero-container" data-aos="fade-up">
      <h2><b style="color:#ffffff; font-size: 15px;">~ Kontak ~</b></h2></br></br>
      <h1><b style="color:#ffffff; font-size: 35px;">Jaringan Dokumentasi dan Informasi Hukum</b> <b style="color:#00ccff; font-size: 35px;">Kota Madiun</b></h1>
      <h2><b style="color:#ffffff; font-size: 28px;">Kumpulan Produk & Informasi Hukum Kota Madiun</b></h2>
      <a href="#services" class="btn-get-started scrollto"><i class="bx bx-chevrons-down"></i></a>
    </div>
  </section><!-- End Hero -->

  <main id="main">
  <section id="services" class="services services">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Kontak</h2>
        </div>

        <div class="row">
          <div class="col-lg-3 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon"><i class="icofont-home"></i></div>
            <h4 class="title"><a href="https://maps.app.goo.gl/uZedVJESZw8dbaNE7" target="_blank" >Alamat</a></h4>
            <p class="description">{{ \App\Pengaturan::value(1) }}</p>
          </div>
          <div class="col-lg-3 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon"><i class="icofont-clock-time"></i></div>
            <h4 class="title"><a href="">Jam Pelayanan</a></h4>
            <p class="description">{{ \App\Pengaturan::value(2) }}</p>
          </div>
          <div class="col-lg-3 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon"><i class="bx bx-phone-call"></i></div>
            <h4 class="title"><a href="(0351) 462 756">Telepon</a></h4>
            <p class="description">{{ \App\Pengaturan::value(3) }}</p>
          </div>
          <div class="col-lg-3 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon"><i class="icofont-email"></i></div>
            <h4 class="title"><a href="https://mail.google.com/mail/u/0/#inbox?compose=VpCqJRzBXCCtKMVGMQbKxdLVRsmmwqMnCSpLJQzwBfgZKTTRpvFhrtCHcSDThCvTQKjbKJV" target="_blank" >Email</a></h4>
            <p class="description">{{ \App\Pengaturan::value(4) }}</p>
          </div>
          <div class="col-lg-3 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="100"></div>
          <div class="col-lg-3 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon"><i class="icofont-whatsapp"></i></div>
            <h4 class="title"><a href="https://wa.me/628113577800">Awak Sigap</a></h4>
            <p class="description">Whatsapp aduan layanan hukum</p>
          </div>
          <div class="col-lg-3 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon"><i class="icofont-folder-open"></i></div>
            <h4 class="title"><a href="https://servicedesk.madiunkota.go.id/" target="_blank">Layanan</a></h4>
            <p class="description">Layanan dokumen hukum</p>
          </div>
          <div class="col-lg-3 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="100"></div>
        </div>

      </div>
    </section>

  </main><!-- End #main -->

  @include('admin.templates_landing.partials.footer')

  @include('admin.templates_landing.partials.script')

</body>

</html>