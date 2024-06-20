<?php

namespace App\Http\Controllers\Pelatih;

use App\Models\Kind;
use App\Models\LatihanDetailPelatih;
use App\Models\LatihanPelatih;
use App\Models\Pelatih;
use App\Models\Permintaan;
use App\Models\Program;
use App\Models\ProgramLatihan;
use App\Models\User;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Ui\Presets\React;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;

class PelatihController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $page = "Dasboard Pelatih";
        $pelatih = Pelatih::where('id_user', Auth::user()->id)->get();
        if ($pelatih->isEmpty()) {
            return view('new-website.pelatih.belum', compact('user', 'page', 'pelatih'));
        }
        return view('new-website.pelatih.dashboard', compact('user', 'page', 'pelatih'));
    }

    public function terima()
    {
        $user = Auth::user();
        $page = "Daftar Permintaan Diterima";
        $pelatih = Pelatih::all()->where('id_user', Auth::user()->id);
        $permintaan = Permintaan::all()->where('id_pelatih', $pelatih[0]->id)->where('status', 'Diterima');
        if ($permintaan->isEmpty()) {
            return view('new-website.pelatih.permintaan.belum', compact('user', 'page', 'permintaan', 'pelatih'));
        }

        $userid = Permintaan::all()->where('id_pelatih', $pelatih[0]->id)->where('status', 'Diterima')->get('id_user');
        // $program = ProgramLatihan::all()->where('id_user', $userid)->count();

        return view('new-website.pelatih.permintaan.terima', compact('user', 'page', 'permintaan', 'userid', 'pelatih'));
    }

    public function tolak()
    {
        $user = Auth::user();
        $page = "Daftar Permintaan Ditolak";
        $pelatih = Pelatih::all()->where('id_user', Auth::user()->id);
        $permintaan = Permintaan::all()->where('id_pelatih', $pelatih[0]->id)->where('status', 'Ditolak');
        if ($permintaan->isEmpty()) {
            return view('new-website.pelatih.permintaan.belum', compact('user', 'page', 'permintaan', 'pelatih'));
        }

        return view('new-website.pelatih.permintaan.tolak', compact('user', 'page', 'permintaan', 'pelatih'));
    }

    public function tambahprogram($id)
    {
        $page = "Tambah Program";
        $user = User::findOrFail($id);
        $pelatih = Pelatih::all()->where('id_user', Auth::user()->id);
        $rumus = LatihanPelatih::where('id_pelatih', $pelatih[0]->id)->get();
        $permintaan = Permintaan::where('id_user', $user->id)->get();
        // $program = ProgramLatihan::all()->where('id_user', $user->id)->count();
        return view('new-website.pelatih.program.create', compact('page', 'user', 'rumus', 'pelatih', 'permintaan'));
    }

    public function update_rumus_detail(Request $request, $id)
    {
        try {
            DB::beginTransaction();

            $dtUpload = LatihanDetailPelatih::findOrFail($id);

            $cek = LatihanDetailPelatih::where('id', '!=', $dtUpload->id)->where('id_latihan_pelatih', $dtUpload->id)
                ->where('urutan', $request->urutan)->first();

            if (isset($cek)) {
                Alert::error('Informasi Pesan!', 'Urutan Tidak Boleh Sama');
                return redirect()->back();
            }

            $dtUpload->nama = $request->nama;
            $dtUpload->urutan = $request->urutan;

            if ($request->hasFile('file')) {
                $file = $request->file;
                $filename = time() . '_' . $file->getClientOriginalName();
                $file->storeAs('public/video/', $filename);

                $dtUpload->file = $filename;
            }
            $dtUpload->save();

            DB::commit();
            Alert::success('Informasi Pesan!', 'Rumus Anda Berhasil diupdate');
            return redirect()->route('rumus.index');
        } catch (\Exception $e) {
            DB::rollBack();
            Alert::error('Informasi Pesan!', $e->getMessage());
            return redirect()->back();
        }
    }

    public function delete_rumus_detail($id)
    {
        $latihan = LatihanDetailPelatih::findOrFail($id);
        $latihan->delete();

        Alert::success('Informasi Pesan!', 'Rumus Anda Berhasil diupdate');
        return redirect()->route('rumus.index');
    }
}
