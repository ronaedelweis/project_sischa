<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class barangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('kelolabarang')->with([
            'barangs'=>Barang::all(),
        ]);
    }

    public function index2()
    {
        return view('infobarang')->with([
            'barangs'=>Barang::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('inputbarang');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'kode_barang'=>'required|min:1',
            'nama_barang'=>'required|min:1',
            'jumlah_barang'=>'required|min:1',
        ]);

        $barangs = new Barang;
        $barangs ->kode_barang = $request->kode_barang;
        $barangs ->nama_barang = $request->nama_barang;
        $barangs ->jumlah_barang= $request->jumlah_barang;
        $barangs ->save();

        return to_route('barang.index')->with('succes','Data Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('editbarang')->with([
            'barangs'=>Barang::find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'kode_barang'=>'required|min:1',
            'nama_barang'=>'required|min:1',
            'jumlah_barang'=>'required|min:1',
        ]);

        $barangs=Barang::find($id);
        $barangs ->kode_barang = $request->kode_barang;
        $barangs ->nama_barang = $request->nama_barang;
        $barangs ->jumlah_barang = $request->jumlah_barang;
        $barangs ->save();

        return to_route('barang.index')->with('succes','Data Berhasil Di Edit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $barangs= Barang::find($id);
        $barangs->delete();
        return redirect('/kelola');
    }
}
