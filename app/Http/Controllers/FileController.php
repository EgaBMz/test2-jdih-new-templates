<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Crypt;

class FileController extends Controller
{
    public function file_berita(Request $request)
    {
        try {
            return Storage::response(decrypt($request->file));
        } catch (\Throwable $th) {
            return 'File tidak ditemukan!';
        }
    }

    public function show(Request $request)
    {
        try {
            if (decrypt($request->status)=='t') {
                return Storage::response(decrypt($request->file));
            }else {
                return 'Hubungi Bagian Hukum Sekretariat Daerah Kota Madiun untuk mendapatkan informasi dokumen!';
            }
        } catch (\Throwable $th) {
            return 'Hubungi Bagian Hukum Sekretariat Daerah Kota Madiun untuk mendapatkan informasi dokumen!';
        }
    }

    public function download(Request $request)
    {
        try {
            if ($request->passcode == 'M@diunK0t4') {
                return Storage::response(str_replace('-','/',$request->file));
            }else {
                return 'File tidak ditemukan!';
            }
        } catch (\Throwable $th) {
            return 'File tidak ditemukan!';
        }
    }
}
