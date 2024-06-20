<?php

namespace App\Http\Controllers\Pelatih;

use App\Models\Kind;
use App\Models\LatihanPelatih;
use App\Models\Pelatih;
use App\Models\Permintaan;
use App\Models\Program;
use App\Models\ProgramLatihan;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $page = "Berikan Program Anda";
        $pelatih = Pelatih::all()->where('id_user', Auth::user()->id);
        $permintaan = Permintaan::doesntHave('dataProgramLatihan')->where('id_pelatih', $pelatih[0]->id)->where('status', 'Terima')->orderBy('created_at', 'desc')->get();
        $rumus = LatihanPelatih::where('id_pelatih', $pelatih[0]->id)->get();
        if ($permintaan->isEmpty()) {
            return view('new-website.pelatih.program.belum', compact('user', 'page', 'permintaan', 'rumus', 'pelatih'));
        }
        return view('new-website.pelatih.program.program', compact('user', 'page', 'permintaan', 'rumus', 'pelatih'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Page Program Berjalan
        $user = Auth::user();
        $page = "Program Berjalan";
        $pelatih = Pelatih::all()->where('id_user', Auth::user()->id);
        $program = ProgramLatihan::OrderBy('tanggal', 'asc')->where('status', 'Belum Dikerjakan')->where('id_pelatih', $pelatih[0]->id)->paginate(10);

        return view('new-website.pelatih.program.berjalan', compact('user', 'page', 'program', 'pelatih'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $permintaan = Permintaan::findOrFail($request->id_permintaan);

        $dtUpload = new ProgramLatihan();
        $dtUpload->id_user = $request->id_user;
        $dtUpload->id_pelatih = $request->id_pelatih;
        $dtUpload->id_permintaan = $request->id_permintaan;
        $dtUpload->status = $request->status;
        $dtUpload->tanggal = $request->tanggal;
        $dtUpload->latihan_ke = $permintaan->dataProgramLatihan->count() + 1;
        $dtUpload->id_latihan_pelatih = $request->id_latihan_pelatih;

        $dtUpload->save();

        Alert::success('Informasi Pesan!', 'Program Berhasil ditambahkan');
        return redirect()->route('program.create');
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
        //
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
        $dtUpload = ProgramLatihan::findOrFail($id);

        $dtUpload->status = $request->status;

        $dtUpload->save();
        Alert::success('Informasi Pesan!', 'Program Berhasil diupdate');
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
