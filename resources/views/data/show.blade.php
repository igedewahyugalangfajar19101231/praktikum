@extends('main')

@section('title')
    Menampilkan Data Barang
@endsection
@section('content')

@foreach($mhs as $index => $isi)
<div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Data Barang |</strong>
                            <a href="{{ route('mhs.index') }}">Kembali ke halaman sebelumnya</a>
                        </div>
                        <div class="card-body">
                    <table id="bootstrap-data-table" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Deskripsi</th>
                        <th>Stok</th>
                        <th>Harga</th>
                        <th>Tanggal Ditambahkan</th>
                        <th>Tanggal Diubah</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($mhs as $index => $isi)
                        <tr>
                            <td>{{ $index+1 }}</td>
                            <td>{{ $isi->id }}</td>
                            <td>{{ $isi->nama }}</td>
                            <td>{{ $isi->deskripsi}}</td>
                            <td>{{ $isi->stok}}</td>
                            <td>{{ $isi->harga}}</td>
                            <td>{{ $isi->created_at }}</td>
                            <td>{{ $isi->updated_at }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>
@endforeach
@endsection