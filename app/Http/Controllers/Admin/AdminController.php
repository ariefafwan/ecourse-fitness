<?php

namespace App\Http\Controllers\Admin;

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
}
