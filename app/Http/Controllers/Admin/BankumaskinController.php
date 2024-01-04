<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Bankumaskin;

class BankumaskinController extends Controller
{
    public function index()
    {
        $data = Bankumaskin::orderBy('nomor_perkara','DESC')->orderBy('id','DESC')->get();

        return view('admin.bankumaskin.index', [
            'data' => $data,
            'title' => 'Master Bankumaskin',
        ]);
    }

    public function create()
    {
        return view('admin.bankumaskin.create', [
            'title' => 'Tambah Bankumaskin'
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nomor_perkara' => 'required',
            'jenis_perkara' => 'required',
            'tahun_pemberian_bantuan_hukum' => 'required',
        ]);

        Bankumaskin::create([
            'nomor_perkara' => $request->nomor_perkara,
            'jenis_perkara' => $request->jenis_perkara,
            'tahun_pemberian_bantuan_hukum' => $request->tahun_pemberian_bantuan_hukum,
        ]);

        return redirect()->route('admin.bankumaskin.index');
    }

    public function edit(Bankumaskin $bankumaskin)
    {
        return view('admin.bankumaskin.edit', [
            'title' => 'Ubah Bankumaskin',
            'bankumaskin' => $bankumaskin,
        ]);
    }

    public function update(Request $request, Bankumaskin $bankumaskin)
    {
        $this->validate($request, [
            'nomor_perkara' => 'required',
            'jenis_perkara' => 'required',
        ]);

        $bankumaskin->update([
            'nomor_perkara' => $request->nomor_perkara,
            'jenis_perkara' => $request->jenis_perkara,
            'tahun_pemberian_bantuan_hukum' => $request->tahun_pemberian_bantuan_hukum,
        ]);

        return redirect()->route('admin.bankumaskin.index');
    }

    public function destroy(Bankumaskin $bankumaskin)
    {
        $bankumaskin->delete();

        return redirect()->route('admin.bankumaskin.index')->withDanger('Data Berhasil Di Hapus');
    }
}
