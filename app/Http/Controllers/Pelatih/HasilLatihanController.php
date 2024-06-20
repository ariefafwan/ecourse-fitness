<?php

namespace App\Http\Controllers\Pelatih;

use App\Models\Kind;
use App\Models\Latihan;
use App\Models\LatihanPelatih;
use App\Models\Pelatih;
use App\Models\Program;
use App\Models\ProgramLatihan;
use App\Models\User;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HasilLatihanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $page = "Hasil Program";
        $pelatih = Pelatih::all()->where('id_user', Auth::user()->id);
        // $program = ProgramLatihan::select('id', 'id_user', 'tanggal', 'id_latihan_pelatih', 'id_pelatih', 'status')->where('status', 'Selesai')->selectRaw('MAX(latihan_ke) as latihan_ke)')->orderBy('latihan_ke', 'desc')->get();
        $user = User::whereHas('dataProgramLatihan', function ($q) {
            $q->where('status', 'Selesai');
        })->get();
        $program = [];
        foreach ($user as $index => $row) {
            $programlatihan = ProgramLatihan::where('status', 'Selesai')->where('id_user', $row->id)->orderBy('latihan_ke', 'desc')->first();
            $program[] = $programlatihan;
        }
        // dd($program);
        $rumus = LatihanPelatih::where('id_pelatih', $pelatih[0]->id)->get();

        return view('new-website.pelatih.program.selesai', compact('user', 'page', 'program', 'rumus', 'pelatih'));
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
