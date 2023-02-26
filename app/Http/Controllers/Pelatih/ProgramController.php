<?php

namespace App\Http\Controllers\Pelatih;

use App\Models\Permintaan;
use App\Models\Program;
use App\Models\User;
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
        // $permintaan = Permintaan::all()->where('pelatih_id', Auth::user()->id)->whereNotNull('kind_id');
        $permintaan = Permintaan::doesntHave('program')->where('pelatih_id', Auth::user()->id)->where('status', 'Terima')->get();
        // $userid = Permintaan::all()->where('pelatih_id', Auth::user()->id)->where('status', 'Terima')->get('user_id');
        // dd($permintaan);
        if ($permintaan->isEmpty()) {
            return view('pelatih.program.belum', compact('user', 'page', 'permintaan'));
        }
        return view('pelatih.program.program', compact('user', 'page', 'permintaan'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();
        $page = "Berikan Program Anda";
        $userid = Program::all()->where('pelatih_id', Auth::user()->id)->where('status', 'Terima')->get('user_id');
        $program = Program::all()->where('user_id', $userid);
        $menunggu = Program::all()->whereNull($program)->where('status', 'Terima');


        return view('pelatih.program.tambah', compact('user', 'page', 'program', 'userid', 'menunggu'));
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
