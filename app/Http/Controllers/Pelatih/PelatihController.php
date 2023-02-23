<?php

namespace App\Http\Controllers\Pelatih;

use App\Models\Permintaan;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PelatihController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $page = "Dasboard Pelatih";
        // $dt1 = DB::table('users')->get()->where('role_id', '2')->count();
        return view('pelatih.dashboard', compact('user', 'page'));
    }

    public function terima()
    {
        $user = Auth::user();
        $page = "Daftar Permintaan Program Latihan Terhadap Anda";
        $permintaan = Permintaan::all()->where('pelatih_id', Auth::user()->id)->where('status', 'Terima');
        if ($permintaan->isEmpty()) {
            return view('pelatih.permintaan.belum', compact('user', 'page', 'permintaan'));
        }

        return view('pelatih.permintaan.terima', compact('user', 'page', 'permintaan'));
    }

    public function tolak()
    {
        $user = Auth::user();
        $page = "Daftar Permintaan Program Latihan Terhadap Anda";
        $permintaan = Permintaan::all()->where('pelatih_id', Auth::user()->id)->where('status', 'Tolak');
        if ($permintaan->isEmpty()) {
            return view('pelatih.permintaan.belum', compact('user', 'page', 'permintaan'));
        }

        return view('pelatih.permintaan.tolak', compact('user', 'page', 'permintaan'));
    }
}
