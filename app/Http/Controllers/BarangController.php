<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index()
    {
        $bar = Barang::all();
        // $barang = DB::table('tbl_barang')
        // ->join('tbl_jenis','tbl_barang.id_jenis','=','tbl_jenis.id_jenis')
        // ->join('tbl_suplier','tbl_barang.id_suplier','=','tbl_suplier.id_suplier')
        // ->get();

        return view('barang.index',compact('bar'));
    }
    public function create()
    {
        $barang = DB::table('tbl_barang')
        ->get();
        $suplier = DB::table('tbl_suplier')
        ->get();
        $jenis = DB::table('tbl_jenis')
        ->get();
        return view('barang.create',compact(['suplier','jenis','barang']));
    }
    public function store(request $request)
    {
        //dd($request);
        $simpan = Barang::create([
            'barang_kode' => $request->barang_kode,
            'barang_nama' => $request->barang_nama,
            'id_jenis' => $request->id_jenis,
            'id_suplier' => $request->id_suplier,
            'harga_jual' => $request->harga_jual,
            'barang_status' => $request->barang_status,
        ]);
        echo $simpan->id_barang;
        return redirect('/barang');
    }
    public function edit($id)
    {
        $barang = Barang::find($id);
        return view('barang.edit',compact(['barang']));
    }
    public function update($id,request $request)
    {
        $barang = Barang::createfind($id);
        $barang->update($request->except('_token','method'));
        return redirect('barang');
    }
    public function hapus($id)
    { 
         Barang::find($id)->delete();
        return redirect('/barang');
    }
}
