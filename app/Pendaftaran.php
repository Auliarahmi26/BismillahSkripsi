<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    protected $fillable = ['jenis_pendaftaran','nomor_pendaftaran','tanggal_pendaftaran','nama_wajib_pajak','nama_perusahaan','alamat','lokasi_pemasangan','teks_reklame','tmt'];
}
