<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang_stok;
use App\Kategori;
use App\Stok_out;
use App\Stok_in;
use DB;
use Alert;
use Session;

class StokController extends Controller
{
    public function index(Request $request)
    {
        $stok = Barang_stok::all();
        $kategori = Kategori::all();
        $stok_out = Stok_out::all();

        $ambilDataStok = DB::table('barang_stok')
        ->where('stok', '<=', 2)
        ->get();
        if ($request->ajax()) {
            return datatables()->of($ambilDataStok)->make(true);
        }

        // dd($ambilDataStok);
        Session::flash('stokAlert');
        return view('pages.cons_control.stok.stok_data', compact("stok", "kategori", "stock_out", "ambilDataStok"));
    }
    public function out(Request $request)
    {
        $requestData = $request->all();
        Stok_out::create($requestData);

        $brg = barang_stok::findOrFail($request->barang_id);
        $brg->stok -= $request->jumlah;
        $brg->save();

        Session::flash('peringatan','Data Off Succesfully');
        return redirect('/stok');
    }
    public function history_out(Request $request)
    {
        $stok_out = DB::table('stok_out')
        ->join('barang_stok', 'stok_out.barang_id', '=', 'barang_stok.id')
        ->select('stok_out.*', 'barang_stok.barang_name')
        ->orderBy('id', 'desc')
        ->get();
        
                
        
        if ($request->ajax()) {
            return datatables()->of($stok_out)->make(true);
        }
        return view('pages.cons_control.stok.riwayat_trans');
    }
    public function history_in(Request $request)
    {
                
        $stok_in = DB::table('stok_in')
        ->join('barang_stok', 'stok_in.barang_id', '=', 'barang_stok.id')
        ->select('stok_in.*', 'barang_stok.barang_name')
        ->orderBy('id', 'desc')
        ->get();

        if ($request->ajax()) {
            return datatables()->of($stok_in)->make(true);
        }
        return view('pages.cons_control.stok.riwayat_trans');
    }
    public function in(Request $request)
    {
        $requestData = $request->all();
        Stok_in::create($requestData);

        $brg = barang_stok::findOrFail($request->barang_id);
        $brg->stok += $request->jumlah;
        $brg->save();
        Session::flash('sukses','Data Add Succesfully');
        return redirect('/stok');
    }

    
}
