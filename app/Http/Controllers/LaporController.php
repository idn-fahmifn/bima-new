<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LaporController extends Controller
{
    public function index()
    {
        $data = Laporan::where('id_user', Auth::user()->id)->get()->all();
        return view('user.report.index', compact('data'));
    }
}
