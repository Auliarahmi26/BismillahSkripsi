<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePendaftaransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendaftarans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('jenis_pendaftaran');
            $table->string('nomor_pendaftaran');
            $table->date('tanggal_pendaftaran');
            $table->string('nama_wajib_pajak');
            $table->string('nama_perusahaan');
            $table->string('alamat');
            $table->string('lokasi_pemasangan');
            $table->string('teks_reklame');
            $table->string('tmt');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pendaftarans');
    }
}
