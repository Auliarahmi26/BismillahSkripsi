@extends ('layouts.master')
@section('title')
data jenis reklame
@endsection
@section ('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Jenis Reklame
      </h1>
      <ol class="breadcrumb">
        <li class="active"><a href=""><i class="fa fa-user"></i>Jenis Reklame</a></li>
      </ol>
    </section>

@include('layouts.partials._alert')

<div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Table With Full Features</h3>

              <a style="margin-left: 5px;" class="btn btn-default pull-right" href="{{ route('wajibpajak.pdf') }}"><i class="fa fa-print"></i></a>

            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Reklame</th>
                  <th>Harian</th>
                  <th>Bulanan</th>
                  <th>Tahunan</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
        <?php $no = 0;?>
				@foreach( $jenisreklames as $jenisreklame )
        <?php $no++ ;?>
                <tr>
                	 <td width="50px">{{ $no }}</td>
                  	<td>{{ $jenisreklame -> nama_reklame }}</td>
                  	<td>{{ $jenisreklame -> harian }}</td>
                  	<td>{{ $jenisreklame -> tahunan }}</td>
                  	<td>{{ $jenisreklame -> bulanan }}</td>
                  	<td width="100px"> <a class="btn btn-warning btn-sm" href="{{ route('jenisreklame.edit', $jenisreklame) }}"><i class="fa fa-edit"></i></a>
                        <div class="pull-right">
                          <form action=" {{ route('jenisreklame.destroy', $jenisreklame) }}" method="POST">
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