<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
   
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data = DB::table('donasi')
        ->select(DB::raw('SUM(total_donasi) as total_donasi_program'))
        ->get();

        $total = DB::table('donasi')
        ->join('program', 'donasi.program_id', '=', 'program.id')
        ->join('kategori', 'program.kategori_id', '=', 'kategori.id')
        ->select('program.*','donasi.*','kategori.*', DB::raw('SUM(total_donasi) as total_donasi_program'), DB::raw('MAX(total_donasi) as tertinggi'))
        ->groupBy('donasi.program_id')
        ->get();

        return view('home', compact('data','total'));
    }
}
