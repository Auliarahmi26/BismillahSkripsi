<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>UPT Pajak Daerah Wilayah I - Data Pendaftarank</title>
    
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




    </style>

</head>

<body>
        <table align="center" style="width: 80%">
            <tr>
                <td  align="center"><img src="images/logobjblap.png" alt="" ></td>
                <td width="60%" align="center"><h4>UPT PAJAK DAERAH WILAYAH I KOTA BANJARBARU</h4><p>Jl. Mistar Cokrokusumo Kota Banjarbaru <br> Kalimantan Selatan</p></td>
                <td width="20%" align="center"></td>
            </tr>
        </table>
        <hr>

    <h3 style="text-align: center;">Data Pendaftaran</h3>
    
    <table>
   
        <tr>
            <td>Jenis Pendaftaran : </td>
            <td>{{ $pendaftaran -> jenis_pendaftaran }}</td>
        </tr>

        <tr>
            <td>Nomor Pendaftaran : </td>
            <td>{{ $pendaftaran -> nomor_pendaftaran }}</td>
        </tr>
        <tr>
            <td>Tanggal Pendaftaran : </td>
            <td>{{ $pendaftaran -> tanggal_pendaftaran }}</td>
        </tr>
        <tr>
            <td>Nama Wajib Pajak : </td>
            <td>{{ $pendaftaran -> nama_wajib_pajak }}</td>
        </tr>
        <tr>
            <td>Nama Perusahaan : </td>
            <td>{{ $pendaftaran -> nama_perusahaan }}</td>
        </tr>
        <tr>
            <td>Alamat : </td>
            <td>{{ $pendaftaran -> alamat }}</td>
        </tr>
        <tr>
            <td>Lokasi Pemasangan : </td>
            <td>{{ $pendaftaran -> lokasi_pemasangan }}</td>
        </tr>
        <tr>
            <td>Teks Reklame : </td>
            <td>{{ $pendaftaran -> teks_reklame }}</td>
        </tr>
        <tr>
            <td>TMT : </td>
            <td>{{ $pendaftaran -> tmt }}</td>
        </tr>
    </table>
</body>
</html>
