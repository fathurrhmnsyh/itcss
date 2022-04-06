<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Laptop;
use PDF;
use DB;
use Session;

class LaptopController extends Controller
{
    public function index()
    {
        $laptop = Laptop::all();

        return view('pages/laptop/laptop_data', ['laptop' => $laptop]);
    }
    public function add()
    {
        return view('pages/laptop/laptop_add');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'kode_fa' => 'required',
            'eth_mac' => 'required',
            'wireless_mac' => 'required'
        ]);

        Laptop::create([
            'kode_fa' => $request->kode_fa,
            'tanggal_beli' => $request->tanggal_beli,
            'ppb_pembelian' => $request->ppb_pembelian,
            'serial_number' => $request->serial_number,
            'lp_merk' => $request->lp_merk,
            'lp_tipe' => $request->lp_tipe,
            'p_merk' => $request->p_merk,
            'p_jenis' => $request->p_jenis,
            'p_tipe' => $request->p_tipe,
            'p_kecepatan' => $request->p_kecepatan,
            'r_kapasitas' => $request->r_kapasitas,
            'r_tipe' => $request->r_tipe,
            'r_slot' => $request->r_slot,
            'hd_merk' => $request->hd_merk,
            'hd_tipe' => $request->hd_tipe,
            'hd_kapasitas' => $request->hd_kapasitas,
            'ssd_merk' => $request->ssd_merk,
            'ssd_tipe' => $request->ssd_tipe,
            'ssd_kapasitas' => $request->ssd_kapasitas,
            'vga_merk' => $request->vga_merk,
            'vga_tipe' => $request->vga_tipe,
            'vga_kapasitas' => $request->vga_kapasitas,
            'eth_name' => $request->eth_name,
            'eth_mac' => $request->eth_mac,
            'wireless_name' => $request->wireless_name,
            'wireless_mac' => $request->wireless_mac,
            'bluetooth_name' => $request->bluetooth_name,
            'bluetooth_mac' => $request->bluetooth_mac,
            'optical_drive' => $request->optical_drive
        ]);

        Session::flash('sukses','Data Add Succesfully');
        return redirect('laptop');
    }
    public function detail($id)
    {
        $laptop = Laptop::find($id);
        return view('pages/laptop/laptop_detail', ['laptop'=> $laptop]);
    }
    public function edit($id)
    {
        $laptop = Laptop::find($id);
        return view('pages/laptop/laptop_edit', ['laptop'=> $laptop]);
    }
    public function update($id, Request $request)
    {
        $this->validate($request, [
            'kode_fa' => 'required',
            'wireless_mac' => 'required',
            'eth_mac' => 'required'
        ]);

        $laptop = Laptop::find($id);
        $laptop->kode_fa = $request->kode_fa;
        $laptop->tanggal_beli = $request->tanggal_beli;
        $laptop->ppb_pembelian = $request->ppb_pembelian;
        $laptop->serial_number = $request->serial_number;
        $laptop->lp_merk = $request->lp_merk;
        $laptop->lp_tipe = $request->lp_tipe;
        $laptop->p_merk = $request->p_merk;
        $laptop->p_jenis = $request->p_jenis;
        $laptop->p_tipe = $request->p_tipe;
        $laptop->p_kecepatan = $request->p_kecepatan;
        $laptop->r_kapasitas = $request->r_kapasitas;
        $laptop->r_tipe = $request->r_tipe;
        $laptop->r_slot = $request->r_slot;
        $laptop->hd_merk = $request->hd_merk;
        $laptop->hd_tipe = $request->hd_tipe;
        $laptop->hd_kapasitas = $request->hd_kapasitas;
        $laptop->ssd_merk = $request->ssd_merk;
        $laptop->ssd_tipe = $request->ssd_tipe;
        $laptop->ssd_kapasitas = $request->ssd_kapasitas;
        $laptop->vga_merk = $request->vga_merk;
        $laptop->vga_tipe = $request->vga_tipe;
        $laptop->vga_kapasitas = $request->vga_kapasitas;
        $laptop->eth_name = $request->eth_name;
        $laptop->eth_mac = $request->eth_mac;
        $laptop->wireless_name = $request->wireless_name;
        $laptop->wireless_mac = $request->wireless_mac;
        $laptop->bluetooth_name = $request->bluetooth_name;
        $laptop->bluetooth_mac = $request->bluetooth_mac;
        $laptop->optical_drive = $request->optical_drive;
        $laptop->save();

        Session::flash('sukses','Data Update Succesfully');
        return redirect('/laptop');
    }
    public function delete($id)
    {
        $laptop = Laptop::find($id);
        $laptop->delete();

        Session::flash('gagal','Data Delete Succesfully');
        return redirect ('/laptop');
    }
    public function print($id)
    {
        $laptop = Laptop::find($id);

        $pdf = PDF::loadview('pages/laptop/laptop_print', ['laptop' => $laptop]);
        // return $pdf->download('laporan-laptop-pdf.pdf');
        return $pdf->stream();
    }
    public function print_all()
    {
        $laptop = DB::table('laptop')->get();
        // $komputer = Laptop::all();
    
        $pdf = PDF::loadview('pages/laptop/laptop_print_all', ['laptop' => $laptop]);
        $pdf->setPaper('A3', 'landscape');
        return $pdf->stream();
    }
}
