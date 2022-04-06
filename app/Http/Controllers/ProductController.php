<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\facades\DB;
use Carbon\Carbon;
use Session;

class ProductController extends Controller
{
    public function index()
    {
        $supplier = DB::table('supplier')
        ->select('supplier.id','supplier.supp_name')
        ->get();

        $product = DB::table('cc_product')
        ->join('supplier', 'cc_product.supplier_id', '=', 'supplier.id')
        ->select('cc_product.*', 'supplier.supp_name')
        ->orderBy('name', 'asc')
        ->get();

        return view('pages/cons_control/product/index', compact("product", "supplier"));
    }
    public function store(Request $request)
    {
        DB::table('cc_product')->insert([
            'name' => $request->name,
            'type' => $request->type,
            'supplier_id' => $request->supplier_id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        Session::flash('sukses','Data Add Succesfully');
        return redirect ('product');
    }
}
