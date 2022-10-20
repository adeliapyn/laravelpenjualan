@extends('layout.layout')

@section('content')
 <div class="card-header">
                <h3 class="card-title">Data Admin</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              	<a class="btn btn-warning" href="/admin/tambah">Tambah</a>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Id Admin</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Admin Level</th>
                    <th>Admin Nama</th>
                    <th>Admin Status</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($admin as $p)
					<tr>
						<td>{{$p->id_admin}}</td>
						<td>{{$p->username}}</td>
						<td>{{$p->password}}</td>
						<td>{{$p->admin_level}}</td>
						<td>{{$p->admin_nama}}</td>
                        <td>{{$p->admin_status}}</td>
						<td><a class="btn btn-primary" href="/admin/edit/{{$p->id}}">Edit</a> | <a class="btn btn-danger" href="/admin/destroy/{{$p->id}}">Delete</td>
					</tr>
				@endforeach
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
@endsection