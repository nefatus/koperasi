@extends('master')
@section('content')
<div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Form Anggota</strong> 
                                    </div>
                                    <a href="/anggota"> </a>
                                    <div class="card-body card-block">
                                        <form action="{{route('anggota.store')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                                        {{ csrf_field ()}}
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Id Anggota</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="id_anggota" placeholder="id anggota" class="form-control required="required>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Id Petugas</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="Petugas_id_petugas" placeholder="id petugas" class="form-control required="required>
                                
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Nama</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="nama" placeholder="nama" class="form-control required="required>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="email-input" class=" form-control-label">TTL</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="date" id="email-input" name="ttl" placeholder="TTL" class="form-control required="required>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Telp/Hp</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="telp" placeholder="Telp/Hp" class="form-control required="required>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="textarea-input" class=" form-control-label">Alamat</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <textarea name="alamat" id="textarea-input" rows="9" placeholder="Alamat" class="form-control" required="required"></textarea>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                <label for="text-input" class=" form-control-label">Jenis Kelamin</label>
                                                </div>
                                                    <div class="col-12 col-md-9">
                                                    <input type="radio" id="text-input" name="jeniskelamin" value="Laki-laki"  required="required"> Laki-laki<br>
                                                    <input type="radio" id="text-input" name="jeniskelamin" value="perempuan"  required="required"> perempuan<br>
                                                </div>
                                                <div class="card-footer">
                                        <button type="submit" class="btn btn-primary btn-sm">
                                            <i class="fa fa-dot-circle-o"></i> Submit
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                                @endsection