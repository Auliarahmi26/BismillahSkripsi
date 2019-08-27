<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
@php
    $kali=($perhitunganzona['masa_pajak']*$perhitunganzona->jenisreklame['tarif']);

                    $total = 0;
                    $total += ($perhitunganzona['panjang']*$perhitunganzona['lebar']*$perhitunganzona['sisi']*$perhitunganzona['buah']*$perhitunganzona['index_zona']*$perhitunganzona['index_bahan']*$kali*($perhitunganzona['tarif']/100))
                @endphp
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>UPT Pajak Daerah Wilayah I - Data Perhitungan Zona</title>
    
      <style>
        body 
        {
            font-family: sans-serif;
            font-size: 15px;

        }

        #isi table
        {
            width: 100%;
        }

        td,tr{
            border:1px solid black;
        }




    </style>

</head>

<body>
        <table align="center" style="width: 80%">
            <tr>
                <th colspan="4"  align="center"><img src="img/logo.png" alt="" ></th>
                <th colspan="4" width="80%" align="center">PEMERINTAH KOTA BANJARBARU <br> BADAN PENGELOLAAN PAJAK DAN RETRIBUSI DAERAH <br> UPT PAJAK DAERAH WILAYAH I<br> Jl. Mistar Cokrokusumo RT.13 RW.03 Banjarbaru Kal-Sel <br> Telp. 0511-6749841</th>
                <th colspan="4" width="20%" align="center"></th>
            </tr>
        </table>
        <hr>

    <h4 style="text-align: center;">PEMBERITAHUAN NILAI PENETAPAN PERHITUNGAN PAJAK REKLAME</h4>
    
    <table style="width: 100%" >
        <tr>
         <td>    
                Nomor Pendaftaran   : 973/{{ $perhitunganzona->pendaftaran ['id'] }}-UPTPDWIL1/BPPRD/2019 <br><br>    
         
                Tanggal Pendaftaran : {{ \Carbon\Carbon::parse($perhitunganzona -> pendaftaran -> tanggal_pendaftaran)->format('d/m/Y')}}    
        <td>    
                Jenis     : {{ $perhitunganzona->pendaftaran['jenis_pendaftaran'] }} <br> <br> <br>      
                
        </td> 
       
        </td>      
        </tr>
        <tr>    <td style="text-align:center; height: 30px;" colspan="2">  Uraian</td></tr>
    </table>
    <p> Pajak Reklame An.</p>
    <table style="width: 100%"> 
        <tr>    
            <td> Nama </td>
            <td>:{{$perhitunganzona->pendaftaran->wajibpajak->nama_wajib_pajak}} </td>
        </tr>
         <tr>    
            <td> Alamat </td>
            <td>:{{ $perhitunganzona->pendaftaran->alamat}}  </td>
        </tr>
        <tr>    
            <td> Nama Perusahaan </td>
            <td>:{{ $perhitunganzona->pendaftaran->wajibpajak->nama_perusahaan}}  </td>
        </tr>
        <tr>
            <td> Lokasi Pemasangan</td>
            <td>:{{ $perhitunganzona->pendaftaran->lokasi_pemasangan}} </td>
        </tr>
         <tr>
            <td> Teks Reklame</td>
            <td>:{{  $perhitunganzona->pendaftaran->teks_reklame}} </td>
        </tr>
         <tr>
            <td> TMT</td>
            <td>:{{ $perhitunganzona->pendaftaran->tmt}} </td>
        </tr>
    </table>
    <br>    
    <table style="width: 100%"> 
        <tr>    
            <td colspan="10">    Perhitungan Pajak Reklame </td>
        </tr>
        <tr>    
            <td>  Jenis Reklame</td>
            <td>   Panjang </td>
            <td>   Lebar</td>
            <td>   Sisi</td>
            <td>   Buah</td>
            <td>   Index Zona</td>
            <td>   Index Bahan</td>
            <td>   Biaya</td>
            <td>   %</td>
            <td>   Jumlah </td>
        </tr>
            <tr>    
            <td> {{$perhitunganzona->jenisreklame->nama_reklame}} </td>
            <td> {{$perhitunganzona->panjang}}</td>
            <td> {{$perhitunganzona->lebar}}</td>
            <td> {{$perhitunganzona->sisi}}</td>
            <td> {{$perhitunganzona->buah}}</td>
            <td> {{$perhitunganzona->index_zona}}</td>
            <td> {{$perhitunganzona->index_bahan}}</td>
            <td> {{$kali}}</td>
            <td> {{$perhitunganzona->tarif}}</td>
            <td> Rp {{$total}}</td>
            </tr>
            </table>
    <br>    
    <
    </table>
    <h4 style="text-align: right;">Kepala UPT Pajak Daerah Wilayah I</h4>
    <br><br>
    <h4 style="text-align: right;">Muhammad Munadjat, S.AP</h4>
     <h4 style="text-align: right;">NIP. 19680213 198903 1 008</h4>

   
   
</body>
</html>
