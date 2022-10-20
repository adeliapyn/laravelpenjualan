@extends('layout.layout')

@section('content')
 <div class="card-header">
                <h3 class="card-title">Edit Data Suplier</h3>
 </div>
              <!-- /.card-header -->
 <div class="card-body">
 	<form method="POST" action="/suplier/update/{{$suplier->id}}">
	@csrf
	@method('put')
	<div class="form-group">
		<label>Id Suplier</label>
	<input class="form-control" type="text" value="{{$suplier->id_suplier}}" name="id_suplier">
	</div>
	<div class="form-group">
		<label>Suplier Nama</label>
	<input class="form-control" type="text" value="{{$suplier->suplier_nama}}" name="suplier_nama">
	</div>
	<div class="form-group">
		<label>Suplier Alamat</label>
	<input class="form-control" type="text" value="{{$suplier->suplier_alamat}}" name="suplier_alamat">
	</div>
    <div class="form-group">
		<label>Suplier Phone</label>
	<input class="form-control" type="text" value="{{$suplier->suplier_phone}}" name="suplier_phone">
	</div>
	<div class="form-group">
		<label>Suplier Status</label>
	<input class="form-control" type="text" value="{{$suplier->suplier_status}}" name="suplier_status">
	</div>
	<div class="form-group">
		<input class="btn btn-primary" type="submit">
</form>
</div>
@endsection
