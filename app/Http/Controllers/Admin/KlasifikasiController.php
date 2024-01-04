<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Klasifikasi;

class KlasifikasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Klasifikasi::orderBy('klasifikasi','ASC')->get();

        return view('admin.klasifikasi.index', [
            'data' => $data,
            'title' => 'Master Klasifikasi',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.klasifikasi.create', [
            'title' => 'Tambah Klasifikasi'
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
            'klasifikasi' => 'required',
        ]);

        Klasifikasi::create([
            'klasifikasi' => $request->klasifikasi,
        ]);

        return redirect()->route('admin.klasifikasi.index');
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
    public function edit(Klasifikasi $klasifikasi)
    {
        return view('admin.klasifikasi.edit', [
            'title' => 'Ubah Peraturan',
            'klasifikasi' => $klasifikasi,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Klasifikasi $klasifikasi)
    {
        $this->validate($request, [
            'klasifikasi' => 'required',
        ]);

        $klasifikasi->update([
            'klasifikasi' => $request->klasifikasi,
        ]);

        return redirect()->route('admin.klasifikasi.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
