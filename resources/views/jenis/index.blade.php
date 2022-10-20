@extends('layout.layout')

@section('content')
 <div class="card-header">
                <h3 class="card-title">Data Jenis</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              	<a class="btn btn-warning" href="/jenis/tambah">Tambah</a>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Id Jenis</th>
                    <th>Jenis Nama</th>
                    <th>Jenis Status</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($jenis as $p)
					<tr>
						<td>{{$p->id_jenis}}</td>
						<td>{{$p->jenis_nama}}</td>
						<td>{{$p->jenis_status}}</td>
						<td><a class="btn btn-primary" href="/jenis/edit/{{$p->id}}">Edit</a> | <a class="btn btn-danger" href="/jenis/destroy/{{$p->id}}">Delete</td>
					</tr>
				@endforeach
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
@endsection