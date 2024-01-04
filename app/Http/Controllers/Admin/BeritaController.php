<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Berita;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Berita::select('beritas.*', 'users.name', 'users.email')
                       ->join('users','users.id','=','beritas.created_by')
                       ->orderBy('created_at','DESC')
                       ->get();

        return view('admin.berita.index', [
            'data' => $data,
            'title' => 'Berita',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.berita.create', [
            'title' => 'Tambah Berita',
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

        Berita::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'file' => $file,
            'publik' => $request->publik,
            'created_by' => auth()->user()->id,
            'edited_by' => auth()->user()->id,
        ]);

        return redirect()->route('admin.berita.index');
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
    public function edit(Berita $berita)
    {
        return view('admin.berita.edit', [
            'title' => 'Tambah Peraturan',
            'berita' => $berita,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Berita $berita)
    {
        $this->validate($request, [
            // 'keterangan' => 'required',
            // 'lampiran_file' => 'required',
        ]);

        $file = "assets/dokumen/no-image-available.png";
        if ($request->hasFile("file")) {
            $file = $request->file("file")->store('assets/dokumen/berita/');
        }

        $berita->update([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'edited_by' => auth()->user()->id,
            'publik' => $request->publik,
        ]);

        if ($request->hasFile('file')) {
            $berita->update([
                'file' => $file,
            ]);
        }

        return redirect()->route('admin.berita.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Berita $berita)
    {
        $berita->delete();

        return redirect()->route('admin.berita.index')->withDanger('Data Berhasil Di Hapus');
    }
}
