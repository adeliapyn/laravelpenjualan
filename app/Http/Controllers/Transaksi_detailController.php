<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Transaksi_detail;
use Illuminate\Http\Request;

class Transaksi_detailController extends Controller
{
    public function index($id)
    {
        $transaksi_detail = DB::table('tbl_transaksi_detail')
        ->join('tbl_barang','tbl_barang.id_barang','=','tbl_transaksi_detail.id_barang')
        ->where('id_transaksi',$id)
        ->get();

        //dd($transaksi_detail);
        return view('transaksi_detail.index',compact('transaksi_detail'));
    }
}
