@extends('layout.layout')

@section('content')
 <div class="card-header">
                <h3 class="card-title">Edit Data Transaksi</h3>
 </div>
              <!-- /.card-header -->
 <div class="card-body">
 	<form method="POST" action="/transaksi/update/{{$transaksi->id}}">
	@csrf
	@method('put')
	<div class="form-group">
		<label>Id Transaksi</label>
	<input class="form-control" type="text" value="{{$transaksi->id_transaksi}}" name="id_transaksi">
	</div>
	<div class="form-group">
		<label>Id Admin</label>
	<input class="form-control" type="text" value="{{$transaksi->id_admin}}" name="id_admin">
	</div>
	<div class="form-group">
		<label>Transaksi Tanggal</label>
	<input class="form-control" type="text" value="{{$transaksi->transaksi_tanggal}}" name="transaksi_tanggal">
	</div>
	<div class="form-group">
		<label>Transaksi Nonota</label>
	<input class="form-control" type="text" value="{{$transaksi->transaksi_nonota}}" name="transaksi_nonota">
	</div>
	<div class="form-group">
		<label>Transaksi Status</label>
	<input class="form-control" type="text" value="{{$transaksi->transaksi_status}}" name="transaksi_status">
	</div>
	<div class="form-group">
		<input class="btn btn-primary" type="submit">
</form>
</div>
@endsection
