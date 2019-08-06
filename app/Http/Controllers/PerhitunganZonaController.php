<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PerhitunganZona;
use App\JenisReklame;
use App\Pendaftaran;
use Carbon\Carbon;
use PDF;

class PerhitunganZonaController extends Controller
{
     public function create()
    {
        $jenisreklames = JenisReklame::all();
        $pendaftarans = Pendaftaran::all();
    	return view('perhitunganzona.create', compact('jenisreklames','pendaftarans'));
    }

    public function store()
    {
    	PerhitunganZona::create([
    		'pendaftaran_id' =>request('pendaftaran_id'),
    		'jenisreklame_id' =>request('jenisreklame_id'),
    		'panjang' =>request('panjang'),
    		'lebar' => request('lebar'), 
    		'sisi' => request('sisi'),
    		'buah' => request('buah'),
    		'index_zona' => request('index_zona'),
    		'index_bahan' => request('index_bahan'),
    		'masa_pajak' => request('masa_pajak'),
    		'tarif' => request('tarif'),
    	]);

    	return redirect()->route('perhitunganzona.index')->with('success', 'Data berhasil ditambah');
    }

    public function index()
    {
    	$perhitunganzonas = PerhitunganZona::all();

    	return view('perhitunganzona.index', compact('perhitunganzonas'));
    }

     public function edit(Perhitunganzona $perhitunganzona)
    {
        $now = Carbon::now();

        return view('perhitunganzona.edit', compact('perhitunganzona', 'now'));
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
    		'index_zona' => request('index_zona'),
    		'index_bahan' => request('index_bahan'),
    		'masa_pajak' => request('masa_pajak'),
    		'tarif_25%' => request('tarif_25%'),

        ]);
        return redirect()->route('perhitungan.index')->with('success', 'Data berhasil diubah');
    }


    public function bayar($id){
        $perhitunganzona= PerhitunganZona::findOrFail($id);
        $perhitunganzona->pembayaran = 1;
        $perhitunganzona->update(); 
        return redirect()->route('pembayaranzona.index')->with('success', 'Pembayaran Berhasil');
    }


//fungsi delete
     public function destroy(PerhitunganZona $perhitunganzona)
    {
        $perhitunganzona->delete();

        return redirect()->route('perhitunganzona.index')->with('success', 'Data berhasil dihapus');
    }

    public function pdfsatuan(PerhitunganZona $perhitunganzona)
    {
        $pdf = PDF::loadView('perhitunganzona.pdfsatuan', compact('pendaftaran', 'perhitunganzona'));
        $pdf->setPaper('A4', 'landscape');
        return $pdf->stream();
    }

}
