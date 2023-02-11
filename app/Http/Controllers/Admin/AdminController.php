<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $page = "Dasboard Admin";
        // $dt1 = DB::table('users')->get()->where('role_id', '2')->count();
        return view('admin.dashboard', compact('user', 'page'));
    }
}
