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
        <div class="col-lg-12 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="100">
          <div id="container"></div>
        </div>
        </br>
        </br>
        </br>
        </br>
        <div class="col-lg-12 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="100">
          <div id="container2"></div>
        </div>
      </div>
    </section>
  </main>

  @include('admin.templates_landing.partials.footer')

  @include('admin.templates_landing.partials.script')

  <script src="{{ asset('template/grafik/code/highcharts.js') }}"></script>
  <script src="{{ asset('template/grafik/code/highcharts-3d.js') }}"></script>
  <script src="{{ asset('template/grafik/code/modules/exporting.js') }}"></script>
  <script src="{{ asset('template/grafik/code/modules/export-data.js') }}"></script>
  <script src="{{ asset('template/grafik/code/modules/accessibility.js') }}"></script>

  <script type="text/javascript">
    Highcharts.chart('container', {
        chart: {
            type: 'pie',
            options3d: {
                enabled: true,
                alpha: 25
            }
        },
        title: {
            text: 'Prosentase Produk Hukum'
        },
        subtitle: {
            text: 'Pemerintah Kota Madiun'
        },
        plotOptions: {
            pie: {
                innerSize: 100,
                depth: 45
            }
        },
        series: [{
            name: 'Jumlah',
            data: [
                <?php 
                  foreach ($data as $data) {
                ?>
                  ["<?php echo $data->jenis_peraturan; ?>", <?php echo $data->jumlah; ?>],
                <?php
                  } 
                ?>
            ]
        }]
    });
	</script>

  <script>
    Highcharts.chart('container2', {
      chart: {
          type: 'column'
      },
      title: {
          text: 'Statistik Produk Hukum'
      },
      subtitle: {
          text: 'Pemerintah Kota Madiun'
      },
      xAxis: {
          categories: [
            <?php
              foreach ($tahuns as $tahuns) {
                echo $tahuns->tahun.', ';
              }
            ?>
          ]
      },
      credits: {
          enabled: false
      },
      series: [{
          name: 'Peraturan Daerah',
          data: [<?php echo $perda; ?>]
      }, {
          name: 'Peraturan Walikota',
          data: [<?php echo $perwal; ?>]
      }, {
          name: 'Keputusan Walikota',
          data: [<?php echo $kepwal; ?>]
      }, {
          name: 'Instruksi Walikota',
          data: [<?php echo $inwal; ?>]
      }]
    });
  </script>
</body>

</html>