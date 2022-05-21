<?php

namespace App\Http\Controllers;
use App\Models\Alumni;
use Illuminate\Http\Request;

class AlumniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alumni = Alumni::all();
        return view('alumni.index', [
            'alumni' => $alumni]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('alumni.create');
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
            'no_induk' => 'required',
            'nama' => 'required',
            'no_ijazah' => 'required',
            'no_skhun' => 'required',
            'tahun_lulus' => 'required',
            'tgl_pengambilan' => 'required',
            'vcd_foto' => 'required',
            'nama_sekolah_lanjutan' => 'required',
            'status' => 'required'
        ]);
        $array = $request->only([
            'no_induk', 'nama', 'no_ijazah', 'no_skhun', 'tahun_lulus', 'tgl_pengambilan', 'vcd_foto', 'nama_sekolah_lanjutan', 'status'
        ]);
        $alumni = Alumni::create($array);
        return redirect()->route('alumni.index')
            ->with('success_message', 'Data alumni baru telah berhasil disimpan.');
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
    public function edit($id)
    {
        $alumni = Alumni::find($id);
        if (!$alumni) return redirect()->route('alumni.index')
            ->with('error_message', 'Alumni dengan id'.$id.' tidak ditemukan');
            return view('alumni.edit', [
                'alumni' => $alumni
            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'no_induk' => 'required',
            'nama' => 'required',
            'no_ijazah' => 'required',
            'no_skhun' => 'required',
            'tahun_lulus' => 'required',
            'tgl_pengambilan' => 'required',
            'vcd_foto' => 'required',
            'nama_sekolah_lanjutan' => 'required',
            'status' => 'required',
        ]);

        $alumni = Alumni::find($id);
        $alumni->no_induk = $request->no_induk;
        $alumni->nama = $request->nama;
        $alumni->no_ijazah = $request->no_ijazah;
        $alumni->no_skhun = $request->no_skhun;
        $alumni->tahun_lulus = $request->tahun_lulus;
        $alumni->tgl_pengambilan = $request->tgl_pengambilan;
        $alumni->vcd_foto = $request->vcd_foto;
        $alumni->nama_sekolah_lanjutan = $request->nama_sekolah_lanjutan;
        $alumni->status = $request->status;
        $alumni->save();

        return redirect()->route('alumni.index')
            ->with('success_message', 'Berhasil mengubah Data Alumni.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $alumni = Alumni::find($id);
        if ($alumni) $alumni->delete();
        return redirect()->route('alumni.index')
            ->with('success_message', 'Berhasil menghapus data.');
    }
}
