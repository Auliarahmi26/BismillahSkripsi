<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPembayaranToPerhitunganKhususes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('perhitungan_khususes', function (Blueprint $table) {
            $table->integer('pembayaran', 1)->after('tarif')->default('0');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('perhitungan_khususes', function (Blueprint $table) {
            $table->dropColumn('pembayaran');
        });
    }
}
