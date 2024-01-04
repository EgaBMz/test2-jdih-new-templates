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

            </br>
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>{{ $title }}</h5>
                        </div>
                        <div class="ibox-content">
                            <form action="{{ route('admin.peraturan.update', $peraturan) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label>peraturan</label> 
                                    <input type="text" id="jenis_peraturan" name="jenis_peraturan" placeholder="peraturan" class="form-control" value="{{ $peraturan->jenis_peraturan }}">
                                    @error('peraturan')
                                        <span class="help-block" style="color:red; font-size:14px;"><i>{{ $message }}</i></span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-primary btn-w-m btn-block" type="submit"><i class="fa fa-save"></i> Simpan</button>
                                    <a href="{{ url()->previous() }}" class="btn btn-warning btn-w-m btn-block" type="button"><i class="fa fa-reply"></i> Kembali</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
@endsection

@push('scripts')
    
@endpush