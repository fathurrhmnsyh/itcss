@extends('layouts.admin')
@section('title', 'Computer Add | ITCS')
@section('title-sub', 'Computer Add')
{{-- @section('breadcrumb')
<ol class="breadcrumb float-sm-right">
    <li class="breadcrumb-item"><a href="/">IT Asset</a></li>
    <li class="breadcrumb-item ">Database</li>
    <li class="breadcrumb-item active">Computer</li>
</ol>
@endsection --}}

@section('content')



<div class="col-12">
    <div class="card">
        <div class="card-body">
            <form class="row g-3" method="post" action="/komputer/store">
                {{csrf_field()}}
                <div class="col-md-4">
                    <label for="kode_fa"><span style="color: red">*</span> Kode FA</label>
                    <input type="text" name="kode_fa" class="form-control" id="kode_fa">
                    @if($errors->has('kode_fa'))
                    <div class="text-danger">
                        {{$errors->first('kode_fa')}}
                    </div>
                    @endif
                </div>
                <div class="col-md-4">
                    <label for="tanggal_beli">Tanggal Pembelian</label>
                    <input type="date" name="tanggal_beli" class="form-control" id="tanggal_beli">
                </div>
                <div class="col-md-4">
                    <label for="ppb_pembelian">No PPB Pembelian</label>
                    <input type="text" name="ppb_pembelian" class="form-control" id="ppb_pembelian">
                </div>
                <div class="col-md-3">
                    <label for="p_merk">Merk Processor</label>
                    <select name="p_merk" class="form-control">
                        <option>-pilih-</option>
                        <option value="intel">Intel</option>
                        <option value="AMD">AMD</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label for="p_jenis">Jenis Processor</label>
                    <select name="p_jenis" class="form-control">
                        <option>-pilih-</option>
                        <option value="Dual Core">Dual Core</option>
                        <option value="Core 2 Duo">Core 2 Duo</option>
                        <option value="Core i3">Core i3</option>
                        <option value="Core i5">Core i5</option>
                        <option value="Core i7">Core i7</option>
                        <option value="A10">A10</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label for="p_tipe">Tipe Processor</label>
                    <input type="text" name="p_tipe" class="form-control" id="p_tipe">
                </div>
                <div class="col-md-3">
                    <label for="p_kecepatan">Kecepatan Processor ( Ghz ) </label>
                    <input type="text" name="p_kecepatan" class="form-control" id="p_kecepatan">
                </div>
                <div class="col-md-6">
                    <label for="m_merk">Merk Mainboard</label>
                    <input type="text" name="m_merk" class="form-control" id="m_merk">
                </div>
                <div class="col-md-6">
                    <label for="m_tipe">Tipe Mainboard</label>
                    <input type="text" name="m_tipe" class="form-control" id="m_tipe">
                </div>
                <div class="col-md-4">
                    <label for="r_kapasitas">RAM Kapasitas</label>
                    <input type="text" name="r_kapasitas" class="form-control" id="r_kapasitas">
                </div>
                <div class="col-md-4">
                    <label for="r_tipe">Tipe RAM</label>
                    <select name="r_tipe" class="form-control">
                        <option>-pilih-</option>
                        <option value="DDR 2">DDR 2</option>
                        <option value="DDR 3">DDR 3</option>
                        <option value="DDR 4">DDR 4</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="r_slot">Slot RAM</label>
                    <select name="r_slot" class="form-control">
                        <option>-pilih-</option>
                        <option value="Single">Single</option>
                        <option value="Dual">Dual</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="hd1_merk">Merk Hardisk 1</label>
                    <input type="text" name="hd1_merk" class="form-control" id="hd1_merk">
                </div>
                <div class="col-md-4">
                    <label for="hd1_tipe">Tipe Hardisk 1</label>
                    <input type="text" name="hd1_tipe" class="form-control" id="hd1_tipe">
                </div>
                <div class="col-md-4">
                    <label for="hd1_kapasitas">Kapasitas Hardisk 1</label>
                    <input type="text" name="hd1_kapasitas" class="form-control" id="hd1_kapasitas">
                </div>
                <div class="col-md-4">
                    <label for="hd2_merk">Merk Hardisk 2</label>
                    <input type="text" name="hd2_merk" class="form-control" id="hd2_merk">
                </div>
                <div class="col-md-4">
                    <label for="hd2_tipe">Tipe Hardisk 2</label>
                    <input type="text" name="hd2_tipe" class="form-control" id="hd2_tipe">
                </div>
                <div class="col-md-4">
                    <label for="hd2_kapasitas">Kapasitas Hardisk 2</label>
                    <input type="text" name="hd2_kapasitas" class="form-control" id="hd2_kapasitas">
                </div>
                <div class="col-md-4">
                    <label for="ssd_merk">Merk SSD</label>
                    <input type="text" name="ssd_merk" class="form-control" id="ssd_merk">
                </div>
                <div class="col-md-4">
                    <label for="ssd_tipe">Tipe SSD</label>
                    <input type="text" name="ssd_tipe" class="form-control" id="ssd_tipe">
                </div>
                <div class="col-md-4">
                    <label for="ssd_kapasitas">Kapasitas SSD</label>
                    <input type="text" name="ssd_kapasitas" class="form-control" id="ssd_kapasitas">
                </div>
                <div class="col-md-12">
                    <label for="vga_external">VGA External</label>
                    <input type="text" name="vga_external" class="form-control" id="vga_external">
                </div>
                <div class="col-md-6">
                    <label for="lan_nama">Ethernet Name</label>
                    <input type="text" name="lan_nama" class="form-control" id="lan_nama">
                </div>
                <div class="col-md-6">
                    <label for="lan_mac"><span style="color: red">*</span> Ethernet Mac Address</label>
                    <input type="text" name="lan_mac" class="form-control" id="lan_mac">
                    @if($errors->has('lan_mac'))
                    <div class="text-danger">
                        {{$errors->first('lan_mac')}}
                    </div>
                    @endif
                </div>
                <div class="col-md-12">
                    <br>
                    <input class="btn btn-warning" action="action" onclick="window.history.go(-1); return false;"
                        type="submit" value="Cancel" />
                    <input type="submit" class="btn btn-primary" value="Save">
                </div>
            </form>
        </div>
        <!-- /.card -->
    </div>
</div>



@endsection
