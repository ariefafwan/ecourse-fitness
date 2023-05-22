<?php

namespace App\Http\Controllers\Pelatih;

use App\Models\Kind;
use App\Models\Pelatih;
use App\Models\Permintaan;
use App\Models\Program;
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
        $pelatih = Pelatih::where('user_id', Auth::user()->id)->get();
        if ($pelatih->isEmpty()) {
            return view('pelatih.belum', compact('user', 'page', 'pelatih'));
        }
        // $dt1 = DB::table('users')->get()->where('role_id', '2')->count();
        return view('pelatih.dashboard', compact('user', 'page', 'pelatih'));
    }

    public function terima()
    {
        $user = Auth::user();
        $page = "Daftar Permintaan Program Latihan Terhadap Anda";
        $permintaan = Permintaan::all()->where('id_user_pelatih', Auth::user()->id)->where('status', 'Terima');
        $pelatih = Pelatih::all()->where('user_id', Auth::user()->id);
        if ($permintaan->isEmpty()) {
            return view('pelatih.permintaan.belum', compact('user', 'page', 'permintaan', 'pelatih'));
        }

        $userid = Permintaan::all()->where('pelatih_id', Auth::user()->id)->where('status', 'Terima')->get('user_id');
        $program = Program::all()->where('user_id', $userid)->count();
        // $dt2 = DB::table('users')->get()->where('role_id', '3')->count();

        return view('pelatih.permintaan.terima', compact('user', 'page', 'permintaan', 'userid', 'program', 'pelatih'));
    }

    public function tolak()
    {
        $user = Auth::user();
        $page = "Daftar Permintaan Program Latihan Terhadap Anda";
        $permintaan = Permintaan::all()->where('id_user_pelatih', Auth::user()->id)->where('status', 'Tolak');
        $pelatih = Pelatih::all()->where('user_id', Auth::user()->id);
        if ($permintaan->isEmpty()) {
            return view('pelatih.permintaan.belum', compact('user', 'page', 'permintaan', 'pelatih'));
        }

        return view('pelatih.permintaan.tolak', compact('user', 'page', 'permintaan', 'pelatih'));
    }

    public function tambahprogram($id)
    {
        $page = "Tambah Program";
        $user = User::findOrFail($id);
        $rumus = Kind::all();
        $permintaan = Permintaan::where('user_id', $user->id)->get();
        $pelatih = Pelatih::all()->where('user_id', Auth::user()->id);
        $program = Program::all()->where('user_id', $user->id)->count();
        return view('pelatih.program.create', compact('page', 'user', 'rumus', 'pelatih', 'permintaan', 'program'));
    }
}
