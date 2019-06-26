@extends('layouts.master')

@section('content')

<div class="row">
        <!-- left column -->
        <div class="col-md-8 col-md-offset-2">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Data Wajib Pajak</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="{{ route('wajibpajak.store') }}">
              {{ csrf_field()}}
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama Wajib Pajak</label>
                  <input type="text" name="nama_wajib_pajak" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Nama">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">No KTP</label>
                  <input type="text" name="no_ktp" class="form-control" id="exampleInputPassword1" placeholder="Masukkan No KTP">
                </div>
              
				
				<div class="form-group">
                  <label for="exampleInputPassword1">Nama Perusahaan</label>
                  <input type="text" name="nama_perusahaan" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Nama Perusahaan">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Alamat</label>
                  <input type="text" name="alamat" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Alamat">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">No HP</label>
                  <input type="text" name="no_hp" class="form-control" id="exampleInputPassword1" placeholder="Masukkan No HP">
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