<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;
use App\Supplier;
use App\Kategori;



class BarangController extends Controller
{
    public function index()
    {
        
        $barang = Barang::paginate(4);

        return view('barang.barang_data', ['barang' => $barang]);
    }
    public function add()
    {
        $supplier = Supplier::all();
        $kategori = Kategori::all();

        return view('barang.barang_add', ['supplier' => $supplier],['kategori' => $kategori]);
    }
    public function store(Request $request)
    {
        Barang::create([
            'barang_name' => $request->barang_name,
            'kategori_id' => $request->kategori_id,
            'supplier_id' => $request->supplier_id,
        ]);
        return redirect('/barang');
    }
    public function delete($id)
    {
        $barang = Barang::find($id);
        $barang->delete();
        return redirect ('/barang');
    }
}
