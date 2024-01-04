<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Pengaturan;

class PengaturanController extends Controller
{
    public function index()
    {
        $data = Pengaturan::orderBy('id','ASC')->get();

        return view('admin.pengaturan.index', [
            'title' => 'Master Pengaturan',
            'data' => $data,
        ]);
    }

    public function edit(Pengaturan $pengaturan)
    {
        return view('admin.pengaturan.edit', [
            'title' => 'Ubah Pengaturan',
            'pengaturan' => $pengaturan,
        ]);
    }

    public function update(Request $request, Pengaturan $pengaturan)
    {
        $this->validate($request, [
            'value' => 'required',
        ]);

        $pengaturan->update([
            'value' => $request->value,
        ]);

        return redirect()->route('admin.pengaturan.index');
    }
}
