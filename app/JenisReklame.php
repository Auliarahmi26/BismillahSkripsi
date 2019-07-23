<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JenisReklame extends Model
{
    protected $fillable = ['nama_reklame','harian','bulanan','tahunan'];

    public function perhitungankhusus()
    {
    	return $this->hasOne('App\PerhitunganKhusus');
    }

    public function perhitunganzona()
    {
    	return $this->hasOne('App\PerhitunganZona');
    }
}
