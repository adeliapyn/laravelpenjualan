@extends('layout.layout')

@section('content')
 <div class="card-header">
                <h3 class="card-title">Edit Data Barang</h3>
 </div>
              <!-- /.card-header -->
 <div class="card-body">
 	<form method="POST" action="/barang/update/{{$barang->id}}">
	@csrf
	@method('put')
	<div class="form-group">
		<label>Id Barang</label>
	<input class="form-control" type="text" value="{{$barang->id_barang}}" name="id_barang">
	</div>
	<div class="form-group">
		<label>Barang Kode</label>
	<input class="form-control" type="text" value="{{$barang->barang_kode}}" name="barang_kode">
	</div>
	<div class="form-group">
		<label>Barang Nama</label>
	<input class="form-control" type="text" value="{{$barang->barang_nama}}" name="barang_nama">
	</div>
	<div class="form-group">
		<label>Id Jenis</label>
	<input class="form-control" type="text" value="{{$barang->id_jenis}}" name="id_jenis">
	</div>
    <div class="form-group">
		<label>Id Suplier</label>
	<input class="form-control" type="text" value="{{$barang->id_suplier}}" name="id_suplier">
	</div>
    <div class="form-group">
		<label>Harga Jual</label>
	<input class="form-control" type="text" value="{{$barang->harga_jual}}" name="harga_jual">
	</div>
    <div class="form-group">
		<label>Barang Status</label>
	<input class="form-control" type="text" value="{{$barang->barang_status}}" name="barang_status">
	</div>
	<div class="form-group">
		<input class="btn btn-primary" type="submit">
</form>
</div>
@endsection
