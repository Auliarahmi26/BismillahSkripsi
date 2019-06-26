<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wajibpajak extends Model
{
 	protected $fillable = ['nama_wajib_pajak','no_ktp','nama_perusahaan','alamat','no_hp'];   
}
