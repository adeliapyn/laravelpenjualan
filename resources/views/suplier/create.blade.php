@extends('layout.layout')

@section('content')
 <div class="card-header">
                <h3 class="card-title">Tambah Data Suplier</h3>
 </div>
              <!-- /.card-header -->
 <div class="card-body">
<form method="POST" action="/suplier/store">
	@csrf
	<div class="form-group">
		<label>Suplier Nama</label>
	<input class="form-control" type="text" name="suplier_nama" placeholder="">
	</div>
	<div class="form-group">
		<label>Suplier Alamat</label>
	<input class="form-control" type="text" name="suplier_alamat" placeholder="">
	</div>
    <div class="form-group">
		<label>Suplier Phone</label>
	<input class="form-control" type="text" name="suplier_phone" placeholder="">
	</div>
	<div class="form-group">
		<label>Suplier Status</label>
	<input class="form-control" type="text" name="suplier_status" placeholder="">
	</div>
	<div class="form-group">
	<input class="btn btn-primary" type="submit" name="Tambah">
	</div>
</form>
</div>

@endsection