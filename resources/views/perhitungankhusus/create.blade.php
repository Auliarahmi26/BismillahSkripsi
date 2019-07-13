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
                          @foreach ($pendaftarans as $pendaftaran)
                            <option value="{{ $pendaftaran->id }}">{{ $pendaftaran->nomor_pendaftaran }}</option>
                          @endforeach
                          
                        </select>
                    </div>
                  </div>
                  <div class="col-md-6">
                    {{-- <div class="form-group">
                      <label for="exampleInputPassword1">Jenis Reklame</label>
                      <select class="form-control" name="" id="">
                       
                      </select>
                    </div> --}}
                    <div class="form-group {{-- {{ $errors->has('instansi_id') ? ' has-error' : '' }} --}}">
                     <label for="exampleInputPassword1">Jenis Reklame</label>
                        <select name="jenisreklame_id" id="" class="form-control">
                          <option value="" disabled selected>Pilih Jenis Reklame</option>
                          @foreach ($jenisreklames as $jenisreklame)
                            <option value="{{ $jenisreklame->id }}">{{ $jenisreklame->nama_reklame }}</option>
                          @endforeach
                          
                        </select>

                            @if ($errors->has('instansi_id'))      
                                    <span class="help-block">{{ $errors->first('instansi_id') }}</span>
                            @endif

                </div>
                  </div>
                </div>
				        <div class="row">
                <div class="col-md-8">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Panjang(m)</label>
                    <input type="text" name="panjang" class="form-control" id="exampleInputPassword1" placeholder="">
                  </div>
                </div>

                <div class="col-md-8">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Lebar(m)</label>
                    <input type="text" name="lebar" class="form-control" id="exampleInputPassword1" placeholder="">
                  </div>
                </div>    
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Sisi</label>
                  <input type="text" name="sisi" class="form-control" id="exampleInputPassword1" placeholder="">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Buah</label>
                  <input type="text" name="buah" class="form-control" id="exampleInputPassword1" placeholder="">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Index Zona Khusus</label>
                  <input type="text" name="index_zona_khusus" value="5" class="form-control" id="exampleInputPassword1" placeholder="" readonly>
                </div>
                

                <div class="form-group">
                  <label for="exampleInputPassword1">Index Bahan</label>
                  <input type="text" name="index_bahan" value="1" class="form-control" id="exampleInputPassword1" placeholder="" readonly>
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Biaya</label>
                  <input type="text" value="" name="biaya" class="form-control" id="exampleInputPassword1" placeholder="">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Tarif (25%)</label>
                  <input type="text" name="tarif" value="25" class="form-control" id="exampleInputPassword1" placeholder="" readonly>
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