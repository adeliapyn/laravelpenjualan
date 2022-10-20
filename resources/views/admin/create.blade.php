@extends('layout.layout')

@section('content')
 <div class="card-header">
                <h3 class="card-title">Tambah Data Admin</h3>
 </div>
              <!-- /.card-header -->
 <div class="card-body">
<form method="POST" action="/admin/store">
	@csrf
	<div class="form-group">
		<label>Id Admin</label>
	<input class="form-control" type="text" name="id_admin" placeholder="">
	</div>
	<div class="form-group">
		<label>Username</label>
	<input class="form-control" type="text" name="username" placeholder="">
	</div>
	<div class="form-group">
		<label>Password</label>
	<input class="form-control" type="text" name="password" placeholder="">
	</div>
	<div class="form-group">
		<label>Admin Level</label>
	<input class="form-control" type="text" name="admin_level" placeholder="">
	</div>
	<div class="form-group">
		<label>Admin Nama</label>
	<input class="form-control" type="text" name="admin_nama" placeholder="">
	</div>
	<div class="form-group">
		<label>Admin Status</label>
	<input class="form-control" type="text" name="admin_status" placeholder="">
	</div>
	
	<div class="form-group">
	<input class="btn btn-primary" type="submit" name="Tambah">
	</div>
</form>
</div>

@endsection