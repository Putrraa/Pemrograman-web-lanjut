@extends('layouts.master')
@section('title', 'Data Kategori')
@section('content')
<br>
<div class="container">
    <h2>Tabel Kategori</h2>
    <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalTambahKategori">
        + Tambah Data
    </button>

    <table class="table table-bordered table striped" id="tabel-kategori">
        <thead>
            <tr>
                <th style="width:5%">No.</th>
                <th style="width:15%">Kode Kategori</th>
                <th style="width:30%">Nama Kategori</th>
                <th style="width:10%">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dataKategori as $data)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $data->id }}</td>
                <td>{{ $data->nama_kategori }}</td>
                <td>
                    <button class="btn btn-warning btn-sm"
                        data-bs-toggle="modal"
                        data-bs-target="#modalEditKategori{{ $data->id }}">
                        Ubah
                    </button>

                    <button class="btn btn-danger btn-sm"
                        data-bs-toggle="modal"
                        data-bs-target="#modalHapusKategori{{ $data->id }}">
                        Hapus
                    </button>
                </td>
            </tr>

            {{-- Modal Edit & Hapus --}}
            @include('kategori.edit', ['data' => $data])
            @include('kategori.delete', ['data' => $data])
            @endforeach
        </tbody>
    </table>
</div>
@endsection

@include('kategori.create')

@push('script')
<script>
$(function() {
    $('#tabel-kategori').DataTable();
});
</script>
@endpush
