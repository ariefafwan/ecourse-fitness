<?php

namespace App\Http\Controllers\Admin;

use App\Models\Permintaan;
use App\Models\Program;
use App\Models\ProgramLatihan;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $page = "Dasboard Admin";
        $dt1 = DB::table('users')->get()->where('role_id', '2')->count();
        $dt2 = DB::table('users')->get()->where('role_id', '3')->count();
        return view('new-website.admin.dashboard', compact('user', 'page', 'dt1', 'dt2'));
    }

    public function programberjalan()
    {
        $page = "Daftar Program Berjalan";
        $program = ProgramLatihan::where('status', 'Berjalan')->paginate(10);
        return view('new-website.admin.program.daftar', compact('program', 'page'));
    }

    public function programselesai()
    {
        $page = "Daftar Program Selesai";
        $program = ProgramLatihan::where('status', 'Selesai')->paginate(10);
        return view('new-website.admin.program.daftar', compact('program', 'page'));
    }

    public function fokus($id)
    {
        $page = "Fokus Latihan Costumer";
        $permintaan = Permintaan::findOrFail($id);
        return view('new-website.admin.program.fokus', compact('permintaan', 'page'));
    }
}
