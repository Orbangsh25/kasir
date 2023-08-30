@extends('layout.layout')

@section('content')
 <div class="card-header">
                <h3 class="card-title">Aplikasi Pertanian</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              	<a class="btn btn-warning" href="/transaksi/tambah">Tambah</a>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                  <td>No</td>
                    <th>Id Transaksi</th>
                    <th>Id Barang</th>
                    <th>Jumlah</th>
                    <th>Date</th>
                    <th>Total Harga</th>
                    <th>Bayar</th>
                    <th>Aksi</th>  
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($transaksi as $row)
					<tr>
            <td>{{$row->id}}</td>
						<td>{{$row->id_transaksi}}</td>
						<td>{{$row->id_barang}}</td>
						<td>{{$row->jumlah}}</td>
            <td>{{$row->tanggal}}</td>
						<td>{{$row->total_harga}}</td>
						<td>{{$row->bayar}}</td>
						<td><a class="btn btn-primary" href="/transaksi/edit/{{$row->id}}">Edit</a> | <a class="btn btn-danger" href="/transaksi/destroy/{{$row->id}}">Delete</td>
					</tr>
				@endforeach
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
@endsection