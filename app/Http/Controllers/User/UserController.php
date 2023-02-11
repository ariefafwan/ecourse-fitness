<?php

namespace App\Http\Controllers\User;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $page = "Dasboard User";
        // $dt1 = DB::table('users')->get()->where('role_id', '2')->count();
        return view('user.dashboard', compact('user', 'page'));
    }
}
