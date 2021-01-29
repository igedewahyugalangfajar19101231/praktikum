@extends('main')

@section('title')
    Edit Data Barang
@endsection
@section('content')
@foreach($mhs as $index => $isi)
<div class="card">
            <div class="card-header">
                <strong>Form Edit</strong> Data Barang
            </div>
            <div class="card-body card-block">
                <form method="post" action="{{ route('mhs.update', $isi->id) }}">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="PUT">
                    <div class="form-group">ID Barang<input type="text"  name="id" value="{{ $isi->id }}" placeholder="Masukkan iD Barang.." class="form-control" readonly>
                    </div>
                    <div class="form-group">Nama Barang<input type="text"  name="nama" value="{{ $isi->nama }}" placeholder="Masukkan Nama Barang.." class="form-control">
                    </div>
                    <div class="form-group">Deskripsi<input type="text"  name="deskripsi" value="{{ $isi->deskripsi }}" placeholder="Masukkan Deskripsi Barang.." class="form-control">
                    </div>
                    <div class="form-group">Stok<input type="text"  name="stok" value="{{ $isi->stok }}" placeholder="Masukkan Stok Barang.." class="form-control">
                    </div>
                    <div class="form-group">Harga<input type="text"  name="harga" value="{{ $isi->harga }}" placeholder="Masukkan Harga Barang.." class="form-control">
                    </div>
                    </div>
                    <div class="card-footer">
                    <button type="submit" class="btn btn-outline-primary btn-sm" name="btn_submit">
                        <i class="fa fa-check-square"></i> Submit
                    </button>
                    <button type="submit" class="btn btn-outline-danger btn-sm" name="btn_submit">
                        <i class="fa fa-times"></i><a href="{{ route('mhs.index') }}"> Cancel</a>
                    </button>
                    </div>
                </form>     
            </div>
        </div>
@endforeach
@endsection