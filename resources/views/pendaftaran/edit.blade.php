@extends('layouts.master')

@section('content')

<div class="row">
        <!-- left column -->
        <div class="col-md-8 col-md-offset-2">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Data Pendaftaran</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="{{ route('pendaftaran.edit', $pendaftaran) }}">
              {{ csrf_field() }}
              @method('PATCH')
              <div class="box-body">
                <div class="form-group {{ $errors->has('jenis_pendaftaran') ? ' has-error' : '' }}">
                  <label for="exampleInputEmail1">Jenis Pendaftaran</label>
                  <input type="text" name="jenis_pendaftaran" class="form-control" id="exampleInputEmail1" value="{{ $pendaftaran -> jenis_pendaftaran }}" placeholder="">

                            @if ($errors->has('nama_wajib_pajak'))      
                                    <span class="help-block">{{ $errors->first('nama_wajib_pajak') }}</span>
                            @endif
                </div>

                <div class="form-group {{ $errors->has('nomor_pendaftaran') ? ' has-error' : '' }}">
                  <label for="exampleInputPassword1">Nomor Pendaftaran</label>
                  <input type="text" name="nomor_pendaftaran" class="form-control" id="exampleInputPassword1" value="{{ $pendaftaran -> nomor_pendaftaran }}" placeholder="">
                            @if ($errors->has('nomor_pendaftaran'))      
                                    <span class="help-block">{{ $errors->first('nomor_pendaftaran') }}</span>
                            @endif
                </div>
                
                 <div class="form-group {{ $errors->has('tanggal_pendaftaran') ? ' has-error' : '' }}">
                  <label for="exampleInputPassword1">Tanggal Pendaftaran</label>
                  <input type="text" name="tanggal_pendaftaran" class="form-control" id="exampleInputPassword1" value="{{ $pendaftaran -> tanggal_pendaftaran }}" placeholder="">
                            @if ($errors->has('tanggal_pendaftaran'))      
                                    <span class="help-block">{{ $errors->first('tanggal_pendaftaran') }}</span>
                            @endif
                </div>

                 <div class="form-group {{ $errors->has('nama_wajib_pajak') ? ' has-error' : '' }}">
                  <label for="exampleInputPassword1">Nama Wajib Pajak</label>
                  <input type="text" name="nama_wajib_pajak" class="form-control" id="exampleInputPassword1" value="{{ $pendaftaran -> nama_wajib_pajak }}" placeholder="">

                            @if ($errors->has('nama_wajib_pajak'))      
                                    <span class="help-block">{{ $errors->first('nama_wajib_pajak') }}</span>
                            @endif
                </div>
				
				        <div class="form-group {{ $errors->has('nama_perusahaan') ? ' has-error' : '' }}">
                  <label for="exampleInputPassword1">Nama Perusahaan</label>
                  <input type="text" name="nama_perusahaan" class="form-control" id="exampleInputPassword1" value="{{ $pendaftaran -> nama_perusahaan }}" placeholder="">

                            @if ($errors->has('nama_perusahaan'))      
                                    <span class="help-block">{{ $errors->first('nama_perusahaan') }}</span>
                            @endif
                </div>

                <div class="form-group {{ $errors->has('alamat') ? ' has-error' : '' }}">
                  <label for="exampleInputPassword1">Alamat</label>
                  <input type="text" name="alamat" class="form-control" id="exampleInputPassword1" value="{{ $pendaftaran -> alamat }}" placeholder="">

                            @if ($errors->has('alamat'))      
                                    <span class="help-block">{{ $errors->first('alamat') }}</span>
                            @endif
                </div>

                <div class="form-group {{ $errors->has('lokasi_pemasangan') ? ' has-error' : '' }}">
                  <label for="exampleInputPassword1">Lokasi Pemasangan</label>
                  <input type="text" name="lokasi_pemasangan" class="form-control" id="exampleInputPassword1" value="{{ $pendaftaran ->lokasi_pemasangan }}" placeholder="">
                            @if ($errors->has('lokasi_pemasangan'))      
                                    <span class="help-block">{{ $errors->first('lokasi_pemasangan') }}</span>
                            @endif
                </div>

                 <div class="form-group {{ $errors->has('teks_reklame') ? ' has-error' : '' }}">
                  <label for="exampleInputPassword1">Teks Reklame</label>
                  <input type="text" name="teks_reklame" class="form-control" id="exampleInputPassword1" value="{{ $pendaftaran ->teks_reklame }}" placeholder="">

                            @if ($errors->has('teks_reklame'))      
                                    <span class="help-block">{{ $errors->first('teks_reklame') }}</span>
                            @endif
                </div>

                 <div class="form-group {{ $errors->has('tmt') ? ' has-error' : '' }}">
                  <label for="exampleInputPassword1">TMT</label>
                  <input type="text" name="tmt" class="form-control" id="exampleInputPassword1" value="{{ $pendaftaran -> tmt}}" placeholder="">

                            @if ($errors->has('tmt'))      
                                    <span class="help-block">{{ $errors->first('tmt') }}</span>
                            @endif
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