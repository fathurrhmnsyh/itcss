@extends('layouts.admin')
@section('title', 'Eriwayat Laptop | ITCS')
@section('title-sub', 'Eriwayat Laptop')
@section('breadcrumb')
<ol class="breadcrumb float-sm-right">
    <li class="breadcrumb-item"><a href="/">Eriwayat</a></li>
    <li class="breadcrumb-item ">Laptop</li>
    <li class="breadcrumb-item active">Search</li>
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
            <table class="table table-hover dataTable table-striped w-full" id="example1" data-plugin="dataTable">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Date</th>
                        <th>Issue</th>
                        <th>Problem</th>
                        <th>Solution</th>
                        <th>Replacement Part</th>
                        <th>Technician</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
        $no = 1;
        ?>
                    @foreach($eriwayat as $f)
                    <tr>
                        <td>{{$no++}}</td>
                        <td>{{$f->date}}</td>
                        <td>{{$f->issue}}</td>
                        <td>{{$f->problem}}</td>
                        <td>{{$f->solution}}</td>
                        <td>{{$f->rep_part}}</td>
                        <td>{{$f->technician}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="col-md-12">
                <br>
                <input class="btn btn-warning" action="action" onclick="window.history.go(-1); return false;"
                    type="submit" value="Cancel" />
                <a href="/elapt/print/{{$f->id_lapt}}" type="button" target="_blank" class="btn btn-success mb-3"><i
                        class="fa fa-print"></i> Print</a>
            </div>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>



@endsection
