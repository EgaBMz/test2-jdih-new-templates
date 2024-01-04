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
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label><b>Tipe Dokumen</b> <b style="color:red">*</b></label> 
                                                <select class="form-control m-b" name="tipe_dokumen_id" id="tipe_dokumen_id">
                                                    <option>--- Pilih Jenis Peraturan ---</option>
                                                    @foreach($jenis_dokumen as $jenis_dokumen)
                                                    <option value="{{ $jenis_dokumen->id }}" @if($jenis_dokumen->id == $dokumen->tipe_dokumen_id) selected @endif>{{ $jenis_dokumen->jenis_peraturan }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <label><b>Cetakan Edisi</b></label> 
                                                <input type="text" id="cetakan_edisi" name="cetakan_edisi" placeholder="Contoh : Ed.1, Cet.2" class="form-control" value="{{ $dokumen->cetakan_edisi }}">
                                                @error('cetakan_edisi')
                                                    <span class="help-block" style="color:red; font-size:14px;"><i>{{ $message }}</i></span>
                                                @enderror
                                            </div>
                                            <div class="col-md-4">
                                                <label><b>Bahasa</b></label> 
                                                <select class="form-control m-b" name="bahasa_id" id="bahasa_id">
                                                    <option>--- Pilih Bahasa ---</option>
                                                    @foreach($bahasa as $bahasa)
                                                    <option value="{{ $bahasa->id }}" @if($bahasa->id == $dokumen->bahasa_id) selected @endif>{{ $bahasa->bahasa }}</option>
                                                    @endforeach
                                                </select>
                                                @error('bahasa_id')
                                                    <span class="help-block" style="color:red; font-size:14px;"><i>{{ $message }}</i></span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label><b>Judul Peraturan</b> <b style="color:red"> *</b></label> 
                                                <input type="text" id="judul_peraturan" name="judul_peraturan" placeholder="Judul Peraturan" class="form-control" value="{{ $dokumen->judul_peraturan }}">
                                                @error('judul_peraturan')
                                                    <span class="help-block" style="color:red; font-size:14px;"><i>{{ $message }}</i></span>
                                                @enderror
                                            </div>
                                            <div class="col-md-4">
                                                <label><b>Tempat Terbit</b></label> 
                                                <input type="text" id="tempat_terbit" name="tempat_terbit" placeholder="Contoh : Surabaya" class="form-control" value="{{ $dokumen->tempat_terbit }}">
                                                @error('tempat_terbit')
                                                    <span class="help-block" style="color:red; font-size:14px;"><i>{{ $message }}</i></span>
                                                @enderror
                                            </div>
                                            <div class="col-md-4">
                                                <label><b>Lokasi</b></label> 
                                                <input type="text" id="lokasi" name="lokasi" placeholder="Contoh : Bagian Hukum Kota Madiun" class="form-control" value="{{ $dokumen->lokasi }}">
                                                @error('lokasi')
                                                    <span class="help-block" style="color:red; font-size:14px;"><i>{{ $message }}</i></span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label><b>T.E.U. Badan / Pengarang</b></label> 
                                                <input type="text" id="teu_badan_pengarang" name="teu_badan_pengarang" placeholder="Contoh : Kota Madiun" class="form-control" value="{{ $dokumen->teu_badan_pengarang }}">
                                                @error('teu_badan_pengarang')
                                                    <span class="help-block" style="color:red; font-size:14px;"><i>{{ $message }}</i></span>
                                                @enderror
                                            </div>
                                            <div class="col-md-4">
                                                <label><b>Penerbit</b></label> 
                                                <input type="text" id="penerbit" name="penerbit" placeholder="Diisikan Nama Penerbit" class="form-control" value="{{ $dokumen->penerbit }}">
                                                @error('penerbit')
                                                    <span class="help-block" style="color:red; font-size:14px;"><i>{{ $message }}</i></span>
                                                @enderror
                                            </div>
                                            <div class="col-md-4">
                                                <label><b>Bidang</b></label> 
                                                <input type="text" id="bidang" name="bidang" placeholder="Contoh : Bidang Hukum" class="form-control" value="{{ $dokumen->bidang }}">
                                                @error('bidang')
                                                    <span class="help-block" style="color:red; font-size:14px;"><i>{{ $message }}</i></span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label><b>Nomor Peraturan</b> <b style="color:red"> *</b></label> 
                                                <input type="text" id="no_peraturan" name="no_peraturan" placeholder="Contoh : 7" class="form-control" value="{{ $dokumen->no_peraturan }}">
                                                @error('no_peraturan')
                                                    <span class="help-block" style="color:red; font-size:14px;"><i>{{ $message }}</i></span>
                                                @enderror
                                            </div>
                                            <div class="col-md-4">
                                                <label><b>Tanggal / Bulan / Tahun Penetapan</b> <b style="color:red">*</b></label> 
                                                <input type="date" id="waktu_penetapan" name="waktu_penetapan" class="form-control" value="{{ $dokumen->waktu_penetapan }}">
                                                @error('waktu_penetapan')
                                                    <span class="help-block" style="color:red; font-size:14px;"><i>{{ $message }}</i></span>
                                                @enderror
                                            </div>
                                            <div class="col-md-4">
                                                <label><b>No. Induk Buku</b></label> 
                                                <input type="text" id="no_induk_buku" name="no_induk_buku" placeholder="Nomor Urut Buku dalam Buku Induk" class="form-control" value="{{ $dokumen->no_induk_buku }}">
                                                @error('no_induk_buku')
                                                    <span class="help-block" style="color:red; font-size:14px;"><i>{{ $message }}</i></span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label><b>Nomor Panggil</b> <b style="color:red"> *</b></label> 
                                                <input type="text" id="no_panggil" name="no_panggil" placeholder="Contoh : 342.25 BRA o" class="form-control" value="{{ $dokumen->no_panggil }}">
                                                @error('no_panggil')
                                                    <span class="help-block" style="color:red; font-size:14px;"><i>{{ $message }}</i></span>
                                                @enderror
                                            </div>
                                            <div class="col-md-4">
                                                <label><b>Deskripsi Fisik</b></label> 
                                                <input type="text" id="deskripsi_fisik" name="deskripsi_fisik" placeholder="Contoh : ix, 302 hlm.; 21 cm." class="form-control" value="{{ $dokumen->deskripsi_fisik }}">
                                                @error('deskripsi_fisik')
                                                    <span class="help-block" style="color:red; font-size:14px;"><i>{{ $message }}</i></span>
                                                @enderror
                                            </div>
                                            <div class="col-md-4">
                                                <label><b>Upload File / Lampiran</b> <b style="color:red">*</b></label> </br>
                                                <i class="fa fa-paperclip"></i> <a href="{{ route('admin.file.show', encrypt($dokumen->lampiran_file)) }}" target="_blank">Dokumen</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label><b>Kabupaten / Kota</b> <b style="color:red"> *</b></label> 
                                                <select class="form-control m-b" name="kab_kota_id" id="kab_kota_id">
                                                    <option>--- Pilih Kabupaten / Kota ---</option>
                                                    @foreach($kab_kota as $kab_kota)
                                                    <option value="{{ $kab_kota->id }}" @if($kab_kota->id == $dokumen->kab_kota_id) selected @endif>{{ $kab_kota->kab_kota }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <label><b>Sumber</b></label> 
                                                <input type="text" id="sumber" name="sumber" placeholder="Contoh : LD Kota Semarang 2012 (13): 7 hlm." class="form-control" value="{{ $dokumen->sumber }}">
                                                @error('sumber')
                                                    <span class="help-block" style="color:red; font-size:14px;"><i>{{ $message }}</i></span>
                                                @enderror
                                            </div>
                                            <div class="col-md-4">
                                                <label><b>Link File ( optional )</b></label> 
                                                <input type="text" id="link_file" name="link_file" placeholder="Nomor Urut Buku dalam Buku Induk" class="form-control" value="{{ $dokumen->link_file }}">
                                                @error('link_file')
                                                    <span class="help-block" style="color:red; font-size:14px;"><i>{{ $message }}</i></span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label><b>Pilih Peraturan</b> <b style="color:red"> *</b></label> 
                                                <select class="form-control m-b" name="jenis_peraturan_id" id="jenis_peraturan_id">
                                                    <option value="0">--- Pilih Jenis Peraturan ---</option>
                                                    @foreach($jenis_peraturan as $jenis_peraturan)
                                                    <option value="{{ $jenis_peraturan->id }}" @if($jenis_peraturan->id == $dokumen->jenis_peraturan_id) selected @endif>{{ $jenis_peraturan->jenis_peraturan }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <label><b>Subjek</b></label> 
                                                <input type="text" id="subjek" name="subjek" placeholder="Contoh : JASA UMUM - RETRIBUSI" class="form-control" value="{{ $dokumen->subjek }}">
                                                @error('subjek')
                                                    <span class="help-block" style="color:red; font-size:14px;"><i>{{ $message }}</i></span>
                                                @enderror
                                            </div>
                                            <div class="col-md-4">
                                                <label><b>Keterangan Peraturan</b></label> 
                                                <input type="text" id="keterangan_peraturan" name="keterangan_peraturan" placeholder="Contoh : Mengubah Peraturan Daerah Provinsi Jawa Timur Nomor 2 Tahun 2019" class="form-control" value="{{ $dokumen->keterangan_peraturan }}">
                                                @error('keterangan_peraturan')
                                                    <span class="help-block" style="color:red; font-size:14px;"><i>{{ $message }}</i></span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label><b>SKPD Pemrakarsa</b></label> 
                                                <select class="form-control m-b" name="skpd_pemrakarsa_id" id="skpd_pemrakarsa_id">
                                                    <option value="0">--- SKPD Pemrakarsa ---</option>
                                                    @foreach($skpd_pemrakarsa as $skpd_pemrakarsa)
                                                    <option value="{{ $skpd_pemrakarsa->id }}" @if($skpd_pemrakarsa->id == $dokumen->skpd_pemrakarsa_id) selected @endif>{{ $skpd_pemrakarsa->skpd_pemrakarsa }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <label><b>ISBN</b></label> 
                                                <input type="text" id="isbn" name="isbn" placeholder="Contoh : ISBN 979-96446-1-5" class="form-control" value="{{ $dokumen->isbn }}">
                                                @error('isbn')
                                                    <span class="help-block" style="color:red; font-size:14px;"><i>{{ $message }}</i></span>
                                                @enderror
                                            </div>
                                            <div class="col-md-4">
                                                <label><b>Klasifikasi</b></label> 
                                                <select class="form-control m-b" name="klasifikasi_id" id="klasifikasi_id">
                                                    @foreach($klasifikasi as $klasifikasi)
                                                    <option value="{{ $klasifikasi->id }}" @if($klasifikasi->id == $dokumen->klasifikasi_id) selected @endif>{{ $klasifikasi->klasifikasi }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label><b>Status Peraturan</b></label> 
                                                <select class="form-control m-b" name="status_peraturan_id" id="status_peraturan_id">
                                                    <option value="0">--- Pilih Status Peraturan ---</option>
                                                    @foreach($status_peraturan as $status_peraturan)
                                                    <option value="{{ $status_peraturan->id }}" @if($status_peraturan->id == $dokumen->status_peraturan_id) selected @endif>{{ $status_peraturan->status_peraturan }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <label><b>Status Publish {{ $dokumen->status_publik }}</b></label> 
                                                <select class="form-control m-b" name="status_publik" id="status_publik">
                                                    <option value="t" @if($dokumen->status_publik == 1) selected @endif>Ya</option>
                                                    <option value="f" @if($dokumen->status_publik == 0) selected @endif>Tidak</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <a href="{{ url()->previous() }}" class="btn btn-warning btn-w-m btn-block" type="button"><i class="fa fa-reply"></i> Kembali</a>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection

@push('scripts')
    
@endpush