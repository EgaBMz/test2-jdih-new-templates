<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Crypt;

class FileController extends Controller
{
    public function show(Request $request)
    {
        try {
            return Storage::response(decrypt($request->file));
        } catch (\Throwable $th) {
            return 'File tidak ditemukan!';
        }
        
    }
}
