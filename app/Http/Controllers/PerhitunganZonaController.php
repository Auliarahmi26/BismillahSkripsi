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
        $kali=($perhitunganzona['masa_pajak']*$perhitunganzona->jenisreklame['tarif']);

        $total = 0;
        $total += ($perhitunganzona['panjang']*$perhitunganzona['lebar']*$perhitunganzona['sisi']*$perhitunganzona['buah']*$perhitunganzona['index_zona_zona']*$perhitunganzona['index_bahan']*$kali*($perhitunganzona['tarif']/100));

        $masa = $perhitunganzona->created_at;
        $TanggalSekarang = Carbon::now();
        $selisih = $masa->diffInDays($TanggalSekarang);
        if($selisih >= 30){
            $denda = $total*2/100;
        }else{
            $denda = 0;
        }
        $perhitunganzona->pembayaran = 1;
        $perhitunganzona->denda = $denda;
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
        $pdf->setPaper('A4', 'portrait');
        return $pdf->stream();
    }

}
