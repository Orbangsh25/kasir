@extends('layout.layout')

@section('content')
 <div class="card-header">
                <h3 class="card-title">Tambah Data Transaksi</h3>
 </div>
              <!-- /.card-header -->
 <div class="card-body">
<form method="POST" action="/transaksi/store">
	@csrf
	<div class="form-group">
		<label>Id Transaksi</label>
	<input class="form-control" type="text" name="id_transaksi" placeholder="Id Transaksi">
	</div>
	<div class="form-group">
		<label>Barang</label>
	<input class="form-control" type="text" name="id_barang" placeholder="id Barang">
	</div>
	<div class="form-group">
		<label>Jumlah</label>
	<input class="form-control" type="text" name="jumlah" placeholder="Jumlah">
	</div>
	<div class="form-group">
		<label>Date</label>
	<input class="form-control" type="date" name="tanggal" placeholder="Date">
	</div>
	<div class="form-group">
		<label>Total Harga</label>
	<input class="form-control" type="text" name="total_harga" placeholder="Total Harga">
	</div>
	<div class="form-group">
		<label>Bayar</label>
	<input class="form-control" type="text" name="bayar" placeholder="Bayar">
	</div>
	<div class="form-group">
	<input class="btn btn-primary" type="submit" name="Tambah">
	</div>
</form>
</div>

@endsection