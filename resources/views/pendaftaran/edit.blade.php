@extends('layouts.master')

@section('content')

        <!-- left column -->
        <div class="col-md-8 col-md-offset-2">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Data Pendaftaran</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="{{ route('pendaftaran.update', $pendaftaran) }}">
              {{ csrf_field()}}
              {{ method_field('PATCH') }}
              <div class="box-body">
                <div class="row">
                  <div class="col-md-4">
                      <div class="form-group {{ $errors->has('jenis_pendaftaran') ? ' has-error' : '' }}">
                      <label for="exampleInputEmail1">Jenis Pendaftaran</label>
                      <select type="text" name="jenis_pendaftaran" class="form-control" id="exampleInputEmail1" placeholder="">
                        <option value="Baru">Baru</option>
                        <option value="Perpanjangan">Perpanjangan</option>
                        </select>

                            @if ($errors->has('jenis_pendaftaran'))      
                                    <span class="help-block">{{ $errors->first('jenis_pendaftaran') }}</span>
                            @endif
                  </div>
                  </div>

                 

                  <div class="col-md-8">
                   
                  </div>
                </div>
                <div class="row">
                <div class="col-md-4">
                  <div class="form-group {{ $errors->has('tanggal_pendaftaran') ? ' has-error' : '' }}">
                    <label for="exampleInputPassword1">Tanggal Pendaftaran</label>
                    <input type="date" value="{{ $pendaftaran->tanggal_pendaftaran }}" name="tanggal_pendaftaran" class="form-control" id="exampleInputPassword1" placeholder="">

                            @if ($errors->has('tanggal_pendaftaran'))      
                                    <span class="help-block">{{ $errors->first('tanggal_pendaftaran') }}</span>
                            @endif
                  </div>
                </div>
                <div class="col-md-8">
                  <div class="form-group {{ $errors->has('wajibpajak_id') ? ' has-error' : '' }}">
                    <label for="exampleInputPassword1">Nama Wajib Pajak</label>
                    <select class="form-control select2" name="wajibpajak_id" style="width: 100%;">
                      <option selected="selected">Pilih wajib pajak</option>
                      @foreach ($wajibpajaks as $wajibpajak)
                            <option 
                                      value="{{ $wajibpajak -> id }}"
                                          @if  ( $wajibpajak->id === $pendaftaran->wajibpajak_id )
                                              selected
                                          @endif
                                  >
                                  {{ $wajibpajak -> nama_wajib_pajak }}
                                  </option>
                        @endforeach
                    </select>

                            @if ($errors->has('wajibpajak_id'))      
                                    <span class="help-block">{{ $errors->first('wajibpajak_id') }}</span>
                            @endif
                  </div>
                </div>    
                </div>
                <div class="form-group {{ $errors->has('nama_perusahaan') ? ' has-error' : '' }}">
                  <label for="exampleInputPassword1">Nama Perusahaan</label>
                  <input type="text" value="{{$pendaftaran->nama_perusahaan}}" name="nama_perusahaan" class="form-control" id="exampleInputPassword1" placeholder="">
                </div>

                <div class="form-group {{ $errors->has('alamat') ? ' has-error' : '' }}">
                  <label for="exampleInputPassword1">Alamat</label>
                  <textarea name="alamat" class="form-control" id="" cols="30" rows="2">{{$pendaftaran->alamat}}</textarea>

                            @if ($errors->has('alamat'))      
                                    <span class="help-block">{{ $errors->first('alamat') }}</span>
                            @endif
                </div>

                <div class="form-group {{ $errors->has('lokasi_pemasangan') ? ' has-error' : '' }}">
                  <label for="exampleInputPassword1">Lokasi Pemasangan</label>
                  <textarea name="lokasi_pemasangan" id="" cols="30" class="form-control" rows="4">{{$pendaftaran->lokasi_pemasangan}}</textarea>
                            @if ($errors->has('lokasi_pemasangan'))      
                                    <span class="help-block">{{ $errors->first('lokasi_pemasangan') }}</span>
                            @endif
                </div>

                <div class="form-group {{ $errors->has('teks_reklame') ? ' has-error' : '' }}">
                  <label for="exampleInputPassword1">Teks Reklame</label>
                  <input type="text" value="{{$pendaftaran->teks_reklame}}" name="teks_reklame" class="form-control" id="exampleInputPassword1" placeholder="" >

                            @if ($errors->has('teks_reklame'))      
                                    <span class="help-block">{{ $errors->first('teks_reklame') }}</span>
                            @endif
                </div>

                <div class="form-group {{ $errors->has('tmt') ? ' has-error' : '' }}">
                  <label for="exampleInputPassword1">TMT</label>
                  <input type="text" value="{{$pendaftaran->tmt}}" name="tmt" class="form-control" id="reservation" placeholder="">

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

@section('script')
<script>
  $(document).ready(function() {
    $('.js-example-basic-single').select2();
});
</script>

@endsection