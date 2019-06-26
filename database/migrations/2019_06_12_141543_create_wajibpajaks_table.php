<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWajibpajaksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wajibpajaks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_wajib_pajak',50);
            $table->string('no_ktp',20);
            $table->string('nama_perusahaan',30);
            $table->string('alamat',150);
            $table->string('no_hp',15); 
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
        Schema::dropIfExists('wajibpajaks');
    }
}
