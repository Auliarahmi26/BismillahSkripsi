<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PembayaranKhusus extends Model
{
     protected $guarded = [''];

    public function jenisreklame()
    {
    	return $this->belongsTo('App\JenisReklame');
    }

    public function pendaftaran()
    {
    	return $this->belongsTo('App\Pendaftaran');
    }
}
