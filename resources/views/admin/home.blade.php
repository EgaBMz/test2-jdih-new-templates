@extends('admin.templates.default')

@section('content')
        <div class="row">
            <div class="col-lg-3">
                <div class="widget style1">
                        <div class="row">
                            <div class="col-4 text-center">
                                <i class="fa fa-podcast fa-5x"></i>
                            </div>
                            <div class="col-8 text-right">
                                <span> Peraturan Daerah</span>
                                    <h2 class="font-bold">{{ count($perda) }}</h2>
                            </div>
                        </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="widget style1 navy-bg">
                    <div class="row">
                        <div class="col-4">
                            <i class="fa fa-line-chart fa-5x"></i>
                        </div>
                        <div class="col-8 text-right">
                            <span> Peraturan Walikota</span>
                                <h2 class="font-bold">{{ count($perwal) }}</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="widget style1 lazur-bg">
                    <div class="row">
                        <div class="col-4">
                            <i class="fa fa-bar-chart-o fa-5x"></i>
                        </div>
                        <div class="col-8 text-right">
                            <span> Keputusan Walikota</span>
                                <h2 class="font-bold">{{ count($kepwal) }}</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="widget style1 yellow-bg">
                    <div class="row">
                        <div class="col-4">
                            <i class="fa fa-area-chart fa-5x"></i>
                        </div>
                        <div class="col-8 text-right">
                            <span> Instruksi Walikota</span>
                                <h2 class="font-bold">{{ count($inwal) }}</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </br>
            <!-- <div class="wrapper wrapper-content"> -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox ">
                        <!-- <div class="ibox-title">
                            <h5> <a href=""><b style="color:#22c6c8">UBAH PROFIL</b></a> | <b style="color:orange">{{ auth()->user()->name }}</b> | <b>0 DATA</b></h5>

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
                        <div class="ibox-content">
                            <!-- <input type="text" class="form-control form-control-sm m-b-xs" id="filter" placeholder="Pencarian . . . "> -->
                            <div class="input-group mb-3">
                                <input type="text" class="form-control form-control-sm" id="filter" placeholder="Jaringan Dokumentasi dan Informasi Hukum Kota Madiun">
                                <div class="input-group-append">
                                    <a href="{{ route('admin.dokumen.create') }}" class="btn btn-sm btn-info" type="button"><i class="fa fa-plus"></i> Tambah Dokumen</a>
                                </div>
                            </div>

                            <table class="footable table table-stripped" data-page-size="7" data-filter=#filter>
                                <tbody>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <td colspan="7">
                                        <ul class="pagination float-right"></ul>
                                    </td>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <form action="" method="post" id="deleteForm">
                @csrf
                @method("DELETE")
                <button type="submit" style="display:none">Hapus</button>
            </form>
@endsection

@push('scripts')
    <!-- FooTable -->
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
        $('a#delete').on('click', function(e){
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