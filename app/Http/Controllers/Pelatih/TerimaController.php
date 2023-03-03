<?php

namespace App\Http\Controllers\Pelatih;

use App\Models\Kind;
use App\Models\Pelatih;
use App\Models\Permintaan;
use App\Models\Program;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $permintaan = Permintaan::all()->where('id_user_pelatih', Auth::user()->id)->where('status', 'Pengajuan');
        $pelatih = Pelatih::all()->where('user_id', Auth::user()->id);
        if ($permintaan->isEmpty()) {
            return view('pelatih.permintaan.belum', compact('user', 'page', 'permintaan', 'pelatih'));
        }

        return view('pelatih.permintaan.permintaan', compact('user', 'page', 'permintaan', 'pelatih'));

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
        $page = "Detail";
        $permintaan = Permintaan::findOrFail($id);
        $pelatih = Pelatih::all()->where('user_id', Auth::user()->id);
        return view('pelatih.permintaan.show', compact('user', 'page', 'permintaan', 'pelatih'));
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
        $rumus = Kind::all();
        $program = Program::findOrFail($id);
        $pelatih = Pelatih::all()->where('user_id', Auth::user()->id);
        return view('pelatih.program.tambah', compact('user', 'page', 'program', 'rumus', 'pelatih'));
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
        // $dtUpload->tgl = $request->tgl;
        // $dtUpload->kind_id = $request->kind_id;

        $dtUpload->save();

        return redirect()->route('terima.index')
            ->with('updatesuccess', 'Permintaan Berhasil Ditambahkan');
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
