<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JenisReklamesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jenis_reklames')->insert([
           	'nama_reklame' => 'Papan Nama Harian',
           	'tarif' => '1500',
        ]);
         DB::table('jenis_reklames')->insert([
            'nama_reklame' => 'Papan Nama Bulanan',
            'tarif' => '20000',
        ]);

         DB::table('jenis_reklames')->insert([
            'nama_reklame' => 'Papan Nama Tahunan',
            'tarif' => '200000',
        ]);

       DB::table('jenis_reklames')->insert([
            'nama_reklame' => 'Billboard Harian',
            'tarif' => '4000',
        ]);

        DB::table('jenis_reklames')->insert([
            'nama_reklame' => 'Billboard Bulanan',
            'tarif' => '30000',
        ]);

        DB::table('jenis_reklames')->insert([
            'nama_reklame' => 'Billboard Tahunan',
            'tarif' => '400000',
        ]);

         DB::table('jenis_reklames')->insert([
            'nama_reklame' => 'Mini Billboard Harian',
            'tarif' => '4000',
        ]);

         DB::table('jenis_reklames')->insert([
            'nama_reklame' => 'Mini Billboard Bulanan',
            'tarif' => '30000',
        ]);

         DB::table('jenis_reklames')->insert([
            'nama_reklame' => 'Mini Billboard Tahunan',
            'tarif' => '400000',
        ]);

         DB::table('jenis_reklames')->insert([
            'nama_reklame' => 'Neon Box Harian',
            'tarif' => '4000',
        ]);

         DB::table('jenis_reklames')->insert([
            'nama_reklame' => 'Neon Box Bulanan',
            'tarif' => '30000',
        ]);

         DB::table('jenis_reklames')->insert([
            'nama_reklame' => 'Neon Box Tahunan',
            'tarif' => '400000',
        ]);

         DB::table('jenis_reklames')->insert([
            'nama_reklame' => 'Baliho Harian',
            'tarif' => '4000',
        ]);

        DB::table('jenis_reklames')->insert([
            'nama_reklame' => 'Baliho Bulanan',
            'tarif' => '30000',
        ]);

        DB::table('jenis_reklames')->insert([
            'nama_reklame' => 'Baliho Tahunan',
            'tarif' => '400000',
        ]);

        DB::table('jenis_reklames')->insert([
            'nama_reklame' => 'Megatron Harian',
            'tarif' => '4000',
        ]);

        DB::table('jenis_reklames')->insert([
            'nama_reklame' => 'Megatron Bulanan',
            'tarif' => '30000',
        ]);

        DB::table('jenis_reklames')->insert([
            'nama_reklame' => 'Megatron Tahunan',
            'tarif' => '400000',
        ]);

        DB::table('jenis_reklames')->insert([
            'nama_reklame' => 'Videotron Harian',
            'tarif' => '4000',
        ]);

        DB::table('jenis_reklames')->insert([
            'nama_reklame' => 'Videotron Bulanan',
            'tarif' => '30000',
        ]);

        DB::table('jenis_reklames')->insert([
            'nama_reklame' => 'Videotron Tahunan',
            'tarif' => '400000',
        ]);

        DB::table('jenis_reklames')->insert([
            'nama_reklame' => 'LED Harian',
            'tarif' => '4000',
        ]);

        DB::table('jenis_reklames')->insert([
            'nama_reklame' => 'LED Bulanan',
            'tarif' => '30000',
        ]);

        DB::table('jenis_reklames')->insert([
            'nama_reklame' => 'LED Tahunan',
            'tarif' => '400000',
        ]);

        DB::table('jenis_reklames')->insert([
            'nama_reklame' => 'Umbul-umbul Harian',
            'tarif' => '2000',
        ]);

        DB::table('jenis_reklames')->insert([
            'nama_reklame' => 'Umbul-umbul Bulanan',
            'tarif' => '30000',
        ]);

        DB::table('jenis_reklames')->insert([
            'nama_reklame' => 'Umbul-umbul Tahunan',
            'tarif' => '300000',
        ]);

        DB::table('jenis_reklames')->insert([
            'nama_reklame' => 'Spanduk Harian',
            'tarif' => '2000',
        ]);

        DB::table('jenis_reklames')->insert([
            'nama_reklame' => 'Spanduk Bulanan',
            'tarif' => '30000',
        ]);

        DB::table('jenis_reklames')->insert([
            'nama_reklame' => 'Spanduk Tahunan',
            'tarif' => '300000',
        ]);

        DB::table('jenis_reklames')->insert([
            'nama_reklame' => 'Banner Harian',
            'tarif' => '2000',
        ]);

        DB::table('jenis_reklames')->insert([
            'nama_reklame' => 'Banner Bulanan',
            'tarif' => '30000',
        ]);

        DB::table('jenis_reklames')->insert([
            'nama_reklame' => 'Banner Tahunan',
            'tarif' => '300000',
        ]);
    }
}
