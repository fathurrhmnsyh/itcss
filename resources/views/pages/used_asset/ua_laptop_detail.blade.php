@extends('layouts.admin')
@section('title', 'Ussed Asset Laptop Detail| ITCS')
@section('title-sub', 'Ussed Asset Laptop Detail')
{{-- @section('breadcrumb')
<ol class="breadcrumb float-sm-right">
    <li class="breadcrumb-item"><a href="/">IT Asset</a></li>
    <li class="breadcrumb-item ">Ussed Asset</li>
    <li class="breadcrumb-item active">Computer</li>
</ol>
@endsection --}}

@section('content')

<div class="col-md-6 col-lg-4">
    <br>
    @if ($message = Session::get('sukses'))
    <div class="alert alert-alt alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        Success, <a class="alert-link" href="javascript:void(0)">{{ $message }}</a>.
    </div>

    @endif

    @if ($message = Session::get('gagal'))
    <div class="alert alert-alt alert-danger alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <a class="alert-link" href="javascript:void(0)">{{ $message }}</a>.
    </div>
    @endif

    @if ($message = Session::get('peringatan'))
    <div class="alert alert-alt alert-warning alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        Ups, <a class="alert-link" href="javascript:void(0)">{{ $message }}</a>.
    </div>
    @endif
</div>

<div class="col-12">
    <div class="card">
        <!-- /.card-header -->
        <div class="card-body">
            <form class="row g-3">
                {{method_field('PUT')}}

                <div class="col-md-4">
                    <label for="kode_fa" class="form-label">User Name</label>
                    <input type="text" name="kode_fa" class="form-control" id="kode_fa" value="{{$used_asset->name}}"
                        disabled>
                </div>
                <div class="col-md-4">
                    <label for="kode_fa" class="form-label">NIK</label>
                    <input type="text" name="kode_fa" class="form-control" id="kode_fa" value="{{$used_asset->nik}}"
                        disabled>
                </div>
                <div class="col-md-4">
                    <label for="kode_fa" class="form-label">Kode FA</label>
                    <input type="text" name="kode_fa" class="form-control" id="kode_fa" value="{{$used_asset->kode_fa}}"
                        disabled>
                </div>
                <div class="col-md-4">
                    <label for="kode_fa" class="form-label">Merk Laptop</label>
                    <input type="text" name="lp_merk" class="form-control" id="lp_merk" value="{{$used_asset->lp_merk}}"
                        disabled>
                </div>
                <div class="col-md-4">
                    <label for="lp_tipe" class="form-label">Tipe Laptop</label>
                    <input type="text" name="lp_tipe" class="form-control" id="lp_tipe" value="{{$used_asset->lp_tipe}}"
                        disabled>
                </div>
                <div class="col-md-4">
                    <label for="serial_number" class="form-label">Serial Number</label>
                    <input type="text" name="serial_number" class="form-control" id="serial_number"
                        value="{{$used_asset->serial_number}}" disabled>
                </div>
                <div class="col-md-3">
                    <label for="p_merk" class="form-label">Merk Processor</label>
                    <select name="p_merk" class="form-control" disabled>
                        <option value="{{$used_asset->p_merk}}" selected='selected'>{{$used_asset->p_merk}}</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label for="p_jenis" class="form-label">Jenis Processor</label>
                    <select name="p_jenis" class="form-control" disabled>
                        <option value="{{$used_asset->p_jenis}}">{{$used_asset->p_jenis}}</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label for="p_tipe" class="form-label">Tipe Processor</label>
                    <input type="text" name="p_tipe" class="form-control" id="p_tipe" value="{{$used_asset->p_tipe}}"
                        disabled>
                </div>
                <div class="col-md-3">
                    <label for="p_kecepatan" class="form-label">Kecepatan Processor ( Ghz ) </label>
                    <input type="text" name="p_kecepatan" class="form-control" id="p_kecepatan"
                        value="{{$used_asset->p_kecepatan}}" disabled>
                </div>
                <div class="col-md-4">
                    <label for="r_kapasitas" class="form-label">RAM Kapasitas</label>
                    <input type="text" name="r_kapasitas" class="form-control" id="r_kapasitas"
                        value="{{$used_asset->r_kapasitas}}" disabled>
                </div>
                <div class="col-md-4">
                    <label for="r_tipe" class="form-label">Tipe RAM</label>
                    <select name="r_tipe" class="form-control" disabled>
                        <option value="{{$used_asset->r_tipe}}" selected='selected'>{{$used_asset->r_tipe}}</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="r_slot" class="form-label">Slot RAM</label>
                    <select name="r_slot" class="form-control" disabled>
                        <option value="{{$used_asset->r_slot}}" selected='selected'>{{$used_asset->r_slot}}</option>
                        <option value="Single">Single</option>
                        <option value="Dual">Dual</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="hd_merk" class="form-label">Merk Hardisk </label>
                    <input type="text" name="hd_merk" class="form-control" id="hd_merk" value="{{$used_asset->hd_merk}}"
                        disabled>
                </div>
                <div class="col-md-4">
                    <label for="hd_tipe" class="form-label">Tipe Hardisk </label>
                    <input type="text" name="hd_tipe" class="form-control" id="hd_tipe" value="{{$used_asset->hd_tipe}}"
                        disabled>
                </div>
                <div class="col-md-4">
                    <label for="hd_kapasitas" class="form-label">Kapasitas Hardisk </label>
                    <input type="text" name="hd_kapasitas" class="form-control" id="hd_kapasitas"
                        value="{{$used_asset->hd_kapasitas}}" disabled>
                </div>
                <div class="col-md-4">
                    <label for="vga_merk" class="form-label">Merk VGA</label>
                    <input type="text" name="vga_merk" class="form-control" id="vga_merk"
                        value="{{$used_asset->vga_merk}}" disabled>
                </div>
                <div class="col-md-4">
                    <label for="vga_tipe" class="form-label">Tipe VGA</label>
                    <input type="text" name="vga_tipe" class="form-control" id="vga_tipe"
                        value="{{$used_asset->vga_tipe}}" disabled>
                </div>
                <div class="col-md-4">
                    <label for="vga_kapasitas" class="form-label">Kapasitas VGA</label>
                    <input type="text" name="vga_kapasitas" class="form-control" id="vga_kapasitas"
                        value="{{$used_asset->vga_kapasitas}}" disabled>
                </div>
                <div class="col-md-6">
                    <label for="eth_name" class="form-label">Ethernet Name</label>
                    <input type="text" name="eth_name" class="form-control" id="eth_name"
                        value="{{$used_asset->eth_name}}" disabled>
                </div>
                <div class="col-md-6">
                    <label for="eth_mac" class="form-label">Ethernet Mac Address</label>
                    <input type="text" name="eth_mac" class="form-control" id="eth_mac" value="{{$used_asset->eth_mac}}"
                        disabled>
                </div>
                <div class="col-md-6">
                    <label for="wireless_name" class="form-label">Wireless Name</label>
                    <input type="text" name="wireless_name" class="form-control" id="wireless_name"
                        value="{{$used_asset->wireless_name}}" disabled>
                </div>
                <div class="col-md-6">
                    <label for="wireless_mac" class="form-label">Wireless Mac Address</label>
                    <input type="text" name="wireless_mac" class="form-control" id="wireless_mac"
                        value="{{$used_asset->wireless_mac}}" disabled>
                </div>
                <div class="col-md-4">
                    <label for="bluetooth_name" class="form-label">Bluetooth Name</label>
                    <input type="text" name="bluetooth_name" class="form-control" id="bluetooth_name"
                        value="{{$used_asset->bluetooth_name}}" disabled>
                </div>
                <div class="col-md-4">
                    <label for="bluetooth_mac" class="form-label">Bluetooth Mac Address</label>
                    <input type="text" name="bluetooth_mac" class="form-control" id="bluetooth_mac"
                        value="{{$used_asset->bluetooth_mac}}" disabled>
                </div>
                <div class="col-md-4">
                    <label for="optical_drive" class="form-label">Optical Drive</label>
                    <input type="text" name="optical_drive" class="form-control" id="optical_drive"
                        value="{{$used_asset->optical_drive}}" disabled>
                </div>
                <div class="col-md-12">
                    <br>
                    <input class="btn btn-warning" action="action" onclick="window.history.go(-1); return false;"
                        type="submit" value="Cancel" />
                    <a href="/user_laptop/print/{{$used_asset->id}}" type="button" target="_blank"
                        class="btn btn-success mb-3"><i class="fa fa-print"></i> Print</a>
                </div>
            </form>
            <section class="content-header">
                <h3>
                </h3>
            </section>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>

@endsection
