<?php

namespace App\Http\Controllers\Pelatih;

use App\Models\Permintaan;
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
        $permintaan = Permintaan::all()->where('pelatih_id', Auth::user()->id)->where('status', 'Pengajuan');
        if ($permintaan->isEmpty()) {
            return view('pelatih.permintaan.belum', compact('user', 'page', 'permintaan'));
        }

        return view('pelatih.permintaan.permintaan', compact('user', 'page', 'permintaan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $dtUpload = Permintaan::findOrFail($id);
        
        $dtUpload->status = $request->status;

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
