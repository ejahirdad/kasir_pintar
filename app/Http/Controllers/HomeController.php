<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataTables\BarangDataTable;
use App\tBarang;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_barang = tBarang::all();
        // return $dataTable->render('home', compact('data_barang'));
        return view('home', compact('data_barang'));
    }

    public function store(Request $request){
        // dd($request);

        $barang_in = new tBarang();
        $barang_in->kode_barang = $request->kode_barang;
        $barang_in->nama_barang = $request->nama_barang;
        $barang_in->stok = $request->stok;
        $barang_in->harga_jual = $request->harga_jual;
        $barang_in->harga_beli = $request->harga_beli;
        $barang_in->save();
        return redirect()->route('home');

    }

    public function getDataBarang($id){
        $data_barang = tBarang::where('id', $id)->first();
        
        return json_encode($data_barang);
    }

    public function update(Request $request){
        $barang_edit = tBarang::where('id', $request->id_barang)->first();
        $barang_edit->kode_barang = $request->kode_barang;
        $barang_edit->nama_barang = $request->nama_barang;
        $barang_edit->stok = $request->stok;
        $barang_edit->harga_jual = $request->harga_jual;
        $barang_edit->harga_beli = $request->harga_beli;
        $barang_edit->update();

        return redirect()->route('home');
    }
    public function delete($id_barang){
        $delete_barang = tBarang::where('id', $id_barang)->first();
        $delete_barang->delete();

        return redirect()->route('home');

    }
    
}
