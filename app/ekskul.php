<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ekskul extends Model
{
    protected $table = 'ekskul';
    protected $fillable = ['nama','jadwal','ket'];
}
    public function prestasi(){
        return $this->belongTo('App\prestasi','ekskul_id');
    }

