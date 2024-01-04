<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Jenis_dokumen;

class PeraturanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Jenis_dokumen::orderBy('jenis_peraturan','ASC')->get();

        return view('admin.peraturan.index', [
            'data' => $data,
            'title' => 'Master Peraturan',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.peraturan.create', [
            'title' => 'Tambah Peraturan'
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
            'jenis_peraturan' => 'required',
        ]);

        Jenis_dokumen::create([
            'jenis_peraturan' => $request->jenis_peraturan,
        ]);

        return redirect()->route('admin.peraturan.index');
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
    public function edit(Jenis_dokumen $peraturan)
    {
        return view('admin.peraturan.edit', [
            'title' => 'Ubah Peraturan',
            'peraturan' => $peraturan,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jenis_dokumen $peraturan)
    {
        $this->validate($request, [
            'jenis_peraturan' => 'required',
        ]);

        $peraturan->update([
            'jenis_peraturan' => $request->jenis_peraturan,
        ]);

        return redirect()->route('admin.peraturan.index');
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
