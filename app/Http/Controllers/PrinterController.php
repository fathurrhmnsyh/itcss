<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Printer;
use Illuminate\support\facades\DB;
use Session;
use Carbon\Carbon;
use Alert;
use Datatables;



class PrinterController extends Controller
{
    public function index(Request $request)
    {
        $printer = Printer::all();

        return view('pages/printer/printer_data', ['printer' => $printer]);
    }
    public function store(Request $request)
    {
        DB::table('printer')->insert([
            'fa_code' => $request->fa_code,
            'purc_date' => $request->purc_date,
            'purc_ppb' => $request->purc_ppb,
            'serial_number' => $request->serial_number,
            'printer_merk' => $request->printer_merk,
            'printer_type' => $request->printer_type,
            'type' => $request->type,
            'code' => $request->code,
            'status' => $request->status,
            'info' => $request->info,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        
        Session::flash('sukses','Data Add Succesfully');
        return redirect('printer');
    }

    public function detail($id)
    {
        $printer = DB::table('printer')
        ->select('*')
        ->where('printer.id', $id)
        ->first();

        dd($printer);
    }
    public function delete($id)
    {
        $printer = Printer::find($id);
        $printer->delete();
        Session::flash('gagal','Data Delete Succesfully');
        return redirect ('printer');
    }
}
