<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Tempat;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function create($id)
    {
        $data = Tempat::findOrFail($id);
        return view('admin.barang.create', compact('data'));
    }

    public function store(Request $request, $id)
    {
        $input = $request->all();

        if($request->hasFile('gambar'))
        {
            $img = $request->file('gambar');
            $path = 'public/images/barang';
            $ext = $img->getClientOriginalExtension();
            $name = 'barang_'.random_int(00000,99999).'.'.$ext;
            $img->storeAs($path, $name);
            $input['gambar'] = $name;
        }
        $tempat = Tempat::find($id);
        $input['id_tempat'] = $tempat->id;
        $input['kode_barang'] = 'barang_idn_'.Carbon::now()->format('ymdhis');

        Barang::create($input);

        return redirect()->route('tempat.detail', $tempat->id)->with('success', 'Data tempat berhasil ditambahkan.');
    }

}
