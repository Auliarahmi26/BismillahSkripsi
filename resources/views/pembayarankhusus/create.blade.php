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
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleInputPassword1">Nomor Pendaftaran</label>
                      <select name="pendaftaran_id" id="" class="form-control">
                        <option value="" disabled selected>Pilih Nomor Pendaftaran</option>
                           @foreach ($perhitungankhususes as $p)
                            <option value="{{ $p->id }}">973/{{ $p -> id }}-UPTPDWIL1/BPPRD/2019</option>
                          @endforeach
                          
                        </select>
                    </div>
                  </div>
                  </div>
                  <div class="row"></div>
                  <div class="row">
                      <div class="col-md-6">
                            <div class="form-group">
                              <label for="exampleInputPassword1">Nomor Pendaftaran</label>
                              <select name="pendaftaran_id" id="" class="form-control">
                                    <option value=Lunas">Lunas</option>
                                </select>
                            </div>
                      </div>
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

@section('js')
  
@endsection