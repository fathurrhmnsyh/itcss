@extends('layouts.admin')
@section('title', 'Eriwayat Computer | ITCS')
@section('title-sub', 'Eriwayat Computer')
@section('breadcrumb')
<ol class="breadcrumb float-sm-right">
    <li class="breadcrumb-item"><a href="/">IT Asset</a></li>
    <li class="breadcrumb-item ">E Riwayat</li>
    <li class="breadcrumb-item active">Computer</li>
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
            <a href="/ekom/search" type="button" class="btn btn-warning mb-3"><i class="fa fa-search"></i> Print
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
                    @foreach($ekom as $e)
                    <tr>
                        <td>{{$no++}}</td>
                        <td>{{$e->id_kom}}</td>
                        <td>{{$e->date}}</td>
                        <td>{{$e->issue}}</td>
                        <td>{{$e->problem}}</td>
                        <td>{{$e->solution}}</td>
                        <td>{{$e->rep_part}}</td>
                        <td>{{$e->technician}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
<!-- modal add -->
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
                <form method="POST" action="/ekom/store">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label>Date</label>
                        <input type="date" name="date" class="form-control" placeholder="Date">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">FA Code</label>
                        <select name="id_kom" class="form-control select2" style="width: 100%;" >
                            <option value="">Open Select Menu</option>
                            @foreach($komputer as $k)
                            <option value="{{ $k->kode_fa}}">{{  $k->kode_fa}}</option>
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
