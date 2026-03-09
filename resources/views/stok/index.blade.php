@extends('layouts.template')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Data Stok Barang</h3>
    </div>
    <div class="card-body">
        <table class="table table-bordered table-striped table-hover table-sm" id="table-stok">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Barang</th>
                    <th>Jumlah Stok</th>
                    <th>Tanggal</th>
                </tr>
            </thead>
        </table>
    </div>
</div>
@endsection

@push('js')
<script>
    $(document).ready(function () {
        $('#table-stok').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: "{{ url('/stok/list') }}",
                type: "POST",
            },
            columns: [
                { data: "DT_RowIndex", orderable: false, searchable: false },
                { data: "barang_nama" },
                { data: "stok_jumlah" },
                { data: "stok_tanggal" },
            ]
        });
    });
</script>
@endpush