<?php

namespace App\Http\Controllers\User;

use App\Models\Aspek;
use App\Models\User;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AspekController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $page = "Tambah Fokus Latihan Anda";

        $aspek = Aspek::all()->where('user_id', Auth::user()->id);
        if ($aspek->isEmpty()) {
            return redirect()->route('aspek.create');
        }

        return view('user.aspek.aspek', compact('user', 'page', 'aspek'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();
        $page = "Tambah Fokus Latihan Anda";
        $aspek = Aspek::all();
        return view('user.aspek.tambah', compact('user', 'page', 'aspek'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {        
        $dtUpload = new Aspek();
        $dtUpload->user_id = $request->user_id;
        $dtUpload->fokus = $request->fokus;
        $dtUpload->target = $request->target;
        $dtUpload->tingkat = $request->tingkat;
        $dtUpload->motivasi = $request->motivasi;
        $dtUpload->aktivitas = $request->aktivitas;
        $dtUpload->runtutan = $request->runtutan;
        $dtUpload->bb = $request->bb;
        $dtUpload->tb = $request->tb;

        $dtUpload->save();

        return redirect()->route('permintaan.index')->with(['message' => 'News created successfully!']);
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
        //
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
