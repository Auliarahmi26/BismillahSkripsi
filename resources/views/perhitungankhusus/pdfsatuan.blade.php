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
                <th colspan="4" width="60%" align="center">BADAN PENGELOLAAN PAJAK DAN RETRIBUSI DAERAH <br> UPT PAJAK DAERAH WILAYAH I KOTA BANJARBARU <br> Jl. Mistar Cokrokusumo RT.13 RW.03 Kelurahan Sungai Besar Banjarbaru Kal-Sel <br> Telp. 0511-6749841</th>
                <th colspan="4" width="20%" align="center"></th>
            </tr>
        </table>
        <hr>

    <h4 style="text-align: center;">PEMBERITAHUAN NILAI PENETAPAN PERHITUNGAN PAJAK REKLAME</h4>
    
    <table style="width: 100%" >
        <tr>    
        <td>    
                Jenis     : Pemasangan Baru <br> <br>       
                Masa Pajak: 1 Tahun
        </td> 
        <td>    
                Nomor BAP  : 973/{{$perhitungankhusus->pendaftaran_id}}/UPTWIL 1 /2019 <br><br>    
         
                Tanggal BAP:
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
            <td>: </td>
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
            <td>    Lebar</td>
            <td>    Sisi</td>
            <td>    Buah</td>
            <td>    Index Zona</td>
            <td>    Index Bahan</td>
            <td>    Biaya</td>
            <td>    %</td>
            <td>    Jumlah </td>
        </tr>
            <tr>    
             <td> {{$perhitungankhusus->jenisreklame->nama_reklame}} </td>
            <td>   Panjang </td>
            <td>    Lebar</td>
            <td>    Sisi</td>
            <td>    Buah</td>
            <td>    Index Zona</td>
            <td>    Index Bahan</td>
            <td>    Biaya</td>
            <td>    %</td>
            <td>    Jumlah </td>
            </tr>
    </table>
</body>
</html>
