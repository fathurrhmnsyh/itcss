@extends('layouts.admin')
@section('title', 'Computer Detail | ITCS')
@section('title-sub', 'Computer Detail')
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
            <form class="row g-3">
                {{method_field('PUT')}}
                <div class="col-md-4">
                    <label for="kode_fa" class="form-label">Kode FA</label>
                    <input type="text" name="kode_fa" class="form-control" id="kode_fa" value="{{$komputer->kode_fa}}"
                        disabled>
                </div>
                <div class="col-md-4">
                    <label for="tanggal_beli" class="form-label">Tanggal Pembelian</label>
                    <input type="date" name="tanggal_beli" class="form-control" id="tanggal_beli"
                        value="{{$komputer->tanggal_beli}}" disabled>
                </div>
                <div class="col-md-4">
                    <label for="ppb_pembelian" class="form-label">No PPB Pembelian</label>
                    <input type="text" name="ppb_pembelian" class="form-control" id="ppb_pembelian"
                        value="{{$komputer->ppb_pembelian}}" disabled>
                </div>
                <div class="col-md-3">
                    <label for="p_merk" class="form-label">Merk Processor</label>
                    <select name="p_merk" class="form-control" disabled>
                        <option value="{{$komputer->p_merk}}" selected='selected'>{{$komputer->p_merk}}</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label for="p_jenis" class="form-label">Jenis Processor</label>
                    <select name="p_jenis" class="form-control" disabled>
                        <option value="{{$komputer->p_jenis}}">{{$komputer->p_jenis}}</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label for="p_tipe" class="form-label">Tipe Processor</label>
                    <input type="text" name="p_tipe" class="form-control" id="p_tipe" value="{{$komputer->p_tipe}}"
                        disabled>
                </div>
                <div class="col-md-3">
                    <label for="p_kecepatan" class="form-label">Kecepatan Processor ( Ghz ) </label>
                    <input type="text" name="p_kecepatan" class="form-control" id="p_kecepatan"
                        value="{{$komputer->p_kecepatan}}" disabled>
                </div>
                <div class="col-md-6">
                    <label for="m_merk" class="form-label">Merk Mainboard</label>
                    <input type="text" name="m_merk" class="form-control" id="m_merk" value="{{$komputer->m_merk}}"
                        disabled>
                </div>
                <div class="col-md-6">
                    <label for="m_tipe" class="form-label">Tipe Mainboard</label>
                    <input type="text" name="m_tipe" class="form-control" id="m_tipe" value="{{$komputer->m_tipe}}"
                        disabled>
                </div>
                <div class="col-md-4">
                    <label for="r_kapasitas" class="form-label">RAM Kapasitas</label>
                    <input type="text" name="r_kapasitas" class="form-control" id="r_kapasitas"
                        value="{{$komputer->r_kapasitas}}" disabled>
                </div>
                <div class="col-md-4">
                    <label for="r_tipe" class="form-label">Tipe RAM</label>
                    <select name="r_tipe" class="form-control" disabled>
                        <option value="{{$komputer->r_tipe}}" selected='selected'>{{$komputer->r_tipe}}</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="r_slot" class="form-label">Slot RAM</label>
                    <select name="r_slot" class="form-control" disabled>
                        <option value="{{$komputer->r_slot}}" selected='selected'>{{$komputer->r_slot}}</option>
                        <option value="Single">Single</option>
                        <option value="Dual">Dual</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="hd1_merk" class="form-label">Merk Hardisk 1</label>
                    <input type="text" name="hd1_merk" class="form-control" id="hd1_merk"
                        value="{{$komputer->hd1_merk}}" disabled>
                </div>
                <div class="col-md-4">
                    <label for="hd1_tipe" class="form-label">Tipe Hardisk 1</label>
                    <input type="text" name="hd1_tipe" class="form-control" id="hd1_tipe"
                        value="{{$komputer->hd1_tipe}}" disabled>
                </div>
                <div class="col-md-4">
                    <label for="hd1_kapasitas" class="form-label">Kapasitas Hardisk 1</label>
                    <input type="text" name="hd1_kapasitas" class="form-control" id="hd1_kapasitas"
                        value="{{$komputer->hd1_kapasitas}}" disabled>
                </div>
                <div class="col-md-4">
                    <label for="hd2_merk" class="form-label">Merk Hardisk 2</label>
                    <input type="text" name="hd2_merk" class="form-control" id="hd2_merk"
                        value="{{$komputer->hd2_merk}}" disabled>
                </div>
                <div class="col-md-4">
                    <label for="hd2_tipe" class="form-label">Tipe Hardisk 2</label>
                    <input type="text" name="hd2_tipe" class="form-control" id="hd2_tipe"
                        value="{{$komputer->hd2_tipe}}" disabled>
                </div>
                <div class="col-md-4">
                    <label for="hd2_kapasitas" class="form-label">Kapasitas Hardisk 2</label>
                    <input type="text" name="hd2_kapasitas" class="form-control" id="hd2_kapasitas"
                        value="{{$komputer->hd2_kapasitas}}" disabled>
                </div>
                <div class="col-md-4">
                    <label for="ssd_merk" class="form-label">Merk SSD</label>
                    <input type="text" name="ssd_merk" class="form-control" id="ssd_merk"
                        value="{{$komputer->ssd_merk}}" disabled>
                </div>
                <div class="col-md-4">
                    <label for="ssd_tipe" class="form-label">Tipe SSD</label>
                    <input type="text" name="ssd_tipe" class="form-control" id="ssd_tipe"
                        value="{{$komputer->ssd_tipe}}" disabled>
                </div>
                <div class="col-md-4">
                    <label for="ssd_kapasitas" class="form-label">Kapasitas SSD</label>
                    <input type="text" name="ssd_kapasitas" class="form-control" id="ssd_kapasitas"
                        value="{{$komputer->ssd_kapasitas}}" disabled>
                </div>
                <div class="col-md-12">
                    <label for="vga_external" class="form-label">VGA External</label>
                    <input type="text" name="vga_external" class="form-control" id="vga_external"
                        value="{{$komputer->vga_external}}" disabled>
                </div>
                <div class="col-md-6">
                    <label for="lan_nama" class="form-label">Ethernet Name</label>
                    <input type="text" name="lan_nama" class="form-control" id="lan_nama"
                        value="{{$komputer->lan_nama}}" disabled>
                </div>
                <div class="col-md-6">
                    <label for="lan_mac" class="form-label">Ethernet Mac Address</label>
                    <input type="text" name="lan_mac" class="form-control" id="lan_mac" value="{{$komputer->lan_mac}}"
                        disabled>
                </div>
                <div class="col-md-12">
                    <br>
                    <input class="btn btn-warning" action="action" onclick="window.history.go(-1); return false;"
                        type="submit" value="Cancel" />
                    <a href="/komputer/edit/{{$komputer->id}}" type="button" class="btn btn-primary mb-3"><i
                            class="fa fa-pencil"></i> Edit</a>
                    <a href="/komputer/print/{{$komputer->id}}" type="button" target="_blank"
                        class="btn btn-success mb-3"><i class="fa fa-print"></i> Print</a>
                </div>
            </form>
        </div>
        <!-- /.card -->
    </div>
</div>



@endsection
