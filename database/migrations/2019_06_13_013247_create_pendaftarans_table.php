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
            $table->string('nomor_pendaftaran')->unique();
            $table->date('tanggal_pendaftaran');
            $table->unsignedBigInteger('wajibpajak_id');
            $table->string('nama_perusahaan');
            $table->string('alamat');
            $table->string('lokasi_pemasangan');
            $table->string('teks_reklame');
            $table->string('tmt');
            $table->timestamps();
            $table->foreign('wajibpajak_id')->references('id')->on('wajibpajaks');

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
