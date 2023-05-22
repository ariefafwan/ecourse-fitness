<?php

namespace App\Http\Controllers\Pelatih;

use App\Models\Kind;
use App\Models\Pelatih;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class RumusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $page = "Daftar Rumus Anda";
        $rumus = Kind::all();
        $pelatih = Pelatih::all()->where('user_id', Auth::user()->id);
        return view('pelatih.rumus.daftar', compact('user', 'page', 'rumus', 'pelatih'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();
        $page = "Tambah Rumus Anda";
        $rumus = Kind::all();
        $pelatih = Pelatih::all()->where('user_id', Auth::user()->id);
        return view('pelatih.rumus.create', compact('user', 'page', 'rumus', 'pelatih'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dtUpload = new Kind();
        $dtUpload->name = $request->name;
        $dtUpload->pelatih_id = $request->pelatih_id;
        $dtUpload->latihan1 = $request->latihan1;
        $dtUpload->latihan2 = $request->latihan2;
        $dtUpload->latihan3 = $request->latihan3;
        $dtUpload->latihan4 = $request->latihan4;
        $dtUpload->latihan5 = $request->latihan5;
        $dtUpload->latihan6 = $request->latihan6;
        $dtUpload->latihan7 = $request->latihan7;
        $dtUpload->latihan8 = $request->latihan8;
        $dtUpload->latihan9 = $request->latihan9;
        $dtUpload->latihan10 = $request->latihan10;
        $dtUpload->latihan11 = $request->latihan11;
        $dtUpload->latihan12 = $request->latihan12;
        $dtUpload->latihan13 = $request->latihan13;
        $dtUpload->latihan14 = $request->latihan14;
        $dtUpload->latihan15 = $request->latihan15;
        $dtUpload->latihan16 = $request->latihan16;
        $dtUpload->latihan17 = $request->latihan17;
        $dtUpload->latihan18 = $request->latihan18;
        $dtUpload->latihan19 = $request->latihan19;
        $dtUpload->latihan20 = $request->latihan20;

        $dtUpload->save();

        Alert::success('Informasi Pesan!', 'Rumus Anda Berhasil ditambahkan');
        return redirect()->route('rumus.index');
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
        $user = Auth::user();
        $page = "Edit Rumus";
        $rumus = Kind::findOrFail($id);
        $pelatih = Pelatih::all()->where('user_id', Auth::user()->id);
        return view('pelatih.rumus.edit', compact('user', 'page', 'pelatih', 'rumus'));
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
        $dtUpload = Kind::find($id);
        $dtUpload->name = $request->name;
        $dtUpload->pelatih_id = $request->pelatih_id;
        $dtUpload->latihan1 = $request->latihan1;
        $dtUpload->latihan2 = $request->latihan2;
        $dtUpload->latihan3 = $request->latihan3;
        $dtUpload->latihan4 = $request->latihan4;
        $dtUpload->latihan5 = $request->latihan5;
        $dtUpload->latihan6 = $request->latihan6;
        $dtUpload->latihan7 = $request->latihan7;
        $dtUpload->latihan8 = $request->latihan8;
        $dtUpload->latihan9 = $request->latihan9;
        $dtUpload->latihan10 = $request->latihan10;
        $dtUpload->latihan11 = $request->latihan11;
        $dtUpload->latihan12 = $request->latihan12;
        $dtUpload->latihan13 = $request->latihan13;
        $dtUpload->latihan14 = $request->latihan14;
        $dtUpload->latihan15 = $request->latihan15;
        $dtUpload->latihan16 = $request->latihan16;
        $dtUpload->latihan17 = $request->latihan17;
        $dtUpload->latihan18 = $request->latihan18;
        $dtUpload->latihan19 = $request->latihan19;
        $dtUpload->latihan20 = $request->latihan20;

        $dtUpload->save();

        Alert::success('Informasi Pesan!', 'Rumus Anda Berhasil diupdate');
        return redirect()->route('rumus.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $latihan = Kind::findOrFail($id);
        $latihan->delete();

        return redirect()->route('rumus.index');
    }
}
