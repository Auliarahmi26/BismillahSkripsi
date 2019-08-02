@extends('layouts.master')

@section('content')
	@php
	$kali=($perhitunganzona['masa_pajak']*$perhitunganzona->jenisreklame['tarif']);

					$total = 0;
					$total += ($perhitunganzona['panjang']*$perhitunganzona['lebar']*$perhitunganzona['sisi']*$perhitunganzona['buah']*$perhitunganzona['index_zona']*$perhitunganzona['index_bahan']*$kali*($perhitunganzona['tarif']/100))
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
			    <th colspan="4" style="text-align: center;">BADAN PENGELOLAAN PAJAK DAN RETRIBUSI DAERAH <br> UPT PAJAK DAERAH WILAYAH I KOTA BANJARBARU <br> Jl. Mistar Cokrokusumo RT.13 RW.03 Kelurahan Sungai Besar Banjarbaru Kal-Sel <br> Telp. 0511-6749841</th>
			    <th style="vertical-align: middle; text-align: center;" colspan="4">Tahun Pajak 2019</th>
			  </tr>
			    <tr>
			    	<th colspan="12" style="text-align: center;">PEMBERITAHUAN NILAI PENETAPAN PERHITUNGAN PAJAK REKLAME</th>
			    </tr>
			    <tr>
			    	<th colspan="6">Jenis : {{ $perhitunganzona->pendaftaran['jenis_pendaftaran'] }} <br> </th>
			    	<th colspan="6" >Nomor Pendaftaran : 973/{{ $perhitunganzona->pendaftaran ['id'] }}-UPTPDWIL1/BPPRD/2019 <br>Tanggal Pendaftaran : {{ \Carbon\Carbon::parse($perhitunganzona -> pendaftaran -> tanggal_pendaftaran)->format('d/m/Y')}}</th>
			    </tr>
			    <tr>
			    	<th colspan="12" style="text-align: center;">Uraian</th>
			    </tr>
			    <tr>
			    	<th colspan="12">Pajak Reklame An. {{ $perhitunganzona->pendaftaran->wajibpajak['nama_wajib_pajak'] }}</th>
			    </tr>
			    <tr>
			    	<th colspan="12">
			    		Nama Perusahaan : {{ $perhitunganzona->pendaftaran->wajibpajak['nama_perusahaan'] }}  <br>
			    		Alamat : {{ $perhitunganzona->pendaftaran['alamat'] }} <br><br><br>
			    		Lokasi : {{ $perhitunganzona->pendaftaran['lokasi_pemasangan'] }} <br><br><br>
			    		Teks : {{ $perhitunganzona->pendaftaran['teks_reklame'] }} <br><br>
			    		TMT : {{ $perhitunganzona->pendaftaran['tmt'] }} <br>
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
					<th>{{ $perhitunganzona->jenisreklame['nama_reklame'] }}</th>
					<th>{{ $perhitunganzona['panjang'] }}</th>
					<th>{{ $perhitunganzona['lebar'] }}</th>
					<th>{{ $perhitunganzona['sisi'] }}</th>
					<th>{{ $perhitunganzona['buah'] }}</th>
					<th>{{ $perhitunganzona['index_zona_khusus'] }}</th>
					<th>{{ $perhitunganzona['index_bahan'] }}</th>
					<th>{{ $kali }}</th>
					<th>{{ $perhitunganzona['tarif'] }}</th>
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
			<b>Kepala UPT Pajak Daerah <br> Wilayah I <br><br><br><br><br><br><br> Kepala <br> NIP.xxxxx</b>
		</div>
		<div class="col-md-4">
			<b>Banjarbaru, {{ $now->format('d M Y') }} <br>	<br> Penanggung Jawab Lapangan <br> Petugas <br><br><br><br><br> Admin</b>
		</div>
	  </div>
	</div>
	

@endsection