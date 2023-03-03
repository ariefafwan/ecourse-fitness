<?php

namespace App\Http\Controllers\Pelatih;

use App\Models\Pelatih;
use App\Models\User;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $page = "Profile Coach Anda";
        $pelatih = Pelatih::all()->where('user_id', Auth::user()->id);
        if ($pelatih->isEmpty()) {
            return view('pelatih.profile.tambah', compact('user', 'page', 'pelatih'));
        }
        return view('pelatih.profile.profile', compact('user', 'page', 'pelatih'));
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
        $nm = $request->profile_img;
        $namaFile = $nm->getClientOriginalName();
        
        $dtUpload = new Pelatih();
        $dtUpload->user_id = $request->user_id;
        $dtUpload->jeniskl = $request->jeniskl;
        $dtUpload->nmrhp = $request->nmrhp;
        $dtUpload->name = $request->name;
        $dtUpload->alamat = $request->alamat;
        $dtUpload->profile_img = $namaFile;

        $nm->move(public_path() . '/img/profil', $namaFile);
        $dtUpload->save();

        return redirect()->route('profile.index')
            ->with('updatesuccess', 'Profile Ditambahkan');
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
        $page = "Profile Coach Anda";
        $pelatih = Pelatih::all()->where('user_id', Auth::user()->id);
        $p = Pelatih::findOrFail($id);
        
        return view('pelatih.profile.edit', compact('user', 'page', 'pelatih', 'p'));
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
        $nm = $request->profile_img;
        $namaFile = $nm->getClientOriginalName();
        
        $dtUpload = Pelatih::findOrFail($id);
        $dtUpload->user_id = $request->user_id;
        $dtUpload->jeniskl = $request->jeniskl;
        $dtUpload->name = $request->name;
        $dtUpload->nmrhp = $request->nmrhp;
        $dtUpload->alamat = $request->alamat;
        $dtUpload->profile_img = $namaFile;

        $nm->move(public_path() . '/img/profil', $namaFile);
        $dtUpload->save();

        return redirect()->route('profile.index')
            ->with('updatesuccess', 'Profile Ditambahkan');
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
