<!DOCTYPE html>
<html lang="en">

@include('admin.templates_landing.partials.head')

<body>

  @include('admin.templates_landing.partials.navbar')

  <main id="main">

    <section class="inner-page">
    </section>

      <section id="about" class="about">
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