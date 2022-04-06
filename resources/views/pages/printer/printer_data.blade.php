@extends('layouts.admin')
@section('title', 'Printer Data | ITCS')
@section('title-sub', 'Printer Data')
@section('breadcrumb')
<ol class="breadcrumb float-sm-right">
    <li class="breadcrumb-item"><a href="/">IT Asset</a></li>
    <li class="breadcrumb-item ">Database</li>
    <li class="breadcrumb-item active">Printer</li>
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
                <button class="btn btn-primary " data-toggle="modal" data-target="#myModalAdd"><i
                        class="fa fa-plus"></i> Add
                    Data</button>
                <a href="/komputer/print_all" type="button" class="btn btn-success mb-3" target="_blank"><i
                        class="fa fa-print"></i>
                    Print Data</a>
                <br><br>
                <table class="table table-hover dataTable table-striped w-full" id="myTable" data-plugin="dataTable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode FA</th>
                            <th>Printer Name</th>
                            <th>Printer Type</th>
                            <th>Ink Type</th>
                            <th>Code</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
            $no = 1;
            ?>
                        @foreach($printer as $p => $data)
                        <tr>
                            <td>{{$no++}}</td>
                            <td>{{$data->fa_code}}</td>
                            <td>{{$data->printer_merk}}</td>
                            <td>{{$data->printer_type}}</td>
                            <td>{{$data->type}}</td>
                            <td>{{$data->code}}</td>
                            <td>
                                <a href="/printer/detail/{{$data->id}}" class="btn-sm btn-info">Detail</a>
                                <a href="#" data-id="{{$data->id}}" class="btn-sm btn-success btn-edit">Edit</a>
                                <a class="btn-sm btn-danger" onclick="return confirm('Deleted Data Cant Be Recovered!')"
                                    href="/printer/delete/{{$data->id}}"> <i class="fa fa-trash"> Delete</i></a>
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

<!-- Modal Edit Printer -->
<div class="modal fade" id="modal-edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Add Printer</h4>
            </div>
            <div class="modal-body">

            </div>

        </div>
    </div>
</div>
<!-- Modal Add Printer -->
<div class="modal fade" id="myModalAdd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Printer</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="/printer/store">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label>FA Code</label>
                        <input type="text" name="fa_code" class="form-control" placeholder="FA Code">
                    </div>
                    <div class="form-group">
                        <label>Purchase Date</label>
                        <input type="date" name="purc_date" class="form-control" placeholder="Purchase Date">
                    </div>
                    <div class="form-group">
                        <label>Purchase PPB</label>
                        <input type="text" name="purc_ppb" class="form-control" placeholder="PPB No">
                    </div>
                    <div class="form-group">
                        <label>Serial Number</label>
                        <input type="text" name="serial_number" class="form-control" placeholder="Serial Number">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Merk Printer</label>
                        <select name="printer_merk" class="form-control">
                            <option value="Epson">Epson</option>
                            <option value="HP">HP</option>
                            <option value="Zebra">Zebra</option>
                            <option value="Sato">Sato</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Printer Type</label>
                        <input type="text" name="printer_type" class="form-control" placeholder="Printer Type">
                    </div>
                    <div class="form-group">
                        <label>Ink Type</label><br>
                        <input type="radio" name="type" value="Ink" id="inputRadioInk">
                        <label for="inputRadioInk">Tinta</label>&nbsp;&nbsp;&nbsp;
                        <input type="radio" name="type" value="toner" id="inputRadioInk">
                        <label for="inputRadioInk">Toner</label>&nbsp;&nbsp;&nbsp;
                        <input type="radio" name="type" value="ribbon" id="inputRadioInk">
                        <label for="inputRadioInk">Ribbon</label>
                        <input type="radio" name="type" value="ribbon" id="inputRadioInk">
                        <label for="inputRadioInk">Ribbon</label>
                    </div>
                    <div class="form-group">
                        <label>Ink Code</label>
                        <input type="text" name="code" class="form-control" placeholder="Ink Code">
                    </div>
                    <div class="form-group">
                        <label>Status</label><br>
                        <input type="radio" name="status" value="AI" id="inputRadioSt">
                        <label for="inputRadioSt">Aktiva Investment</label>&nbsp;&nbsp;&nbsp;
                        <input type="radio" name="status" value="Rental" id="inputRadioSt">
                        <label for="inputRadioSt">Rental</label>&nbsp;&nbsp;&nbsp;
                    </div>
                    <div class="form-group">
                        <label>Info</label>
                        <input type="text" name="info" class="form-control" placeholder="Info">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>

        </div>
    </div>
</div>
<!-- Modal Detail Printer -->
<div class="modal fade" id="myModalDetail" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Employee</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="/printer/store">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label>FA Code</label>
                        <input type="text" name="fa_code" class="form-control" placeholder="FA Code">
                    </div>
                    <div class="form-group">
                        <label>Purchase Date</label>
                        <input type="date" name="purc_date" class="form-control" placeholder="Purchase Date">
                    </div>
                    <div class="form-group">
                        <label>Purchase PPB</label>
                        <input type="text" name="purc_ppb" class="form-control" placeholder="PPB No">
                    </div>
                    <div class="form-group">
                        <label>Serial Number</label>
                        <input type="text" name="serial_number" class="form-control" placeholder="Serial Number">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Merk Printer</label>
                        <select name="printer_merk" class="form-control">
                            <option value="Epson">Epson</option>
                            <option value="HP">HP</option>
                            <option value="Zebra">Zebra</option>
                            <option value="Sato">Sato</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Printer Type</label>
                        <input type="text" name="printer_type" class="form-control" placeholder="Printer Type">
                    </div>
                    <div class="form-group">
                        <label>Ink Type</label><br>
                        <input type="radio" name="type" value="Ink" id="inputRadioInk">
                        <label for="inputRadioInk">Tinta</label>&nbsp;&nbsp;&nbsp;
                        <input type="radio" name="type" value="toner" id="inputRadioInk">
                        <label for="inputRadioInk">Toner</label>&nbsp;&nbsp;&nbsp;
                        <input type="radio" name="type" value="ribbon" id="inputRadioInk">
                        <label for="inputRadioInk">Ribbon</label>
                        <input type="radio" name="type" value="ribbon" id="inputRadioInk">
                        <label for="inputRadioInk">Ribbon</label>
                    </div>
                    <div class="form-group">
                        <label>Ink Code</label>
                        <input type="text" name="code" class="form-control" placeholder="Ink Code">
                    </div>
                    <div class="form-group">
                        <label>Status</label><br>
                        <input type="radio" name="status" value="AI" id="inputRadioSt">
                        <label for="inputRadioSt">Aktiva Investment</label>&nbsp;&nbsp;&nbsp;
                        <input type="radio" name="status" value="Rental" id="inputRadioSt">
                        <label for="inputRadioSt">Rental</label>&nbsp;&nbsp;&nbsp;
                    </div>
                    <div class="form-group">
                        <label>Info</label>
                        <input type="text" name="info" class="form-control" placeholder="Info">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>

        </div>
    </div>
</div>



@endsection
