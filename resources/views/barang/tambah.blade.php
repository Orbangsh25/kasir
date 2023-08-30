@extends('layout.layout')

@section('content')
 <div class="card-header">
                <h3 class="card-title">Tambah Data Barang</h3>
 </div>
              <!-- /.card-header -->
 <div class="card-body">
<form method="POST" action="/barang/store">
	@csrf
	<div class="form-group">
		<label>Id Barang</label>
	<input class="form-control" type="text" name="id_barang" placeholder="Id Barang">
	</div>
	<div class="form-group">
		<label>Kategori</label>
	<input class="form-control" type="text" name="id_kategori" placeholder="id Kategori">
	</div>
	<div class="form-group">
		<label>Nama</label>
	<input class="form-control" type="text" name="nama" placeholder="Nama">
	</div>
	<div class="form-group">
		<label>Harga</label>
	<input class="form-control" type="text" name="harga" placeholder="Harga">
	</div>
	<div class="form-group">
		<label>Stok</label>
	<input class="form-control" type="text" name="stok" placeholder="Stok">
	</div>
	<div class="form-group">
	<input class="btn btn-primary" type="submit" name="Tambah">
	</div>
</form>
</div>

@endsection