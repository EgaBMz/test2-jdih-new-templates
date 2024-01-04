<!DOCTYPE html>
<html lang="en">

@include('admin.templates_landing.partials.head')

<body>

  @include('admin.templates_landing.partials.navbar')

  <main id="main">

    <section class="inner-page">
    </section>

    <section class="inner-page">
      <div class="container">
        <div class="section-title">
          <h2>Struktur Organisasi</h2>
        </div>
        <p align="center">
          <!-- <img src="{{ asset('assets/dokumen/so-gambar.jpg') }}"> -->
          <img src="{{ asset('assets/dokumen/so.jpg') }}">
        </p>
      </div>
    </section>

    <section id="doctors" class="doctors section-bg">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Dasar Hukum JDIH</h2>
          <p>
            Dasar hukum Jaringan Dokumentasi dan Informasi Hukum Nasional (JDIHN) sebagai berikut :</br>
            Undang-Undang Republik Indonesia nomor 14 Tahun 2008 tentang Keterbukaan Informasi Publik;</br>
            Peraturan Presiden Republik Indonesia Nomor 33 Tahun 2012 Tentang Jaringan Dokumentasi dan Informasi Hukum Nasional;</br>
            Peraturan Menteri Dalam Negeri Nomor 35 Tahun 2010 Tentang Pedoman Pengelolaan Pelayanan Informasi dan Dokumentasi di Lingkungan Kementerian Dalam Negeri dan Pemerintah Daerah;</br>
            Peraturan Menteri Hukum dan Hak Asasi Manusia Republik Indonesia Nomor 02 Tahun 2013 Tentang Standardisasi Pengelolaan Teknis Dokumentasi dan Informasi Hukum.</br>
          </p>
        </div>
      </div>
    </section>

    <!-- <section id="doctors" class="doctors section-bg">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>TUGAS BAGIAN HUKUM</h2>
          <p>Melaksanakan dan meneliti perumusan perundang-undangan, terlaahan hukum, mempublikasikan, mendokumentasikan produk hukum, serta melaksanakan bantuan hukum dan penyuluhan hukum.</p>
        </div>
      </div>
    </section> -->

    <!-- <section class="inner-page">
      <div class="container">
        <div class="section-title">
          <h2>FUNGSI BAGIAN HUKUM</h2>
        </div>
        <p align="center">
          a. Pelaksanaan penyusunan perencanaan tugas-tugas pada bagian hukum;</br>
          b. Pelaksanaan penelitian perumusan peraturan perundang-undangan;</br>
          c. Pelaksanaan penelaahan dan pengevaluasian pelaksanaan ketentuan peraturan perundang-undangan;</br>
          d. Pelaksanaan penyiapan bahan rancangan peraturan daerah;</br>
          e. Pelaksanaan penghimpunan peraturan perundang-undangan, melakukan publikasi dan dokumentasi produk hukum;</br>
          f. Pelaksanaan penyiapan bahan pertimbangan dan bantuan hukum kepada semua unsur pemerintah daerah atas masalah yang timbul dalam pelaksanaan tugas;</br>
          g. Pelaksanaan penyuluhan hukum;</br>
          g1. Penyusunan rencana program, pelaksanaan/pengadaan dan memelihara sarana di bagian hukum dan;</br>
          h. Pelaksanaan tugas lain yang bersifat kedinasan yang diberikan oleh Asisten Pemerintahan dan Pembangunan.</br>
        </p>
      </div>
    </section> -->

  </main><!-- End #main -->

  @include('admin.templates_landing.partials.footer')

  @include('admin.templates_landing.partials.script')

</body>

</html>