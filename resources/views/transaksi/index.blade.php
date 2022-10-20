@extends('layout.layout')

@section('content')
 <div class="card-header">
                <h3 class="card-title">Data Transaksi</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              	<a class="btn btn-warning" href="/transaksi/tambah">Tambah</a>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Id Transaksi</th>
                    <th>Id Admin</th>
                    <th>Transaksi Tanggal</th>
                    <th>Transaksi Nonota</th>
                    <th>Transaksi Status</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($transaksi as $p)
					<tr>
						<td>{{$p->id_transaksi}}</td>
						<td>{{$p->id_admin}}</td>
						<td>{{$p->transaksi_tanggal}}</td>
						<td>{{$p->transaksi_nonota}}</td>
						<td>{{$p->transaksi_status}}</td>
            <td>
            <a href="transaksi_detail/detail/{{$p->id_transaksi}}" class="btn btn-success">Detail</a>
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