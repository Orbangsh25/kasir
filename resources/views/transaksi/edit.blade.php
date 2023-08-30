@extends('layout.layout')

@section('content')
 <div class="card-header">
                <h3 class="card-title">Edit Data Transaksi</h3>
 </div>
              <!-- /.card-header -->
 <div class="card-body">
 	<form method="POST" action="/transaksi/update/{{$transaksi->id}}">
	@csrf
	@method('put')
	<div class="form-group">
		<label>Id Transaksi</label>
	<input class="form-control" type="text" value="{{$transaksi->id_transaksi}}" name="id_barang" placeholder="Id Barang">
	</div>
	<div class="form-group">
		<label>Barang</label>
	<input class="form-control" type="text" value="{{$transaksi->id_barang}}" name="id_barang" placeholder="Id Barang">
	</div>
	<div class="form-group">
		<label>Jumlah</label>
	<input class="form-control" type="text" value="{{$transaksi->jumlah}}" name="jumlah" placeholder="Jumlah">
	</div>
	<div class="form-group">
		<label>Date</label>
	<input class="form-control" type="date" value="{{$transaksi->tanggal}}" name="tanggal" placeholder="Date">
	</div>
	<div class="form-group">
		<label>Total Harga</label>
	<input class="form-control" type="text" value="{{$transaksi->total_harga}}" name="total_harga" placeholder="Total Harga">
	</div>
	<div class="form-group">
		<label>Bayar</label>
	<input class="form-control" type="text" value="{{$transaksi->bayar}}" name="bayar" placeholder="Bayar">
	</div>
	<div class="form-group">
		<input class="btn btn-primary" type="submit" name="Edit">
</form>
</div>
@endsection
