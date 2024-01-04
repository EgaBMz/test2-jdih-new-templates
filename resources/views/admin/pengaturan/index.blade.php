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

                        <div class="ibox-content">
                            
                            <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" >
                        <thead>
                            <tr>
                                <td align="center" width="3%"><b>#<b></td>
                                <td align="left" width="20%"><b>Title<b></td>
                                <td align="left" width="55%"><b>Value<b></td>
                                <td align="left" width="10%"><b>Type<b></td>
                                <td align="center" width="3%"><b>Aksi<b></td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i=0; ?>
                            @foreach($data as $data)
                            <?php $i++; ?>
                            <tr class="gradeX">
                                <td>{{ $i }}</td>
                                <td>{{ $data->title }}</td>
                                <td>{{ $data->value }}</td>
                                <td>{{ $data->type }}</td>
                                <td align="center">
                                    <a href="{{ route('admin.pengaturan.edit', $data->id) }}" type="button" class="btn btn-primary btn-xs">Ubah</a>
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