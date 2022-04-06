<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\support\facades\DB;
use Session;
use App\Eriwayat;
use App\Komputer;
use PDF;

class EriwayatController extends Controller
{
    public function ekom()
    {
       $ekom = DB::table('eriwayat_kom')
       ->select('eriwayat_kom.*')
       ->orderBy('date', 'desc')
       ->orderBy('id', 'desc')
       ->get();

       $komputer = DB::table('komputer')
       ->select('*')
       ->get();

       return view('pages/eriwayat/eriwayat_kom', compact("ekom", "komputer"));
    }

    public function ekom_store(Request $request)
    {
        $this->validate($request, [
            'id_kom' => 'required',
        ]);

        DB::table('eriwayat_kom')->insert([
            'id_kom' => $request->id_kom,
            'date' => $request->date,
            'issue' => $request->issue,
            'problem' => $request->problem,
            'solution' => $request->solution,
            'rep_part' => $request->rep_part,
            'technician' => $request->technician,
        ]);
        
       Session::flash('sukses','Data Add Succesfully');

        return redirect('/ekom');
    }
    public function search ()
    {
        $komputer = DB::table('komputer')
       ->select('*')
       ->get();

       

       return view('pages/eriwayat/eriwayat_kom_search', compact("komputer"));
    }
    public function search_result(Request $request)
    {
	// menangkap data pencarian
	$cari = $request->cari;
 
 	// mengambil data dari table pegawai sesuai pencarian data
	$eriwayat = DB::table('eriwayat_kom')
	->where('id_kom','like',"%".$cari."%")
	->get();

    // dd($eriwayat);

    // mengirim data pegawai ke view index
    return view('pages/eriwayat/eriwayat_kom_search_r', compact("eriwayat"));
        

    }

    public function print($id_kom)
    {
        $eriwayat = DB::table('eriwayat_kom')
        ->leftJoin('komputer', 'eriwayat_kom.id_kom', '=', 'komputer.kode_fa')
        ->select('eriwayat_kom.*', 'komputer.*')
        ->where('eriwayat_kom.id_kom', $id_kom)
        ->get();
        // dd($eriwayat);

        // $eriwayat = eriwayat_kom::find($id_kom);
        $pdf = PDF::loadview('pages/eriwayat/ekom_print', ['eriwayat' => $eriwayat])->setPaper('a4', 'portrait');
        // return $pdf->download('laporan-komputer-pdf.pdf');
        return $pdf->stream();
    }


    // Eriwayat Laptop


    public function elapt()
    {
       $elapt = DB::table('eriwayat_laptop')
       ->select('eriwayat_laptop.*')
       ->orderBy('date', 'desc')
       ->orderBy('id', 'desc')
       ->get();

       $laptop = DB::table('laptop')
       ->select('*')
       ->get();

       return view('pages/eriwayat/eriwayat_lapt', compact("elapt", "laptop"));
    }

    public function elapt_store(Request $request)
    {
        $this->validate($request, [
            'id_lapt' => 'required',
        ]);

        DB::table('eriwayat_laptop')->insert([
            'id_lapt' => $request->id_lapt,
            'date' => $request->date,
            'issue' => $request->issue,
            'problem' => $request->problem,
            'solution' => $request->solution,
            'rep_part' => $request->rep_part,
            'technician' => $request->technician,
        ]);
        
       Session::flash('sukses','Data Add Succesfully');

        return redirect('/elapt');
    }


    public function lapt_search ()
    {
        $laptop = DB::table('laptop')
       ->select('*')
       ->get();

       

       return view('pages/eriwayat/eriwayat_lapt_search', compact("laptop"));
    }

    public function lapt_search_result(Request $request)
    {
	// menangkap data pencarian
	$cari = $request->cari;
 
 	// mengambil data dari table pegawai sesuai pencarian data
	$eriwayat = DB::table('eriwayat_laptop')
	->where('id_lapt','like',"%".$cari."%")
	->get();

    // dd($eriwayat);

    // mengirim data pegawai ke view index
    return view('pages/eriwayat/eriwayat_lapt_search_r', compact("eriwayat"));
        

    }

    public function lapt_print($id_lapt)
    {
        $eriwayat = DB::table('eriwayat_laptop')
        ->leftJoin('laptop', 'eriwayat_laptop.id_lapt', '=', 'laptop.kode_fa')
        ->select('eriwayat_laptop.*', 'laptop.*')
        ->where('eriwayat_laptop.id_lapt', $id_lapt)
        ->get();
        // dd($eriwayat);

        // $eriwayat = eriwayat_kom::find($id_kom);
        $pdf = PDF::loadview('pages/eriwayat/elapt_print', ['eriwayat' => $eriwayat])->setPaper('a4', 'portrait');
        // return $pdf->download('laporan-komputer-pdf.pdf');
        return $pdf->stream();
    }
}
