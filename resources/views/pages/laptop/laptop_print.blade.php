<html>

<head>
    <title>Laporan Laptop</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

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
        <h5>Laporan Data Laptop</a></h5>
        <div class="col" align="right">
            <img class="img-right" src="{{public_path('backend\dist\images\logo-tch.png')}}" alt="">
        </div>
        <br>
    </center>
    <table border="0.5" width="700px" class="table-1">
        <tr>
            <th bgcolor="#D5D8DC" colspan="2">Data Teknis</th>
        </tr>
        <tr>
            <td width="200px">Kode Fixed Asset</td>
            <td> {{$laptop->kode_fa}}</td>
        <tr>
            <td width="200px">Tanggal Pembelian</td>
            <td> {{$laptop->tanggal_beli}}</td>
        </tr>
        <tr>
            <td width="200px">No PPB Pembelian</td>
            <td>{{$laptop->ppb_pembelian}}</td>
        </tr>
        <tr>
            <th bgcolor="#D5D8DC" colspan="2">Spesifikasi</th>
        </tr>
        <tr>
            <td width="200px">Processor</td>
            <td> {{$laptop->p_merk}} {{$laptop->p_tipe}} {{$laptop->p_jenis}} </td>
        <tr>
            <td width="200px">RAM</td>
            <td>{{$laptop->r_tipe}}, {{$laptop->r_kapasitas}} GB,{{$laptop->r_slot}} Channel</td>
        </tr>
        <tr>
            <td width="200px">Hardisk Drive</td>
            <td>{{$laptop->hd_merk}} {{$laptop->hd_kapasitas}} GB</td>
        </tr>
        <tr>
            <td width="200px">SSD</td>
            <td>{{$laptop->ssd_merk}} {{$laptop->ssd_kapasitas}} GB</td>
        </tr>
        <tr>
            <td width="200px">Graphic Card</td>
            <td>{{$laptop->vga_merk}}&nbsp;{{$laptop->vga_tipe}}&nbsp;{{$laptop->vga_kapasitas}}</td>
        </tr>
        <tr>
            <td width="200px">Ethernet</td>
            <td>{{$laptop->eth_name}}&nbsp;: &nbsp; {{$laptop->eth_mac}}</td>
        </tr>
        <tr>
            <td width="200px">Wireless</td>
            <td>{{$laptop->wireless_name}} :&nbsp;<br>{{$laptop->wireless_mac}}</td>
        </tr>
        <tr>
            <td width="200px">Bluetooth</td>
            <td>{{$laptop->bluetooth_name}}&nbsp;: &nbsp;{{$laptop->bluetooth_mac}}</td>
        </tr>
        <tr>
            <td width="200px">Optical Drive</td>
            <td>{{$laptop->optical_drive}}</td>
        </tr>


    </table>



</body>

</html>
