<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use App\Models\Respon;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ResponController extends Controller
{
    public function index()
    {
        $data = Laporan::all();
        return view('admin.respon.index', compact('data'));
    }

    public function respon($id)
    {
        $data = Laporan::findOrFail($id);
        return view('admin.respon.create', compact('data'));
    }

    public function store(Request $request, $id)
    {
        $input = $request->all();
        $laporan = Laporan::findOrFail($id);
        $input['id_laporan'] = $laporan->id;
        $input['tanggal_respon'] = Carbon::now()->format('Y-m-d H:i:s');
        Respon::create($input);
        return back()->with('success', 'Respon berhasil ditambahkan');
    }


}
