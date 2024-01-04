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
                            <h5>Ubah Password</h5>
                        </div>
                        <div class="ibox-content">
                            <form action="{{ route('admin.profil.ubah_password') }}" method="POST">
                                @csrf
                                @if (session()->has('statusY'))
                                    <p class="font-bold  alert alert-info m-b-sm">
                                        {{ session()->get('statusY') }}
                                    </p>
                                    {{session()->forget('statusY')}}
                                @endif
                                
                                <div class="form-group @error('nama') has-error @enderror">
                                    <label for="">Nama Pengguna</label>
                                    <input id="nama" name="nama" type="text" class="form-control required" value="{{ $user->name }}" readonly>
                                </div>

                                <div class="form-group @error('username') has-error @enderror">
                                    <label for="">Username</label>
                                    <input id="username" name="username" type="text" class="form-control required" value="{{ $user->email }}"  readonly>
                                </div>

                                <div class="form-group @error('role') has-error @enderror">
                                    <label for="">Akses</label>
                                    <input id="role" name="role" type="text" class="form-control required" value="{{ $user->role }}"  readonly>
                                </div>

                                <div class="form-group @error('password_lama') has-error @enderror">
                                    <label for="">Password Lama</label>
                                    <input id="password_lama" name="password_lama" type="password" class="form-control required">
                                    @error('password_lama')
                                        <span class="help-block" style="color:red">{{ $message }}</span>
                                    @enderror

                                    @if (session()->has('statusT'))
                                        <span style="color:red" class="help-block">{{ session()->get('statusT') }}</span>
                                        {{session()->forget('statusT')}}
                                    @endif
                                </div>

                                <div class="form-group @error('password_baru') has-error @enderror">
                                    <label for="">Password Baru</label>
                                    <input id="password_baru" name="password_baru" type="password" class="form-control required">
                                    @error('password_baru')
                                        <span class="help-block" style="color:red">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group @error('konfirmasi') has-error @enderror">
                                    <label for="">Konfirmasi Password</label>
                                    <input id="konfirmasi" name="konfirmasi" type="password" class="form-control required">
                                    @error('konfirmasi')
                                        <span class="help-block" style="color:red">{{ $message }}</span>
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