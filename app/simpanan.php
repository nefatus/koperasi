<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class simpanan extends Model

    {
        protected $table = 'simpanan';
    

    public function get_anggota(){
        return $this->belongsTo(anggota::class,'Anggota_id_anggota','id_anggota');
    }
}