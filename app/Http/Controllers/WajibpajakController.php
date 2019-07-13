<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Wajibpajak;
use PDF;
use Illuminate\Validation\Rule;

class WajibpajakController extends Controller
{
    public function create()
    {
    	return view('wajibpajak.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([

        'nama_wajib_pajak' => 'required|max:25',
        'no_ktp' => 'required|min:16|max:16.5',
        'nama_perusahaan' => 'required|max:25',
        'alamat' => 'required',
        'no_hp' => 'required|max:13',

    ]);

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
        $this->validate(request(), [
        'nama_wajib_pajak' => 'required|max:25',
        'no_ktp' => 'required|min:16|max:16',
        'nama_perusahaan' => 'required|max:25',
        'alamat' => 'required',
        'no_hp' => 'required|max:13',
        ]);


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
