<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\surveygender;

class surveygenderController extends Controller
{
    public function simpan_surveygender(Request $request){
        surveygender::create([
            'jenis_kelamin' => $request->jenis_kelamin,
        ]);
        return view('index');
    }
}
