<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Tempat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TempatController extends Controller
{
    public function index()
    {
        $data = Tempat::paginate(12);
        return view('admin.tempat.index', compact('data'));
    }
    public function create()
    {
        return view('admin.tempat.create');
    }
    public function store(Request $request)
    {
        $input = $request->all();

        if($request->hasFile('gambar'))
        {
            $img = $request->file('gambar');
            $path = 'public/images/tempat';
            $ext = $img->getClientOriginalExtension();
            $name = 'tempat_'.random_int(00000,99999).'.'.$ext;
            $img->storeAs($path, $name);
            $input['gambar'] = $name;
        }
        Tempat::create($input);

        return redirect()->route('tempat.index')->with('success', 'Data tempat berhasil ditambahkan.');
    }

    public function detail($id)
    {
        $data = Tempat::findOrFail($id);
        $barang = Barang::where('id_tempat', $id)->get()->all();
        return view('admin.tempat.detail', compact('data', 'barang'));
    }

    public function update(Request $request, Tempat $tempat, $id)
    {
        $data = Tempat::findOrFail($id);
        $input = $request->all();

        if($request->hasFile('gambar'))
        {
            $img = $request->file('gambar');
            $path = 'public/images/tempat';
            $ext = $img->getClientOriginalExtension();
            $name = 'tempat_'.random_int(00000,99999).'.'.$ext;
            $img->storeAs($path, $name);

            Storage::delete('public/images/tempat/'.$data->gambar);

            $input['gambar'] = $name;
        }

        $data->update($input);
        return back()->with('success', 'Data berhasil diubah');
    }

    public function delete($id)
    {
        Tempat::findOrFail($id)->delete();
        return redirect()->route('tempat.index')->with('success', 'Data berhasil dihapus');
    }

}
