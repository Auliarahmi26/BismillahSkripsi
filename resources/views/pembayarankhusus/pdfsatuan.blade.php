<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>UPT Pajak Daerah Wilayah I - Data Pendaftaran</title>
    
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

    <h4 style="text-align: center;">SURAT SETORAN PAJAK DAERAH</h4>

                @php
                    $kali=($pembayarankhusus['masa_pajak']*$pembayarankhusus->jenisreklame['tarif']);

                    $total = 0;
                    $total += ($pembayarankhusus['panjang']*$pembayarankhusus['lebar']*$pembayarankhusus['sisi']*$pembayarankhusus['buah']*$pembayarankhusus['index_zona_khusus']*$pembayarankhusus['index_bahan']*$kali*($pembayarankhusus['tarif']/100))
                @endphp

    <p>Telah Menerima Pembayaran Pajak Reklame dari :</p>
    
    
        <table style="width: 100%"> 
        <tr>
            <td>Nomor Pendaftaran</td>
            <td>:973/{{ $pembayarankhusus->pendaftaran ['id'] }}-UPTPDWIL1/BPPRD/2019</td>
        </tr>

        <tr>    
            <td> Tanggal Pembayaran </td>
            <td>:{{ $pembayarankhusus -> updated_at->format('d F Y') }}  </td>
        </tr>
        
        <tr>    
            <td> Nama Perusahaan </td>
            <td>:{{ $pembayarankhusus->pendaftaran->wajibpajak->nama_perusahaan}}  </td>
        </tr>
       
         <tr>
            <td> Teks Reklame</td>
            <td>:{{  $pembayarankhusus->pendaftaran->teks_reklame}} </td>
        </tr>

         <tr>
            <td> Jenis Reklame </td>
            <td>:{{$pembayarankhusus->jenisreklame->nama_reklame}} </td>
        </tr>

         <tr>
            <td> TMT</td>
            <td>:{{ $pembayarankhusus->pendaftaran->tmt}} </td>
        </tr>

        <tr>
            <td> Jumlah Yang Dibayar</td>
            <td>: Rp {{$total}} </td>
        </tr>

    </table>
    <h4 style="text-align: right;">Petugas Yang Menerima</h4>
    <br><br>
    <h4 style="text-align: right;">______________________</h4>

   
    
   
</body>
</html>
