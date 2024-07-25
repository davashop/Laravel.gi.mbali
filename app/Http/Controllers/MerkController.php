<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Merk;

class MerkController extends Controller
{
    public function index(){
        $merks = merk::all();

        $data = [
            "merks" => $merks
        ];

        return view("merk.index", $data);
    }

    public function destroy($id){
        $merk = merk::where("id", $id)->first();
        $merk->delete();

        return redirect("/merk");
    }

    public function create(){
        return view("merk.tambah");
    }

    public function store(request $request){
        $nama = $request->nama;
        $keterangan = $request->keterangan;

        // merk::create([
        //     "nama" => $nama,
        //     "keterangan" => $keterangan,
        // ]);

        $datamerk = new merk();
        $datamerk->nama = $nama;
        $datamerk->keterangan = $keterangan;
        $datamerk->save();

        return redirect("/merk");
    }

    public function edit($id){
        $merk = merk::where("id", $id)->first();

        $data = [
            "merk" => $merk
        ];

        return view("merk.edit", $data);
    }

    public function update(request $request, $id){
        $nama = $request->nama;
        $keterangan = $request->keterangan;

        merk::where("id", $id)->update([
            "nama" => $nama,
            "keterangan" => $keterangan,
        ]);

        // $editmerk = merk::where("id", $id)->first();
        // $editmerk->nama = $nama;
        // $editmerk->keterangan = $keterangan;
        // $editmerk->save();

        return redirect("/merk");
    }
}

