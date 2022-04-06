@extends('layouts.admin')
@section('title', 'Ussed Asset Computer Detail| ITCS')
@section('title-sub', 'Ussed Asset Computer Detail')
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
                <div class="col-md-6">
                    <label for="m_merk" class="form-label">Merk Mainboard</label>
                    <input type="text" name="m_merk" class="form-control" id="m_merk" value="{{$used_asset->m_merk}}"
                        disabled>
                </div>
                <div class="col-md-6">
                    <label for="m_tipe" class="form-label">Tipe Mainboard</label>
                    <input type="text" name="m_tipe" class="form-control" id="m_tipe" value="{{$used_asset->m_tipe}}"
                        disabled>
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
                    <label for="hd1_merk" class="form-label">Merk Hardisk 1</label>
                    <input type="text" name="hd1_merk" class="form-control" id="hd1_merk"
                        value="{{$used_asset->hd1_merk}}" disabled>
                </div>
                <div class="col-md-4">
                    <label for="hd1_tipe" class="form-label">Tipe Hardisk 1</label>
                    <input type="text" name="hd1_tipe" class="form-control" id="hd1_tipe"
                        value="{{$used_asset->hd1_tipe}}" disabled>
                </div>
                <div class="col-md-4">
                    <label for="hd1_kapasitas" class="form-label">Kapasitas Hardisk 1</label>
                    <input type="text" name="hd1_kapasitas" class="form-control" id="hd1_kapasitas"
                        value="{{$used_asset->hd1_kapasitas}}" disabled>
                </div>
                <div class="col-md-4">
                    <label for="hd2_merk" class="form-label">Merk Hardisk 2</label>
                    <input type="text" name="hd2_merk" class="form-control" id="hd2_merk"
                        value="{{$used_asset->hd2_merk}}" disabled>
                </div>
                <div class="col-md-4">
                    <label for="hd2_tipe" class="form-label">Tipe Hardisk 2</label>
                    <input type="text" name="hd2_tipe" class="form-control" id="hd2_tipe"
                        value="{{$used_asset->hd2_tipe}}" disabled>
                </div>
                <div class="col-md-4">
                    <label for="hd2_kapasitas" class="form-label">Kapasitas Hardisk 2</label>
                    <input type="text" name="hd2_kapasitas" class="form-control" id="hd2_kapasitas"
                        value="{{$used_asset->hd2_kapasitas}}" disabled>
                </div>
                <div class="col-md-12">
                    <label for="vga_external" class="form-label">VGA External</label>
                    <input type="text" name="vga_external" class="form-control" id="vga_external"
                        value="{{$used_asset->vga_external}}" disabled>
                </div>
                <div class="col-md-6">
                    <label for="lan_nama" class="form-label">Ethernet Name</label>
                    <input type="text" name="lan_nama" class="form-control" id="lan_nama"
                        value="{{$used_asset->lan_nama}}" disabled>
                </div>
                <div class="col-md-6">
                    <label for="lan_mac" class="form-label">Ethernet Mac Address</label>
                    <input type="text" name="lan_mac" class="form-control" id="lan_mac" value="{{$used_asset->lan_mac}}"
                        disabled>
                </div>
                <div class="col-md-12">
                    <br>
                    <input class="btn btn-warning" action="action" onclick="window.history.go(-1); return false;"
                        type="submit" value="Cancel" />
                    <a href="/user_kom/print/{{$used_asset->id}}" type="button" target="_blank"
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
