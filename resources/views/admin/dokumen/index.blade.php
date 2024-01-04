@extends('admin.templates.default')

@section('content')
        </br>
        <div class="ibox-content m-b-sm border-bottom"> 
            <div class="p-xs">
                <div class="float-left m-r-md">
                    <i class="fa fa-globe text-navy mid-icon"></i>
                </div>
                <h2> <b style="color:green">{{ $title }}</b></h2>
                <span>{{ config('app.name') }}</span>
            </div>
        </div>

        <!-- <div class="wrapper wrapper-content animated fadeInRight"> -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox ">
                        <!-- <div class="ibox-title">
                            <h5>Basic Data Tables example with responsive plugin</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                    <i class="fa fa-wrench"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-user">
                                    <li><a href="#" class="dropdown-item">Config option 1</a>
                                    </li>
                                    <li><a href="#" class="dropdown-item">Config option 2</a>
                                    </li>
                                </ul>
                                <a class="close-link">
                                    <i class="fa fa-times"></i>
                                </a>
                            </div>
                        </div> -->

                        @if(auth()->user()->role == 'admin')
                            <!-- <div class="input-group mb-3">
                                <input type="text" class="form-control form-control-sm" id="filter" placeholder="">
                                <div class="input-group-append">
                                    <a href="{{ route('admin.dokumen.create') }}" class="btn btn-sm btn-info" type="button"><i class="fa fa-plus"></i> Tambah Dokumen</a>
                                </div>
                            </div> -->
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="widget style1">
                                            <div class="row">
                                                <div class="col-4 text-center">
                                                    <i class="fa fa-trophy fa-5x"></i>
                                                </div>
                                                <div class="col-8 text-right">
                                                    <span> Jumlah Peraturan </span>
                                                    <h2 class="font-bold">{{ number_format(count($data),0,',','.') }}</h2>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="widget style1 navy-bg">
                                        <div class="row">
                                            <div class="col-4">
                                                <i class="fa fa-check fa-5x"></i>
                                            </div>
                                            <div class="col-8 text-right">
                                                <span> Telah Divalidasi </span>
                                                <h2 class="font-bold">{{ number_format(count($sudah_validasi),0,',','.') }}</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="widget style1 yellow-bg">
                                        <div class="row">
                                            <div class="col-4">
                                                <i class="fa fa-times fa-5x"></i>
                                            </div>
                                            <div class="col-8 text-right">
                                                <span> Belum Divalidasi </span>
                                                <h2 class="font-bold">{{ number_format(count($belum_validasi),0,',','.') }}</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <a href="{{ route('admin.dokumen.create') }}">
                                        <div class="widget style1 lazur-bg">
                                            <div class="row">
                                                <div class="col-4">
                                                    <i class="fa fa-plus fa-5x"></i>
                                                </div>
                                                <div class="col-8 text-right">
                                                    <span> Tambah Peraturan </span>
                                                    <h2 class="font-bold">260</h2>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3">
                                <a href="{{ route('admin.dokumen.filter', encrypt(1)) }}" type="button" class="btn btn-block @if($tipe_dokumen == 1) btn-danger @else btn-default @endif">Peraturan Daerah</a>
                                </div>
                                <div class="col-lg-3">
                                <a href="{{ route('admin.dokumen.filter', encrypt(2)) }}" type="button" class="btn btn-block @if($tipe_dokumen == 2) btn-danger @else btn-default @endif">Peraturan Walikota</a>
                                </div>
                                <div class="col-lg-3">
                                <a href="{{ route('admin.dokumen.filter', encrypt(3)) }}" type="button" class="btn btn-block @if($tipe_dokumen == 3) btn-danger @else btn-default @endif">Keputusan Walikota</a>
                                </div>
                                <div class="col-lg-3">
                                <a href="{{ route('admin.dokumen.filter', encrypt(4)) }}" type="button" class="btn btn-block @if($tipe_dokumen == 4) btn-danger @else btn-default @endif">Instruksi Walikota</a>
                                </div>
                            </div></br>
                        @endif

                        <div class="ibox-content">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover dataTables-example" >
                                    <thead>
                                        <tr>
                                            <td align="center" width="3%"><b>#<b></td>
                                            <td align="left" width="12%"><b>Jenis Peraturan<b></td>
                                            <td align="center" width="5%"><b>Tahun<b></td>
                                            <td align="center" width="5%"><b>No<b></td>
                                            <td align="center" width="30%"><b>Judul<b></td>
                                            <td align="center" width="8%"><b>Status<b></td>
                                            <td align="center" width="8%"><b>Dokumen<b></td>
                                            <td align="center" width="8%"><b>Status<b></td>
                                            <td align="center" width="13%"><b>Validasi<b></td>
                                            <td align="center" width="8%"><b>Aksi<b></td>
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
                                            <td align="center">
                                                Dokumen <a href="{{ route('admin.file.show', encrypt($data->lampiran_file)) }}" target="_blank"> : <i class="fa fa-paperclip"></i> File</a></br>
                                                Abstrak <a href="{{ route('admin.file.show', encrypt($data->abstrak_file)) }}" target="_blank"> : <i class="fa fa-paperclip"></i> File</a></br>
                                            </td>
                                            <td>@if($data->status_publik == 't') Publik @else Private @endif</td>
                                            <td>
                                                @if($data->verifikasi == 1) 
                                                    <span class="label label-info">Telah Divalidasi</span></br></br>
                                                @elseif($data->verifikasi == null) 
                                                    <span class="label label-warning">Proses Validasi</span></br></br>
                                                @else 
                                                    <span class="label label-danger">Ditolak</span></br></br>
                                                @endif

                                                @if(!empty($data->keterangan_verifikasi))
                                                    <i><b>Catatan : </b> {{ $data->keterangan_verifikasi }}</i>
                                                @endif
                                            </td>
                                            <td align="left">
                                                @if(auth()->user()->role == 'admin')
                                                    <a href="{{ route('admin.dokumen.edit', $data->id) }}" type="button" class="btn btn-primary btn-xs">Ubah</a>
                                                    <button href="{{ route('admin.dokumen.destroy', $data->id) }}" id="delete" class="btn btn-warning btn-xs">Hapus</button>
                                                @elseif(auth()->user()->role == 'validator')
                                                    <a href="{{ route('admin.dokumen.detail', $data->id) }}" type="button" class="btn btn-info btn-xs">Detail</a>
                                                    <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal4{{ $data->id }}">Validasi</button>
                                                    
                                                    <div class="modal inmodal" id="myModal4{{ $data->id }}" tabindex="-1" role="dialog"  aria-hidden="true">
                                                        <div class="modal-dialog modal-lg">
                                                            <form action="{{ route('admin.dokumen.validasi', $data->id) }}" method="POST">
                                                                @csrf
                                                                @method('PUT')
                                                                <div class="modal-content animated fadeIn">
                                                                    <div class="modal-header">
                                                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                                                        <h4 class="modal-title">Validasi Peraturan</h4>
                                                                    </div>  
                                                                    <div class="modal-body">
                                                                        <div class="form-group row">
                                                                            <div class="col-md-12">
                                                                                <label><b>Jenis Peraturan</b> <b style="color:red"> *</b></label> 
                                                                                <input type="text" placeholder="Judul Peraturan" class="form-control" value="{{ $data->jenis_peraturan }}" disabled></br>
                                                                            </div>
                                                                            <div class="col-md-12">
                                                                                <label><b>Judul Peraturan</b> <b style="color:red"> *</b></label> 
                                                                                <input type="text" placeholder="Judul Peraturan" class="form-control" value="{{ $data->judul_peraturan }}" disabled></br>
                                                                            </div>
                                                                            <div class="col-md-12">
                                                                                <label><b>Validasi</b> <b style="color:red">*</b></label> 
                                                                                <select class="form-control m-b" name="verifikasi" id="verifikasi">
                                                                                    <option value="1">Disetujui</option>
                                                                                    <option value="0">Ditolak</option>
                                                                                </select>
                                                                            </div>
                                                                            <div class="col-md-12">
                                                                                <label><b>Keterangan Validasi</b> <b style="color:red"> *</b></label> 
                                                                                <input type="text" placeholder="Keterangan Validasi" class="form-control" name="keterangan_verifikasi" id="keterangan_verifikasi"></br>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-white" data-dismiss="modal">Batal</button>
                                                                        <button type="submit" class="btn btn-primary">Simpan Validasi</button>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                @endif
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- </div> -->

        <form action="" method="post" id="deleteForm">
            @csrf
            @method("DELETE")
            <button type="submit" style="display:none">Hapus</button>
        </form>
@endsection

@push('scripts')
    <script src="{{ asset('assets/js/plugins/footable/footable.all.min.js') }}"></script>
    <script src="{{ asset('assets/js/inspinia.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/pace/pace.min.js') }}"></script>

    <script>
        $(document).ready(function() {
            $('.footable').footable();
            $('.footable2').footable();
        });
    </script>

    <script src="{{ asset('assets/js/sweetalert.js') }}"></script>
    <script>
        $('button#delete').on('click', function(e){
                e.preventDefault();

                var href = $(this).attr('href');

                Swal.fire({
                    title: 'Apakah anda yakin hapus data ini?',
                    text: "Data yang dihapus bisa dikembalikan!",
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Ya, Hapus!'
                    }).then((result) => {
                    if (result.value) {
                        document.getElementById('deleteForm').action = href;
                        document.getElementById('deleteForm').submit();

                        Swal.fire(
                            'Berhasil!',
                            'Data telah dihapus.',
                            'success'
                        )
                    }
                })
            })
    </script>
@endpush