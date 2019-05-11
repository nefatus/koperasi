@extends('master')
@section('content')
<div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Form Simpanan</strong> 
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="{{route('simpanan.store')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                                        {{ csrf_field()}}
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Id Anggota</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="Anggota_id_anggota" placeholder="id_anggota" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Nama</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="nama_anggota" placeholder="nama" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="email-input" class=" form-control-label">Tanggal</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="date" id="email-input" name="ttl" placeholder="tanggal" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="email-input" class=" form-control-label">Nama Simpanan</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text-input" id="email-input" name="nama_simpanan" placeholder="nama simpanan" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                <label for="email-input" class=" form-control-label">Besar Simpanan</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text-input" id="email-input" name="besar_simpanan" placeholder="besar simpanan" class="form-control">   
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                <label for="email-input" class=" form-control-label">Keterangan</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text-input" id="email-input" name="keterangan" placeholder="keterangan" class="form-control">   
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