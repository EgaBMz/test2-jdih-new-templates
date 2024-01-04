<!DOCTYPE html>
<html lang="en">

@include('admin.templates_landing.partials.head')

<body>

  @include('admin.templates_landing.partials.navbar')

  <section class="inner-page">
  </section>

  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="container" data-aos="fade-up">

            <div class="section-title">
              <h2>Form Pencarian Peraturan</h2>
            </div>

            <form action="{{ route('pencarian') }}" method="post">
              @csrf
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <select name="tipe_dokumen_id" id="tipe_dokumen_id" class="form-control">
                    <option value="-">Pilih Jenis Peraturan</option>
                    @foreach($jenis_dokumen as $jenis_dokumen)
                    <option value="{{ $jenis_dokumen->id }}">{{ $jenis_dokumen->jenis_peraturan }}</option>
                    @endforeach
                  </select>
                </div>
                <div class="col-md-6 form-group">
                  <select name="status_peraturan_id" id="status_peraturan_id" class="form-control">
                    <option value="-">Pilih Status Akhir</option>
                    @foreach($status_peraturan as $status_peraturan)
                    <option value="{{ $status_peraturan->id }}">{{ $status_peraturan->status_peraturan }}</option>
                    @endforeach
                  </select>
                </div>
              </div>
              <div class="form-row">
                <div class="col-md-10 form-group">
                  <input type="text" name="judul_peraturan" id="judul_peraturan" class="form-control datepicker" placeholder="Masukkan Judul">
                </div>
                <div class="col-md-2 form-group">
                  <button type="submit" class="btn btn-block btn-info">Cari Peraturan</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </footer>

    <section id="featured-services" class="featured-services">
      <div class="container" data-aos="fade-up">
        <table class="table table-striped table-bordered table-hover dataTables-example" id="tableData">
          <thead>
              <tr>
                  <td align="center" width="5%"><b>#<b></td>
                  <td align="left" width="15%"><b>Jenis Peraturan<b></td>
                  <td align="center" width="3%"><b>Tahun<b></td>
                  <td align="center" width="3%"><b>No<b></td>
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
                  <!-- <td align="center">
                    @if($data->status_publik == 't')
                      <a href="{{ asset($data->lampiran_file) }}" target="_blank">Dokumen</a>
                    @endif
                  </td> -->
                  <td>
                    <div class="btn-group" role="group" aria-label="Basic example">
                      <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModal">Detail</button>
                      <a href="{{ route('file.show', [encrypt($data->lampiran_file), encrypt($data->status_publik)]) }}" target="_blank" type="button" class="btn btn-info">Dokumen</a>
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