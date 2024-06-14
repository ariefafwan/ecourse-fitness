<?php

namespace App\Http\Controllers\Pelatih;

use App\Models\Kind;
use App\Models\LatihanPelatih;
use App\Models\Pelatih;
use App\Models\Permintaan;
use App\Models\Program;
use App\Models\ProgramLatihan;
use App\Models\User;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $page = "Daftar Permintaan Program Latihan Terhadap Anda";
        $pelatih = Pelatih::all()->where('id_user', Auth::user()->id);
        $permintaan = Permintaan::all()->where('id_pelatih', $pelatih[0]->id)->where('status', 'Terima');
        if ($permintaan->isEmpty()) {
            return view('new-website.pelatih.permintaan.belum', compact('user', 'page', 'permintaan', 'pelatih'));
        }

        $userid = Permintaan::all()->where('id_pelatih', Auth::user()->id)->where('status', 'Terima')->get('id_user');
        $program = ProgramLatihan::all()->where('id_user', $userid)->count();

        return view('new-website.pelatih.permintaan.terima', compact('user', 'page', 'permintaan', 'userid', 'program', 'pelatih'));
    }

    public function tolak()
    {
        $user = Auth::user();
        $page = "Daftar Permintaan Program Latihan Terhadap Anda";
        $pelatih = Pelatih::all()->where('id_user', Auth::user()->id);
        $permintaan = Permintaan::all()->where('id_pelatih', $pelatih[0]->id)->where('status', 'Tolak');
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
        $rumus = LatihanPelatih::where('id_pelatih', $pelatih[0]->id)->get;
        $permintaan = Permintaan::where('id_user', $user->id)->get();
        $program = ProgramLatihan::all()->where('id_user', $user->id)->count();
        return view('new-website.pelatih.program.create', compact('page', 'user', 'rumus', 'pelatih', 'permintaan', 'program'));
    }
}
