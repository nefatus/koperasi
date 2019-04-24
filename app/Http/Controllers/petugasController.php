<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class petugasController extends Controller
{    //CRUD PETUGAS
    public function index()
    {
        $petugas =DB::table('petugas')->get();

        return view('petugas',['petugas'=>$petugas]);
    }

    public function tambah()
    {
        return view('tambah');
    }

    public function store(Request $request)
    {
        DB::table('petugas')->insert([
            'id_petugas'=>$request->id_petugas,
            'nama'      =>$request->nama,
            'alamat'    =>$request->alamat,
            'telp'      =>$request->telp,
            'ttl'       =>$request->ttl,
            'username'  =>$request->username,
            'jeniskelamin'=>$request->jeniskelamin
        ]);
        return redirect('/petugas');
    }
    public function edit($id)
    {
        //menambah data pegawai berdasarkan id yang dipilih
        $petugas = DB::table('petugas')->where('id_petugas',$id)->get();
        return view('edit',['petugas'=>$petugas]);
    }
    // update data petugas
public function update(Request $request)
{
	// update data petugas
	DB::table('petugas')->where('id_petugas',$request->id)->update([
        'nama'      =>$request->nama,
        'alamat'    =>$request->alamat,
        'telp'      =>$request->telp,
        'ttl'       =>$request->ttl,
        'username'  =>$request->username,
        'jeniskelamin'=>$request->jeniskelamin
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/petugas');
}
}
