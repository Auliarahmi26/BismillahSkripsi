<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PerhitunganKhusus;
use App\JenisReklame;
use App\Pendaftaran;
use Carbon\Carbon;

class PerhitunganKhususController extends Controller
{
     public function create()
    {
        $jenisreklames = JenisReklame::all();
        $pendaftarans = Pendaftaran::all();
    	return view('perhitungankhusus.create', compact('jenisreklames','pendaftarans'));
    }

    public function store()
    {
    	PerhitunganKhusus::create([
    		'pendaftaran_id' =>request('pendaftaran_id'),
    		'jenisreklame_id' =>request('jenisreklame_id'),
    		'panjang' =>request('panjang'),
    		'lebar' => request('lebar'), 
    		'sisi' => request('sisi'),
    		'buah' => request('buah'),
    		'index_zona_khusus' => request('index_zona_khusus'),
    		'index_bahan' => request('index_bahan'),
    		'biaya' => request('biaya'),
    		'tarif' => request('tarif'),
    	]);

    	return redirect()->route('perhitungankhusus.index')->with('success', 'Data berhasil ditambah');
    }

    public function index()
    {
    	$perhitungankhususes = PerhitunganKhusus::all();

    	return view('perhitungankhusus.index', compact('perhitungankhususes'));
    }

     public function edit(Perhitungankhusus $perhitungankhusus)
    {
        $now = Carbon::now();

        return view('perhitungankhusus.edit', compact('perhitungankhusus', 'now'));
    }

    public function update(perhitungankhusus $perhitungankhusus)
    {
    	$perhitungankhusus->update([
            'nomor_pendaftaran' =>request('nomor_pendaftaran'),
    		'jenisreklame_id' =>request('jenis_reklame'),
    		'panjang' =>request('panjang'),
    		'lebar' => request('lebar'), 
    		'sisi' => request('sisi'),
    		'buah' => request('buah'),
    		'index_zona_khusus' => request('index_zona_khusus'),
    		'index_bahan' => request('index_bahan'),
    		'biaya' => request('biaya'),
    		'tarif_25%' => request('tarif_25%'),

        ]);
        return redirect()->route('perhitungankhusus.index')->with('success', 'Data berhasil diubah');
    }


//fungsi delete
     public function destroy(PerhitunganKhusus $perhitungankhusus)
    {
        $pendaftaran->delete();

        return redirect()->route('perhitungankhusus.index')->with('success', 'Data berhasil dihapus');
    }

    public function pdf(PerhitunganKhusus $perhitungankhusus)
    {
        $pdf = PDF::loadView('pendaftaran.tandaterimapendaftaran', compact('pendaftaran'));
        $pdf->setPaper('a4', 'landscape');
        return $pdf->download('perhitungankhusus.pdf', compact('perhitungankhusus'));
    }
}
