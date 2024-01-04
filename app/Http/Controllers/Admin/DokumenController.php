<?php

namespace App\Http\Controllers\Admin;

use DateTime;
use App\Bahasa;
use App\Dokumen;
use App\Kab_kota;
use App\Klasifikasi;
use App\Jenis_dokumen;
use App\Skpd_pemrakarsa;
use App\Status_peraturan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class DokumenController extends Controller
{
    public function index()
    {
        if (auth()->user()->role == 'admin') {
            $data = Dokumen::select('dokumens.*', 'jenis_dokumens.jenis_peraturan', 'status_peraturans.status_peraturan')
                       ->leftjoin('jenis_dokumens','jenis_dokumens.id','=','dokumens.jenis_peraturan_id')
                       ->leftjoin('status_peraturans','status_peraturans.id','=','dokumens.status_peraturan_id')
                       ->orderBy('waktu_penetapan','ASC')
                       ->get();

            $sudah_validasi = Dokumen::select('dokumens.*', 'jenis_dokumens.jenis_peraturan', 'status_peraturans.status_peraturan')
                       ->leftjoin('jenis_dokumens','jenis_dokumens.id','=','dokumens.jenis_peraturan_id')
                       ->leftjoin('status_peraturans','status_peraturans.id','=','dokumens.status_peraturan_id')
                       ->where('dokumens.verifikasi', 1)
                       ->orderBy('waktu_penetapan','ASC')
                       ->get();

            $belum_validasi = Dokumen::select('dokumens.*', 'jenis_dokumens.jenis_peraturan', 'status_peraturans.status_peraturan')
                       ->leftjoin('jenis_dokumens','jenis_dokumens.id','=','dokumens.jenis_peraturan_id')
                       ->leftjoin('status_peraturans','status_peraturans.id','=','dokumens.status_peraturan_id')
                       ->whereNull('dokumens.verifikasi')
                       ->orderBy('waktu_penetapan','ASC')
                       ->get();
        }elseif(auth()->user()->role == 'validator') {
            $data = Dokumen::select('dokumens.*', 'jenis_dokumens.jenis_peraturan', 'status_peraturans.status_peraturan')
                       ->leftjoin('jenis_dokumens','jenis_dokumens.id','=','dokumens.jenis_peraturan_id')
                       ->leftjoin('status_peraturans','status_peraturans.id','=','dokumens.status_peraturan_id')
                       ->whereNull('dokumens.verifikasi')
                       ->orderBy('waktu_penetapan','ASC')
                       ->get();

            $sudah_validasi = Dokumen::select('dokumens.*', 'jenis_dokumens.jenis_peraturan', 'status_peraturans.status_peraturan')
                      ->leftjoin('jenis_dokumens','jenis_dokumens.id','=','dokumens.jenis_peraturan_id')
                      ->leftjoin('status_peraturans','status_peraturans.id','=','dokumens.status_peraturan_id')
                      ->where('dokumens.verifikasi', 1)
                      ->orderBy('waktu_penetapan','ASC')
                      ->get();
           
            $belum_validasi = Dokumen::select('dokumens.*', 'jenis_dokumens.jenis_peraturan', 'status_peraturans.status_peraturan')
                      ->leftjoin('jenis_dokumens','jenis_dokumens.id','=','dokumens.jenis_peraturan_id')
                      ->leftjoin('status_peraturans','status_peraturans.id','=','dokumens.status_peraturan_id')
                      ->whereNull('dokumens.verifikasi')
                      ->orderBy('waktu_penetapan','ASC')
                      ->get();
        }

        $keyword='';
        $kategori='';
        $title = '';

        if (auth()->user()->role == 'admin') {
            $title = 'Upload Peraturan';
        }elseif(auth()->user()->role == 'validator') {
            $title = 'Validasi Peraturan';
        }

        return view('admin.dokumen.index', [
            'data' => $data,
            'title' => $title,
            'keyword' => $keyword,
            'kategori' => $kategori,
            'sudah_validasi' => $sudah_validasi,
            'belum_validasi' => $belum_validasi,
            'tipe_dokumen' => 0,
        ]);
    }

    public function filter(Request $request){
        // $keyword = $request->keyword;
        // $kategori = $request->kategori;
        // if($kategori == "1"){

        //     $dokumen = Dokumen::select('dokumens.*', 'jenis_dokumens.jenis_peraturan', 'status_peraturans.status_peraturan')
        //                         ->leftjoin('jenis_dokumens','jenis_dokumens.id','=','dokumens.jenis_peraturan_id')
        //                         ->leftjoin('status_peraturans','status_peraturans.id','=','dokumens.status_peraturan_id')
        //                         ->whereYear('dokumens.waktu_penetapan', '=', $keyword )->orderBy('waktu_penetapan', 'ASC')->get();
    
                  
        // }else{
        //     $dokumen = Dokumen::select('dokumens.*', 'jenis_dokumens.jenis_peraturan', 'status_peraturans.status_peraturan')
        //     ->leftjoin('jenis_dokumens','jenis_dokumens.id','=','dokumens.jenis_peraturan_id')
        //     ->leftjoin('status_peraturans','status_peraturans.id','=','dokumens.status_peraturan_id')
        //     ->where('jenis_dokumens.jenis_peraturan', '~*', '.*' .$keyword .'*.')->orderBy('waktu_penetapan', 'ASC')->get();

        //  }

        if (auth()->user()->role == 'admin') {
            $data = Dokumen::select('dokumens.*', 'jenis_dokumens.jenis_peraturan', 'status_peraturans.status_peraturan')
                       ->leftjoin('jenis_dokumens','jenis_dokumens.id','=','dokumens.jenis_peraturan_id')
                       ->leftjoin('status_peraturans','status_peraturans.id','=','dokumens.status_peraturan_id')
                       ->where('dokumens.tipe_dokumen_id', decrypt($request->dokumen))
                       ->orderBy('waktu_penetapan','ASC')
                       ->get();

            $sudah_validasi = Dokumen::select('dokumens.*', 'jenis_dokumens.jenis_peraturan', 'status_peraturans.status_peraturan')
                       ->leftjoin('jenis_dokumens','jenis_dokumens.id','=','dokumens.jenis_peraturan_id')
                       ->leftjoin('status_peraturans','status_peraturans.id','=','dokumens.status_peraturan_id')
                       ->where('dokumens.tipe_dokumen_id', decrypt($request->dokumen))
                       ->where('dokumens.verifikasi', 1)
                       ->orderBy('waktu_penetapan','ASC')
                       ->get();

            $belum_validasi = Dokumen::select('dokumens.*', 'jenis_dokumens.jenis_peraturan', 'status_peraturans.status_peraturan')
                       ->leftjoin('jenis_dokumens','jenis_dokumens.id','=','dokumens.jenis_peraturan_id')
                       ->leftjoin('status_peraturans','status_peraturans.id','=','dokumens.status_peraturan_id')
                       ->where('dokumens.tipe_dokumen_id', decrypt($request->dokumen))
                       ->whereNull('dokumens.verifikasi')
                       ->orderBy('waktu_penetapan','ASC')
                       ->get();
        }elseif(auth()->user()->role == 'validator') {
            $data = Dokumen::select('dokumens.*', 'jenis_dokumens.jenis_peraturan', 'status_peraturans.status_peraturan')
                       ->leftjoin('jenis_dokumens','jenis_dokumens.id','=','dokumens.jenis_peraturan_id')
                       ->leftjoin('status_peraturans','status_peraturans.id','=','dokumens.status_peraturan_id')
                       ->where('dokumens.tipe_dokumen_id', decrypt($request->dokumen))
                       ->whereNull('dokumens.verifikasi')
                       ->orderBy('waktu_penetapan','ASC')
                       ->get();

            $sudah_validasi = Dokumen::select('dokumens.*', 'jenis_dokumens.jenis_peraturan', 'status_peraturans.status_peraturan')
                      ->leftjoin('jenis_dokumens','jenis_dokumens.id','=','dokumens.jenis_peraturan_id')
                      ->leftjoin('status_peraturans','status_peraturans.id','=','dokumens.status_peraturan_id')
                      ->where('dokumens.tipe_dokumen_id', decrypt($request->dokumen))
                      ->where('dokumens.verifikasi', 1)
                      ->orderBy('waktu_penetapan','ASC')
                      ->get();
           
            $belum_validasi = Dokumen::select('dokumens.*', 'jenis_dokumens.jenis_peraturan', 'status_peraturans.status_peraturan')
                      ->leftjoin('jenis_dokumens','jenis_dokumens.id','=','dokumens.jenis_peraturan_id')
                      ->leftjoin('status_peraturans','status_peraturans.id','=','dokumens.status_peraturan_id')
                      ->where('dokumens.tipe_dokumen_id', decrypt($request->dokumen))
                      ->whereNull('dokumens.verifikasi')
                      ->orderBy('waktu_penetapan','ASC')
                      ->get();
        }

        $keyword='';
        $kategori='';
        $title = '';

        if (auth()->user()->role == 'admin') {
            $title = 'Upload Peraturan';
        }elseif(auth()->user()->role == 'validator') {
            $title = 'Validasi Peraturan';
        }
        
        return view('admin.dokumen.index', [
            'data' => $data,
            'title' => $title,
            'keyword' => $keyword,
            'kategori' => $kategori,
            'sudah_validasi' => $sudah_validasi,
            'belum_validasi' => $belum_validasi,
            'tipe_dokumen' => decrypt($request->dokumen),
        ]);
    }

    public function create()
    {
        $bahasa = Bahasa::orderBy('bahasa', 'ASC')->get();
        $jenis_dokumen = Jenis_dokumen::orderBy('jenis_peraturan', 'ASC')->get();
        $kab_kota = Kab_kota::orderBy('kab_kota', 'ASC')->get();
        $klasifikasi = Klasifikasi::orderBy('klasifikasi', 'ASC')->get();
        $skpd_pemrakarsa = Skpd_pemrakarsa::orderBy('skpd_pemrakarsa', 'ASC')->get();
        $status_peraturan = Status_peraturan::orderBy('status_peraturan', 'ASC')->get();

        return view('admin.dokumen.create', [
            'title' => 'Tambah Peraturan',
            'bahasa' => $bahasa,
            'jenis_dokumen' => $jenis_dokumen,
            'jenis_peraturan' => $jenis_dokumen,
            'kab_kota' => $kab_kota,
            'klasifikasi' => $klasifikasi,
            'skpd_pemrakarsa' => $skpd_pemrakarsa,
            'status_peraturan' => $status_peraturan,
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            // 'keterangan' => 'required',
            // 'lampiran_file' => 'required',
        ]);

        $lampiran_file = "assets/dokumen/no-image-available.png";
        if ($request->hasFile("lampiran_file")) {
            $lampiran_file = $request->file("lampiran_file")->store('file');
        }

        $abstrak_file = "assets/dokumen/no-image-available.png";
        if ($request->hasFile("abstrak_file")) {
            $abstrak_file = $request->file("abstrak_file")->store('file');
        }

        Dokumen::create([
            'tipe_dokumen_id' => $request->tipe_dokumen_id,
            'judul_peraturan' => $request->judul_peraturan,
            'teu_badan_pengarang' => $request->teu_badan_pengarang,
            'no_peraturan' => $request->no_peraturan,
            'no_panggil' => $request->no_panggil,
            'kab_kota_id' => $request->kab_kota_id,
            'jenis_peraturan_id' => $request->jenis_peraturan_id,
            'skpd_pemrakarsa_id' => $request->skpd_pemrakarsa_id,
            'klasifikasi_id' => $request->klasifikasi_id,
            'cetakan_edisi' => $request->cetakan_edisi,
            'tempat_terbit' => $request->tempat_terbit,
            'penerbit' => $request->penerbit,
            'waktu_penetapan' => $request->waktu_penetapan,
            'deskripsi_fisik' => $request->deskripsi_fisik,
            'sumber' => $request->sumber,
            'subjek' => $request->subjek,
            'isbn' => $request->isbn,
            'status_peraturan_id' => $request->status_peraturan_id,
            'bahasa_id' => $request->bahasa_id,
            'lokasi' => $request->lokasi,
            'bidang' => $request->bidang,
            'no_induk_buku' => $request->no_induk_buku,
            'link_file' => $request->link_file,
            'keterangan_peraturan' => $request->keterangan_peraturan,
            'status_publik' => $request->status_publik,
            'lampiran_file' => $lampiran_file,
            'abstrak_file' => $abstrak_file,
        ]);

        return redirect()->route('admin.dokumen.index');
    }

    public function detail(Dokumen $dokumen)
    {
        $bahasa = Bahasa::orderBy('bahasa', 'ASC')->get();
        $jenis_dokumen = Jenis_dokumen::orderBy('jenis_peraturan', 'ASC')->get();
        $kab_kota = Kab_kota::orderBy('kab_kota', 'ASC')->get();
        $klasifikasi = Klasifikasi::orderBy('klasifikasi', 'ASC')->get();
        $skpd_pemrakarsa = Skpd_pemrakarsa::orderBy('skpd_pemrakarsa', 'ASC')->get();
        $status_peraturan = Status_peraturan::orderBy('status_peraturan', 'ASC')->get();

        return view('admin.dokumen.detail', [
            'title' => 'Detail Peraturan',
            'dokumen' => $dokumen,
            'bahasa' => $bahasa,
            'jenis_dokumen' => $jenis_dokumen,
            'jenis_peraturan' => $jenis_dokumen,
            'kab_kota' => $kab_kota,
            'klasifikasi' => $klasifikasi,
            'skpd_pemrakarsa' => $skpd_pemrakarsa,
            'status_peraturan' => $status_peraturan,
        ]);
    }

   public function edit(Dokumen $dokumen)
    {
        $bahasa = Bahasa::orderBy('bahasa', 'ASC')->get();
        $jenis_dokumen = Jenis_dokumen::orderBy('jenis_peraturan', 'ASC')->get();
        $kab_kota = Kab_kota::orderBy('kab_kota', 'ASC')->get();
        $klasifikasi = Klasifikasi::orderBy('klasifikasi', 'ASC')->get();
        $skpd_pemrakarsa = Skpd_pemrakarsa::orderBy('skpd_pemrakarsa', 'ASC')->get();
        $status_peraturan = Status_peraturan::orderBy('status_peraturan', 'ASC')->get();

        return view('admin.dokumen.edit', [
            'title' => 'Ubah Peraturan',
            'dokumen' => $dokumen,
            'bahasa' => $bahasa,
            'jenis_dokumen' => $jenis_dokumen,
            'jenis_peraturan' => $jenis_dokumen,
            'kab_kota' => $kab_kota,
            'klasifikasi' => $klasifikasi,
            'skpd_pemrakarsa' => $skpd_pemrakarsa,
            'status_peraturan' => $status_peraturan,
        ]);
    }

    public function update(Request $request, Dokumen $dokumen)
    {
        $this->validate($request, [
            // 'keterangan' => 'required',
            // 'lampiran_file' => 'required',
        ]);

        $lampiran_file = "assets/dokumen/no-image-available.png";
        if ($request->hasFile("lampiran_file")) {
            $lampiran_file = $request->file("lampiran_file")->store('file');
        }

        $abstrak_file = "assets/dokumen/no-image-available.png";
        if ($request->hasFile("abstrak_file")) {
            $abstrak_file = $request->file("abstrak_file")->store('file');
        }

        $dokumen->update([
            'tipe_dokumen_id' => $request->tipe_dokumen_id,
            'judul_peraturan' => $request->judul_peraturan,
            'teu_badan_pengarang' => $request->teu_badan_pengarang,
            'no_peraturan' => $request->no_peraturan,
            'no_panggil' => $request->no_panggil,
            'kab_kota_id' => $request->kab_kota_id,
            'jenis_peraturan_id' => $request->jenis_peraturan_id,
            'skpd_pemrakarsa_id' => $request->skpd_pemrakarsa_id,
            'klasifikasi_id' => $request->klasifikasi_id,
            'cetakan_edisi' => $request->cetakan_edisi,
            'tempat_terbit' => $request->tempat_terbit,
            'penerbit' => $request->penerbit,
            'waktu_penetapan' => $request->waktu_penetapan,
            'deskripsi_fisik' => $request->deskripsi_fisik,
            'sumber' => $request->sumber,
            'subjek' => $request->subjek,
            'isbn' => $request->isbn,
            'status_peraturan_id' => $request->status_peraturan_id,
            'bahasa_id' => $request->bahasa_id,
            'lokasi' => $request->lokasi,
            'bidang' => $request->bidang,
            'no_induk_buku' => $request->no_induk_buku,
            'link_file' => $request->link_file,
            'keterangan_peraturan' => $request->keterangan_peraturan,
            'status_publik' => $request->status_publik,
            'verifikasi' => null,
            'keterangan_verifikasi' => null,
        ]);

        if ($request->hasFile('lampiran_file')) {
            $dokumen->update([
                'lampiran_file' => $lampiran_file,
            ]);
        }

        if ($request->hasFile('abstrak_file')) {
            $dokumen->update([
                'abstrak_file' => $abstrak_file,
            ]);
        }

        return redirect()->route('admin.dokumen.index');
    }

    public function validasi(Request $request, Dokumen $dokumen)
    {
        $dokumen->update([
            'verifikasi' => $request->verifikasi,
            'keterangan_verifikasi' => $request->keterangan_verifikasi,
        ]);

        return redirect()->back();
    }

    public function destroy(Dokumen $dokumen)
    {
        $dokumen->delete();

        return redirect()->route('admin.dokumen.index')->withDanger('Data Berhasil Di Hapus');
    }
}
