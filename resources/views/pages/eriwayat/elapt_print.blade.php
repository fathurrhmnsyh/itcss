<html>

<head>
    <title>Laporan Komputer</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    {{-- <link rel="stylesheet" href="{{asset('backend/vendor/bootstrap/css/bootstrap.min.css')}}"> --}}

</head>

<body>
    <style type="text/css">
        th,
        td {
            padding-left: 8px;
        }

        table tr td,
        table tr th {
            font-size: 10pt;
        }

        .img-left {
            width: 100px;
            height: 30px;
        }

        .img-right {
            width: 100px;
            height: 50px;
            margin-top: -80px;
        }

        h4 {
            margin-top: -20px;
        }

        h5 {
            margin-top: -4px;
        }

    </style>
    <center>
        <div class="col" align="left">
            <img class="img-left" src="{{public_path('backend\dist\images\itcs-report-logo.png')}}" alt="">
        </div>
        <h4>PT Trimitra Chitrahasta</h4>
        <h5>Eriwayat Laptop</a></h5>
        <div class="col" align="right">
            <img class="img-right" src="{{public_path('backend\dist\images\logo-tch.png')}}" alt="">
        </div>
        <br>
    </center>


    <table border="" width="700px" class="table-1">
        <tr>
            <td width="150px">Fixed Asset Code</td>
            <td width="200px">: &nbsp;{{$eriwayat[0]->kode_fa}}</td>
            <td width="120px">Hardisk Drive</td>
            <td width="230px">: &nbsp;{{$eriwayat[0]->hd_merk}}&nbsp;{{$eriwayat[0]->hd_kapasitas}} GB</td>
        </tr>
        <tr>
            <td width="150px">Merk</td>
            <td width="200px">: &nbsp;{{$eriwayat[0]->lp_merk}} {{$eriwayat[0]->lp_tipe}} </td>
            <td width="120px">Graphic Card</td>
            <td width="230px">: &nbsp;{{$eriwayat[0]->vga_merk}} &nbsp;{{$eriwayat[0]->vga_tipe}}
                &nbsp;{{$eriwayat[0]->vga_kapasitas}}</td>
        </tr>
        <tr>
            <td width="150px">Processor</td>
            <td width="200px">: &nbsp;{{$eriwayat[0]->p_merk}} {{$eriwayat[0]->p_jenis}} {{$eriwayat[0]->p_tipe}}</td>
            <td width="120px">LAN</td>
            <td width="230px">: &nbsp;{{$eriwayat[0]->eth_name}}&nbsp;{{$eriwayat[0]->eth_mac}}</td>
        </tr>
        <tr>
            <td width="150px">RAM</td>
            <td width="200px">: &nbsp;{{$eriwayat[0]->r_tipe}}, {{$eriwayat[0]->r_kapasitas}}
                GB,{{$eriwayat[0]->r_slot}} Channel</td>
            <td width="120px">Wireless</td>
            <td width="230px">: &nbsp;{{$eriwayat[0]->wireless_name}} &nbsp;{{$eriwayat[0]->wireless_mac}}</td>
        </tr>
    </table>
    <br>

    <table border="0.5" width="700px" class="table-2">
        <thead>
            <tr align="center">
                <th width="30px">&nbsp;No</th>
                <th width="90px">&nbsp;Date</th>
                <th width="100px">&nbsp;Issue</th>
                <th width="120px">&nbsp;Problem</th>
                <th width="170px">&nbsp;Solution</th>
                <th width="100px">&nbsp;Replc Part</th>
                <th width="90px">&nbsp;Technician</th>
            </tr>
        </thead>
        <tbody>
            <?php
        $no = 1;
        ?>
            @foreach($eriwayat as $f)
            <tr>
                <td>&nbsp;{{$no++}}</td>
                <td>&nbsp;{{$f->date}}</td>
                <td>&nbsp;{{$f->issue}}</td>
                <td>&nbsp;{{$f->problem}}</td>
                <td>&nbsp;{{$f->solution}}</td>
                <td>&nbsp;{{$f->rep_part}}</td>
                <td>&nbsp;{{$f->technician}}</td>
            </tr>
            @endforeach

        </tbody>

    </table>



</body>

</html>
