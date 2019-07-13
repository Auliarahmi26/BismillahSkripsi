@extends ('layouts.master')
@section ('content')

	<!-- Content Header (Page header) -->
	<section class="content-header">
	  <h1>
		Pendaftaran
	  </h1>
	  <ol class="breadcrumb">
		<li class="active"><a href=""><i class="fa fa-user"></i> Pendaftaran</a></li>
	  </ol>
	</section>

@include('layouts.partials._alert')

<div class="box">
			<div class="box-header">
			  <h3 class="box-title">Data Table With Full Features</h3>

			  <a style="margin-left: 5px;" class="btn btn-default pull-right" href=""><i class="fa fa-print"></i></a>

			</div>
			<!-- /.box-header -->
			<div class="box-body">
			  <table id="example1" class="table table-bordered table-striped">
				<thead>
				<tr>
				  <th>No</th>
				  <th>Jenis Pendaftaran</th>
				  <th>Nomor Pendaftaran</th>
				  <th>Tanggal Pendaftaran</th>
				  <th>Nama Wajib Pajak</th>
				  <th>Nama Perusahaan</th>
				  <th>Alamat</th>
				  <th>Lokasi Pemasangan</th>
				  <th>Teks Reklame</th>
				  <th>TMT</th>
				  <th>Aksi</th>
				</tr>
				</thead>
				<tbody>
		<?php $no = 0;?>
				@foreach( $pendaftarans as $pendaftaran )
		<?php $no++ ;?>
				<tr>
					<td>{{ $no }}</td>
					<td>{{ $pendaftaran -> jenis_pendaftaran }}</td>
					<td>{{ $pendaftaran -> nomor_pendaftaran }}</td>
					<td>{{ $pendaftaran -> tanggal_pendaftaran }}</td>
					<td>{{ $pendaftaran -> wajibpajak ['nama_wajib_pajak'] }}</td>
					<td>{{ $pendaftaran -> nama_perusahaan }}</td>
					<td>{{ $pendaftaran -> alamat }}</td>
					<td>{{ $pendaftaran -> lokasi_pemasangan }}</td>
					<td>{{ $pendaftaran -> teks_reklame}}</td>
					<td>{{ $pendaftaran -> tmt }}</td>
					<td> <a class="btn btn-warning btn-sm" href="{{ route('pendaftaran.edit', $pendaftaran) }}"><i class="fa fa-edit"></i></a>
					  {{-- gasan delete --}}
						<div class="pull-right">
						  <form action="{{ route('pendaftaran.destroy', $pendaftaran) }}" method="POST">
							{{ csrf_field() }}
							{{ method_field('DELETE') }}
							<button class="btn btn-danger btn-sm" type="submit"><i class="fa fa-trash"></i></button>
						  </form>
						</div>
						<a class="btn btn-warning btn-sm" href="{{ route('pendaftaran.pdf', $pendaftaran) }}"><i class="fa fa-print" ></i></a>
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