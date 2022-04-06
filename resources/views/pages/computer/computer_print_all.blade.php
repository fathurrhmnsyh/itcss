<html>
<head>
	<title>Laporan Komputer</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

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
    <table border="0.5" width="1400px" >
        <thead>
            <tr align="center">
                <th width="30px">No</th>
                <th width="150px">Kode FA</th>
                <th width="200px">Processor</th>
                <th width="200px">Mainboard</th>
                <th width="200px">RAM</th>
                <th width="150px">HDD | SSD (GB) </th>
                <th width="200px">VGA</th>
                <th width="200px">LAN</th>
            </tr>
        </thead>
        <tbody>
            @php $i=1 @endphp
            @foreach($komputer as $k)
            <tr>
                <td align="center">{{ $i++ }}</td>
                <td>{{$k->kode_fa}}</td>
                <td>{{$k->p_merk}} {{$k->p_jenis}} {{$k->p_tipe}}  </td>
                <td>{{$k->m_merk}} {{$k->m_tipe}}</td>
                <td>{{$k->r_kapasitas}} GB,{{$k->r_tipe}},{{$k->r_slot}} Channel</td>
                <td>{{$k->hd1_merk}} {{$k->hd1_kapasitas}} | {{$k->ssd_merk}} {{$k->ssd_kapasitas}}</td>
                <td>{{$k->vga_external}}</td>
                <td>{{$k->lan_nama}} : {{$k->lan_mac}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <br>
    <br>
    <table border="1" align="right">
        <thead >
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

