<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class anggota extends Model
    {
        protected $table = 'anggota';
    

    public function get_petugas(){
        return $this->belongsTo(petugas::class,'Anggota_id_petugas','id_petugas');
    }
}
