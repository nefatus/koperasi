<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class petugas extends Model
{
    public function anggotas(){
        return $this->belongsTo('App\anggota');
    }
}
