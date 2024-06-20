<?php

namespace App\Http\Controllers\Pelatih;

use App\Models\Fokus;
use App\Models\Kind;
use App\Models\LatihanPelatih;
use App\Models\Pelatih;
use App\Models\Permintaan;
use App\Models\Program;
use App\Models\ProgramLatihan;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class TerimaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $page = "Daftar Permintaan Program Latihan Terhadap Anda";
        $pelatih = Pelatih::all()->where('id_user', Auth::user()->id);
        $permintaan = Permintaan::all()->where('id_pelatih', $pelatih[0]->id)->where('status', 'Menunggu');
        if ($permintaan->isEmpty()) {
            return view('new-website.pelatih.permintaan.belum', compact('user', 'page', 'permintaan', 'pelatih'));
        }

        return view('new-website.pelatih.permintaan.permintaan', compact('user', 'page', 'permintaan', 'pelatih'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = Auth::user();
        $page = "Detail Fokus User";
        $permintaan = Permintaan::findOrFail($id);
        $fokusUser = Fokus::where('id_user', $permintaan->id_user)->first();
        $pelatih = Pelatih::all()->where('id_user', Auth::user()->id);
        return view('new-website.pelatih.permintaan.show', compact('user', 'page', 'permintaan', 'pelatih', 'fokusUser'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = Auth::user();
        $page = "Tambah Program";
        $program = ProgramLatihan::findOrFail($id);
        $pelatih = Pelatih::all()->where('id_user', Auth::user()->id);
        $rumus = LatihanPelatih::where('id_pelatih', $pelatih[0]->id)->get();
        return view('new-website.pelatih.program.tambah', compact('user', 'page', 'program', 'rumus', 'pelatih'));
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
        $dtUpload = Permintaan::findOrFail($id);
        $dtUpload->status = $request->status;

        $dtUpload->save();

        Alert::success('Informasi Pesan!', 'Permintaan Berhasil diupdate');
        return redirect()->route('terima.index');
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
