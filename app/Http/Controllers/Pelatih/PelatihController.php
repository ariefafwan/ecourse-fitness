<?php

namespace App\Http\Controllers\Pelatih;

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
}
