<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Suplier;
use Illuminate\Http\Request;

class SuplierController extends Controller
{
    public function index()
    {
        $suplier = DB::table('tbl_suplier')
        ->get();

        //dd($suplier);
        return view('suplier.index',compact('suplier'));
    }
    public function create()
    {
        return view('suplier.create');
    }
    public function store(request $request)
    {
        //dd($request);
        $simpan = suplier::create([
            'suplier_nama' => $request->suplier_nama,
            'suplier_alamat' => $request->suplier_alamat,
            'suplier_phone' => $request->suplier_phone,
            'suplier_status' => $request->suplier_status,
        ]);
        echo $simpan->id_suplier;
        return redirect('suplier');
    }
    public function edit($id)
    {
        $suplier = suplier::find($id);
        return view('suplier.edit',compact(['suplier']));
    }
    public function update($id,request $request)
    {
        $suplier = suplier::find($id);
        $suplier->update($request->except('_token','method'));
        return redirect('suplier');
    }
    public function destroy($id)
    {
        $hapus = suplier::find($id);
        $hapus->delete();
        return redirect('suplier');
    }
}
