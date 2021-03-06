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
                                <a href="/simpanan"> </a>
                                    <div class="card-body card-block">
                                     
	                                @foreach($simpanan as $s)
                                        <form action="{{route('simpanan.update',$s->Anggota_id_anggota)}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                                            {{ csrf_field()}}
                                            {{method_field('PATCH')}}
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Nama</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="nama_anggota" value="{{$s->nama_anggota}}" placeholder="nama_anggota" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="email-input" class=" form-control-label">TTL</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="date" id="email-input" name="ttl" value="{{$s->ttl}}" placeholder="TTL" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Besar</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="besar_simpanan" value="{{$s->besar_simpanan}}" placeholder="besar_simpanas" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="textarea-input" class=" form-control-label">Simpanan</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                
                                                    <input type="radio" name="nama_simpanan" value="Simpanan pokok">
                                                            <?php if($s->nama_simpanan =='Simpanan pokok') : echo 'checked'; ?><?php endif ;?> Simpanan Pokok </br>
                                                    <input type="radio"  name="nama_simpanan" value="simpanan wajib">
                                                            <?php if($s->nama_simpanan =='simpanan wajib') : echo 'checked'; ?><?php endif ;?> Simpanan Wajib
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                <label for="text-input" class=" form-control-label">Keterangan</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="keterangan" value="{{$s->keterangan}}" placeholder="keterangan" class="form-control">
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