<?php

namespace App\Http\Controllers\Pelatih;

use App\Models\Kind;
use App\Models\LatihanDetailPelatih;
use App\Models\LatihanPelatih;
use App\Models\Pelatih;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;

class RumusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $page = "Daftar Rumus Latihan";
        $rumus = LatihanPelatih::all();
        $pelatih = Pelatih::all()->where('id_user', Auth::user()->id);
        return view('new-website.pelatih.rumus.daftar', compact('user', 'page', 'rumus', 'pelatih'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();
        $page = "Tambah Rumus Latihan";
        $rumus = LatihanPelatih::all();
        $pelatih = Pelatih::all()->where('id_user', Auth::user()->id);
        return view('new-website.pelatih.rumus.create', compact('user', 'page', 'rumus', 'pelatih'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'file.*' => 'required|mimes:mp4,WEBM|max:2000'
        ]);

        try {
            DB::beginTransaction();
            $pelatih = Pelatih::where('id_user', Auth::user()->id)->first();
            $dtUpload = new LatihanPelatih();
            $dtUpload->nama_latihan = $request->nama_latihan;
            $dtUpload->id_pelatih = $pelatih->id;
            $dtUpload->save();

            foreach ($request->nama as $data => $index) {
                $cek = LatihanDetailPelatih::where('id_latihan_pelatih', $dtUpload->id)
                    ->where('urutan', $request->urutan[$data])->first();

                if (isset($cek)) {
                    Alert::error('Informasi Pesan!', 'Urutan Tidak Boleh Sama');
                    return redirect()->back();
                }

                $newdata = new LatihanDetailPelatih();
                $newdata->id_latihan_pelatih = $dtUpload->id;
                $newdata->nama = $request->nama[$data];
                $newdata->urutan = $request->urutan[$data];
                $file = $request->file[$data];
                $filename = time() . '_' . $file->getClientOriginalName();
                $file->storeAs('public/video/', $filename);
                $newdata->file = $filename;
                $newdata->save();
            }

            DB::commit();
            Alert::success('Informasi Pesan!', 'Rumus Latihan Anda Berhasil ditambahkan');
            return redirect()->route('rumus.index');
        } catch (\Exception $e) {
            DB::rollBack();
            Alert::error('Informasi Pesan!', $e->getMessage());
            return redirect()->back();
        }
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
        $page = "Edit Rumus Latihan";
        $rumus = LatihanPelatih::findOrFail($id);
        $latihanDetail = LatihanDetailPelatih::where('id_latihan_pelatih', $rumus->id)->orderBy('urutan')->get();
        $pelatih = Pelatih::all()->where('id_user', Auth::user()->id);
        return view('new-website.pelatih.rumus.show', compact('user', 'page', 'pelatih', 'rumus', 'latihanDetail'));
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
        $dtUpload = LatihanPelatih::findOrFail($id);
        $dtUpload->nama_latihan = $request->nama_latihan;
        $dtUpload->save();

        Alert::success('Informasi Pesan!', 'Rumus Anda Berhasil diupdate');
        return redirect()->route('rumus.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $latihan = LatihanPelatih::findOrFail($id);
        $latihan->delete();

        return redirect()->route('rumus.index');
    }
}
