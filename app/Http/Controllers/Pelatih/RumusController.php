<?php

namespace App\Http\Controllers\Pelatih;

use App\Models\Kind;
use App\Models\Latihan;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        return view('pelatih.rumus.daftar', compact('user', 'page', 'rumus'));
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
        $latihan = Latihan::all();
        return view('pelatih.rumus.create', compact('user', 'page', 'rumus', 'latihan'));
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
        $dtUpload->latihan1_id = $request->latihan1_id;

        $dtUpload->save();


        return redirect()->route('rumus.index')
            ->with('updatesuccess', 'Latihan Berhasil Ditambahkan');
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
        $latihan = Latihan::all();
        return view('pelatih.rumus.edit', compact('user', 'page', 'latihan', 'rumus'));
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
        $dtUpload->latihan1_id = $request->latihan1_id;

        $dtUpload->save();


        return redirect()->route('rumus.index')
            ->with('updatesuccess', 'Rumus Berhasil Ditambahkan');
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

        return redirect()->route('Rumus.index')
            ->with('updatesuccess', 'Berhasil Dihapus');
    }
}
