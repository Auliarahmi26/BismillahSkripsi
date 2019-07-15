<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJenisReklamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jenis_reklames', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_reklame',100)->unique();
            $table->integer('harian');
            $table->integer('bulanan');
            $table->integer('tahunan');
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
        Schema::dropIfExists('jenis_reklames');
    }
}
