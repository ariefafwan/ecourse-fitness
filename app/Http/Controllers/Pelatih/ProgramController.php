<?php

namespace App\Http\Controllers\Pelatih;

use App\Models\Kind;
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
        $permintaan = Permintaan::doesntHave('program')->where('pelatih_id', Auth::user()->id)->where('status', 'Terima')->orderBy('created_at', 'desc')->get();
        $rumus = Kind::all();
        if ($permintaan->isEmpty()) {
            return view('pelatih.program.belum', compact('user', 'page', 'permintaan', 'rumus'));
        }
        return view('pelatih.program.program', compact('user', 'page', 'permintaan', 'rumus'));
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
        $program = Program::OrderBy('tgl', 'asc')->where('status', 'Berjalan')->paginate(10);
        
        return view('pelatih.program.berjalan', compact('user', 'page' , 'program'));
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

        $dtUpload->save();

        return redirect()->route('program.create')
            ->with('updatesuccess', 'Program Berhasil Ditambahkan');
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
