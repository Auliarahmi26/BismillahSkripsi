<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pendaftaran;
use App\PerhitunganKhusus;
use Illuminate\Support\Facades\DB;

class PembayaranKhususController extends Controller
{
   public function create()
	{
    		// mengambil data dari table pegawai
		//$perhitungankhususes = DB::table('perhitungan_khususes')->paginate(10);
		$perhitungankhususes = PerhitunganKhusus::all();
		//dd($perhitungankhususes);
    		// mengirim data pegawai ke view index
		return view('pembayarankhusus.create', compact('perhitungankhususes'));

	}

	public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table pegawai sesuai pencarian data
		$perhitungankhususes = DB::table('perhitungan_khususes')
		->where('panjang','like',"%".$cari."%")
		->paginate();

    		// mengirim data pegawai ke view index
		return view('pembayarankhusus.create', compact('perhitungankhususes'));

	}


	public function index()
	{
		$perhitungankhususes = PerhitunganKhusus::where('pembayaran',1)->get();
		return view('pembayarankhusus.index', compact('perhitungankhususes'));
	}


		public function filter()
	{
		return view('pembayarankhusus.filter');
	}

	 public function filter_cetak(Request $request){
   		$PerhitunganKhusus = PerhitunganKhusus::whereBetween('created_at', [$request->tgl_awal, $request->tgl_akhir])->get();
        $pdf = PDF::loadView('perhitungankhusus.pdfsatuan', compact('perhitungankhusus'));
        $pdf->setPaper('A4', 'landscape');
        return $pdf->stream();
    }
}
