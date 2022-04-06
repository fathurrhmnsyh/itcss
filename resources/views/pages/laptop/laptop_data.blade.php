@extends('layouts.admin')
@section('title', 'Laptop Data | ITCS')
@section('title-sub', 'Laptop Data')
@section('breadcrumb')
<ol class="breadcrumb float-sm-right">
    <li class="breadcrumb-item"><a href="/">IT Asset</a></li>
    <li class="breadcrumb-item ">Database</li>
    <li class="breadcrumb-item active">Laptop</li>
</ol>
@endsection

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
            <div class="col-md-12">
                <a href="/laptop/add" type="button" class="btn btn-primary mb-3"><i class="fa fa-plus"></i> Add Data</a>
                <a href="/laptop/print_all" type="button" target="_blank" class="btn btn-success mb-3"><i
                        class="fa fa-print"></i> Print Data</a>
                <br><br>
                <table class="table table-hover dataTable table-striped w-full" id="myTable" data-plugin="dataTable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode FA</th>
                            <th>Merk</th>
                            <th>Processor</th>
                            <th>RAM</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                    $no = 1;
                    ?>
                        @foreach($laptop as $l)
                        <tr>
                            <td>{{$no++}}</td>
                            <td>{{$l->kode_fa}}</td>
                            <td>{{$l->lp_merk}} {{$l->lp_tipe}}</td>
                            <td>{{$l->p_merk}} {{$l->p_jenis}} Core {{$l->p_tipe}}</td>
                            <td>{{$l->r_kapasitas}} GB {{$l->r_tipe}} {{$l->r_slot}} Channel </td>
                            <td>
                                <a href="/laptop/detail/{{$l->id}}" class="btn-sm btn-info">Detail</a>
                                <a class="btn-sm btn-danger" onclick="return confirm('Deleted Data Cant Be Recovered!')"
                                    href="/laptop/delete/{{$l->id}}"> <i class="fa fa-trash"> Delete</i></a>
                                <!-- <a href="#myModal" class="trigger-btn btn-sm btn-danger " data-toggle="modal"> Delete</a> -->
                            </td>
                        </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>



@endsection
