@extends('layouts.admin')
@section('title', 'Eriwayat Laptop | ITCS')
@section('title-sub', 'Eriwayat Laptop')
@section('breadcrumb')
<ol class="breadcrumb float-sm-right">
    <li class="breadcrumb-item"><a href="/">Eriwayat</a></li>
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
            <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#modalAdd"><i
                    class="fa fa-plus"></i> Add Data</button>
            <a href="/elapt/search" type="button" class="btn btn-warning mb-3"><i class="fa fa-search"></i> Print
                Data</a>
            <br><br>

             <table class="table table-hover dataTable table-striped w-full" id="example1" data-plugin="dataTable">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kode FA</th>
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
                    @foreach($elapt as $l)
                    <tr>
                        <td>{{$no++}}</td>
                        <td>{{$l->id_lapt}}</td>
                        <td>{{$l->date}}</td>
                        <td>{{$l->issue}}</td>
                        <td>{{$l->problem}}</td>
                        <td>{{$l->solution}}</td>
                        <td>{{$l->rep_part}}</td>
                        <td>{{$l->technician}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
<div class="modal fade" id="modalAdd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Riwayat</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="/elapt/store">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label>Date</label>
                        <input type="date" name="date" class="form-control" placeholder="Date">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">FA Code</label>
                        <select name="id_lapt" class="form-control" data-plugin="select2">
                            <option value="">Open Select Menu</option>
                            @foreach($laptop as $l)
                            <option value="{{ $l->kode_fa}}">{{  $l->kode_fa}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Issue</label>
                        <input type="text" name="issue" class="form-control" placeholder="Issue">
                    </div>
                    <div class="form-group">
                        <label>Problem</label>
                        <input type="text" name="problem" class="form-control" placeholder="Problem">
                    </div>
                    <div class="form-group">
                        <label>Solution</label>
                        <input type="text" name="solution" class="form-control" placeholder="Solution">
                    </div>
                    <div class="form-group">
                        <label>Replacement Part</label>
                        <input type="text" name="rep_part" class="form-control" placeholder="Replacement Part">
                    </div>
                    <div class="form-group">
                        <label>Technician</label>
                        <input type="text" name="technician" class="form-control" placeholder="Technician">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>



@endsection
