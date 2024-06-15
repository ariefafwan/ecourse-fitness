<?php

namespace App\Http\Controllers\User;

use App\Models\Aspek;
use App\Models\User;
use App\Models\Fokus;
use App\Models\Permintaan;
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
        $page = "Fokus Latihan Anda";

        $aspek = Fokus::all()->where('id_user', Auth::user()->id);
        if ($aspek->isEmpty()) {
            return redirect()->route('aspek.create');
        }
        return view('new-website.user.aspek.aspek', compact('user', 'page', 'aspek'));
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
        $aspek = Fokus::all();
        return view('new-website.user.aspek.tambah', compact('user', 'page', 'aspek'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dtUpload = new Fokus();
        $dtUpload->id_user = $request->id_user;
        $dtUpload->target = $request->target;
        $dtUpload->level = $request->level;
        $dtUpload->berat_badan = $request->berat_badan;
        $dtUpload->tinggi_badan = $request->tinggi_badan;

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
        $user = Auth::user();
        $page = "Edit Fokus Latihan Anda";
        $aspek = Fokus::findOrFail($id);
        return view('new-website.user.aspek.edit', compact('user', 'page', 'aspek'));
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
        $dtUpload = Fokus::findOrFail($id);
        $dtUpload->target = $request->target;
        $dtUpload->level = $request->level;
        $dtUpload->berat_badan = $request->berat_badan;
        $dtUpload->tinggi_badan = $request->tinggi_badan;

        $dtUpload->save();

        return redirect()->route('aspek.index')->with(['message' => 'News created successfully!']);
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
