@extends('layout.layout')

@section('content')
 <div class="card-header">
                <h3 class="card-title">Edit Data Admin</h3>
 </div>
              <!-- /.card-header -->
 <div class="card-body">
 	<form method="POST" action="/admin/update/{{$admin->id}}">
	@csrf
	@method('put')
	<div class="form-group">
		<label>Id Admin</label>
	<input class="form-control" type="text" value="{{$admin->id_admin}}" name="id_admin">
	</div>
	<div class="form-group">
		<label>Username</label>
	<input class="form-control" type="text" value="{{$admin->username}}" name="username">
	</div>
	<div class="form-group">
		<label>Password</label>
	<input class="form-control" type="text" value="{{$admin->password}}" name="password">
	</div>
	<div class="form-group">
		<label>Admin Level</label>
	<input class="form-control" type="text" value="{{$admin->admin_level}}" name="admin_level">
	</div>
	<div class="form-group">
		<label>Admin Nama</label>
	<input class="form-control" type="text" value="{{$admin->admin_nama}}" name="admin_nama">
	</div>
    <div class="form-group">
		<label>Admin Status</label>
	<input class="form-control" type="text" value="{{$admin->admin_status}}" name="admin_status">
	</div>
	<div class="form-group">
		<input class="btn btn-primary" type="submit">
</form>
</div>
@endsection
