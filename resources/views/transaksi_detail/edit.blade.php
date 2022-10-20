@extends('layout.layout')

@section('content')
 <div class="card-header">
                <h3 class="card-title">Edit Data Transaksi Detail</h3>
 </div>
              <!-- /.card-header -->
 <div class="card-body">
 	<form method="POST" action="/transaksi/update/{{$transaksi->id}}">
	@csrf
	@method('put')
	<div class="form-group">
		<label>Id Transaksi_detail</label>
	<input class="form-control" type="text" value="{{$transaksi->id_transaksi_detail}}" name="id_transaksi" placeholder="ID transaksi_detail">
	</div>
	<div class="form-group">
		<label>Id Transaksi</label>
	<input class="form-control" type="text" value="{{$transaksi->id_transaksi}}" name="id_transaksi" placeholder="Id Transaksi">
	</div>
	<div class="form-group">
		<label>Id Barang</label>
	<input class="form-control" type="text" value="{{$transaksi->id_barang}}" name="id_barang" placeholder="ID Barang">
	</div>
	<div class="form-group">
		<label>Transaksi Jenis</label>
	<input class="form-control" type="text" value="{{$transaksi->transaksi_jenis}}" name="transaksi_jenis" placeholder="Transaksi Jenis">
	</div>
    <div class="form-group">
		<label>Transaksi Harga</label>
	<input class="form-control" type="text" value="{{$transaksi->transaksi_Harga}}" name="transaksi_Harga">
	</div>
    <div class="form-group">
		<label>Transaksi Jumlah</label>
	<input class="form-control" type="text" value="{{$transaksi->transaksi_jumlah}}" name="transaksi_jumlah">
	</div>
	<div class="form-group">
		<label>Transaksi Detail_status</label>
	<input class="form-control" type="text" value="{{$transaksi->transaksi_detail_status}}" name="transaksi_detail_status">
	</div>
	<div class="form-group">
		<input class="btn btn-primary" type="submit">
</form>
</div>
@endsection
