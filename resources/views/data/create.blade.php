@extends('main')

@section('title')
    Menambahkan Data Barang
@endsection
@section('content')
<div class="card">
            <div class="card-header">
                <strong>Form Tambah</strong> Data Barang
            </div>
            <div class="card-body card-block">
                <form method="post" action="{{ route('mhs.store') }}">
                {{ csrf_field() }}
                    <div class="form-group">ID Barang<input type="text"  name="id" placeholder="Masukkan ID Barang.." class="form-control" value="{{ old('id')}}">
                    @if($errors->has('id'))
                    <div>{{ $errors->first('id')}}</div>
                    @endif
                    </div>
                    <div class="form-group">Nama Barang<input type="text"  name="nama" placeholder="Masukkan Nama Barang.." class="form-control" value="{{ old('nama')}}">
                    @if($errors->has('nama'))
                    <div>{{ $errors->first('nama')}}</div>
                    @endif
                    </div>
                    <div class="form-group">Deskripsi<input type="text"  name="deskripsi" placeholder="Masukkan Deskripsi Barang.." class="form-control" value="{{ old('deskripsi')}}">
                    @if($errors->has('deskripsi'))
                    <div>{{ $errors->first('deskripsi')}}</div>
                    @endif
                    </div>
                    <div class="form-group">Stok<input type="text"  name="stok" placeholder="Masukkan Stok Barang.." class="form-control" value="{{ old('stok')}}">
                    @if($errors->has('stok'))
                    <div>{{ $errors->first('stok')}}</div>
                    @endif
                    </div>
                    <div class="form-group">Harga<input type="text"  name="harga" placeholder="Masukkan Harga Barang.." class="form-control" value="{{ old('harga')}}">
                    @if($errors->has('harga'))
                    <div>{{ $errors->first('harga')}}</div>
                    @endif
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
@endsection