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
        
        return view('user.program.program', compact('user', 'page', 'program'));
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
        $program = Program::OrderBy('created_at', 'desc')->where('status', 'Selesai')->where('user_id', Auth::user()->id)->paginate(10);
        
        return view('user.program.selesai', compact('user', 'page', 'program'));
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
        $page = "Program Berjalan Anda";
        $program = Program::findOrFail($id);

        return view('user.program.show', compact('user', 'page', 'program'));
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
