<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pendaftaran;
use PDF;

class PendaftaranController extends Controller
{
    public function create()
    {
    	return view('pendaftaran.create');
    }

    public function store()
    {
    	Pendaftaran::create([
    		'jenis_pendaftaran' =>request('jenis_pendaftaran'),
    		'nomor_pendaftaran' =>request('nomor_pendaftaran'),
    		'tanggal_pendaftaran' =>request('tanggal_pendaftaran'),
    		'nama_wajib_pajak' => request('nama_wajib_pajak'), 
    		'nama_perusahaan' => request('nama_perusahaan'),
    		'alamat' => request('alamat'),
    		'lokasi_pemasangan' => request('lokasi_pemasangan'),
    		'teks_reklame' => request('teks_reklame'),
    		'tmt' => request('tmt'),
    	]);

    	return redirect()->route('pendaftaran.index')->with('success', 'Data berhasil ditambah');
    }

    public function index()
    {
    	$pendaftarans = Pendaftaran::all();

    	return view('pendaftaran.index', compact('pendaftarans'));
    }

     public function edit(Pendaftaran $pendaftaran)
    {

        return view('pendaftaran.edit', compact('pendaftaran'));
    }

    public function update(Pendaftaran $pendaftaran)
    {
    	$pendaftaran->update([
            'nama_wajib_pajak' => request('nomor_surat'),
            'jenis_pendaftaran' => request('jenis_pendaftaran'),
            'nomor_pendaftaran' => request('nomor_pendaftaran'),
            'tanggal_pendaftaran' => request('tanggal_pendaftaran'),
            'nama_wajib_pajak' => request('nama_wajib_pajak'),
            'nama_perusahaan' => request('nama_perusahaan'),
            'alamat' => request('alamat'),
            'lokasi_pemasangan' => request('lokasi_pemasangan'),
            'teks_reklame' => request('teks_reklame'),
            'tmt' => request('tmt'),

        ]);
        return redirect()->route('pendaftaran.index')->with('success', 'Data berhasil diubah');
    }


//fungsi delete
     public function destroy(Pendaftaran $pendaftaran)
    {
        $pendaftaran->delete();

        return redirect()->route('pendaftaran.index')->with('success', 'Data berhasil dihapus');
    }

    public function pdf(Pendaftaran $pendaftaran)
    {
        $pdf = PDF::loadView('pendaftaran.tandaterimapendaftaran', compact('pendaftaran'));
        $pdf->setPaper('a5', 'landscape');
        return $pdf->download('pendaftaran.pdf', compact('pendaftaran'));
    }
}
