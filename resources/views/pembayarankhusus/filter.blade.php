@extends('layouts.master')
@section('content')
        <!-- left column -->
        <div class="col-md-8 col-md-offset-2">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Filter Data Pembayaran</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="">
              {{ csrf_field()}}
              <div class="box-body">
                  <div class="row">
                      <div class="col-md-6">
                            <div class="form-group">
                              <label for="exampleInputPassword1">Tanggal Awal</label>
                             <input type="date" class="form-control" name="tgl_awal">
                            </div>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-md-6">
                            <div class="form-group">
                              <label for="exampleInputPassword1">Tanggal Akhir</label>
                             <input type="date" class="form-control" name="tgl_akhir">
                            </div>
                      </div>
                  </div>

              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Cetak</button>

                <button type="submit" class="btn btn-danger">Batal</button>
              </div>
            </form>
          </div>

            

          <!-- /.box -->
          </div>
          </div>



@endsection

@section('js')
  
@endsection