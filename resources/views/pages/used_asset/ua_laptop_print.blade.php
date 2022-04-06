<html>

<head>
    <title>Laporan Laptop</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    {{-- <link rel="stylesheet" href="{{used_asset('backend/vendor/bootstrap/css/bootstrap.min.css')}}"> --}}

</head>


<body>
    <style type="text/css">
        th, td {
        padding-left: 8px;
        }
		table tr td,
		table tr th{
			font-size: 10pt;
		}
        .img-left{
        width:100px;
        height:30px;
        }
        .img-right{
            width:100px;
            height:50px;
            margin-top:-80px;
        }
        h4{
            margin-top:-20px;
        }
        h5{
            margin-top:-4px;
        }
	</style>
	<center>
        <div class="col" align="left">
            <img class="img-left" src="{{public_path('backend\dist\images\itcs-report-logo.png')}}" alt="">
        </div>
		<h5>PT TRIMITRA CHITRAHASTA</h5>
        <h6>DATA PENGGUNAAN LAPTOP</h6>
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
            <td> &nbsp;{{$used_asset->kode_fa}}</td>
        </tr>
        <tr>
            <td width="200px">Nama User</td>
            <td> &nbsp;{{$used_asset->name}}</td>
        </tr>
        <tr>
            <td width="200px">NIK</td>
            <td>&nbsp;{{$used_asset->nik}}</td>
        </tr>
        <tr>
            <th bgcolor="#D5D8DC" colspan="2">Spesifikasi</th>
        </tr>
        <tr>
            <td width="200px">Merk Laptop</td>
            <td> &nbsp;{{$used_asset->lp_merk}} {{$used_asset->lp_tipe}} </td>
        </tr>
        <tr>
            <td width="200px">Serial Number</td>
            <td> &nbsp;{{$used_asset->serial_number}} </td>
        </tr>
        <tr>
            <td width="200px">Processor</td>
            <td> &nbsp;{{$used_asset->p_merk}} {{$used_asset->p_tipe}} {{$used_asset->p_jenis}} </td>
        </tr>
        <tr>
            <td width="200px">RAM</td>
            <td>&nbsp;{{$used_asset->r_tipe}}, {{$used_asset->r_kapasitas}} GB,{{$used_asset->r_slot}} Channel</td>
        </tr>
        <tr>
            <td width="200px">Hardisk Drive</td>
            <td>&nbsp;{{$used_asset->hd_merk}},&nbsp;{{$used_asset->hd_tipe}},&nbsp;{{$used_asset->hd_kapasitas}} GB
            </td>
        </tr>
        <tr>
            <td width="200px">Graphic Card</td>
            <td>&nbsp;{{$used_asset->vga_merk}}&nbsp;{{$used_asset->vga_tipe}}&nbsp;{{$used_asset->vga_kapasitas}}</td>
        </tr>
        <tr>
            <td width="200px">Network</td>
            <td>&nbsp;{{$used_asset->eth_name}}&nbsp;{{$used_asset->eth_mac}}</td>
        </tr>
        <tr>
            <td width="200px">Wireless</td>
            <td>&nbsp;{{$used_asset->wireless_name}}&nbsp;: <br>{{$used_asset->wireless_mac}}</td>
        </tr>
        <tr>
            <td width="200px">Bluetooth</td>
            <td>&nbsp;{{$used_asset->bluetooth_name}}&nbsp;{{$used_asset->bluetooth_mac}}</td>
        </tr>
        <tr>
            <td width="200px">Optical Drive</td>
            <td>&nbsp;{{$used_asset->optical_drive}}</td>
        </tr>
    </table>



</body>

</html>
