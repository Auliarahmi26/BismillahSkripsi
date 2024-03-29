<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>UPT Pajak Daerah Wilayah I - Data Wajib Pajak</title>
    
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
                <th colspan="4"  align="center"><img src="img/logo.png" alt="" ></th>
                <th colspan="4" width="80%" align="center">PEMERINTAH KOTA BANJARBARU <br> BADAN PENGELOLAAN PAJAK DAN RETRIBUSI DAERAH <br> UPT PAJAK DAERAH WILAYAH I<br> Jl. Mistar Cokrokusumo RT.13 RW.03 Banjarbaru Kal-Sel <br> Telp. 0511-6749841</th>
                <th colspan="4" width="20%" align="center"></th>
            </tr>
        </table>
        <hr>

    <h3 style="text-align: center;">Data Wajib Pajak</h3>
    <div id="isi">
        <table align="center" style="border : 1px solid black;
                                border-collapse: collapse;
                                opacity: 0.95;
                                padding: 10px;
                                text-align: center;"
                        >
            <thead>
                <tr>
                    <th style="border : 1px solid black;
                                border-collapse: collapse;
                                opacity: 0.95;
                                padding: 10px;
                                text-align: center;"
                        >
                        No
                    </th>
                    <th style="border : 1px solid black;
                                border-collapse: collapse;
                                opacity: 0.95;
                                padding: 10px;
                                text-align: center;"
                        >Nama Wajib Pajak</th>
                    <th style="border : 1px solid black;
                                border-collapse: collapse;
                                opacity: 0.95;
                                padding: 10px;
                                text-align: center;"
                        >No KTP</th>
                    <th style="border : 1px solid black;
                                border-collapse: collapse;
                                opacity: 0.95;
                                padding: 10px;
                                text-align: center;"
                        >Nama Perusahaan</th>
                    <th style="border : 1px solid black;
                                border-collapse: collapse;
                                opacity: 0.95;
                                padding: 10px;
                                text-align: center;"
                        >Alamat</th>
                    <th style="border : 1px solid black;
                                border-collapse: collapse;
                                opacity: 0.95;
                                padding: 10px;
                                text-align: center;"
                        >No HP</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 0;?>
                @foreach($wajibpajaks as $wajibpajak)
                <?php $no++ ;?>
                <tr>
                    <td style="border : 1px solid black;
                                border-collapse: collapse;
                                opacity: 0.95;
                                padding: 10px;
                                text-align: center;"
                        >{{ $no }}</td>
                    <td style="border : 1px solid black;
                                border-collapse: collapse;
                                opacity: 0.95;
                                padding: 10px;
                                text-align: center;"
                        >{{ $wajibpajak->nama_wajib_pajak }}</td>
                    <td style="border : 1px solid black;
                                border-collapse: collapse;
                                opacity: 0.95;
                                padding: 10px;
                                text-align: center;"
                        >{{ $wajibpajak->no_ktp }}</td>
                    <td style="border : 1px solid black;
                                border-collapse: collapse;
                                opacity: 0.95;
                                padding: 10px;
                                text-align: center;"
                        >{{ $wajibpajak->nama_perusahaan }}</td>
                    <td style="border : 1px solid black;
                                border-collapse: collapse;
                                opacity: 0.95;
                                padding: 10px;
                                text-align: center;"
                        >{{ $wajibpajak->alamat }}</td>
                    <td style="border : 1px solid black;
                                border-collapse: collapse;
                                opacity: 0.95;
                                padding: 10px;
                                text-align: center;"
                        >{{ $wajibpajak->no_hp }}</td>
    
                        
                </tr>
            @endforeach
            </tbody>
        </table>
        <br>
        <p style="margin-left: 790px">Kepala UPT Pajak Daerah Wilayah I</p>
        <br>
        <br>
        <p style="margin-left: 800px">Muhammad Munadjat, S.AP</p>
        <p style="margin-left: 800px">NIP. 19680213 198903 1 008</p
    </div>
    </div>
    
    
</body>
</html>
