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
    <table border="0.5" width="1400px">
        <thead>
            <tr>
                <th width="30px" align="center">No</th>
                <th width="130px">Kode FA</th>
                <th width="120px">Merk</th>
                <th width="100px">Serial Number</th>
                <th width="130px">Processor</th>
                <th width="200px">RAM</th>
                <th width="150px">HDD | SSD (GB)</th>
                <th width="150px">VGA</th>
                <th width="170px">LAN</th>
                <th width="200px">Wireless</th>
            </tr>
        </thead>
        <tbody>
            @php $i=1 @endphp
            @foreach($laptop as $l)
            <tr>
                <td align="center">{{ $i++ }}</td>
                <td>{{$l->kode_fa}}</td>
                <td>{{$l->lp_merk}}{{$l->lp_tipe}}</td>
                <td>{{$l->serial_number}}</td>
                <td>{{$l->p_merk}} {{$l->p_jenis}} {{$l->p_tipe}} </td>
                <td>{{$l->r_kapasitas}} GB, {{$l->r_tipe}}, {{$l->r_slot}} Channel</td>
                <td>{{$l->hd_merk}} {{$l->hd_kapasitas}} - {{$l->ssd_merk}} {{$l->ssd_kapasitas}}</td>
                <td>{{$l->vga_merk}} {{$l->vga_tipe}} {{$l->vga_kapasitas}}</td>
                <td>{{$l->eth_name}} : {{$l->eth_mac}} </td>
                <td>{{$l->wireless_name}} : {{$l->wireless_mac}} </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <br>
    <br>
    <table border="1" align="right">
        <thead>
            <tr>
                <th width="160px"> &nbsp; Prepared</th>
                <th width="160px"> &nbsp; Assign</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td width="160px" height="100px"></td>
                <td width="160px" height="100px"></td>
            </tr>
            <tr>
                <td width="160px" height="30px">&nbsp; Fathur Rahmansyah</td>
                <td width="160px" height="30px">&nbsp; Galih Supriadi</td>
            </tr>
        </tbody>
    </table>
</body>

</html>
