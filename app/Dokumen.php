<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dokumen extends Model
{
    protected $guarded = [];

    public static function data()
    {
        $data = Dokumen::select('dokumens.*', 'jenis_dokumens.jenis_peraturan', 'status_peraturans.status_peraturan')
                        ->leftjoin('jenis_dokumens','jenis_dokumens.id','=','dokumens.jenis_peraturan_id')
                        ->leftjoin('status_peraturans','status_peraturans.id','=','dokumens.status_peraturan_id')
                        ->where('dokumens.status_publik', '=', 't')
                        // ->where('dokumens.verifikasi', '=', 1)
                        ->orderBy('waktu_penetapan','ASC');

        return $data;
    }

    public static function dataAll()
    {
        $data = Dokumen::select('dokumens.*', 'jenis_dokumens.jenis_peraturan', 'status_peraturans.status_peraturan')
                        ->leftjoin('jenis_dokumens','jenis_dokumens.id','=','dokumens.jenis_peraturan_id')
                        ->leftjoin('status_peraturans','status_peraturans.id','=','dokumens.status_peraturan_id');

        return $data;
    }

    public static function produk_hukum()
    {
        $data = Dokumen::select('dokumens.*', 'jenis_dokumens.jenis_peraturan', 'status_peraturans.status_peraturan')
                        ->leftjoin('jenis_dokumens','jenis_dokumens.id','=','dokumens.jenis_peraturan_id')
                        ->leftjoin('status_peraturans','status_peraturans.id','=','dokumens.status_peraturan_id')
                        ->where('dokumens.tipe_dokumen_id', '=', 1)
                        ->orWhere('dokumens.tipe_dokumen_id', '=', 2)
                        ->orWhere('dokumens.tipe_dokumen_id', '=', 3)
                        ->orderBy('waktu_penetapan','ASC');

        return $data;
    }
}
