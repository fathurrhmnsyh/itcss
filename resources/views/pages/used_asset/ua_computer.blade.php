@extends('layouts.admin')
@section('title', 'Ussed Asset Computer | ITCS')
@section('title-sub', 'Ussed Asset Computer')
@section('breadcrumb')
<ol class="breadcrumb float-sm-right">
    <li class="breadcrumb-item"><a href="/">IT Asset</a></li>
    <li class="breadcrumb-item ">Ussed Asset</li>
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
            <a href="/komputer/print_all" type="button" class="btn btn-success mb-3" target="_blank"><i
                    class="fa fa-print"></i> Print Data</a>
            <br><br>
            <table class="table table-hover dataTable table-striped w-full" id="example1" data-plugin="dataTable">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kode FA</th>
                        <th>Name</th>
                        <th>NIK</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
          $no = 1;
          ?>
                    @foreach($used_asset as $ua)
                    <tr>
                        <td>{{$no++}}</td>
                        <td>{{$ua->kode_fa}}</td>
                        <td>{{$ua->name}}</td>
                        <td>{{$ua->nik}}</td>
                        <td>
                            <a href="/user_kom/detail/{{$ua->id}}" class="btn-sm btn-info"><i class="fa fa-bars"></i>
                                Detail</a>
                            <a class="btn-sm btn-danger"
                                onclick="return confirm('Data Yang Terhapus Tidak Bisa Dikembalikan!')" href=""> <i
                                    class="fa fa-trash"> Delete</i></a>
                            {{-- <a href="#myModal" class="trigger-btn btn-sm btn-danger " data-toggle="modal"> Delete</a> --}}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
<!-- Modal HTML -->
<div id="myModal" class="modal fade">
    <div class="modal-dialog modal-confirm">
        <div class="modal-content">
            <div class="modal-header flex-column">
                <div class="icon-box">
                    <i class="material-icons">&#xE5CD;</i>
                </div>
                <h4 class="modal-title w-100">Are you sure?</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <p>Do you really want to delete these records? This process cannot be undone.</p>
            </div>
            <div class="modal-footer justify-content-center">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <a href="" class="btn btn-danger">Delete</a>
            </div>
        </div>
    </div>
</div>

<!-- Modal Add  -->

<!-- Modal -->
<div class="modal fade" id="modalAdd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Used Computer</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="row g-3" method="post" action="/user_kom/store">
                    {{csrf_field()}}
                    <div class="col-md-6">
                        <label for="p_jenis" ><span style="color: red">*</span>Kode FA</label>
                        <br>
                        <select name="id" class="form-control select2" style="width: 100%;">
                            <option value=""></option>
                            @foreach($komputer as $kom)
                            <option value="{{$kom->id}}">{{$kom->kode_fa}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="name"><span style="color: red">*</span>Name</label>
                        <select name="name" class="form-control select2" style="width: 100%;">
                            <option value=""></option>
                            @foreach($employee as $ep)
                            <option value="{{$ep->id}}">{{$ep->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-12">
                        <br>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-primary" value="Simpan"><br>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>




@endsection
