@extends('layouts.admin')
@section('title', 'Product | Consumable Control | ITCS')
@section('title-sub', 'Product')
@section('breadcrumb')
<ol class="breadcrumb float-sm-right">
    <li class="breadcrumb-item"><a href="#">Consumable Control</a></li>
    <li class="breadcrumb-item active">Product</li>
</ol>
@endsection

@section('content')
<div class="col-12">
    <div class="card">
        <!-- /.card-header -->
        <div class="card-body">
            <table class="table table-hover dataTable table-striped w-full" id="example1" data-plugin="dataTable">
                <a href="#myModaladd" class="trigger-btn btn btn-success " data-toggle="modal"><i
                        class="fa fa-plus"></i> Add Data</a>
                <br><br>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Product Name</th>
                        <th>Product Type</th>
                        <th>Supplier</th>
                        <!-- <th>Action</th> -->
                    </tr>
                </thead>
                <tbody>
                    <?php
            $no = 1;
            ?>
                    @foreach($product as $s)
                    <tr>
                        <td>{{$no++}}</td>
                        <td>{{$s->name}}</td>
                        <td>{{$s->type}} </td>
                        <td>{{$s->supp_name}} </td>
                        <!-- <td>
                    <a href="#myModal" class="trigger-btn btn-sm btn-danger " data-toggle="modal"> Delete</a>
                    </td> -->
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
                <h5 class="modal-title" id="exampleModalLabel">Add Product</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="/product/store">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="name">Product Name</label>
                        <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label for="type">Product Type</label>
                        <select name="type" class="form-control">
                            <option>-pilih-</option>
                            <option value="Toner">Toner</option>
                            <option value="Ink">Ink</option>
                            <option value="Catridge">Catridge</option>
                            <option value="Kanban">Kanban</option>
                            <option value="Ribbon">Ribbon</option>
                            <option value="Replacement Part">Replacement Part</option>
                            <option value="Pheriperal">Pheriperal</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="supplier_id">Supplier</label>
                        <br>
                        <select name="supplier_id" class=" form-control" data-plugin="select2">
                            <option value=""></option>
                            @foreach($supplier as $sup)
                            <option value="{{$sup->id}}">{{$sup->supp_name}}</option>
                            @endforeach
                        </select>
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
{{-- end modal add --}}

@endsection
