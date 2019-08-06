@extends('layouts.master')

@section('content')
	@php
	$kali=($perhitungankhusus['masa_pajak']*$perhitungankhusus->jenisreklame['tarif']);

					$total = 0;
					$total += ($perhitungankhusus['panjang']*$perhitungankhusus['lebar']*$perhitungankhusus['sisi']*$perhitungankhusus['buah']*$perhitungankhusus['index_zona_khusus']*$perhitungankhusus['index_bahan']*$kali*($perhitungankhusus['tarif']/100))
				@endphp

	<div class="panel panel-default">
	  <div class="panel-body">
	  	<table class="table table-bordered">
			<thead>
			  <tr>
			    <th colspan="12"></th>
			  </tr>
			  <tr>
			    <th style="vertical-align: middle; text-align: center;" colspan="4"><img src="{{ asset('img/logo.png') }}" alt=""></th>
			    <th colspan="4" style="text-align: center;">BADAN PENGOLAHAN PAJAK DAN RETRIBUSI DAERAH <br> UPT PAJAK DAERAH WILAYAH I KOTA BANJARBARU <br> Jl. Mistar Cokrokusumo RT.13 RW.03 Kelurahan Sungai Besar Banjarbaru Kal-Sel <br> Telp. 0511-6749841</th>
			    <th style="vertical-align: middle; text-align: center;" colspan="4">Tahun Pajak 2019</th>
			  </tr>
			    <tr>
			    	<th colspan="12" style="text-align: center;">PEMBERITAHUAN NILAI PENETAPAN PERHITUNGAN PAJAK REKLAME</th>
			    </tr>
			    <tr>
			    	<th colspan="6">Jenis : {{ $perhitungankhusus->pendaftaran['jenis_pendaftaran'] }} <br> Masa Pajak : xxxx</th>
			    	<th colspan="6" >Nomor Pendaftaran : {{ $perhitungankhusus->pendaftaran['nomor_pendaftaran'] }}  <br>Tanggal Pendaftaran : {{ \Carbon\Carbon::parse($perhitungankhusus -> pendaftaran -> tanggal_pendaftaran)->format('d/m/Y')}}</th>
			    </tr>
			    <tr>
			    	<th colspan="12" style="text-align: center;">Uraian</th>
			    </tr>
			    <tr>
			    	<th colspan="12">Pajak Reklame An. {{ $perhitungankhusus->pendaftaran->wajibpajak['nama_wajib_pajak'] }}</th>
			    </tr>
			    <tr>
			    	<th colspan="12">
			    		Nama Perusahaan : {{ $perhitungankhusus->pendaftaran->wajibpajak['nama_perusahaan'] }}  <br>
			    		Alamat : {{ $perhitungankhusus->pendaftaran['alamat'] }} <br><br><br>
			    		Lokasi : {{ $perhitungankhusus->pendaftaran['lokasi_pemasangan'] }} <br><br><br>
			    		Teks : {{ $perhitungankhusus->pendaftaran['teks_reklame'] }} <br><br>
			    		TMT : {{ $perhitungankhusus->pendaftaran['tmt'] }} <br>
			    	</th>
			    </tr>
			</thead>
		</table>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th colspan="12">Perhitungan Pajak Reklame</th>
				</tr>
				<tr>
					<th>Jenis Reklame</th>
					<th>Panjang (m)</th>
					<th>Lebar (m)</th>
					<th>Sisi</th>
					<th>Buah</th>
					<th>Index Zona</th>
					<th>Index Bahan</th>
					<th>Biaya</th>
					<th>%</th>
					<th>Jumlah</th>
				</tr>
				<tr>
					<th>{{ $perhitungankhusus->jenisreklame['nama_reklame'] }}</th>
					<th>{{ $perhitungankhusus['panjang'] }}</th>
					<th>{{ $perhitungankhusus['lebar'] }}</th>
					<th>{{ $perhitungankhusus['sisi'] }}</th>
					<th>{{ $perhitungankhusus['buah'] }}</th>
					<th>{{ $perhitungankhusus['index_zona_khusus'] }}</th>
					<th>{{ $perhitungankhusus['index_bahan'] }}</th>
					<th>{{ $kali }}</th>
					<th>{{ $perhitungankhusus['tarif'] }}</th>
					<th>Rp {{$total}}</th>
				</tr>
				<tr>
					<th colspan="7"></th>
					<th colspan="2">Jumlah Yang Harus Dibayar</th>
					<th>Rp {{$total}}</th>
				</tr>
			</thead>
		</table>
		<div class="col-md-6 col-md-offset-2">
			<b>Kepala UPT Pajak Daerah Wilayah I<br>  <br><br><br><br><br><br><br> Kepala <br> NIP.xxxxx</b>
		</div>
		<div class="col-md-4">
			<b>Banjarbaru, {{ $now->format('d M Y') }} <br>	<br> Penanggung Jawab Lapangan <br> Petugas <br><br><br><br><br> Admin</b>
		</div>
	  </div>
	</div>
	

@endsection