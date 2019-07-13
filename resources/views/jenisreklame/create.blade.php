@extends('layouts.master')
@section('title')
tambah data jenis reklame
@endsection

@section('content')

<div class="row">
        <!-- left column -->
        <div class="col-md-8 col-md-offset-2">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Data Jenis Reklame</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="{{ route('jenisreklame.store') }}">
              {{ csrf_field()}}
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama Reklame</label>
                  <input type="text" name="nama_reklame" class="form-control" id="exampleInputEmail1" placeholder="">

                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Harian</label>
                  <input type="text" name="harian" class="form-control" id="exampleInputPassword1" placeholder="">

                </div>
              
				
				<div class="form-group">
                  <label for="exampleInputPassword1">Bulanan</label>
                  <input type="text" name="bulanan" class="form-control" id="exampleInputPassword1" placeholder="">

                </div>

                <div class="">
                  <label for="exampleInputPassword1">Tahunan</label>
                  <input type="text" name="tahunan" class="form-control" id="exampleInputPassword1" placeholder="">

                </div>


              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>

                <button type="submit" class="btn btn-danger">Batal</button>
              </div>
            </form>
          </div>

			

          <!-- /.box -->
          </div>
          </div>



@endsection