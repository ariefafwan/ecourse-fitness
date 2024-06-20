<?php

namespace App\Http\Controllers\User;

use App\Models\LatihanDetailPelatih;
use App\Models\LatihanPelatih;
use App\Models\Program;
use App\Models\ProgramLatihan;
use App\Models\User;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class HasilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $page = "Program Berjalan Anda";
        $program = ProgramLatihan::all()->where('id_user', Auth::user()->id)->where('status', 'Belum Dikerjakan');

        return view('new-website.user.program.program', compact('user', 'page', 'program'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Page Hasil Program
        $user = Auth::user();
        $page = "Program Latihan Selesai";
        $program = ProgramLatihan::OrderBy('created_at', 'desc')->where('status', 'Selesai')->where('id_user', Auth::user()->id)->paginate(10);

        return view('new-website.user.program.selesai', compact('user', 'page', 'program'));
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
        $page = "Detail Latihan Anda";
        $program = ProgramLatihan::findOrFail($id);
        $latihan = LatihanDetailPelatih::where('id_latihan_pelatih', $program->dataLatihanPelatih->id)->orderBy('urutan')->get();
        // dd($latihan);
        return view('new-website.user.program.show', compact('user', 'page', 'program', 'latihan'));
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
        $page = "Hasil Latihan Anda";
        $program = ProgramLatihan::findOrFail($id);
        $latihan = LatihanDetailPelatih::where('id_latihan_pelatih', $program->dataLatihanPelatih->id)->orderBy('urutan')->get();
        return view('new-website.user.program.detail', compact('user', 'page', 'program', 'latihan'));
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

        $dtUpload->status = 'Selesai';

        $dtUpload->save();

        Alert::success('Informasi Pesan!', 'Program Selesai Dikerjakan');
        return redirect()->route('hasil.index');
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
