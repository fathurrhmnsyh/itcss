@extends('layouts.admin')
@section('title', 'Laptop Add | ITCS')
@section('title-sub', 'Laptop Add')
@section('breadcrumb')
{{-- <ol class="breadcrumb float-sm-right">
    <li class="breadcrumb-item"><a href="/">IT Asset</a></li>
    <li class="breadcrumb-item ">Database</li>
    <li class="breadcrumb-item active">Laptop</li>
</ol>
@endsection --}}

@section('content')

<div class="col-12">
    <div class="card">
        <!-- /.card-header -->
        <div class="card-body">
            <div class="col-md-12">
                <form class="row g-3" method="post" action="/laptop/store">
                    {{csrf_field()}}
                    <div class="col-md-3">
                        <label for="kode_fa" class="form-label">Kode FA</label>
                        <input type="text" name="kode_fa" class="form-control" id="kode_fa" value="{{old('kode_fa')}}">
                        @if($errors->has('kode_fa'))
                        <div class="text-danger">
                            {{$errors->first('kode_fa')}}
                        </div>
                        @endif
                    </div>
                    <div class="col-md-3">
                        <label for="tanggal_beli" class="form-label">Tanggal Pembelian</label>
                        <input type="date" name="tanggal_beli" class="form-control" id="tanggal_beli"
                            value="{{old('tanggal_beli')}}">
                    </div>
                    <div class="col-md-3">
                        <label for="ppb_pembelian" class="form-label">No PPB Pembelian</label>
                        <input type="text" name="ppb_pembelian" class="form-control" id="ppb_pembelian"
                            value="{{old('ppb_pembelian')}}">
                    </div>
                    <div class="col-md-3">
                        <label for="serial_number" class="form-label">Serial Number</label>
                        <input type="text" name="serial_number" class="form-control" id="serial_number"
                            value="{{old('serial_number')}}">
                    </div>
                    <div class="col-md-6">
                        <label for="lp_merk" class="form-label">Merk Laptop</label>
                        <input type="text" name="lp_merk" class="form-control" id="lp_merk" value="{{old('lp_merk')}}">
                    </div>
                    <div class="col-md-6">
                        <label for="lp_tipe" class="form-label">Tipe Laptop</label>
                        <input type="text" name="lp_tipe" class="form-control" id="lp_tipe" value="{{old('lp_tipe')}}">
                    </div>
                    <div class="col-md-3">
                        <label for="p_merk" class="form-label">Merk Processor</label>
                        <select name="p_merk" class="form-control">
                            <option>-pilih-</option>
                            <option value="intel" {{ old('p_merk') == "intel" ? 'selected' : '' }}>Intel</option>
                            <option value="AMD" {{ old('p_merk') == "AMD" ? 'selected' : '' }}>AMD</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label for="p_jenis" class="form-label">Jenis Processor</label>
                        <select name="p_jenis" class="form-control">
                            <option>-pilih-</option>
                            <option value="Dual Core" {{ old('p_jenis') == "Dual Core" ? 'selected' : '' }}>Dual Core
                            </option>
                            <option value="Core 2 Duo" {{ old('p_jenis') == "Core 2 Duo" ? 'selected' : '' }}>Core 2 Duo
                            </option>
                            <option value="Core i3" {{ old('p_jenis') == "Core i3" ? 'selected' : '' }}>Core i3</option>
                            <option value="Core i5" {{ old('p_jenis') == "Core i5" ? 'selected' : '' }}>Core i5</option>
                            <option value="Core i7" {{ old('p_jenis') == "Core i7" ? 'selected' : '' }}>Core i7</option>
                            <option value="Ryzen 3" {{ old('p_jenis') == "Ryzen 3" ? 'selected' : '' }}>Ryzen 3</option>
                            <option value="Ryzen 5" {{ old('p_jenis') == "Ryzen 5" ? 'selected' : '' }}>Ryzen 5</option>
                            <option value="Ryzen 7" {{ old('p_jenis') == "Ryzen 7" ? 'selected' : '' }}>Ryzen 7</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label for="p_tipe" class="form-label">Tipe Processor</label>
                        <input type="text" name="p_tipe" class="form-control" id="p_tipe" value="{{old('p_tipe')}}">
                    </div>
                    <div class="col-md-3">
                        <label for="p_kecepatan" class="form-label">Kecepatan Processor ( Ghz ) </label>
                        <input type="text" name="p_kecepatan" class="form-control" id="p_kecepatan"
                            value="{{old('p_kecepatan')}}">
                    </div>
                    <div class="col-md-4">
                        <label for="r_kapasitas" class="form-label">RAM Kapasitas</label>
                        <input type="text" name="r_kapasitas" class="form-control" id="r_kapasitas"
                            value="{{old('r_kapasitas')}}">
                    </div>
                    <div class="col-md-4">
                        <label for="r_tipe" class="form-label">Tipe RAM</label>
                        <select name="r_tipe" class="form-control">
                            <option>-pilih-</option>
                            <option value="DDR 2" {{ old('r_tipe') == "DDR 2" ? 'selected' : '' }}>DDR 2</option>
                            <option value="DDR 3" {{ old('r_tipe') == "DDR 3" ? 'selected' : '' }}>DDR 3</option>
                            <option value="DDR 4" {{ old('r_tipe') == "DDR 4" ? 'selected' : '' }}>DDR 4</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="r_slot" class="form-label">Slot RAM</label>
                        <select name="r_slot" class="form-control">
                            <option>-pilih-</option>
                            <option value="Single" {{ old('r_slot') == "Single" ? 'selected' : '' }}>Single</option>
                            <option value="Dual" {{ old('r_slot') == "Dual" ? 'selected' : '' }}>Dual</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="hd_merk" class="form-label">Merk Hardisk</label>
                        <input type="text" name="hd_merk" class="form-control" id="hd_merk" value="{{old('hd_merk')}}">
                    </div>
                    <div class="col-md-4">
                        <label for="hd_tipe" class="form-label">Tipe Hardisk</label>
                        <input type="text" name="hd_tipe" class="form-control" id="hd_tipe" value="{{old('hd_tipe')}}">
                    </div>
                    <div class="col-md-4">
                        <label for="hd_kapasitas" class="form-label">Kapasitas Hardisk</label>
                        <input type="text" name="hd_kapasitas" class="form-control" id="hd_kapasitas"
                            value="{{old('hd_kapasitas')}}">
                    </div>
                    <div class="col-md-4">
                        <label for="ssd_merk" class="form-label">Merk SSD</label>
                        <input type="text" name="ssd_merk" class="form-control" id="ssd_merk"
                            value="{{old('ssd_merk')}}">
                    </div>
                    <div class="col-md-4">
                        <label for="ssd_tipe" class="form-label">Tipe SSD</label>
                        <input type="text" name="ssd_tipe" class="form-control" id="ssd_tipe"
                            value="{{old('ssd_tipe')}}">
                    </div>
                    <div class="col-md-4">
                        <label for="ssd_kapasitas" class="form-label">Kapasitas SSD</label>
                        <input type="text" name="ssd_kapasitas" class="form-control" id="ssd_kapasitas"
                            value="{{old('ssd_kapasitas')}}">
                    </div>
                    <div class="col-md-4">
                        <label for="vga_merk" class="form-label">Merk VGA</label>
                        <input type="text" name="vga_merk" class="form-control" id="vga_merk"
                            value="{{old('vga_merk')}}">
                    </div>
                    <div class="col-md-4">
                        <label for="vga_tipe" class="form-label">Tipe VGA</label>
                        <input type="text" name="vga_tipe" class="form-control" id="vga_tipe"
                            value="{{old('vga_tipe')}}">
                    </div>
                    <div class="col-md-4">
                        <label for="vga_kapasitas" class="form-label">Kapasitas VGA</label>
                        <input type="text" name="vga_kapasitas" class="form-control" id="vga_kapasitas"
                            value="{{old('vga_kapasitas')}}">
                    </div>
                    <div class="col-md-6">
                        <label for="eth_name" class="form-label">Ethernet Name</label>
                        <input type="text" name="eth_name" class="form-control" id="eth_name"
                            value="{{old('eth_name')}}">
                    </div>
                    <div class="col-md-6">
                        <label for="eth_mac" class="form-label">Ethernet Mac Address</label>
                        <input type="text" name="eth_mac" class="form-control" id="eth_mac" value="{{old('eth_mac')}}">
                        @if($errors->has('eth_mac'))
                        <div class="text-danger">
                            {{$errors->first('eth_mac')}}
                        </div>
                        @endif
                    </div>
                    <div class="col-md-6">
                        <label for="wireless_name" class="form-label"><span style="color: red">*</span>Wireless
                            Name</label>
                        <input type="text" name="wireless_name" class="form-control" id="wireless_name"
                            value="{{old('wireless_name')}}">
                    </div>
                    <div class="col-md-6">
                        <label for="wireless_mac" class="form-label"><span style="color: red">*</span>Wireless Mac
                            Address</label>
                        <input type="text" name="wireless_mac" class="form-control" id="wireless_mac"
                            value="{{old('wireless_mac')}}">
                        @if($errors->has('wireless_mac'))
                        <div class="text-danger">
                            {{$errors->first('wireless_mac')}}
                        </div>
                        @endif
                    </div>
                    <div class="col-md-4">
                        <label for="bluetooth_name" class="form-label">Bluetooth name</label>
                        <input type="text" name="bluetooth_name" class="form-control" id="bluetooth_name"
                            value="{{old('bluetooth_name')}}">
                    </div>
                    <div class="col-md-4">
                        <label for="bluetooth_mac" class="form-label">Bluetooth Mac</label>
                        <input type="text" name="bluetooth_mac" class="form-control" id="bluetooth_mac"
                            value="{{old('bluetooth_mac')}}">
                    </div>
                    <div class="col-md-4">
                        <label for="optical_drive" class="form-label">Optical Drive</label>
                        <input type="text" name="optical_drive" class="form-control" id="optical_drive"
                            value="{{old('optical_drive')}}">
                    </div>


                    <div class="col-md-12">
                        <br>
                        <input class="btn btn-warning" action="action" onclick="window.history.go(-1); return false;"
                            type="submit" value="Cancel" />
                        <input type="submit" class="btn btn-primary" value="Save">
                    </div>
                </form>
                <section class="content-header">
                    <h3>

                    </h3>
                </section>
            </div>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>



@endsection
