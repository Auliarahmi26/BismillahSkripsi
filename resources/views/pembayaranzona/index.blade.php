@extends ('layouts.master')

@section('link')
<!-- DataTables -->
  <link rel="stylesheet" href="../../bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
@endsection
@section ('content')



	<!-- Content Header (Page header) -->
	<section class="content-header">
	  <h1>
		Perhitungan Zona
	  </h1>
	  <ol class="breadcrumb">
		<li class="active"><a href=""><i class="fa fa-user"></i> Perhitungan Zona</a></li>
	  </ol>
	</section>

@include('layouts.partials._alert')

<div class="box">
			<div class="box-header">
			  <h3 class="box-title">Data Pembayaran Zona</h3>

			   
			  <a style="margin-left: 5px;" class="btn btn-success pull-right" href="{{Route('pembayaranzona.filter')}}"><i class="fa fa-print"></i> Periode</a>

			</div>
			<!-- /.box-header -->
			<div class="box-body">
			  <table id="example1" class="table table-bordered table-striped">
				<thead>
				<tr>
				  <th>No</th>
				  <th>Nomor Pendaftaran</th>
				  <th>Jenis Reklame</th>
				  <th>Panjang</th>
				  <th>Lebar</th>
				  <th>Sisi</th>
				  <th>Buah</th>
				  <th>Index Zona</th>
				  <th>Index Bahan</th>
				  <th>Biaya</th>
				  <th>Denda</th>
				  <th>Tarif 25%</th>
				  <th>Total</th>
				  <th>Tgl Bayar</th>
				  <th>Aksi</th>
				</tr>
				</thead>
				<tbody>
		<?php $no = 0;?>
				@foreach( $pembayaranzonas as $perhitunganzona )
				@php
					$kali=($perhitunganzona['masa_pajak']*$perhitunganzona->jenisreklame['tarif']);
					$total = 0;
					$total += ($perhitunganzona['panjang']*$perhitunganzona['lebar']*$perhitunganzona['sisi']*$perhitunganzona['buah']*$perhitunganzona['index_zona']*$perhitunganzona['index_bahan']*$kali*($perhitunganzona['tarif']/100)+$perhitunganzona['denda'])
				@endphp
			
				
		<?php $no++ ;?>
				<tr>
					<td>{{ $no }}</td>
					<td>973/{{ $perhitunganzona->pendaftaran ['id'] }}-UPTPDWIL1/BPPRD/2019</td>
					<td>{{ $perhitunganzona->jenisreklame['nama_reklame'] }}</td>
					<td>{{ $perhitunganzona -> panjang }}</td>
					<td>{{ $perhitunganzona -> lebar }}</td>
					<td>{{ $perhitunganzona -> sisi }}</td>
					<td>{{ $perhitunganzona -> buah }}</td>
					<td>{{ $perhitunganzona -> index_zona }}</td>
					<td>{{ $perhitunganzona-> index_bahan}}</td>
					<td>{{ $kali }}</td>
					<td>{{ $perhitunganzona -> denda }}</td>
					<td>{{ $perhitunganzona -> tarif }}</td>
					<td>{{ $total }}</td>
					<td>{{ $perhitunganzona -> updated_at->format('d F Y') }}</td>
					<td><a class="btn btn-warning btn-sm" href="{{ route('pembayaranzona.pdf', $perhitunganzona) }}"><i class="fa fa-print" ></i></a></td>
				</tr>
				
				@endforeach
				</tbody>
			  </table>
			</div>
			<!-- /.box-body -->
		  </div>
		  <!-- /.box -->



@endsection

@section('script')
<!-- DataTables -->
<script src="../../bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../../bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
@endsection