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
      
   @if($status == 'tidak ada')   
  <div class="modal fade show" id="modal-popus" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" style="padding-right: 17px; display: block;" aria-modal="true">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header" style=" border-bottom: 0 none;">  
          </div>
          <center><h1>Survey Gender<h1></center>
          <div class="modal-body"> 
              <div class="card">
              <div class="col-sm-12 grid-margin">
              <div class="rotate-img">
   <body>
        <form action="{{route('simpan_surveygender')}}" method="POST">
          @csrf
          <p><h4>Jenis Kelamin</h4></p>
          <input class="form-check-input" type="hidden" name='ip' value="{{ $ip }}">
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name='jenis_kelamin' value='pria' checked>
            <label class="form-check-label" for="inlineRadio1">Pria</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name='jenis_kelamin' value='perempuan'>
            <label class="form-check-label" for="inlineRadio2">Perempuan</label>
          </div></br></br>
          <button type="submit" class="btn btn-info" onclick="return radioValidation();"><i class="fa fa-save"></i> Simpan Survey</button></br></br>
        </form> 
        <script type="text/javascript">
            function radioValidation(){
        
                var jenis_kelamin = document.getElementsByName('jenis_kelamin');
                var genValue = false;
        
                for(var i=0; i<jenis_kelamin.length;i++){
                    if(jenis_kelamin[i].checked == true){
                        genValue = true;    
                    }
                }
                if(!genValue){
                    alert("Pilih Jenis Kelamin terlebih dahulu");
                    return false;
                }
        
            }
        </script>
  </body>
  <script src="{{ asset('gender.png') }}"></script>
                </div>
              </div>
              </div>
            </div>
                             
          </div>
       
      </div>
  </div>
</div>
@endif 
      <section id="about" class="about">
        <div class="container" data-aos="fade-up">

          <div class="section-title">
            <h2>Selamat Datang</br><b style="color:orange">JDIH Kota Madiun</b></h2>
            <p>{{ \App\Pengaturan::value(5) }}</p>
          </div>

          <div class="row">
            <div class="col-lg-12" data-aos="fade-right">
              <img class="img-thumbnail" width="100%" src="{{ \App\Pengaturan::value(6) }}" class="img-fluid" alt="" align="center">
            </div>
          </div>
        </div>
      </section>

    <section id="features" class="features">
      <div class="container" data-aos="fade-up">
                <div class="section-title">
                  <h2>Dokumen Hukum</h2>
                </div>

                <div class="row ">
                  <div class="col-xl-3 col-lg-6">
                      <div class="card l-bg-cherry">
                          <div class="card-statistic-3 p-4">
                              <div class="card-icon card-icon-large"><i class="fas fa-book"></i></div>
                              <div class="mb-4">
                                  <h5 class="card-title mb-0">Peraturan Daerah</h5>
                              </div>
                              <div class="row align-items-center mb-2 d-flex">
                                  <div class="col-8">
                                      <h2 class="d-flex align-items-center mb-0">
                                        {{ number_format(count($perda), 0, ',', '.') }}
                                      </h2>
                                  </div>
                              </div>
                              <div class="progress mt-1 " data-height="8" style="height: 8px;">
                                  <div class="progress-bar l-bg-cyan" role="progressbar" data-width="25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;"></div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-xl-3 col-lg-6">
                      <div class="card l-bg-blue-dark">
                          <div class="card-statistic-3 p-4">
                              <div class="card-icon card-icon-large"><i class="fas fa-book"></i></div>
                              <div class="mb-4">
                                  <h5 class="card-title mb-0">Peraturan Wali Kota</h5>
                              </div>
                              <div class="row align-items-center mb-2 d-flex">
                                  <div class="col-8">
                                      <h2 class="d-flex align-items-center mb-0">
                                        {{ number_format(count($perwal), 0, ',', '.') }}
                                      </h2>
                                  </div>
                              </div>
                              <div class="progress mt-1 " data-height="8" style="height: 8px;">
                                  <div class="progress-bar l-bg-green" role="progressbar" data-width="25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;"></div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-xl-3 col-lg-6">
                      <div class="card l-bg-green-dark">
                          <div class="card-statistic-3 p-4">
                              <div class="card-icon card-icon-large"><i class="fas fa-book"></i></div>
                              <div class="mb-4">
                                  <h5 class="card-title mb-0">Keputusan Wali Kota</h5>
                              </div>
                              <div class="row align-items-center mb-2 d-flex">
                                  <div class="col-8">
                                      <h2 class="d-flex align-items-center mb-0">
                                        {{ number_format(count($kepwal), 0, ',', '.') }}
                                      </h2>
                                  </div>
                              </div>
                              <div class="progress mt-1 " data-height="8" style="height: 8px;">
                                  <div class="progress-bar l-bg-cyan" role="progressbar" data-width="25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;"></div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-xl-3 col-lg-6">
                      <div class="card l-bg-orange-dark">
                          <div class="card-statistic-3 p-4">
                              <div class="card-icon card-icon-large"><i class="fas fa-book"></i></div>
                              <div class="mb-4">
                                  <h5 class="card-title mb-0">Instruksi Wali Kota</h5>
                              </div>
                              <div class="row align-items-center mb-2 d-flex">
                                  <div class="col-8">
                                      <h2 class="d-flex align-items-center mb-0">
                                        {{ number_format(count($inwal), 0, ',', '.') }}
                                      </h2>
                                  </div>
                              </div>
                              <div class="progress mt-1 " data-height="8" style="height: 8px;">
                                  <div class="progress-bar l-bg-green" role="progressbar" data-width="25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;"></div>
                              </div>
                          </div>
                      </div>
                  </div>
                </div>
        </br>
        <div class="row">
          <div class="col-lg-6 order-2 order-lg-1" data-aos="fade-right"></br>
            <div class="icon-box mt-5 mt-lg-0">
              <i class="bx bx-receipt"></i>
              <h4>Peraturan Daerah</h4>
              <p>Klik untuk mencari daftar Peraturan Daerah. <a href="{{ route('kategori', encrypt(1)) }}" style="color:orange">klik disini</a></p></br>
            </div>
            <div class="icon-box mt-5 mt-lg-0">
              <i class="bx bx-receipt"></i>
              <h4>Peraturan Wali Kota</h4>
              <p>Klik untuk mencari daftar Peraturan Wali Kota. <a href="{{ route('kategori', encrypt(2)) }}" style="color:orange">klik disini</a></p></br>
            </div>
            <div class="icon-box mt-5 mt-lg-0">
              <i class="bx bx-receipt"></i>
              <h4>Keputusan Wali Kota</h4>
              <p>Klik untuk mencari daftar Keputusan Wali Kota. <a href="{{ route('kategori', encrypt(3)) }}" style="color:orange">klik disini</a></p></br>
            </div>
            <div class="icon-box mt-5 mt-lg-0">
              <i class="bx bx-receipt"></i>
              <h4>Instruksi Wali Kota</h4>
              <p>Klik untuk mencari daftar Instruksi Wali Kota. <a href="{{ route('kategori', encrypt(4)) }}" style="color:orange">klik disini</a></p></br>
            </div>
            <div class="icon-box mt-5 mt-lg-0">
              <i class="bx bx-receipt"></i>
              <h4>Surat Edaran Wali Kota</h4>
              <p>Klik untuk mencari daftar Surat Edaran Wali Kota. <a href="{{ route('kategori', encrypt(5)) }}" style="color:orange">klik disini</a></p></br>
            </div>
          </div>
          <div class="image col-lg-6 order-1 order-lg-2 rounded-lg " style='background-image: url("{{ \App\Pengaturan::value(7) }}");' data-aos="zoom-in"></div>
        </div>
      </div>
    </section><!-- End Features Section -->
    </main>

    <section id="featured-services" class="featured-services">
      <div class="container" data-aos="fade-up">
        <!--  -->

        <div class="section-title">
          <h2>Dokumen Hukum Terbaru</h2>
        </div>

        @foreach($terbaru as $terbaru)
        <div class="row">
          <div class="col-sm-12 mb-3 mb-sm-0">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">{{ $terbaru->jenis_peraturan }}</h5>
                <p class="card-text">{{ $terbaru->judul_peraturan }}</p>
                <i style="color:orange">Diunggah pada : {{ $terbaru->created_at }}</i>
              </div>
            </div>
          </div>
        </div>
        @endforeach
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

    <section id="doctors" class="pricing section-bg">
        <div class="container" data-aos="fade-up">
          <!-- <div class="container"> -->
            <div class="section-title">
              <h2>Pengunjung</h2>
            </div>

            <div class="row">
                <!-- <div class="col-md-4 col-xl-3">
                    <div class="card bg-c-blue order-card">
                        <div class="card-block">
                            <h6 class="m-b-20">Orders Received</h6>
                            <h2 class="text-right"><i class="fa fa-users f-left"></i><span>486</span></h2>
                            <p class="m-b-0">Completed Orders<span class="f-right">351</span></p>
                        </div>
                    </div>
                </div> -->
                
                <div class="col-md-4 col-xl-4">
                    <div class="card bg-c-green order-card">
                        <div class="card-block">
                            <h6 class="m-b-20">Hari Ini</h6>
                            <h2 class="text-right"><i class="fa fa-users f-left"></i><span>{{ count($hariini) }}</span>
                              <p class="m-b-0" style="font-size:12px">Laki-Laki : {{ count($hariini_laki_laki) }}, Perempuan : {{ count($hariini_perempuan) }}</p>
                            </h2>
                            <!-- <p class="m-b-0">Completed Orders<span class="f-right">351</span></p> -->
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4 col-xl-4">
                    <div class="card bg-c-yellow order-card">
                        <div class="card-block">
                            <h6 class="m-b-20">Minggu Ini</h6>
                            <h2 class="text-right"><i class="fa fa-users f-left"></i><span>{{ count($mingguini) }}</span>
                              <p class="m-b-0" style="font-size:12px">Laki-Laki : {{ count($mingguini_laki_laki) }}, Perempuan : {{ count($mingguini_perempuan) }}</p>
                            </h2>
                            <!-- <p class="m-b-0">Completed Orders<span class="f-right">351</span></p> -->
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4 col-xl-4">
                    <div class="card bg-c-pink order-card">
                        <div class="card-block">
                            <h6 class="m-b-20">Total</h6>
                            <h2 class="text-right"><i class="fa fa-users f-left"></i><span>{{ count($total) }}</span>
                              <p class="m-b-0" style="font-size:12px">Laki-Laki : {{ count($total_laki_laki) }}, Perempuan : {{ count($total_perempuan) }}</p>
                            </h2>
                            <!-- <p class="m-b-0">Completed Orders<span class="f-right">351</span></p> -->
                        </div>
                    </div>
                </div>
            </div>
          <!-- </div> -->
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
@push('scripts')
<script type="text/javascript">
  $(window).on('load', function() {
      $('#myModal').modal('show');
  });
</script>
@endpush

<script>
$(document).on("click", ".save", function() {
    $.ajax({
        type: "post",
        url: '/Users/message',
        data: $(".message").serialize(),
        success: function(store) {

        },
        error: function() {
        }
    });
});
</script>
