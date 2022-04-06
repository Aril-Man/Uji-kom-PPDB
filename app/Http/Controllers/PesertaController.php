<?php

namespace App\Http\Controllers;

use App\Models\Peserta;
use Illuminate\Http\Request;

class PesertaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $peserta = Peserta::all();
        return view('peserta.index', compact('peserta'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('peserta.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'noreg' => 'required|unique:tbl_peserta',
            'nama' => 'required',
            'jk' => 'required',
            'alamat' => 'required',
            'agama' => 'required',
            'asal_sekolah' => 'required',
            'jurusan' => 'required',
        ]);

        Peserta::create($request->all());

        return redirect()->route('peserta.index')->with('success', 'Selamat , Registrasi Berhasil!');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Peserta  $peserta
     * @return \Illuminate\Http\Response
     */
    public function edit(Peserta $peserta, $id)
    {
        $peserta = Peserta::find($id);
        return view('peserta.edit', compact('peserta'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Peserta  $peserta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Peserta $peserta, $id)
    {

        $peserta = Peserta::find($id);
        $peserta->update($request->all());

        return redirect()->route('peserta.index')->with('success', 'Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Peserta  $peserta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Peserta $peserta, $id)
    {
        $peserta = Peserta::find($id);
        $peserta->delete();

        return redirect()->route('peserta.index')->with('success', 'Data sudah dihapus!');
    }

    public function cetak($id)
    {
        $pesertas = Peserta::find($id);
        return view('peserta.cetakPeserta', compact('pesertas'));
    }
}