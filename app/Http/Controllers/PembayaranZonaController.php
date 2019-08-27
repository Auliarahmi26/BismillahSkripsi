<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pendaftaran;
use App\PerhitunganZona;
use Illuminate\Support\Facades\DB;
use PDF;
use App\PembayaranZona;

class PembayaranZonaController extends Controller
{
	public function create()
	{
    		// mengambil data dari table pegawai
		//$perhitungankhususes = DB::table('perhitungan_khususes')->paginate(10);
		$pembayaranzonas = PembayaranZona::all();
		//dd($perhitungankhususes);
    		// mengirim data pegawai ke view index
		return view('pembayaranzona.create', compact('perhitunganzonas'));
	}

	public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table pegawai sesuai pencarian data
		$pembayaranzona = DB::table('perhitungan_zonas')
		->where('panjang','like',"%".$cari."%")
		->paginate();

    		// mengirim data pegawai ke view index
		return view('pembayaranzona.create', compact('pembayaranzona'));

	}


	public function index()
	{
		$pembayaranzonas = PerhitunganZona::where('pembayaran',1)->get();
		return view('pembayaranzona.index', compact('pembayaranzonas'));
	}


	public function filter()
	{
		return view('pembayaranzona.filter');
	}

	 public function filter_cetak(Request $request){
   		$perhitunganzonas  = PerhitunganZona::whereBetween('created_at', [$request->tgl_awal, $request->tgl_akhir])->get();
        $pdf = PDF::loadView('pembayaranzona.pdffilter', compact('perhitunganzonas'));
        $pdf->setPaper('F4', 'landscape');
        return $pdf->stream();
    }

    public function pdf($id){
        $pembayaranzona= PerhitunganZona::findOrFail($id);
        $pdf = PDF::loadView('pembayaranzona.pdfsatuan', compact('pembayaranzona'));
        $pdf->setPaper('A4', 'portrait');
        return $pdf->stream();
    }
}