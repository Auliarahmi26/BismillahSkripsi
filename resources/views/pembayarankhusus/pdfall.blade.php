<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>UPT Pajak Daerah Wilayah I - Data Pembayaran Khusus</title>
    
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

    <h3 style="text-align: center;">Data Pembayaran Khusus</h3>
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
                        >No. Pendaftaran</th>
                    <th style="border : 1px solid black;
                                border-collapse: collapse;
                                opacity: 0.95;
                                padding: 10px;
                                text-align: center;"
                        >Tanggal Pembayaran</th>
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
                        >Nama Perusahaan</th>
                    <th style="border : 1px solid black;
                                border-collapse: collapse;
                                opacity: 0.95;
                                padding: 10px;
                                text-align: center;"
                        >Teks Reklame</th>
                    <th style="border : 1px solid black;
                                border-collapse: collapse;
                                opacity: 0.95;
                                padding: 10px;
                                text-align: center;"
                        >Jenis Reklame</th>
                    <th style="border : 1px solid black;
                                border-collapse: collapse;
                                opacity: 0.95;
                                padding: 10px;
                                text-align: center;"
                        >TMT</th>
                    <th style="border : 1px solid black;
                                border-collapse: collapse;
                                opacity: 0.95;
                                padding: 10px;
                                text-align: center;"
                        >Total Bayar</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 0;?>
                @foreach($perhitunganKhususes as $perhitunganKhusus)

                @php
                    $kali=($perhitunganKhusus['masa_pajak']*$perhitunganKhusus->jenisreklame['tarif']);

                    $total = 0;
                    $total += ($perhitunganKhusus['panjang']*$perhitunganKhusus['lebar']*$perhitunganKhusus['sisi']*$perhitunganKhusus['buah']*$perhitunganKhusus['index_zona_khusus']*$perhitunganKhusus['index_bahan']*$kali*($perhitunganKhusus['tarif']/100))
                @endphp

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
                        >973/{{ $perhitunganKhusus->pendaftaran['id'] }}-UPTPDWIL1/BPPRD/2019 </td>
                    <td style="border : 1px solid black;
                                border-collapse: collapse;
                                opacity: 0.95;
                                padding: 10px;
                                text-align: center;"
                        >{{ $perhitunganKhusus->updated_at->format('d F Y') }}</td>
                    <td style="border : 1px solid black;
                                border-collapse: collapse;
                                opacity: 0.95;
                                padding: 10px;
                                text-align: center;"
                        >{{ $perhitunganKhusus->pendaftaran->wajibpajak['nama_wajib_pajak'] }}</td>
                    <td style="border : 1px solid black;
                                border-collapse: collapse;
                                opacity: 0.95;
                                padding: 10px;
                                text-align: center;"
                        >{{ $perhitunganKhusus->pendaftaran->nama_perusahaan }}</td>
                    <td style="border : 1px solid black;
                                border-collapse: collapse;
                                opacity: 0.95;
                                padding: 10px;
                                text-align: center;"
                        >{{ $perhitunganKhusus->pendaftaran->teks_reklame}}</td>
                    <td style="border : 1px solid black;
                                border-collapse: collapse;
                                opacity: 0.95;
                                padding: 10px;
                                text-align: center;"
                        >{{ $perhitunganKhusus->jenisreklame->nama_reklame }}</td>
                    <td style="border : 1px solid black;
                                border-collapse: collapse;
                                opacity: 0.95;
                                padding: 10px;
                                text-align: center;"
                        >{{ $perhitunganKhusus->pendaftaran->tmt }}</td>
                    <td style="border : 1px solid black;
                                border-collapse: collapse;
                                opacity: 0.95;
                                padding: 10px;
                                text-align: center;"
                        >Rp{{ $total }}</td>
    
                        
                </tr>
            @endforeach
            </tbody>
        </table>
        <h4 style="text-align: right;">Kepala UPT Pajak Daerah Wilayah I</h4>
        <br><br>
        <h4 style="text-align: right;">Muhammad Munadjat, S.AP</h4>
         <h4 style="text-align: right;">NIP. 19680213 198903 1 008</h4>
    </div>
    </div>
    
    
</body>
</html>
