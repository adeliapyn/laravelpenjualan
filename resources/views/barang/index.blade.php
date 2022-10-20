@extends('layout.layout')

@section('content')
 <div class="card-header">
      <h3 class="card-title">Data Barang</h3>
          </div>
            <!-- /.card-header -->
          <div class="card-body">
            	<a class="btn btn-warning" href="/barang/tambah">Tambah</a>
              <table id="example1" class="table table-bordered table-striped">
              <thead>
          <tr>
             <th>Id Barang</th>
             <th>Barang Kode</th>
             <th>Barang Nama</th>
             <th>Id Jenis</th>
             <th>Id Suplier</th>
             <th>Harga Jual</th>
             <th>Barang Status</th>
             <th>Aksi</th>
         </tr>
              </thead>
              <tbody>
              @foreach($bar as $p)
					<tr>
						<td>{{$p->id_barang}}</td>
						<td>{{$p->barang_kode}}</td>
						<td>{{$p->barang_nama}}</td>
						<td>{{$p->id_jenis}}</td>
						<td>{{$p->id_suplier}}</td>
            <td>{{$p->harga_jual}}</td>
            <td>{{$p->barang_status}}</td>
						<td><a class="btn btn-primary" href="/barang/edit/{{$p->id}}">Edit</a> | <a class="btn btn-danger" href="/barang/hapus/{{$p->id}}">Delete</td>
					</tr>
				@endforeach
                </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
@endsection