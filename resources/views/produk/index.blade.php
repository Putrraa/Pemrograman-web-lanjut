@extends('layouts.master')
@section('title', 'Aplikasi Laravel')
@section('content')
<br>
<div class="container">
    <h2>Tabel Produk</h2>
    <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalTambahProduk">
    + Tambah Data
    </button>


    <table class="table table-bordered table striped" id="tabel-produk">
        <thead>
            <tr>
                <th style=width:1%>No.</th>
                <th style="width:5%">Kode Produk</th>
                <th style="width:5%">Nama Produk</th>
                <th style="width:5%">Kategori</th>
                <th style="width:5%">Harga</th>
                <th style="width:5%">Stok</th>
                <th style="width:5%">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dataproduk as $data)
            <tr>
                <td> {{ $loop->iteration }}</td>
                <td> {{ $data->id }}</td>
                <td> {{ $data->nama_produk }}</td>
                <td> {{ $data->kategori->nama_kategori?? '-' }}</td>
                <td> {{ number_format($data->harga, 0, ',', '.') }}</td>
                <td> {{ $data->stock }}</td>
                <td>
                    <button class="btn btn-warning btn-sm"
                        data-bs-toggle="modal"
                        data-bs-target="#modalEditProduk{{ $data->id }}">
                        Ubah
                    </button>

                    <button class="btn btn-danger btn-sm"
                        data-bs-toggle="modal"
                        data-bs-target="#modalHapusProduk{{ $data->id }}">
                        Hapus
                    </button>
                </td>
            </tr>

            @include('produk.edit', ['data' => $data])
            @include('produk.delete', ['data' => $data])
            @endforeach
        </tbody>
    </table>
</div>
@endsection

@include('produk.create')


@push('script')
<script>
$(function() {
    $('#tabel-produk').DataTable();
});
</script>
@endpush
