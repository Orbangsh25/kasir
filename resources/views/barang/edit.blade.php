@extends('layout.layout')

@section('content')
 <div class="card-header">
                <h3 class="card-title">Edit Data Barang</h3>
 </div>
              <!-- /.card-header -->
 <div class="card-body">
 	<form method="POST" action="/barang/update/{{$barang->id}}">
	@csrf
	@method('put')
	<div class="form-group">
		<label>Id Barang</label>
	<input class="form-control" type="text" value="{{$barang->id_barang}}" name="id_barang" placeholder="Id Barang">
	</div>
	<div class="form-group">
		<label>Kategori</label>
	<input class="form-control" type="text" value="{{$barang->id_kategori}}" name="id_kategori" placeholder="id_kategori">
	</div>
	<div class="form-group">
		<label>Nama</label>
	<input class="form-control" type="text" value="{{$barang->nama}}" name="nama" placeholder="nama">
	</div>
	<div class="form-group">
		<label>Harga</label>
	<input class="form-control" type="text" value="{{$barang->harga}}" name="harga" placeholder="Harga">
	</div>
	<div class="form-group">
		<label>Stok</label>
	<input class="form-control" type="text" value="{{$barang->stok}}" name="stok" placeholder="Stok">
	</div>
	<div class="form-group">
		<input class="btn btn-primary" type="submit" name="Edit">
</form>
</div>
@endsection
