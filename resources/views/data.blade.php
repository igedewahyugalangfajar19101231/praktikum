@extends('main')

@section('title')
    Halaman Data Barang
@endsection
@section('content')
<div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <a href="{{ route('mhs.create') }}" class="btn btn-success">Tambah Data <i class="menu-icon fa fa-plus"></i></a>
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
                        <th><center>Action 1</center></th>
                        <th><center>Action 2</center></th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($mhs as $index => $isi)
                        <tr>
                            <td>{{ $index+1 }}</td>
                            <td>{{ $isi->id }}</td>
                            <td>{{ $isi->nama}}</td>
                            <td>{{ $isi->deskripsi}}</td>
                            <td>{{ $isi->stok}}</td>
                            <td>{{ $isi->harga}}</td>
                            <td><center>
                            <a href="{{ route('mhs.show', $isi->id) }}" class="btn btn-primary">Show</a>  
                            <a href="{{ route('mhs.edit', $isi->id) }}" class="btn btn-warning">Edit </a> 
                            </center> 
                            </td>
                            <td><center>
                            <form method="POST" action="{{ route('mhs.destroy', $isi->id) }}">
                            {{ csrf_field() }}
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" name="btn_delete" class="btn btn-danger btn-fill delete">Delete</button>
                            </form>
                            </center>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>
     </div><!-- .animated -->
</div><!-- .content -->
@endsection