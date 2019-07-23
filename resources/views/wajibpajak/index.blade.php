@extends ('layouts.master')

@section('link')
<!-- DataTables -->
  <link rel="stylesheet" href="../../bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
@endsection

@section ('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Wajib Pajak
      </h1>
      <ol class="breadcrumb">
        <li class="active"><a href=""><i class="fa fa-user"></i> Wajib pajak</a></li>
      </ol>
    </section>

@include('layouts.partials._alert')

<div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Table With Full Features</h3>

              <a style="margin-left: 5px;" class="btn btn-default pull-right" href="{{ route('wajibpajak.pdf') }}"><i class="fa fa-print"></i></a>
              <a style="margin-left: 5px;" class="btn btn-primary pull-right" href="{{ route('wajibpajak.create') }}"><i class="fa fa-plus"></i></a>

            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Wajib Pajak</th>
                  <th>No KTP</th>
                  <th>Nama Perusahaan</th>
                  <th>Alamat</th>
                  <th>No Hp</th>
                  <th width="85px">Aksi</th>
                </tr>
                </thead>
                <tbody>
        <?php $no = 0;?>
				@foreach( $wajibpajaks as $wajibpajak )
        <?php $no++ ;?>
                <tr>
                	<td>{{ $no }}</td>
                  	<td>{{ $wajibpajak -> nama_wajib_pajak }}</td>
                  	<td>{{ $wajibpajak -> no_ktp }}</td>
                  	<td>{{ $wajibpajak -> nama_perusahaan }}</td>
                  	<td>{{ $wajibpajak -> alamat }}</td>
                  	<td>{{ $wajibpajak -> no_hp }}</td>
                  	<td> <a class="btn btn-warning btn-sm" href="{{ route('wajibpajak.edit', $wajibpajak) }}"><i class="fa fa-edit"></i></a>
                        <div class="pull-right">
                          <form action=" {{ route('wajibpajak.destroy', $wajibpajak) }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <button class="btn btn-danger btn-sm" type="submit"><i class="fa fa-trash"></i></button>
                        </form>
                        </div>
                        
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