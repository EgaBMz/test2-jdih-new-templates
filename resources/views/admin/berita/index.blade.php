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

                        <div class="input-group mb-3">
                                <input type="text" class="form-control form-control-sm" id="filter" placeholder="">
                                <div class="input-group-append">
                                    <a href="{{ route('admin.berita.create') }}" class="btn btn-sm btn-info" type="button"><i class="fa fa-plus"></i> Tambah Berita</a>
                                </div>
                            </div>

                        <div class="ibox-content">
                            
                            <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover dataTables-example" >
                            <thead>
                                <tr>
                                    <td align="center" width="5%"><b>#<b></td>
                                    <td align="left" width="60%"><b>Judul<b></td>
                                    <!-- <td align="left" width="40%"><b>Deskripsi<b></td> -->
                                    <td align="left" width="10%"><b>Dibuat<b></td>
                                    <td align="left" width="10%"><b>Waktu<b></td>
                                    <td align="left" width="5%"><b>Publish<b></td>
                                    <td align="left" width="10%"><b>Aksi<b></td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i=0; ?>
                                @foreach($data as $data)
                                <?php $i++; ?>
                                <tr class="gradeX">
                                    <td>{{ $i }}</td>
                                    <td>{{ $data->judul }}</td>
                                    <!-- <td> -->
                                        <!-- {{ stripslashes($data->deskripsi) }} -->
                                        <?php 
                                            // echo(stripslashes($data->deskripsi));   
                                        ?>
                                    <!-- </td> -->
                                    <td>{{ $data->name }}</td>
                                    <td>{{ $data->created_at }}</td>
                                    <td>
                                        @if($data->publik == 1)
                                            Ya
                                        @else
                                            Tidak
                                        @endif
                                    </td>
                                    <td align="center">
                                        <a href="{{ route('admin.berita.edit', $data->id) }}" type="button" class="btn btn-primary btn-xs">Ubah</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
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