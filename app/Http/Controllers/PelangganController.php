<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;
use illuminate\Support\Facades\DB;

class PelangganController extends Controller
{
    public function update(Request $request){
        $data = Pelanggan::where('id',$request->id)->first();
    }   
    public function toUpdate(){
        $pelanggan = Pelanggan::get();
        return view('Pelanggan.update',[
            'pelanggan' => $pelanggan,
            'title'=> "update"
        ]);
    }
    public function kirim(Request $r){
        $data = Pelanggan::where('id',$r->pilih)->first();
        return $r;
        // return view('Pelanggan.update',[
        //     'title'=> "update"
        // ])->with('pelanggan',$data);
    }
    public function create(){
        $pelanggan = Pelanggan::get();
        return view('Pelanggan.create',[
            "title"=>"CRUD"
        ])->with("pelanggan",$pelanggan);
    }
    public function insert(Request $request){
       
        $data = new Pelanggan;
        $data->nama = $request->nama;
        $data->tahun_masuk = $request->tahun_masuk;
        $data->tgl_lahir = $request->tgl_lahir;
        $data->alamat = $request->alamat;
        $data->notelp = $request->notelp;

        $data->save();
        return redirect()->route('loop')->with('success',"nice");
    }
}
