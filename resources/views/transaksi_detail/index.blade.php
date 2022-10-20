@extends('layout.layout')

@section('content')
 <div class="card-header">
                <h3 class="card-title">Data Transaksi Detail</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              	<a class="btn btn-warning" href="/transaksi_detail/tambah">Tambah</a>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Id Transaksi Detail</th>
                    <th>Id Transaksi</th>
                    <th>Id Barang</th>
                    <th>Transaksi Jenis</th>
                    <th>Transaksi Harga</th>
                    <th>Transaksi Jumlah</th>
                    <th>Transaksi Detail_status</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($transaksi_detail as $p)
					<tr>
						<td>{{$p->id_transaksi_detail}}</td>
						<td>{{$p->id_transaksi}}</td>
						<td>{{$p->barang_nama}}</td>
						<td>{{$p->transaksi_jenis}}</td>
            <td>{{$p->transaksi_harga}}</td>
            <td>{{$p->transaksi_jumlah}}</td>
						<td>{{$p->transaksi_detail_status}}</td>
            <td>
            <a href="transaksi/edit/{{$p->id}}" class="btn btn-warning">Edit</a>
            <a href="transaksi/destroy/{{$p->id}}" class="btn btn-danger">Delete</a>
            </td>
          </tr>
				@endforeach
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
@endsection