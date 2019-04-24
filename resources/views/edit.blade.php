<!DOCTYPE html>
<html>
<body>
 
	@foreach
@extends('master')
@section('content')
<div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Form Petugas</strong> 
                                    </div>
                                <a href="/petugas"> </a>
                                    <div class="card-body card-block">
                                        <form action="/petugas/update" method="post" enctype="multipart/form-data" class="form-horizontal">
                                            {{ csrf_field()}}
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Id Petugas</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="id_petugas" placeholder="id petugas" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Nama</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="nama" placeholder="nama" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="email-input" class=" form-control-label">Username</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="email" id="email-input" name="username" placeholder="usernmae" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">TTL</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="date" id="text-input" name="ttl" placeholder="TTL" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Telp/Hp</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="telp" placeholder="Telp/Hp" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="textarea-input" class=" form-control-label">Alamat</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <textarea name="alamat" id="textarea-input" rows="9" placeholder="Content..." class="form-control"></textarea>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                <label for="text-input" class=" form-control-label">Jenis Kelamin</label>
                                                </div>
                                                    <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="jeniskelamin" placeholder="jenis kelamin" class="form-control"> 
                                                </div>
                                                <div class="card-footer">
                                        <button type="submit"  class="btn btn-primary btn-sm">
                                            <i class="fa fa-dot-circle-o"></i> Edit 
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
    @endsection
	@endforeach
		
 
</body>
</html>