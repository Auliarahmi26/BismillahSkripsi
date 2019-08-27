<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pendaftaran;
use PDF;
use Illuminate\Validation\Rule;
use DB;
use App\Wajibpajak;

class PendaftaranController extends Controller
{
    public function create()
    {
        $wajibpajaks = Wajibpajak::all();
    	return view('pendaftaran.create', compact('wajibpajaks'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([

        'jenis_pendaftaran' => 'required',
        'tanggal_pendaftaran' => 'required',
        'wajibpajak_id' => 'required',
        'nama_perusahaan' => 'required',
        'alamat' => 'required',
        'lokasi_pemasangan' => 'required',
        'teks_reklame' => 'required',
        'tmt' => 'required',

    ]);
    	Pendaftaran::create([
    		'jenis_pendaftaran' =>request('jenis_pendaftaran'),
    		'tanggal_pendaftaran' =>request('tanggal_pendaftaran'),
    		'wajibpajak_id' => request('wajibpajak_id'), 
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
        $wajibpajaks = Wajibpajak::all();
        return view('pendaftaran.edit', compact('pendaftaran', 'wajibpajaks'));
    }

    public function update(Pendaftaran $pendaftaran)
    {
        $this->validate(request(), [
        'jenis_pendaftaran' => 'required',
        'tanggal_pendaftaran' => 'required',
        'wajibpajak_id' => 'required',
        'nama_perusahaan' => 'required',
        'alamat' => 'required',
        'lokasi_pemasangan' => 'required',
        'teks_reklame' => 'required',
        'tmt' => 'required',
        ]);


    	$pendaftaran->update([
            'nama_wajib_pajak' => request('nomor_surat'),
            'jenis_pendaftaran' => request('jenis_pendaftaran'),
            'tanggal_pendaftaran' => request('tanggal_pendaftaran'),
            'wajibpajak_id' => request('wajibpajak_id'),
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
        $pdf->setPaper('a4', 'landscape');
        return $pdf->stream();
    }

}
