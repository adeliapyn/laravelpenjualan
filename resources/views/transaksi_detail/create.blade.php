@extends('layout.layout')

@section('content')
 <div class="card-header">
                <h3 class="card-title">Tambah Data Transaksi Detail</h3>
 </div>
              <!-- /.card-header -->
 <div class="card-body">
<form method="POST" action="/transaksi/store">
	@csrf
	<div class="form-group">
		<label>Id Transaksi</label>
	<input class="form-control" type="text" name="id_transaksi" placeholder="">
	</div>
	<div class="form-group">
		<label>Id Barang</label>
	<input class="form-control" type="date" name="id_barang" placeholder="">
	</div>
	<div class="form-group">
		<label>Transaksi Jenis</label>
	<input class="form-control" type="text" name="transaksi_jenis" placeholder="">
	</div>
    <div class="form-group">
		<label>Transaksi Harga</label>
	<input class="form-control" type="text" name="transaksi_harga" placeholder="">
	</div>
    <div class="form-group">
		<label>Transaksi Jumlah</label>
	<input class="form-control" type="text" name="transaksi_jumlah" placeholder="">
	</div>
	<div class="form-group">
		<label>Transaksi Detail_status</label>
	<input class="form-control" type="text" name="transaksi_detail_status" placeholder="">
	</div>
	<div class="form-group">
	<input class="btn btn-primary" type="submit" name="Tambah">
	</div>
</form>
</div>

@endsection