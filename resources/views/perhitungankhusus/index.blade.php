@extends ('layouts.master')

@section('link')
<!-- DataTables -->
  <link rel="stylesheet" href="../../bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
@endsection
@section('content')

	<!-- Content Header (Page header) -->
	<section class="content-header">
	  <h1>
		Perhitungan Khusus
	  </h1>
	  <ol class="breadcrumb">
		<li class="active"><a href=""><i class="fa fa-user"></i> Perhitungan Khusus</a></li>
	  </ol>
	</section>

@include('layouts.partials._alert')

<div class="box">
			<div class="box-header">
			  <h3 class="box-title">Data Perhitungan Khusus</h3>

			  <a style="margin-left: 5px;" target="_blank" class="btn btn-default pull-right" href="{{ route('perhitungankhusus.pdfall') }}"><i class="fa fa-print"></i></a>

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
				  <th>Index Zona Khusus</th>
				  <th>Index Bahan</th>
				  <th>Biaya</th>
				  <th>Tarif 25%</th>
				  <th>Total</th>
				  <th>Status Bayar</th>
				  <th>Aksi</th>
				</tr>
				</thead>
				<tbody>
		<?php $no = 0;?>
				@foreach( $perhitungankhususes as $perhitungankhusus )
				@php
					$kali=($perhitungankhusus['masa_pajak']*$perhitungankhusus->jenisreklame['tarif']);

					$total = 0;
					$total += ($perhitungankhusus['panjang']*$perhitungankhusus['lebar']*$perhitungankhusus['sisi']*$perhitungankhusus['buah']*$perhitungankhusus['index_zona_khusus']*$perhitungankhusus['index_bahan']*$kali*($perhitungankhusus['tarif']/100))
				@endphp
				
		<?php $no++ ;?>
				<tr>
					<td>{{ $no }}</td>
					<td>973/{{ $perhitungankhusus->pendaftaran ['id'] }}-UPTPDWIL1/BPPRD/2019</td>
					<td>{{ $perhitungankhusus->jenisreklame['nama_reklame'] }}</td>
					<td>{{ $perhitungankhusus -> panjang }}</td>
					<td>{{ $perhitungankhusus -> lebar }}</td>
					<td>{{ $perhitungankhusus -> sisi }}</td>
					<td>{{ $perhitungankhusus -> buah }}</td>
					<td>{{ $perhitungankhusus -> index_zona_khusus }}</td>
					<td>{{ $perhitungankhusus -> index_bahan}}</td>
					<td>{{ $kali }}</td>
					<td>{{ $perhitungankhusus -> tarif }}</td>
					<td>{{ $total }}</td>
					@if( $perhitungankhusus -> pembayaran == 0 )
					<td>Belum Dibayar</td>
					@else
					<td>Sudah Dibayar</td>
					@endif
					<td width="94px"> <a class="btn btn-success btn-xs" href="{{ route('perhitungankhusus.edit', $perhitungankhusus) }}"><i class="fa fa-info"></i></a>
					  {{-- gasan delete --}}
						<div class="pull-right">
						  <form action="{{ route('perhitungankhusus.destroy', $perhitungankhusus) }}" method="POST">
							{{ csrf_field() }}
							{{ method_field('DELETE') }}
							<button class="btn btn-danger btn-xs" type="submit"><i class="fa fa-trash"></i></button>
						  </form>
						</div>
						<a class="btn btn-primary btn-xs" href="{{ route('perhitungankhusus.bayar', $perhitungankhusus->id) }}"><i class="fa fa-check"></i></a>
						<a class="btn btn-warning btn-xs" target="_blank" href="{{ route('perhitungankhusus.pdf', $perhitungankhusus->id) }}"><i class="fa fa-print" ></i></a>
					</td> 

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