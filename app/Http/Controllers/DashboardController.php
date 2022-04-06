<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Komputer;
use App\Laptop;
use App\Printer;

class DashboardController extends Controller
{
    public function index()
    {
        $countk = \DB::table('komputer')->count();
        $countl = \DB::table('laptop')->count();
        $countp = \DB::table('printer')->count();

        return view('pages.dashboard.index', compact("countk", "countl", "countp"));
    }
}
