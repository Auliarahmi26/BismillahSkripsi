<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Wajibpajak;
use PDF;

class WajibpajakController extends Controller
{
    public function create()
    {
    	return view('wajibpajak.create');
    }

    public function store()
    {
    	Wajibpajak::create([
    		'nama_wajib_pajak' => request('nama_wajib_pajak'),
    		'no_ktp' => request('no_ktp'),
    		'nama_perusahaan' => request('nama_perusahaan'),
    		'alamat' => request('alamat'),
    		'no_hp' => request('no_hp'),
    	]);

    	return redirect()->route('wajibpajak.index')->with('success', 'Data berhasil ditambah');
    }

    public function index()
    {
    	$wajibpajaks = Wajibpajak::all();

    	return view('wajibpajak.index', compact('wajibpajaks'));
    }

    public function edit(Wajibpajak $wajibpajak)
    {

        return view('wajibpajak.edit', compact('wajibpajak'));
    }

    public function update(Wajibpajak $wajibpajak)
    {
    	$wajibpajak->update([
            'nama_wajib_pajak' => request('nama_wajib_pajak'),
    		'no_ktp' => request('no_ktp'),
    		'nama_perusahaan' => request('nama_perusahaan'),
    		'alamat' => request('alamat'),
    		'no_hp' => request('no_hp'),
        ]);
        return redirect()->route('wajibpajak.index')->with('success', 'Data berhasil diubah');
    }

    public function destroy(WajibPajak $wajibpajak)
    {
        $wajibpajak->delete();

        return redirect()->route('wajibpajak.index')->with('success', 'Data berhasil dihapus');
    }

    public function pdf()
    {
        $wajibpajaks = WajibPajak::all();
        $pdf = PDF::loadView('wajibpajak.datawajibpajak', compact('wajibpajaks'));
        $pdf->setPaper('a4', 'landscape');
        return $pdf->download('wajibpajak.pdf', compact('wajibpajaks'));
    }

}
