@extends('layouts.admin')
@section('title', 'Supplier | Consumable Control | ITCS')
@section('title-sub', 'Supplier')
@section('breadcrumb')
<ol class="breadcrumb float-sm-right">
    <li class="breadcrumb-item"><a href="#">Consumable Control</a></li>
    <li class="breadcrumb-item active">Supplier</li>
</ol>
@endsection

@section('content')
<div class="col-12">
    <div class="card">
        <!-- /.card-header -->
        <div class="card-body">
            <a href="#myModaladd" class="trigger-btn btn btn-success " data-toggle="modal"><i class="fa fa-plus"></i>
                Add Data</a>
            <br><br>
            <table class="table table-hover dataTable table-striped w-full" id="example1" data-plugin="dataTable">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Supplier Name</th>
                        <th>Address</th>
                        <th>Telephone</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
            $no = 1;
            ?>
                    @foreach($supplier as $s)
                    <tr>
                        <td>{{$no++}}</td>
                        <td>{{$s->supp_name}}</td>
                        <td>{{$s->supp_address}} </td>
                        <td>{{$s->supp_phone}}</td>
                        <td>{{$s->supp_email}}</td>
                        <td>
                            <a href="#myModal" class="trigger-btn btn-sm btn-danger " data-toggle="modal"> Delete</a>
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
                <a href="/supplier/delete/{{$s->id}}" class="btn btn-danger">Delete</a>
            </div>
        </div>
    </div>
</div>

{{-- modal add --}}

<div class="modal fade" id="myModaladd" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Supplier Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="/supplier/store">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="supp_name">Supplier Name</label>
                        <input type="text" name="supp_name" class="form-control" id="supp_name"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label for="supp_email">Supplier Email</label>
                        <input type="email" name="supp_email" class="form-control" id="supp_email">
                    </div>
                    <div class="form-group">
                        <label for="supp_phone">Supplier Telephone</label>
                        <input type="text" name="supp_phone" class="form-control" id="supp_phone">
                    </div>
                    <div class="form-group">
                        <label for="supp_address">Supplier Address</label>
                        <textarea class="form-control" name="supp_address" id="supp_address" rows="3"></textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
