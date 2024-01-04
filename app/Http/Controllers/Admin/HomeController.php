<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\URL;
use Illuminate\Http\Request;
use App\Dokumen;

class HomeController extends Controller
{
    public function index()
    {
        $perda = Dokumen::where('tipe_dokumen_id', 1)->get();
        $perwal = Dokumen::where('tipe_dokumen_id', 2)->get();
        $kepwal = Dokumen::where('tipe_dokumen_id', 3)->get();
        $inwal = Dokumen::where('tipe_dokumen_id', 4)->get();

        return view('admin.home', [
            'title' => 'Halaman Utama',
            'perda' => $perda,
            'perwal' => $perwal,
            'kepwal' => $kepwal,
            'inwal' => $inwal,
        ]);
    }
}