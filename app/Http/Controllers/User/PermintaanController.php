<?php

namespace App\Http\Controllers\User;

use App\Models\Aspek;
use App\Models\Pelatih;
use App\Models\Permintaan;
use App\Models\Program;
use App\Models\User;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use function PHPUnit\Framework\at;

class PermintaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $page = "Order Pelatih Anda";
        $pelatih = Pelatih::all();
        
        $permintaan = Permintaan::all()->where('user_id', Auth::user()->id)->where('status', 'Pengajuan');
        
        $aspek = Aspek::all()->where('user_id', Auth::user()->id);
        if ($aspek->isEmpty()) {
            return view('user.permintaan.belum', compact('user', 'page', 'pelatih', 'aspek' ,'permintaan'));
        }
        else if ($permintaan->isEmpty()) {
            return view('user.permintaan.ajukan', compact('user', 'page', 'pelatih', 'permintaan', 'aspek'));
        }
        
        return view('user.permintaan.sudah', compact('user', 'page', 'pelatih', 'permintaan', 'aspek'));
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
        $dtUpload = new Permintaan();
        $dtUpload->aspek_id = $request->aspek_id;
        $dtUpload->user_id = $request->user_id;
        $dtUpload->pelatih_id = $request->pelatih_id;
        $dtUpload->status = $request->status;
        $dtUpload->id_user_pelatih = $request->id_user_pelatih;

        $dtUpload->save();

        return redirect()->route('permintaan.index')
            ->with('updatesuccess', 'Permintaan Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
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
