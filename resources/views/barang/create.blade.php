@extends('layout.layout')

@section('content')
 <div class="card-header">
                <h3 class="card-title">Tambah Data Barang</h3>
 </div>
              <!-- /.card-header -->
 <div class="card-body">
<form method="POST" action="/barang/store">
	@csrf
	<div class="form-group">
		<label>Barang Kode</label>
	<input class="form-control" type="text" name="barang_kode" placeholder="">
	</div>
	<div class="form-group">
		<label>Barang Nama</label>
	<input class="form-control" type="text" name="barang_nama" placeholder="">
	</div>
    <div class="form-group">
		<label>Id Jenis</label>
	<input class="form-control" type="text" name="id_jenis" placeholder="">
	</div>
    <div class="form-group">
		<label>Id Suplier</label>
	<input class="form-control" type="text" name="id_suplier" placeholder="">
	</div>
    <div class="form-group">
		<label>Harga Jual</label>
	<input class="form-control" type="text" name="harga_jual" placeholder="">
	</div>
    <div class="form-group">
		<label>Barang Status</label>
	<input class="form-control" type="text" name="barang_status" placeholder="">
	</div>
	<div class="form-group">
	<input class="btn btn-primary" type="submit" name="Tambah">
	</div>
</form>
</div>

@endsection