<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pendaftaran;
use App\PerhitunganKhusus;
use Illuminate\Support\Facades\DB;
use PDF;
use App\PembayaranKhusus;

class PembayaranKhususController extends Controller
{
   public function create()
	{
    		// mengambil data dari table pegawai
		//$perhitungankhususes = DB::table('perhitungan_khususes')->paginate(10);
		$pembayarankhususes = PembayaranKhusus::all();
		//dd($perhitungankhususes);
    		// mengirim data pegawai ke view index
		return view('pembayarankhusus.create', compact('perhitungankhususes'));

	}

	public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table pegawai sesuai pencarian data
		$pembayarankhususes = DB::table('perhitungan_khususes')
		->where('panjang','like',"%".$cari."%")
		->paginate();

    		// mengirim data pegawai ke view index
		return view('pembayarankhusus.create', compact('pembayarankhususes'));

	}


	public function index()
	{
		$pembayarankhususes = PerhitunganKhusus::where('pembayaran',1)->get();
		return view('pembayarankhusus.index', compact('pembayarankhususes'));
	}


	public function filter()
	{
		return view('pembayarankhusus.filter');
	}

	 public function filter_cetak(Request $request){
   		$perhitunganKhusus = PerhitunganKhusus::where('pembayaran',1)->whereBetween('created_at', [$request->tgl_awal, $request->tgl_akhir])->get();
        $pdf = PDF::loadView('pembayarankhusus.pdffilter', compact('perhitunganKhusus'));
        $pdf->setPaper('F4', 'landscape');
        return $pdf->stream();
    }

    public function pdf($id){
        $pembayarankhusus= PerhitunganKhusus::findOrFail($id);
        $pdf = PDF::loadView('pembayarankhusus.pdfsatuan', compact('pembayarankhusus'));
        $pdf->setPaper('A4', 'portrait');
        return $pdf->stream();
    }

    public function pdfall()
    {
        $perhitunganKhususes = PerhitunganKhusus::where('pembayaran',1)->get();
        $pdf = PDF::loadView('pembayarankhusus.pdfall', compact('perhitunganKhususes'));
        $pdf->setPaper('a4', 'landscape');
        return $pdf->stream();
    }

     


}
