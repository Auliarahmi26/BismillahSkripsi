<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\JenisReklame;

class JenisreklameController extends Controller
{
    public function create()
    {
    	return view('jenisreklame.create');
    }

    public function store(Request $request)
    {
       
    	JenisReklame::create([
    		'nama_reklame' => request('nama_reklame'),
    		'tarif' => request('tarif'),
    	]);

    	return redirect()->route('jenisreklame.index')->with('success', 'Data berhasil ditambah');
    }

    public function index()
    {
    	$jenisreklames = JenisReklame::all();

    	return view('jenisreklame.index', compact('jenisreklames'));
    }

     public function edit(JenisReklame $jenisreklame)
    {

        return view('jenisreklame.edit', compact('jenisreklame'));
    }

    public function update(JenisReklame $jenisreklame)
    {
    	$jenisreklame->update([
            'nama_reklame' => request('nama_reklame'),
    		'tarif' => request('tarif'),

    	]);
        return redirect()->route('jenisreklame.index')->with('success', 'Data berhasil diubah');
    }

    public function destroy(JenisReklame $jenisreklame)
    {
        $jenisreklame->delete();

        return redirect()->route('jenisreklame.index')->with('success', 'Data berhasil dihapus');
    }
}
