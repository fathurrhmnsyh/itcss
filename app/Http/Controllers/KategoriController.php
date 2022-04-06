<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategori;

class KategoriController extends Controller
{
    public function index()
    {
        $kategori = kategori::all();

        return view('kategori.kategori_data', ['kategori' => $kategori]);
    }
    public function store(Request $request)
    {
        Kategori::create([
            'kategori_name' => $request->kategori_name,
        ]);
        return redirect('/kategori');
    }
    public function delete($id)
    {
        $kategori = Kategori::find($id);
        $kategori->delete();
        return redirect ('/kategori');
    }
}
