<?php

namespace App\Http\Controllers;
use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
   public function index(){
      $barang = Barang::all();
         return view('barang/index',compact(['barang']));
   }
   public function create(Request $request){
      $barang = Barang::all();
      return view('barang/tambah',compact(['barang']));
   }
   public function store(request $request){
      $barang = Barang::create([
         'id_barang' => $request->id_barang,
         'id_kategori' => $request->id_kategori,
         'nama' => $request->nama,
         'harga' => $request->harga,
         'stok' => $request->stok
      ]);
      echo $barang->id_barang;
         return redirect('barang');
   }
   public function edit($id){
      $barang = Barang::find($id);
         return view('barang/edit',compact(['barang']));
   }
   public function update($id, request $request){
      $barang = Barang::find($id);
      $barang->update($request->except('_token','Edit'));
         return redirect('barang');
   }
   public function destroy($id){
      $barang = Barang::find($id);
      $barang->delete();
         return redirect('barang');
   }
}
