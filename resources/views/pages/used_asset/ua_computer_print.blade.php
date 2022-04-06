<html>

<head>
    <title>Laporan Komputer</title>
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
        <h6>DATA PENGGUNAAN KOMPUTER</h6>
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
            <td width="200px">Processor</td>
            <td> &nbsp;{{$used_asset->p_merk}} {{$used_asset->p_tipe}} {{$used_asset->p_jenis}} </td>
        <tr>
            <td width="200px">Mainboard</td>
            <td> &nbsp;{{$used_asset->m_merk}} {{$used_asset->m_tipe}}</td>
        </tr>
        <tr>
            <td width="200px">RAM</td>
            <td>&nbsp;{{$used_asset->r_tipe}}, {{$used_asset->r_kapasitas}} GB,{{$used_asset->r_slot}} Channel</td>
        </tr>
        <tr>
            <td width="200px">Hardisk Drive 1</td>
            <td>&nbsp;{{$used_asset->hd1_merk}},&nbsp;{{$used_asset->hd1_tipe}},&nbsp;{{$used_asset->hd1_kapasitas}} GB
            </td>
        </tr>
        <tr>
            <td width="200px">Hardisk Drive 2</td>
            <td>&nbsp;{{$used_asset->hd2_merk}},&nbsp;{{$used_asset->hd2_tipe}},&nbsp;{{$used_asset->hd2_kapasitas}} GB
            </td>
        </tr>
        <tr>
            <td width="200px">Graphic Card</td>
            <td>&nbsp;{{$used_asset->vga_external}}</td>
        </tr>
        <tr>
            <td width="200px">Network</td>
            <td>&nbsp;{{$used_asset->lan_nama}}</td>
        </tr>
        <tr>
            <td width="200px">Mac Address</td>
            <td>&nbsp;{{$used_asset->lan_mac}}</td>
        </tr>


    </table>



</body>

</html>
