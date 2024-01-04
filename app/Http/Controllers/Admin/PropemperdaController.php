<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Propemperda;

class PropemperdaController extends Controller
{
    public function index()
    {
        $data = Propemperda::orderBy('tahun','DESC')->orderBy('id','DESC')->get();

        return view('admin.propemperda.index', [
            'data' => $data,
            'title' => 'Master Propemperda',
        ]);
    }

    public function create()
    {
        return view('admin.propemperda.create', [
            'title' => 'Tambah Propemperda'
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'tahun' => 'required',
            'judul' => 'required',
        ]);

        Propemperda::create([
            'tahun' => $request->tahun,
            'judul' => $request->judul,
        ]);

        return redirect()->route('admin.propemperda.index');
    }

    public function edit(Propemperda $propemperda)
    {
        return view('admin.propemperda.edit', [
            'title' => 'Ubah Propemperda',
            'propemperda' => $propemperda,
        ]);
    }

    public function update(Request $request, Propemperda $propemperda)
    {
        $this->validate($request, [
            'tahun' => 'required',
            'judul' => 'required',
        ]);

        $propemperda->update([
            'tahun' => $request->tahun,
            'judul' => $request->judul,
        ]);

        return redirect()->route('admin.propemperda.index');
    }

    public function destroy(Propemperda $propemperda)
    {
        $propemperda->delete();

        return redirect()->route('admin.propemperda.index')->withDanger('Data Berhasil Di Hapus');
    }
}
