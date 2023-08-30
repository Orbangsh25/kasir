<?php

namespace App\Http\Controllers;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function index(){
        $transaksi = Transaksi::all();
            return view('transaksi/index',compact(['transaksi']));
    }
    public function create(Request $request){
        $transaksi = Transaksi::all();
            return view('transaksi/tambah',compact(['transaksi']));
    }
    public function store(request $request){
        $transaksi = Transaksi::create([
            'id_transaksi' => $request->id_transaksi,
            'id_barang' => $request->id_barang,
            'jumlah' => $request->jumlah,
            'tanggal' => $request->tanggal,
            'total_harga' => $request->total_harga,
            'bayar' => $request->bayar
        ]);
        echo $transaksi->id_transaksi;
            return redirect('transaksi');
    }
    public function edit($id){
        $transaksi = Transaksi::find($id);
            return view('transaksi/edit',compact(['transaksi']));
    }
    public function update($id, request $request){
        $transaksi = Transaksi::find($id);
        $transaksi->update($request->except('_token','Edit'));
            return redirect('transaksi');
    }
    public function destroy($id){
        $transaksi = Transaksi::find($id);
        $transaksi->delete();
            return redirect('transaksi');
    }
}
