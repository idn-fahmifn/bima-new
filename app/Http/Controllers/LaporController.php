<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Laporan;
use App\Models\Tempat;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LaporController extends Controller
{
    public function index()
    {
        $data = Laporan::where('id_user', Auth::user()->id)->get()->all();
        return view('user.report.index', compact('data'));
    }

    public function area()
    {
        $data = Tempat::all();
        return view('user.area', compact('data'));
    }

    public function create($id)
    {
        $data = Tempat::findOrFail($id);
        $barang = Barang::where('id_tempat', $id)->get()->all();
        return view('user.fasilitas', compact('data','barang'));
    }

    public function report($id)
    {
        $data = Barang::findOrFail($id);
        return view('user.report.create', compact('data'));
    }
    

    public function store(Request $request, $id)
    {
        $input = $request->all();
        $barang = Barang::find($id);
        $input['id_user'] = Auth::user()->id;
        $input['id_barang'] = $barang->id;
        $input['tanggal_pengaduan'] = Carbon::now()->format('Y-m-d H:i:s');

        Laporan::create($input);

        $barang->status = 'report';
        $barang->save();     
        return redirect()->route('report.index')->with('success','Laporan anda berhasil dibuat');
    }

}
