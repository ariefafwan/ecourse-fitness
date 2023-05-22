<?php

namespace App\Http\Controllers\User;

use App\Models\Aspek;
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
        $aspek = Aspek::all()->where('user_id', Auth::user()->id);
        return view('user.profile.user', compact('user', 'page', 'aspek'));
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
        return view('user.profile.edit', compact('user', 'page'));
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
        $user = User::findOrFail($id);
        $dtUpload = User::findOrFail($id);

        //upload
        // $request->validate([
        //     'profile_img'    => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        //     'name'           => 'required|min:5',
        //     'nmrhp'           => 'required|min:8',
        //     'alamat'        => 'required|min:10',
        //     'jeniskl'        => 'required|min:10'
        // ]);

        $dtUpload = User::find($id);
        $dtUpload->name = $request->name;
        $dtUpload->alamat = $request->alamat;
        $dtUpload->nmrhp = $request->nmrhp;
        $dtUpload->jeniskl = $request->jeniskl;

        $file = $request->file('profile_img');
        if ($request->validate([
            'profile_img' => 'required|mimes:png,jpg,jpeg|max:2048'
        ])) {

            if ($request->oldImage) {
                Storage::delete('public/profil' . $dtUpload->profile_img);
            }

            $filename = $file->getClientOriginalName();
            $file->storeAs('public/profil/', $filename);
            $dtUpload->profile_img = $filename;
        }

        $dtUpload->save();

        //redirect to index
        return redirect()->route('edituser.show', $user->id);
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
