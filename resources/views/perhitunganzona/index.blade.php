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
			  <h3 class="box-title">Data Perhitungan Zona</h3>

			  <a style="margin-left: 5px;" class="btn btn-default pull-right" href=""><i class="fa fa-print"></i></a>

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
				  <th>Tarif 25%</th>
				  <th>Total</th>
				  <th>Aksi</th>
				</tr>
				</thead>
				<tbody>
		<?php $no = 0;?>
				@foreach( $perhitunganzonas as $perhitunganzona )
				@php
					$kali=($perhitunganzona['masa_pajak']*$perhitunganzona->jenisreklame['tarif']);

					$total = 0;
					$total += ($perhitunganzona['panjang']*$perhitunganzona['lebar']*$perhitunganzona['sisi']*$perhitunganzona['buah']*$perhitunganzona['index_zona']*$perhitunganzona['index_bahan']*$kali*($perhitunganzona['tarif']/100))
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
					<td>{{ $perhitunganzona -> tarif }}</td>
					<td>{{ $total }}</td>
					@if( $perhitunganzona -> pembayaran == 0 )
					<td>Belum Dibayar</td>
					@else
					<td>Sudah Dibayar</td>
					@endif
					<td width="114px"> <a  class="btn btn-success btn-sm" href="{{ route('perhitunganzona.edit', $perhitunganzona) }}"><i class="fa fa-info"></i></a>
					  {{-- gasan delete --}}
						<div class="pull-right">
						  <form action="{{ route('perhitunganzona.destroy', $perhitunganzona) }}" method="POST">
							{{ csrf_field() }}
							{{ method_field('DELETE') }}
							<button class="btn btn-danger btn-sm" type="submit"><i class="fa fa-trash"></i></button>
						  </form>
						</div>
						<a class="btn btn-primary btn-sm" href="{{ route('perhitunganzona.bayar', $perhitunganzona->id) }}"><i class="fa fa-check"></i></a>
						<a target="_blank" class="btn btn-warning btn-sm" href="{{ route('perhitunganzona.pdfsatuan', $perhitunganzona) }}"><i class="fa fa-print" ></i></a>
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