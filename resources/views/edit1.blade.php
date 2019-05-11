<!DOCTYPE html>
<html>
<body>

@extends('master')
@section('content')
<div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Edit Data</strong> 
                                    </div>
                                <a href="/anggota"> </a>
                                    <div class="card-body card-block">
                                     
	                                @foreach($anggota as $a)
                                        <form action="{{route('anggota.update',$a->id_anggota)}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                                            {{ csrf_field()}}
                                            {{method_field('PATCH')}}
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Nama</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="nama" value="{{$a->nama}}" placeholder="nama" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="email-input" class=" form-control-label">TTL</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="date" id="email-input" name="ttl" value="{{$a->ttl}}" placeholder="TTL" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Telp/Hp</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="telp" value="{{$a->telp}}" placeholder="Telp/Hp" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="textarea-input" class=" form-control-label">Alamat</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                <input type="text" id="text-input" name="alamat"  value="{{$a->alamat}}" placeholder="alamat" class="form-control"> 
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                <label for="text-input" class=" form-control-label">Jenis Kelamin</label>
                                                </div>
                                                    <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="jeniskelamin" value="{{$a->jeniskelamin}}"  placeholder="jenis kelamin" class="form-control"> 
                                                </div>
                                                <div class="card-footer">
                                        <button type="submit"  class="btn btn-primary btn-sm">
                                            <i class="fa fa-dot-circle-o"></i> Edit 
                                        </button>
                                       
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
    @endsection

		
 
</body>
</html>