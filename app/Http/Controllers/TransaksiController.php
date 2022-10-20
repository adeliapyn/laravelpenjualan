<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Transaksi;
use App\Models\Transaksi_detail;
use App\Models\Barang;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function index()
    {
        $transaksi = DB::table('tbl_transaksi')
        ->get();

        //dd($transaksi);
        return view('transaksi.index',compact('transaksi'));
    }
    public function create()
    {
        $barang = DB::table('tbl_barang')
        ->get();
        return view('transaksi.create',compact(['barang']));
    }
    public function store(request $request)
    {
        //simpan ke transaksi
        $simpan = transaksi::create([
            'id_admin' => $request->id_admin,
            'transaksi_tanggal' => $request->transaksi_tanggal,
            'transaksi_nonota' => $request->transaksi_nonota,
            'transaksi_status' => $request->transaksi_status,
        ]);
        echo $simpan->id_transaksi;

        //simpan ke transaksi_detail
        $simpan = transaksi_detail::create([
            'id_transaksi' => $simpan->id_transaksi,
            'id_barang' => $request->id_barang,
            'transaksi_jenis' => $request->transaksi_jenis,
            'transaksi_harga' => $request->transaksi_harga,
            'transaksi_jumlah' => $request->transaksi_jumlah,
            'transaksi_detail_status' => $request->transaksi_detail_status,
        ]);
        echo $simpan->id_transaksi_detail;

        return redirect('/transaksi');
    }
    public function edit($id)
    {
        $transaksi = transaksi::find($id);
        return view('transaksi.edit',compact(['transaksi']));
    }
    public function update($id,request $request)
    {
        $transaksi = transaksi::find($id);
        $transaksi->update($request->except('_token','method'));
        return redirect('transaksi');
    }
    public function destroy($id)
    {
        $hapus = transaksi::find($id);
        $hapus->delete();
        return redirect('transaksi');
    }
}
