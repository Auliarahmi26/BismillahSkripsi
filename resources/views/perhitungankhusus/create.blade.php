@extends('layouts.master')

@section('content')

        <!-- left column -->
        <div class="col-md-8 col-md-offset-2">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Data Perhitungan Zona Khusus</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="{{ route('perhitungankhusus.store') }}">
              {{ csrf_field()}}
              <div class="box-body">
                <div class="row">
                  <div class="col-md-4">
                      <div class="form-group">
                      <label for="exampleInputEmail1">Jenis Pendaftaran</label>
                      <input type="text" name="jenis_pendaftaran" class="form-control" id="exampleInputEmail1" placeholder="">
                  </div>
                  </div>

                 

                  <div class="col-md-8">
                    <div class="form-group">
                      <label for="exampleInputPassword1">Nomor Pendaftaran</label>
                      <input type="text" name="nomor_pendaftaran" class="form-control" id="exampleInputPassword1" placeholder="">
                    </div>
                  </div>
                </div>
				        <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Tanggal Pendaftaran</label>
                    <input type="date" name="tanggal_pendaftaran" class="form-control" id="exampleInputPassword1" placeholder="">
                  </div>
                </div>
                <div class="col-md-8">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Nama Wajib Pajak</label>
                    <input type="text" name="nama_wajib_pajak" class="form-control" id="exampleInputPassword1" placeholder="">
                  </div>
                </div>    
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Nama Perusahaan</label>
                  <input type="text" name="nama_perusahaan" class="form-control" id="exampleInputPassword1" placeholder="">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Alamat</label>
                  <textarea name="alamat" class="form-control" id="" cols="30" rows="2"></textarea>
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Lokasi Pemasangan</label>
                  <textarea name="lokasi_pemasangan" id="" cols="30" class="form-control" rows="4"></textarea>
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Teks Reklame</label>
                  <input type="text" value="1" name="teks_reklame" class="form-control" id="exampleInputPassword1" placeholder="" disabled>
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">TMT</label>
                  <input type="text" name="tmt" class="form-control" id="reservation" placeholder="">
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