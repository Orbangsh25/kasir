@extends('layout.layout')

@section('content')
 <div class="card-header">
                <h3 class="card-title">Aplikasi Pertanian</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              	<a class="btn btn-warning" href="/barang/tambah">Tambah</a>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                  <td>No</td>
                    <th>Id Barang</th>
                    <th>Id Kategori</th>
                    <th>Nama</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($barang as $row)
					<tr>
            <td>{{$row->id}}</td>
						<td>{{$row->id_barang}}</td>
						<td>{{$row->id_kategori}}</td>
						<td>{{$row->nama}}</td>
						<td>{{$row->harga}}</td>
						<td>{{$row->stok}}</td>
						<td><a class="btn btn-primary" href="/barang/edit/{{$row->id}}">Edit</a> | <a class="btn btn-danger" href="/barang/destroy/{{$row->id}}">Delete</td>
					</tr>
				@endforeach
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
@endsection