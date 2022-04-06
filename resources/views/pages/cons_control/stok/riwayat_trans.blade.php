@extends('layouts.admin')
@section('title', 'Trans History | Consumable Control')
@section('title-sub', 'Transaction History')
@section('breadcrumb')
<ol class="breadcrumb float-sm-right">
    <li class="breadcrumb-item"><a href="/">Consumable Control</a></li>
    <li class="breadcrumb-item active">Transaction History</li>
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
        <div class="card-header">
            <h3 class="card-title">Stock Out</h3>
        </div>
        <div class="card-body">
            <table id="table-so" class="table table-hover table-striped w-full">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Barang</th>
                        <th>Jumlah</th>
                        <th>Nama Pengambil</th>
                        <th>Section</th>
                        <th>No Permintaan</th>
                        <th>Tanggal</th>
                    </tr>
                </thead>

            </table>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Stock In</h3>
        </div>
        <div class="card-body">

            <table id="table-si" class="table table-hover table-striped w-full">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Barang</th>
                        <th>Jumlah</th>
                        <th>No PPB</th>
                        <th>Tanggal </th>
                    </tr>
                </thead>

            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
@endsection
@push('page-script')
<script>
    $(function () {
        $('#table-so').DataTable({
            processing: true,
            serverSide: true,
            ajax: '/stok/transaksi_riwayat_out',
            columns: [{
                    data: 'no',
                    name: 'id',
                    render: function (data, type, row, meta) {
                        return meta.row + meta.settings._iDisplayStart + 1;
                    }
                },
                {
                    data: 'barang_name',
                    name: 'barang_name'
                },
                {
                    data: 'jumlah',
                    name: 'jumlah'
                },
                {
                    data: 'name',
                    name: 'name'
                },
                {
                    data: 'section',
                    name: 'section'
                },
                {
                    data: 'no_perm',
                    name: 'no_perm'
                },
                {
                    data: 'date',
                    name: 'date'
                }
            ],
            order : [[0, 'dsc']]
        });
        $('#table-si').DataTable({
            processing: true,
            serverSide: true,
            ajax: '/stok/transaksi_riwayat_in',
            columns: [{
                    data: 'no',
                    name: 'id',
                    render: function (data, type, row, meta) {
                        return meta.row + meta.settings._iDisplayStart + 1;
                    }
                },
                {
                    data: 'barang_name',
                    name: 'barang_name'
                },
                {
                    data: 'jumlah',
                    name: 'jumlah'
                },
                {
                    data: 'no_ppb',
                    name: 'no_ppb'
                },
                {
                    data: 'date',
                    name: 'date'
                }
            ],
            order : [[0, 'dsc']]
        });
    });
    

</script>
@endpush
