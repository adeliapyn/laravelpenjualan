@extends('layout.layout')

@section('content')
 <div class="card-header">
                <h3 class="card-title">Tambah Data Transaksi</h3>
 </div>
              <!-- /.card-header -->
 <div class="card-body">
<form method="POST" action="/transaksi/store">
	@csrf
	<div class="form-group">
		<label>Id Admin</label>
	<input class="form-control" type="text" name="id_admin" placeholder="">
	</div>
	<div class="form-group">
		<label>Transaksi Tanggal</label>
	<input class="form-control" type="date" name="transaksi_tanggal" placeholder="T">
	</div>
	<div class="form-group">
		<label>Transaksi Nonota</label>
	<input class="form-control" type="text" name="transaksi_nonota" placeholder="">
	</div>
	<div class="form-group">
		<label>Transaksi Status</label>
	<input class="form-control" type="text" name="transaksi_status" placeholder="">
	</div>
	<div class="form-group">
		<label>Id Barang</label>
	<select name="id_barang" class="form-control">
		<option>Silahkan dipilih</option>
		@foreach($barang as $p)
		<option value="{{$p->id_barang}}">{{$p->barang_nama}}</option>
		@endforeach
	</select>
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
		<label>Transaksi Detail Status</label>
	<input class="form-control" type="text" name="transaksi_detail_status" placeholder="">
	</div>
	<div class="form-group">
	<input class="btn btn-primary" type="submit" name="Tambah">
	</div>

</form>
</div>

@endsection