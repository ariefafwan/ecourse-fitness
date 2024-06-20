<?php

namespace App\Http\Controllers\Pelatih;

use App\Models\Pelatih;
use App\Models\User;
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
        $pelatih = Pelatih::all()->where('id_user', Auth::user()->id);
        if ($pelatih->isEmpty()) {
            return view('new-website.pelatih.profile.tambah', compact('user', 'page', 'pelatih'));
        }
        return view('new-website.pelatih.profile.profile', compact('user', 'page', 'pelatih'));
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
        $dtUpload->id_user = $request->id_user;
        $dtUpload->save();

        $user = User::findOrFail(Auth::user()->id);

        $user->name = $request->name;
        $user->jenis_kelamin = $request->jenis_kelamin;
        $user->no_hp = $request->no_hp;
        $user->alamat = $request->alamat;
        if ($request->hasFile('profile_img')) {
            if ($request->validate([
                'profile_img' => 'required|mimes:png,jpg,jpeg|max:20000'
            ])) {
                $file = $request->file('profile_img');
                $filename = time() . '_' . $file->getClientOriginalName();
                $file->storeAs('public/profil/', $filename);
                $user->profile_img = $filename;
            }
        }
        $user->save();


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
        $pelatih = Pelatih::all()->where('id_user', Auth::user()->id);
        $p = Pelatih::findOrFail($id);

        return view('new-website.pelatih.profile.edit', compact('user', 'page', 'pelatih', 'p'));
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
        $user = User::findOrFail(Auth::user()->id);

        $user->name = $request->name;
        $user->jenis_kelamin = $request->jenis_kelamin;
        $user->no_hp = $request->no_hp;
        $user->alamat = $request->alamat;
        if ($request->hasFile('profile_img')) {
            if ($request->validate([
                'profile_img' => 'required|mimes:png,jpg,jpeg|max:20000'
            ])) {
                $file = $request->file('profile_img');
                $filename = time() . '_' . $file->getClientOriginalName();
                $file->storeAs('public/profil/', $filename);
                $user->profile_img = $filename;
            }
        }
        $user->save();

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
