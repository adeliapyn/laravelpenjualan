<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $admin = DB::table('tbl_admin')
        ->get();

        //dd($admin);
        return view('admin.index',compact('admin'));
    }
    public function create()
    {
        return view('admin.create');
    }
    public function store(request $request)
    {
        //dd($request);
        $simpan = Admin::create([
            'username' => $request->username,
            'password' => $request->password,
            'admin_level' => $request->admin_level,
            'admin_nama' => $request->admin_nama,
            'admin_status' => $request->admin_status,
        ]);
        echo $simpan->id_admin;
        return redirect('/admin');
    }
    public function edit($id)
    {
        $admin = Admin::find($id);
        return view('admin.edit',compact(['admin']));
    }
    public function update($id,request $request)
    {
        $admin = Admin::find($id);
        $admin->update($request->except('_token','method'));
        return redirect('admin');
    }
    public function destroy($id)
    {
        $hapus = Admin::find($id);
        $hapus->delete();
        return redirect('admin');
    }
}
