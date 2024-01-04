@extends('admin.templates.default')

@push('header')
    <!-- include libraries(jQuery, bootstrap) -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"> -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script> -->
@endpush

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

            </br>
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>{{ $title }}</h5>
                        </div>
                        <div class="ibox-content">
                            <form action="{{ route('admin.berita.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label>Judul Berita</label> 
                                    <input type="text" id="judul" name="judul" placeholder="Judul Berita" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Upload File / Foto Header</label> 
                                    <input type="file" id="file" name="file" placeholder="Nomor Urut Buku dalam Buku Induk" class="form-control">
                                    @error('peraturan')
                                        <span class="help-block" style="color:red; font-size:14px;"><i>{{ $message }}</i></span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" name="deskripsi" id="summernote"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Publish</label> 
                                    <select class="form-control m-b" name="publik" id="publik">
                                        <option value="t">Ya</option>
                                        <option value="f">Tidak</option>
                                    </select>
                                </div>
                                
                                <div class="form-group">
                                    <button class="btn btn-primary btn-w-m btn-block" type="submit" id="btn_simpan"><i class="fa fa-save"></i> Simpan</button>
                                    <a href="{{ url()->previous() }}" class="btn btn-warning btn-w-m btn-block" type="button"><i class="fa fa-reply"></i> Kembali</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
@endsection

@push('scripts')
    <!-- summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
    <script type="text/javascript">
        $('#summernote').summernote({
            height: 400
        });
    </script>
@endpush