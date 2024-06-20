<?php

namespace App\Http\Controllers\User;

use App\Models\Fokus;
use App\Models\User;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class EditUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $user = Auth::user();
        $page = "Profile User";
        $aspek = Fokus::where('id_user', Auth::user()->id)->first();
        return view('new-website.user.profile.user', compact('user', 'page', 'aspek'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = Auth::user($id);
        $page = "Edit Profile User";
        return view('new-website.user.profile.edit', compact('user', 'page'));
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
        // $user = User::findOrFail($id);
        $dtUpload = User::findOrFail($id);

        $dtUpload = User::find($id);
        $dtUpload->name = $request->name;
        $dtUpload->alamat = $request->alamat;
        $dtUpload->no_hp = $request->no_hp;
        $dtUpload->jenis_kelamin = $request->jenis_kelamin;

        if ($request->hasFile('profile_img')) {
            if ($request->validate([
                'profile_img' => 'required|mimes:png,jpg,jpeg|max:20000'
            ])) {
                $file = $request->file('profile_img');
                $filename = time() . '_' . $file->getClientOriginalName();
                $file->storeAs('public/profil/', $filename);
                $dtUpload->profile_img = $filename;
            }
        }

        $dtUpload->save();

        //redirect to index
        return redirect()->route('edituser.show', $dtUpload->id);
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
