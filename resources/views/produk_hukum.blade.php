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
  body {
    margin: 0;
    padding: 0;
    font-family: 'YourPreferredFont', sans-serif;
    background-color: #f0f0f0; /* Set your preferred background color */
    color: #333; /* Set your preferred text color */
  }
  </style>

<body>

  @include('admin.templates_landing.partials.navbar')

  <section id="hero">
    <div class="hero-container" data-aos="fade-up">
      <h2><b style="color:#ffffff; font-size: 15px;">~ Produk Hukum ~</b></h2></br></br>
      <h1><b style="color:#ffffff; font-size: 35px;">Jaringan Dokumentasi dan Informasi Hukum</b> <b style="color:#00ccff; font-size: 35px;">Kota Madiun</b></h1>
      <h2><b style="color:#ffffff; font-size: 28px;">Kumpulan Produk & Informasi Hukum Kota Madiun</b></h2>
      <a href="#services" class="btn-get-started scrollto"><i class="bx bx-chevrons-down"></i></a>
    </div>
  </section><!-- End Hero -->

  <main id="main">
  <section id="services" class="services services">
    <div class="container" data-aos="fade-up">

          <div class="section-title">
            <h2>Daftar Produk Hukum</h2>
          </div>

          <div class="row">
            <div class="col-lg-12" data-aos="fade-right">
              <table class="table table-striped table-bordered table-hover dataTables-example" id="tableData">
                <thead>
                    <tr>
                        <td align="center" width="5%"><b>#<b></td>
                        <td align="left" width="15%"><b>Produk Hukum<b></td>
                        <td align="center" width="3%"><b>Tahun<b></td>
                        <td align="center" width="3%"><b>No Produk Hukum<b></td>
                        <td align="center" width="50%"><b>Judul<b></td>
                        <td align="center" width="7%"><b>Status<b></td>
                        <td align="center" width="10%"><b>Informasi<b></td>
                        <td align="center" width="0%" style="display:none"></td>
                    </tr>
                </thead>
                <tbody>
                    <?php $i=0; ?>
                    @foreach($data as $data)
                    <?php $i++; ?>
                    <tr class="gradeX">
                        <td>{{ $i }}</td>
                        <td>{{ $data->jenis_peraturan }}</td>
                        <?php
                            $date = DateTime::createFromFormat("Y-m-d", $data->waktu_penetapan);

                        ?>
                        <td align="center">@if($date != null) {{ $date->format("Y") }} @endif</td>
                        <td align="center">{{ $data->no_peraturan }}</td>
                        <td>{{ $data->judul_peraturan }}</td>
                        <td>{{ $data->status_peraturan }}</td>
                        <td>
                          <div class="btn-group" role="group" aria-label="Basic example">
                            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModal">Detail</button>
                            @if($data->status_publik == 't')
                              <a href="{{ route('file.show', [encrypt($data->lampiran_file), encrypt($data->status_publik)]) }}" target="_blank" type="button" class="btn btn-info">Dokumen</a>
                            @endif
                          </div>
                        </td>
                        <td style="display:none">{{ $data->id }}</td>
                    </tr>
                    @endforeach
                </tfoot>
              </table>
            </div>
          </div>
        </div>
      </section>

  </main><!-- End #main -->

  @include('admin.templates_landing.partials.footer')

  @include('admin.templates_landing.partials.script')

</body>

</html>