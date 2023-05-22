<?php

namespace App\Http\Controllers\Admin;

use App\Models\Permintaan;
use App\Models\Program;
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
        return view('admin.dashboard', compact('user', 'page', 'dt1', 'dt2'));
    }

    public function programberjalan()
    {
        $page = "Daftar Program Berjalan";
        $program = Program::where('status', 'Berjalan')->paginate(10);
        return view('admin.program.daftar', compact('program', 'page'));
    }

    public function programselesai()
    {
        $page = "Daftar Program Selesai";
        $program = Program::where('status', 'Selesai')->paginate(10);
        return view('admin.program.daftar', compact('program', 'page'));
    }

    public function fokus($id)
    {
        $page = "Fokus Latihan Costumer";
        $permintaan = Permintaan::findOrFail($id);
        return view('admin.program.fokus', compact('permintaan', 'page'));
    }
}
