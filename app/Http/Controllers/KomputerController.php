<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Komputer;
use PDF;
use DB;
use Session;

class KomputerController extends Controller
{
    public function index()
    {
        $komputer = Komputer::paginate(10);

        return view('pages/computer/computer_data', ['komputer' => $komputer]);
    }
    public function add()
    {
        return view('pages/computer/computer_add');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'kode_fa' => 'required',
            'lan_mac' => 'required'
        ]);

        Komputer::create([
            'kode_fa' => $request->kode_fa,
            'tanggal_beli' => $request->tanggal_beli,
            'ppb_pembelian' => $request->ppb_pembelian,
            'p_merk' => $request->p_merk,
            'p_jenis' => $request->p_jenis,
            'p_tipe' => $request->p_tipe,
            'p_kecepatan' => $request->p_kecepatan,
            'm_merk' => $request->m_merk,
            'm_tipe' => $request->m_tipe,
            'r_kapasitas' => $request->r_kapasitas,
            'r_tipe' => $request->r_tipe,
            'r_slot' => $request->r_slot,
            'hd1_merk' => $request->hd1_merk,
            'hd1_tipe' => $request->hd1_tipe,
            'hd1_kapasitas' => $request->hd1_kapasitas,
            'hd2_merk' => $request->hd2_merk,
            'hd2_tipe' => $request->hd2_tipe,
            'hd2_kapasitas' => $request->hd2_kapasitas,
            'ssd_merk' => $request->ssd_merk,
            'ssd_tipe' => $request->ssd_tipe,
            'ssd_kapasitas' => $request->ssd_kapasitas,
            'vga_external' => $request->vga_external,
            'lan_nama' => $request->lan_nama,
            'lan_mac' => $request->lan_mac
        ]);

        Session::flash('sukses','Data Add Succesfully');
        return redirect('komputer');
    }
    public function detail($id)
    {
        $komputer = komputer::find($id);
        return view('pages/computer/computer_detail', ['komputer'=> $komputer]);
    }
    public function edit($id)
    {
        $komputer = komputer::find($id);
        return view('pages/computer/computer_edit', ['komputer'=> $komputer]);
    }
    public function update($id, Request $request)
    {
        $this->validate($request, [
            'kode_fa' => 'required',
            'lan_mac' => 'required'
        ]);

        $komputer = Komputer::find($id);
        $komputer->kode_fa = $request->kode_fa;
        $komputer->tanggal_beli = $request->tanggal_beli;
        $komputer->ppb_pembelian = $request->ppb_pembelian;
        $komputer->p_merk = $request->p_merk;
        $komputer->p_jenis = $request->p_jenis;
        $komputer->p_tipe = $request->p_tipe;
        $komputer->p_kecepatan = $request->p_kecepatan;
        $komputer->m_merk = $request->m_merk;
        $komputer->m_tipe = $request->m_tipe;
        $komputer->r_kapasitas = $request->r_kapasitas;
        $komputer->r_tipe = $request->r_tipe;
        $komputer->r_slot = $request->r_slot;
        $komputer->hd1_merk = $request->hd1_merk;
        $komputer->hd1_tipe = $request->hd1_tipe;
        $komputer->hd1_kapasitas = $request->hd1_kapasitas;
        $komputer->hd2_merk = $request->hd2_merk;
        $komputer->hd2_tipe = $request->hd2_tipe;
        $komputer->hd2_kapasitas = $request->hd2_kapasitas;
        $komputer->ssd_merk = $request->ssd_merk;
        $komputer->ssd_tipe = $request->ssd_tipe;
        $komputer->ssd_kapasitas = $request->ssd_kapasitas;
        $komputer->vga_external = $request->vga_external;
        $komputer->lan_nama = $request->lan_nama;
        $komputer->lan_mac = $request->lan_mac;
        $komputer->save();

        Session::flash('sukses','Data Update Succesfully');
        return redirect('/komputer');
    }

    public function delete($id)
    {
        $komputer = Komputer::find($id);
        $komputer->delete();

        Session::flash('gagal','Data Delete Succesfully');
        return redirect ('/komputer');
    }
    public function print($id)
    {
        $komputer = komputer::find($id);

        $pdf = PDF::loadview('pages/computer/computer_print', ['komputer' => $komputer]);
        // return $pdf->download('laporan-komputer-pdf.pdf');
        return $pdf->stream();
    }
    public function print_all()
    {
        $komputer = DB::table('komputer')->get();
        // $komputer = Komputer::all();
    
        $pdf = PDF::loadview('pages/computer/computer_print_all', ['komputer' => $komputer]);
        $pdf->setPaper('A3', 'landscape');
        return $pdf->stream();
    }
}
