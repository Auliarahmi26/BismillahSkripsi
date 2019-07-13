<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    protected $fillable = ['jenis_pendaftaran','nomor_pendaftaran','tanggal_pendaftaran','wajibpajak_id','nama_perusahaan','alamat','lokasi_pemasangan','teks_reklame','tmt'];

    public function perhitungankhusus()
    {
    	return $this->hasOne('App\PerhitunganKhusus');
    }

    public function wajibpajak()
    {
    	return $this->belongsTo('App\Wajibpajak');
    }


}