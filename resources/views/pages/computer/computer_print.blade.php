<html>

<head>
    <title>Laporan Komputer</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    {{-- <link rel="stylesheet" href="{{asset('backend/vendor/bootstrap/css/bootstrap.min.css')}}"> --}}

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
		<h4>PT Trimitra Chitrahasta</h4>
        <h5>Laporan Data Komputer</a></h5>
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
            <td> &nbsp;{{$komputer->kode_fa}}</td>
        <tr>
            <td width="200px">Tanggal Pembelian</td>
            <td> &nbsp;{{$komputer->tanggal_beli}}</td>
        </tr>
        <tr>
            <td width="200px">No PPB Pembelian</td>
            <td>&nbsp;{{$komputer->ppb_pembelian}}</td>
        </tr>
        <tr>
            <th bgcolor="#D5D8DC" colspan="2">Spesifikasi</th>
        </tr>
        <tr>
            <td width="200px">Processor</td>
            <td> &nbsp;{{$komputer->p_merk}} {{$komputer->p_tipe}} {{$komputer->p_jenis}} </td>
        <tr>
            <td width="200px">Mainboard</td>
            <td> &nbsp;{{$komputer->m_merk}} {{$komputer->m_tipe}}</td>
        </tr>
        <tr>
            <td width="200px">RAM</td>
            <td>&nbsp;{{$komputer->r_tipe}}, {{$komputer->r_kapasitas}} GB,{{$komputer->r_slot}} Channel</td>
        </tr>
        <tr>
            <td width="200px">Hardisk Drive 1</td>
            <td>&nbsp;{{$komputer->hd1_merk}}&nbsp;{{$komputer->hd1_tipe}}&nbsp;{{$komputer->hd1_kapasitas}} GB</td>
        </tr>
        <tr>
            <td width="200px">Hardisk Drive 2</td>
            <td>&nbsp;{{$komputer->hd2_merk}}&nbsp;{{$komputer->hd2_tipe}}&nbsp;{{$komputer->hd2_kapasitas}} GB</td>
        </tr>
        <tr>
            <td width="200px">SSD</td>
            <td>&nbsp;{{$komputer->ssd_merk}}&nbsp;{{$komputer->ssd_tipe}}&nbsp;{{$komputer->ssd_kapasitas}} GB</td>
        </tr>
        <tr>
            <td width="200px">Graphic Card</td>
            <td>&nbsp;{{$komputer->vga_external}}</td>
        </tr>
        <tr>
            <td width="200px">Network</td>
            <td>&nbsp;{{$komputer->lan_nama}}</td>
        </tr>
        <tr>
            <td width="200px">Mac Address</td>
            <td>&nbsp;{{$komputer->lan_mac}}</td>
        </tr>


    </table>



</body>

</html>
