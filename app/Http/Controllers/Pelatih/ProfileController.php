<?php

namespace App\Http\Controllers\Pelatih;

use App\Models\Pelatih;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

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
        $dtUpload = new Pelatih();
        $dtUpload->user_id = $request->user_id;
        $dtUpload->jeniskl = $request->jeniskl;
        $dtUpload->nmrhp = $request->nmrhp;
        $dtUpload->name = $request->name;
        $dtUpload->alamat = $request->alamat;
        $file = $request->file('profile_img');
        if ($request->validate([
            'profile_img' => 'required|mimes:png,jpg,jpeg|max:20000'
        ])) {
            $filename = $file->getClientOriginalName();
            $file->storeAs('public/profil/', $filename);
            $dtUpload->profile_img = $filename;
        }

        $dtUpload->save();

        Alert::success('Informasi Pesan!', 'Profil Anda Berhasil ditambahkan');
        return redirect()->route('profile.index');
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
        $dtUpload = Pelatih::findOrFail($id);
        $dtUpload->user_id = $request->user_id;
        $dtUpload->jeniskl = $request->jeniskl;
        $dtUpload->name = $request->name;
        $dtUpload->nmrhp = $request->nmrhp;
        $dtUpload->alamat = $request->alamat;
        $file = $request->file('profile_img');
        if ($request->validate([
            'profile_img' => 'required|mimes:png,jpg,jpeg|max:20000'
        ])) {

            if ($request->oldImage) {
                Storage::delete('public/profil' . $dtUpload->profile_img);
            }

            $filename = $file->getClientOriginalName();
            $file->storeAs('public/profil/', $filename);
            $dtUpload->profile_img = $filename;
        }

        $dtUpload->save();

        Alert::success('Informasi Pesan!', 'Profil Anda Berhasil diedit');
        return redirect()->route('profile.index');
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
