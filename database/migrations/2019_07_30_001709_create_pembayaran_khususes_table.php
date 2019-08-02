<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePembayaranKhususesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembayaran_khususes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('perhitungankhusus_id');
            $table->string('status', 20);
            $table->timestamps();
            $table->foreign('perhitungankhusus_id')->references('id')->on('perhitungan_khususes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pembayaran_khususes');
    }
}
