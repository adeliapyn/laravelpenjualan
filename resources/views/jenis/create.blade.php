@extends('layout.layout')

@section('content')
 <div class="card-header">
                <h3 class="card-title">Tambah Data Jenis</h3>
 </div>
              <!-- /.card-header -->
 <div class="card-body">
<form method="POST" action="/jenis/store">
	@csrf
	<div class="form-group">
		<label>Jenis Nama</label>
	<input class="form-control" type="text" name="jenis_nama" placeholder="">
	</div>
	<div class="form-group">
		<label>Jenis Status</label>
	<input class="form-control" type="text" name="jenis_status" placeholder="">
	</div>
	<div class="form-group">
	<input class="btn btn-primary" type="submit" name="Tambah">
	</div>
</form>
</div>

@endsection