@extends('layout.layout')

@section('content')
 <div class="card-header">
                <h3 class="card-title">Data Suplier</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              	<a class="btn btn-warning" href="/suplier/tambah">Tambah</a>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Id Suplier</th>
                    <th>Suplier Nama</th>
                    <th>Suplier Alamat</th>
                    <th>Suplier Phone</th>
                    <th>Suplier Status</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($suplier as $p)
					<tr>
						<td>{{$p->id_suplier}}</td>
						<td>{{$p->suplier_nama}}</td>
						<td>{{$p->suplier_alamat}}</td>
						<td>{{$p->suplier_phone}}</td>
                        <td>{{$p->suplier_status}}</td>
						<td><a class="btn btn-primary" href="/suplier/edit/{{$p->id}}">Edit</a> | <a class="btn btn-danger" href="/suplier/destroy/{{$p->id}}">Delete</td>
					</tr>
				@endforeach
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
@endsection