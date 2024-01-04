<!DOCTYPE html>
<html lang="en">

@include('admin.templates_landing.partials.head')

<body>

  @include('admin.templates_landing.partials.navbar')

  <main id="main">

    <section class="inner-page">
    </section>

    <section id="services" class="services services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Kontak</h2>
        </div>

        <div class="row">
          <div class="col-lg-3 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon"><i class="icofont-home"></i></div>
            <h4 class="title"><a href="">Alamat</a></h4>
            <p class="description">{{ \App\Pengaturan::value(1) }}</p>
          </div>
          <div class="col-lg-3 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon"><i class="bx bx-map"></i></div>
            <h4 class="title"><a href="">Jam Pelayanan</a></h4>
            <p class="description">{{ \App\Pengaturan::value(2) }}</p>
          </div>
          <div class="col-lg-3 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon"><i class="bx bx-phone-call"></i></div>
            <h4 class="title"><a href="">Telepon</a></h4>
            <p class="description">{{ \App\Pengaturan::value(3) }}</p>
          </div>
          <div class="col-lg-3 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon"><i class="icofont-email"></i></div>
            <h4 class="title"><a href="">Email</a></h4>
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