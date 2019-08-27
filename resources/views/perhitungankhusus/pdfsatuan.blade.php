<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
@php
    $kali=($perhitungankhusus['masa_pajak']*$perhitungankhusus->jenisreklame['tarif']);

                    $total = 0;
                    $total += ($perhitungankhusus['panjang']*$perhitungankhusus['lebar']*$perhitungankhusus['sisi']*$perhitungankhusus['buah']*$perhitungankhusus['index_zona_khusus']*$perhitungankhusus['index_bahan']*$kali*($perhitungankhusus['tarif']/100))
                @endphp
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>UPT Pajak Daerah Wilayah I - Data Perhitungan Khusus</title>
    
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
                Nomor Pendaftaran   : 973/{{ $perhitungankhusus->pendaftaran ['id'] }}-UPTPDWIL1/BPPRD/2019 <br><br>    
         
                Tanggal Pendaftaran : {{ \Carbon\Carbon::parse($perhitungankhusus -> pendaftaran -> tanggal_pendaftaran)->format('d/m/Y')}}    
        <td>    
                Jenis     : {{ $perhitungankhusus->pendaftaran['jenis_pendaftaran'] }} <br> <br> <br>      
                
        </td> 
       
        </td>      
        </tr>
        <tr>    <td style="text-align:center; height: 30px;" colspan="2">  Uraian</td></tr>
    </table>
    <p> Pajak Reklame An.</p>
    <table style="width: 100%"> 
        <tr>    
            <td> Nama </td>
            <td>:{{$perhitungankhusus->pendaftaran->wajibpajak->nama_wajib_pajak}} </td>
        </tr>
         <tr>    
            <td> Alamat </td>
            <td>:{{ $perhitungankhusus->pendaftaran->alamat}}  </td>
        </tr>


        <tr>    
            <td> Nama Perusahaan </td>
            <td>:{{ $perhitungankhusus->pendaftaran->wajibpajak->nama_perusahaan}}  </td>
        </tr>
        <tr>
            <td> Lokasi Pemasangan</td>
            <td>:{{ $perhitungankhusus->pendaftaran->lokasi_pemasangan}} </td>
        </tr>
         <tr>
            <td> Teks Reklame</td>
            <td>:{{  $perhitungankhusus->pendaftaran->teks_reklame}} </td>
        </tr>
         <tr>
            <td> TMT</td>
            <td>:{{ $perhitungankhusus->pendaftaran->tmt}} </td>
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
            <td> {{$perhitungankhusus->jenisreklame->nama_reklame}} </td>
            <td> {{$perhitungankhusus->panjang}}</td>
            <td> {{$perhitungankhusus->lebar}}</td>
            <td> {{$perhitungankhusus->sisi}}</td>
            <td> {{$perhitungankhusus->buah}}</td>
            <td> {{$perhitungankhusus->index_zona_khusus}}</td>
            <td> {{$perhitungankhusus->index_bahan}}</td>
            <td> {{$kali}}</td>
            <td> {{$perhitungankhusus->tarif}}</td>
            <td> Rp {{$total}}</td>
            </tr>
            </table>
    
    <table style="width: 100%">
    <h4 style="text-align: right;">NIP. 19680213 198903 1 008</h4>
    <h4 style="text-align: right;">Muhammad Munadjat, S.AP</h4>
    <br><br><br>
    <h4 style="text-align: right;">Kepala UPT Pajak Daerah Wilayah I</h4>
   
</body>
</html>
