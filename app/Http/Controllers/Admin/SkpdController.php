<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Skpd_pemrakarsa;

class SkpdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Skpd_pemrakarsa::orderBy('skpd_pemrakarsa','ASC')->get();

        return view('admin.skpd.index', [
            'data' => $data,
            'title' => 'Master SKPD',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.skpd.create', [
            'title' => 'Tambah SKPD Pemrakarsa'
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
            'skpd_pemrakarsa' => 'required',
        ]);

        Skpd_pemrakarsa::create([
            'skpd_pemrakarsa' => $request->skpd_pemrakarsa,
        ]);

        return redirect()->route('admin.skpd.index');
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
    public function edit(Skpd_pemrakarsa $skpd)
    {
        return view('admin.skpd.edit', [
            'title' => 'Ubah Peraturan',
            'skpd' => $skpd,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Skpd_pemrakarsa $skpd)
    {
        $this->validate($request, [
            'skpd_pemrakarsa' => 'required',
        ]);

        $skpd->update([
            'skpd_pemrakarsa' => $request->skpd_pemrakarsa,
        ]);

        return redirect()->route('admin.skpd.index');
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
