<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\anggota;
use App\petugas;

class AnggotaController extends Controller
    {    //CRUD ANGGOTA
        public function index()
        {
            $anggota = anggota::with(['get_petugas'])->get();
                return view('anggota',compact('anggota'));
        }
    
        public function tambah()
        {
            return view('form2');
        }
    
        public function store(Request $request)
        {
            DB::table('anggota')->insert([
                'id_anggota'=>$request->id_anggota,
                'nama'      =>$request->nama,
                'alamat'    =>$request->alamat,
                'telp'      =>$request->telp,
                'ttl'       =>$request->ttl,
                'Jeniskelamin'=>$request->jeniskelamin,
                'Petugas_id_petugas'=>$request->Petugas_id_petugas
            ]);
            return redirect('/anggota');
        }
        public function edit($id)
        {
            //menambah data anggota berdasarkan id yang dipilih
            $anggota = DB::table('anggota')->where('id_anggota',$id)->get();
            return view('edit1',['anggota'=>$anggota]);
        }
        // update data anggota
    public function update(Request $request,$id)
    {
        // update data anggota
        DB::table('anggota')->where('id_anggota',$id)->update([
            'nama'      =>$request->nama,
            'alamat'    =>$request->alamat,
            'telp'      =>$request->telp,
            'ttl'       =>$request->ttl,
            'jeniskelamin'=>$request->jeniskelamin,
           
        ]);
        // alihkan halaman ke halaman anggota
        return redirect('/anggota');
    }
    public function destroy($id)
    {
        DB::table('anggota')->where('id_anggota',$id)->delete();
        return redirect('/anggota');
    }
}
