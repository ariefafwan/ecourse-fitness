<?php

namespace App\Http\Controllers\Admin;

use App\Models\Kind;
use App\Models\Latihan;
use App\Models\Role;
use App\Models\User;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LatihanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $page = "Daftar Latihan";
        $latihan = Latihan::all();
        return view('admin.latihan.daftar', compact('user', 'page', 'latihan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();
        $page = "Tambah Latihan";
        $latihan = Latihan::all();
        return view('admin.latihan.create', compact('user', 'page', 'latihan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dtUpload = new Latihan();
        $dtUpload->name = $request->name;
        $dtUpload->banyak = $request->banyak;

        $dtUpload->save();


        return redirect()->route('latihan.index')
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
        $page = "Edit Latihan";
        $latihan = Latihan::findOrFail($id);
        return view('admin.latihan.edit', compact('user', 'page', 'latihan'));
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
        $dtUpload = Latihan::find($id);
        $dtUpload->name = $request->name;
        $dtUpload->banyak = $request->banyak;

        $dtUpload->save();


        return redirect()->route('latihan.index')
            ->with('updatesuccess', 'Latihan Berhasil Ditambahkan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $latihan = Latihan::findOrFail($id);
        $latihan->delete();

        return redirect()->route('latihan.index')
            ->with('updatesuccess', 'Berhasil Dihapus');
    }
}
