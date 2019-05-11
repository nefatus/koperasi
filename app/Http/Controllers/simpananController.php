<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\anggota;
use App\simpanan;


class simpananController extends Controller
{    //CRUD simpanan
    public function index()
    {
        $simpanan = simpanan::with(['get_anggota'])->get();
            return view('simpanan',compact('simpanan'));
    }

    public function tambah()
    {
        return view('form3');
    }

    public function store(Request $request)
    {
        DB::table('simpanan')->insert([
            'Anggota_id_anggota'=>$request->Anggota_id_anggota,
            'nama_anggota'      =>$request->nama_anggota,
            'ttl'       =>$request->ttl,
            'nama_simpanan'=>$request->nama_simpanan,
            'besar_simpanan'=>$request->besar_simpanan,
            'keterangan'=>$request->keterangan
           
        ]);
        return redirect('/simpanan');
    }
    public function edit($id)
    {
        //menambah data anggota berdasarkan id yang dipilih
        $simpanan = DB::table('simpanan')->where('Anggota_id_anggota',$id)->get();
        return view('edit2',['simpanan'=>$simpanan]);
    }
    // update data anggota
public function update(Request $request,$id)
{
    // update data anggota
    DB::table('simpanan')->where('Anggota_id_anggota',$id)->update([
            'nama_anggota'      =>$request->nama_anggota,
            'ttl'               =>$request->ttl,
            'nama_simpanan'     =>$request->nama_simpanan,
            'besar_simpanan'    =>$request->besar_simpanan,
            'keterangan'        =>$request->keterangan
           
       
    ]);
    // alihkan halaman ke halaman anggota
    return redirect('/simpanan');
}
public function destroy($id)
{
    DB::table('simpanan')->where('Anggota_id_anggota',$id)->delete();
    return redirect('/simpanan');
}
}

