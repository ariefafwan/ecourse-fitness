<?php

namespace App\Http\Controllers\User;

use App\Models\Program;
use App\Models\User;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $program = Program::all()->where('user_id', Auth::user()->id)->where('status', 'Berjalan');
        $pelatih = Program::all()->where('user_id', Auth::user()->id)->where('status', 'Berjalan')->get('pelatih_id');
        $bapak = User::all()->where('id', $pelatih);
        $nama = User::all()->where('id', $pelatih)->get('name');
        $nmrhp = User::all()->where('id', $pelatih)->get('nmrhp');
        $alamat = User::all()->where('id', $pelatih)->get('alamat');
        
        return view('user.program.program', compact('user', 'page', 'program', 'pelatih', 'nama', 'bapak', 'nmrhp', 'alamat'));
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
