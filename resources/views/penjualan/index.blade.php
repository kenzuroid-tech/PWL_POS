@extends('layouts.template')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Data Transaksi Penjualan</h3>
    </div>
    <div class="card-body">
        <table class="table table-bordered table-striped table-hover table-sm" id="table-penjualan">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kode Penjualan</th>
                    <th>Pembeli</th>
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
        $('#table-penjualan').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: "{{ url('/penjualan/list') }}",
                type: "POST",
            },
            columns: [
                { data: "DT_RowIndex", orderable: false, searchable: false },
                { data: "penjualan_kode" },
                { data: "pembeli" },
                { data: "penjualan_tanggal" },
            ]
        });
    });
</script>
@endpush