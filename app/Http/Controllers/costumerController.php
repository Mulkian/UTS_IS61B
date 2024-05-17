<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Costumer; //

class CostumerController extends Controller
{
    public function index()
    {
        return view('costumer.index', [
            'costumer' => Costumer::latest()->get() //
        ]);
    }

    public function add()
    {
        return view('costumer.insert');
    }

    public function insert(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'tanggal' => 'required',
            'no_hp' => 'required',
            'merk_mobil' => 'required',
            'plat_nomor' => 'required',
            'biaya' => 'required',

        ]);
        costumer::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'tanggal' => $request->tanggal,
            'no_hp' => $request->no_hp,
            'merk_mobil' => $request->merk_mobil,
            'plat_nomor' => $request->plat_nomor,
            'biaya' => $request->biaya,
        ]);

        return redirect()->route('costumer')->with('message','Data Berhasil Masuk!');
    }

    public function edit(string $id)
    {
        $jur = Jurusan::find($id);
        return view('costumer.edit',compact('jur'));

    }

    public function update(Request $request, string $id)
    {
        $customer = customer::find($id);
        $jur->kode = $request->kode;
        $jur->customer = $request->nama;
        $jur->save();

        return redirect('costumer');
    }

    public function destroy($id)
    {
        $costumer = Costumer::find($id);

    }
}
