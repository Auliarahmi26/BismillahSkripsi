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
           	'nama_reklame' => 'Papan Nama',
           	'harian' => '1500',
           	'bulanan' => '20000',
           	'tahunan' => '200000',
        ]);

        DB::table('jenis_reklames')->insert([
           	'nama_reklame' => 'Billboard',
           	'harian' => '4000',
           	'bulanan' => '30000',
           	'tahunan' => '400000',
        ]);

        DB::table('jenis_reklames')->insert([
           	'nama_reklame' => 'Neon Box',
           	'harian' => '4000',
           	'bulanan' => '30000',
           	'tahunan' => '400000',
        ]);

        DB::table('jenis_reklames')->insert([
           	'nama_reklame' => 'Baliho',
           	'harian' => '4000',
           	'bulanan' => '30000',
           	'tahunan' => '400000',
        ]);

        DB::table('jenis_reklames')->insert([
           	'nama_reklame' => 'Mini Billboard',
           	'harian' => '4000',
           	'bulanan' => '30000',
           	'tahunan' => '400000',
        ]);

        DB::table('jenis_reklames')->insert([
           	'nama_reklame' => 'Megatron',
           	'harian' => '4000',
           	'bulanan' => '30000',
           	'tahunan' => '400000',
        ]);

        DB::table('jenis_reklames')->insert([
           	'nama_reklame' => 'Videotron',
           	'harian' => '4000',
           	'bulanan' => '30000',
           	'tahunan' => '400000',
        ]);

        DB::table('jenis_reklames')->insert([
           	'nama_reklame' => 'LED (Large Electronic Display)',
           	'harian' => '4000',
           	'bulanan' => '30000',
           	'tahunan' => '400000',
        ]);

        DB::table('jenis_reklames')->insert([
           	'nama_reklame' => 'Umbul-umbul',
           	'harian' => '2000',
           	'bulanan' => '30000',
           	'tahunan' => '300000',
        ]);
        
        DB::table('jenis_reklames')->insert([
           	'nama_reklame' => 'Spanduk',
           	'harian' => '2000',
           	'bulanan' => '30000',
           	'tahunan' => '300000',
        ]);

        DB::table('jenis_reklames')->insert([
           	'nama_reklame' => 'Reklame Berjalan',
           	'harian' => '2000',
           	'bulanan' => '24000',
           	'tahunan' => '200000',
        ]);

        DB::table('jenis_reklames')->insert([
           	'nama_reklame' => 'Reklame Film atau Slide',
           	'harian' => '1400',
           	'bulanan' => '18800',
           	'tahunan' => '160000',
        ]);

        DB::table('jenis_reklames')->insert([
           	'nama_reklame' => 'Reklame Apung',
           	'harian' => '2000',
           	'bulanan' => '24000',
           	'tahunan' => '200000',
        ]);

    }
}
