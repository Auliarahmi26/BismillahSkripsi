<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePerhitunganZonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perhitungan_zonas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('pendaftaran_id');
            $table->unsignedBigInteger('jenisreklame_id');
            $table->decimal('panjang', 2,1);
            $table->decimal('lebar', 2,1);
            $table->integer('sisi');
            $table->integer('buah');
            $table->integer('index_zona');
            $table->integer('index_bahan')->default('1');
            $table->integer('masa_pajak');
            $table->integer('tarif')->default('25');
            $table->tinyInteger('pembayaran')->default('0');
            $table->timestamps();
            $table->foreign('jenisreklame_id')->references('id')->on('jenis_reklames');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('perhitungan_zonas');
    }
}
