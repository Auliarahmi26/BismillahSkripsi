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
                <div class="form-group  {{ $errors->has('nama_wajib_pajak') ? ' has-error' : '' }}">
                  <label for="exampleInputEmail1">Nama Wajib Pajak</label>
                  <input type="text" name="nama_wajib_pajak" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Nama">

                            @if ($errors->has('nama_wajib_pajak'))      
                                    <span class="help-block">{{ $errors->first('nama_wajib_pajak') }}</span>
                            @endif

                </div>

                <div class="form-group {{ $errors->has('no_ktp') ? ' has-error' : '' }} ">
                  <label for="exampleInputPassword1">No KTP</label>
                  <input type="text" name="no_ktp" class="form-control" id="exampleInputPassword1" placeholder="Masukkan No KTP">

                            @if ($errors->has('no_ktp'))      
                                    <span class="help-block">{{ $errors->first('no_ktp') }}</span>
                            @endif

                </div>
              
				
				<div class="form-group {{ $errors->has('nama_perusahaan') ? ' has-error' : '' }} ">
                  <label for="exampleInputPassword1">Nama Perusahaan</label>
                  <input type="text" name="nama_perusahaan" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Nama Perusahaan">

                            @if ($errors->has('nama_perusahaan'))      
                                    <span class="help-block">{{ $errors->first('nama_perusahaan') }}</span>
                            @endif
                </div>

                <div class="form-group {{ $errors->has('alamat') ? ' has-error' : '' }} ">
                  <label for="exampleInputPassword1">Alamat</label>
                  <input type="text" name="alamat" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Alamat">

                            @if ($errors->has('alamat'))      
                                    <span class="help-block">{{ $errors->first('alamat') }}</span>
                            @endif


                </div>

                <div class="form-group {{ $errors->has('no_hp') ? ' has-error' : '' }} ">
                  <label for="exampleInputPassword1">No HP</label>
                  <input type="text" name="no_hp" class="form-control" id="exampleInputPassword1" placeholder="Masukkan No HP">

                            @if ($errors->has('no_hp'))      
                                    <span class="help-block">{{ $errors->first('no_hp') }}</span>
                            @endif
                </div>

              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a class="btn btn-danger" href="{{ route('wajibpajak.index') }}">Batal</a>
              </div>
            </form>

          </div>

			
 
          <!-- /.box -->
          </div>
          </div>



@endsection