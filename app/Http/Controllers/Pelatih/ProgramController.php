<?php

namespace App\Http\Controllers\Pelatih;

use App\Models\Kind;
use App\Models\Pelatih;
use App\Models\Permintaan;
use App\Models\Program;
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
        $permintaan = Permintaan::doesntHave('program')->where('id_user_pelatih', Auth::user()->id)->where('status', 'Terima')->orderBy('created_at', 'desc')->get();
        $rumus = Kind::all();
        $pelatih = Pelatih::all()->where('user_id', Auth::user()->id);
        if ($permintaan->isEmpty()) {
            return view('pelatih.program.belum', compact('user', 'page', 'permintaan', 'rumus', 'pelatih'));
        }
        return view('pelatih.program.program', compact('user', 'page', 'permintaan', 'rumus', 'pelatih'));
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
        $pelatih = Pelatih::all()->where('user_id', Auth::user()->id);
        $program = Program::OrderBy('tgl', 'asc')->where('status', 'Berjalan')->where('id_user_pelatih', Auth::user()->id)->paginate(10);

        return view('pelatih.program.berjalan', compact('user', 'page', 'program', 'pelatih'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dtUpload = new Program();
        $dtUpload->user_id = $request->user_id;
        $dtUpload->pelatih_id = $request->pelatih_id;
        $dtUpload->permintaan_id = $request->permintaan_id;
        $dtUpload->status = $request->status;
        $dtUpload->tgl = $request->tgl;
        $dtUpload->runtutanke = $request->runtutanke;
        $dtUpload->kind_id = $request->kind_id;
        $dtUpload->id_user_pelatih = $request->id_user_pelatih;

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
        $dtUpload = Program::findOrFail($id);

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
