<!DOCTYPE html>
<html lang="en">

@include('admin.templates_landing.partials.head')

<body>
    @include('admin.templates_landing.partials.navbar')

    <main id="main">
      <section class="inner-page">
      </section>

      <!-- <section id="cta" class="cta">
        <div class="container" data-aos="zoom-in">
          <div class="text-center">
            <h3>Pemerintah Kota Madiun</h3>
            <p> Selamat Datang di Aplikasi Jaringan Dokumentasi & Informasi Hukum.</p>
            <a class="cta-btn scrollto" href="{{ route('login') }}">Login Admin</a>
          </div>
        </div>
      </section> -->
    </main>

    <section id="featured-services" class="featured-services">
      <div class="container" data-aos="fade-up">
        <!-- <div class="section-title"> -->
          <h2 align="center"><b>{{ strtoupper($kategori) }}</b></br><b style="color:orange">JDIH Kota Madiun</b></h2>
        <!-- </div> -->

        <table class="table table-striped table-bordered table-hover dataTables-example" id="tableData">
          <thead>
              <tr>
                  <td align="center" width="5%"><b>No<b></td>
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
                      <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#myModal">Detail</button>
                      <a href="{{ route('file.show', [encrypt($data->abstrak_file), encrypt($data->status_publik)]) }}" target="_blank" type="button" class="btn btn-danger btn-sm">Abstrak</a>
                      @if($data->status_publik == 't')
                        <a href="{{ route('file.show', [encrypt($data->lampiran_file), encrypt($data->status_publik)]) }}" target="_blank" type="button" class="btn btn-info btn-sm">Dokumen</a>
                      @endif
                    </div>
                  </td>
                  <td style="display:none">{{ $data->id }}</td>
              </tr>
              @endforeach
          </tfoot>
        </table>
      </div>

      <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Detail Dokumen Hukum</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <!-- <button type="button" class="btn btn-warning" >Abstrak</button> -->
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

  @include('admin.templates_landing.partials.footer')

  @include('admin.templates_landing.partials.script')

</body>
  <script type="text/javascript">
    $(document).ready(function(){
        $('#tableData').on('click', '.btn.btn-warning',function(){
            var currentRow=$(this).closest("tr");
            var no=currentRow.find("td:eq(0)").text();
            var nik=currentRow.find("td:eq(1)").text();
            var id=currentRow.find("td:eq(7)").text();
            var text = "#myModal";
            var konten = "#modal-konten";
                    
            // console.log(id);

            $(konten).empty();
            $(konten).load('{{ url('peraturan/detail/')}}/'+id);
            $(text).modal();
        });
    });
  </script>
</html>