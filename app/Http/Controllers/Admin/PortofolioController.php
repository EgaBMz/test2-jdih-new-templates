<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Portofolio;

class PortofolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Portofolio::select('portofolios.*', 'users.name', 'users.email')
                       ->join('users','users.id','=','portofolios.created_by')
                       ->orderBy('created_at','DESC')
                       ->get();

        return view('admin.portofolio.index', [
            'data' => $data,
            'title' => 'Portofolio',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.portofolio.create', [
            'title' => 'Tambah Portofolio',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            // 'keterangan' => 'required',
        ]);

        
        $file = "assets/dokumen/no-image-available.png";
        if ($request->hasFile("file")) {
            $file = $request->file("file")->store('assets/dokumen/berita');
        }

        Portofolio::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'file' => $file,
            'publik' => $request->publik,
            'created_by' => auth()->user()->id,
            'edited_by' => auth()->user()->id,
        ]);

        return redirect()->route('admin.portofolio.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Portofolio $portofolio)
    {
        return view('admin.portofolio.edit', [
            'title' => 'Tambah Peraturan',
            'portofolio' => $portofolio,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Portofolio $portofolio)
    {
        $this->validate($request, [
            // 'keterangan' => 'required',
            // 'lampiran_file' => 'required',
        ]);

        $file = "assets/dokumen/no-image-available.png";
        if ($request->hasFile("file")) {
            $file = $request->file("file")->store('assets/dokumen/portofolio/');
        }

        $portofolio->update([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'edited_by' => auth()->user()->id,
            'publik' => $request->publik,
        ]);

        if ($request->hasFile('file')) {
            $portofolio->update([
                'file' => $file,
            ]);
        }

        return redirect()->route('admin.portofolio.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Portofolio $portofolio)
    {
        $portofolio->delete();

        return redirect()->route('admin.portofolio.index')->withDanger('Data Berhasil Di Hapus');
    }
}
