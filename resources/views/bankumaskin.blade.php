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
          <h2>
            Bankumaskin</br>
            <span style="font-size:14px">Bantuan Hukum Bagi Masyarakat Miskin</span>
          </h2>
        </div>

        <div class="row">
          <table class="table table-striped table-bordered table-hover dataTables-example" >
            <thead>
                <tr>
                  <td align="center" width="5%"><b>#<b></td>
                  <td align="left" width="30%"><b>Nomor Perkara<b></td>
                  <td align="left" width="30%"><b>Jenis Perkara<b></td>
                  <td align="left" width="30%"><b>Tahun Pemberian Bantuan Hukum<b></td>
                </tr>
            </thead>
            <tbody>
                <?php $i=0; ?>
                @foreach($data as $data)
                <?php $i++; ?>
                <tr class="gradeX">
                  <td>{{ $i }}</td>
                  <td>{{ $data->nomor_perkara }}</td>
                  <td>{{ $data->jenis_perkara }}</td>
                  <td>{{ $data->tahun_pemberian_bantuan_hukum }}</td>
                </tr>
                @endforeach
            </tfoot>
          </table>
        </div>
    </section>

  </main><!-- End #main -->

  @include('admin.templates_landing.partials.footer')

  @include('admin.templates_landing.partials.script')

</body>

</html>