<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dokumen;
use DB;

class IntegrasiController extends Controller
{
    public function integrasi()
    {
        $link = env('APP_URL');
        // $data = Dokumen::select('dokumens.id as id', 
        //                         DB::raw('EXTRACT(YEAR FROM dokumens.waktu_penetapan) as tahun_penetapan'), 
        //                         'dokumens.waktu_penetapan as tanggal_penetapan', 
        //                         'jenis_dokumens.jenis_peraturan', 
        //                         'dokumens.no_peraturan', 
        //                         'dokumens.judul_peraturan', 
        //                         'dokumens.no_panggil', 
        //                         'dokumens.singkatan', 
        //                         'dokumens.tempat_terbit', 
        //                         'dokumens.penerbit', 
        //                         'dokumens.deskripsi_fisik', 
        //                         'dokumens.sumber', 
        //                         'dokumens.subjek', 
        //                         'dokumens.isbn', 
        //                         'status_peraturans.status_peraturan', 
        //                         'bahasas.bahasa',
        //                         'dokumens.bidang',
        //                         'dokumens.teu_badan_pengarang',
        //                         'dokumens.no_induk_buku',
        //                         'dokumens.lampiran_file as fileDownload',
        //                         DB::raw("'$link/file/' as active")
        //                         // DB::raw("'$link/file/".encrypt('dokumens.lampiran_file')."' as active")
        //                 )
        //                 ->leftjoin('jenis_dokumens','jenis_dokumens.id','=','dokumens.jenis_peraturan_id')
        //                 ->leftjoin('status_peraturans','status_peraturans.id','=','dokumens.status_peraturan_id')
        //                 ->leftjoin('kab_kotas','kab_kotas.id','=','dokumens.kab_kota_id')
        //                 ->leftjoin('skpd_pemrakarsas','skpd_pemrakarsas.id','=','dokumens.skpd_pemrakarsa_id')
        //                 ->leftjoin('bahasas','bahasas.id','=','dokumens.bahasa_id')
        //                 ->where('dokumens.status_publik', '=', 't')
        //                 ->orderBy('waktu_penetapan','ASC')
        //                 ->get();

        $data = DB::select("SELECT
                                dokumens.ID AS \"idData\",
                                EXTRACT ( YEAR FROM dokumens.waktu_penetapan ) AS \"tahun_pengundangan\",
                                dokumens.waktu_penetapan AS \"tanggal_pengundangan\",
                                jenis_dokumens.jenis_peraturan AS \"jenis\",
                                dokumens.no_peraturan AS \"noPeraturan\",
                                dokumens.judul_peraturan AS \"judul\",
                                dokumens.no_panggil AS \"noPanggil\",
                                dokumens.singkatan AS \"singkatanJenis\",
                                dokumens.tempat_terbit AS \"tempatTerbit\",
                                dokumens.penerbit AS \"penerbit\",
                                dokumens.deskripsi_fisik AS \"deskripsiFisik\",
                                dokumens.sumber AS \"sumber\",
                                dokumens.subjek AS \"subjek\",
                                dokumens.isbn AS \"isbn\",
                                status_peraturans.status_peraturan AS \"status\",
                                bahasas.bahasa AS \"bahasa\",
                                dokumens.bidang AS \"bidangHukum\",
                                dokumens.teu_badan_pengarang AS \"teuBadan\",
                                dokumens.no_induk_buku AS \"nomorIndukBuku\",
                                dokumens.lampiran_file AS \"fileDownload\",
                                CONCAT ( 'https://jdih.madiunkota.go.id/download/M@diunK0t4/', REPLACE ( dokumens.lampiran_file, '/', '-' ) ) AS \"urlDownload\",
                                'https://jdih.madiunkota.go.id' AS \"urlDetailPeraturan\",
                                '4' AS \"operasi\",
                                '1' AS \"display\" 
                            FROM
                                dokumens
                                LEFT OUTER JOIN jenis_dokumens ON jenis_dokumens.ID = dokumens.jenis_peraturan_id
                                LEFT OUTER JOIN status_peraturans ON status_peraturans.ID = dokumens.status_peraturan_id
                                LEFT OUTER JOIN kab_kotas ON kab_kotas.ID = dokumens.kab_kota_id
                                LEFT OUTER JOIN skpd_pemrakarsas ON skpd_pemrakarsas.ID = dokumens.skpd_pemrakarsa_id
                                LEFT OUTER JOIN bahasas ON bahasas.ID = dokumens.bahasa_id 
                            WHERE
                                dokumens.status_publik = 't'");

        if (count($data) > 0) {
            return response()->json(
                // 'status' => true,
                // 'rows' => count($data),
                // 'data' => $data
                $data
            );
        }else {
            return response()->json([
                'status' => false,
                'data' => 'Data Not Found'
            ]);   
        }
    }
}
