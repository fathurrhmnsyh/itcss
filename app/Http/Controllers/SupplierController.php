<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Supplier;

class SupplierController extends Controller
{
    public function index()
    {
        $supplier = Supplier::all();
        return view('pages.cons_control.supplier.index', ['supplier'=> $supplier]);
    }
    public function store(Request $request)
    {
        Supplier::create([
            'supp_name' => $request->supp_name,
            'supp_address' => $request->supp_address,
            'supp_phone' => $request->supp_phone,
            'supp_email' => $request->supp_email
        ]);
        return redirect('/supplier');
    }
    public function delete($id)
    {
        $supplier = Supplier::find($id);
        $supplier->delete();
        return redirect ('/supplier');
    }
}
