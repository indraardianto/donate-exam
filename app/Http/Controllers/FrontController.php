<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;
use App\Models\Program;
use App\Models\Donasi;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class FrontController extends Controller
{
 
    public $kategori;
    public $program;
    public $donasi;
    public function __construct(){
        $this->kategori = new Kategori;
        $this->program = new Program;
        $this->donasi = new Donasi;
    }
    public function index()
    {
        $tanggal = Carbon::now();
        $now = $tanggal->format('Y-m-d');

        $total = DB::table('donasi')
        ->join('program', 'donasi.program_id', '=', 'program.id')
        ->join('kategori', 'program.kategori_id', '=', 'kategori.id')
        ->select('program.*','donasi.*','kategori.*', DB::raw('SUM(total_donasi) as total_donasi_program'))
        ->groupBy('program_id')
        ->where('program.tgl_berakhir','>=',$now)
        ->offset(0)
        ->limit(6)
        ->orderBy('program.created_at','ASC')
        ->get();

        $komen = Donasi::all()->take(6);
        return view('home-page', compact('total','komen'));
    }
    public function donasi()
    {
        $tanggal = Carbon::now();
        $now = $tanggal->format('Y-m-d');

        $total = DB::table('donasi')
        ->join('program', 'donasi.program_id', '=', 'program.id')
        ->join('kategori', 'program.kategori_id', '=', 'kategori.id')
        ->select('program.*','donasi.*','kategori.*', DB::raw('SUM(total_donasi) as total_donasi_program'))
        ->groupBy('program_id')
        ->where('program.tgl_berakhir','>=',$now)
        ->get();
        return view('frontend.index', compact('total'));
    }
    public function donasi_detail($nama)
    {
        $tanggal = Carbon::now();
        $now = $tanggal->format('Y-m-d');
        $program = Program::where('nama_program','=',$nama)->first();
        $data = DB::select("select * from program where tgl_berakhir >= '$now' and nama_program != '$nama' limit 3");
        
        $komentar = DB::table('donasi')
        ->join('program', 'donasi.program_id', '=', 'program.id')
        ->join('kategori', 'program.kategori_id', '=', 'kategori.id')
        ->select('donasi.*')
        ->where('program.nama_program','=',$nama)
        ->limit(3)
        ->get();
        return view('frontend.detail_donasi',compact('program','data','komentar'));
    }
    public function donasi_proses($nama)
    {
        $program = Program::where('nama_program','=',$nama)->first();
        return view('frontend.proses_donasi',compact('program'));
    }

    public function donasi_simpan(Request $request)
    {
        $rules = [
            'nama' => 'required|min:3|max:100',
            'email' => 'required|min:3|max:50|email',
            'nominal' => 'required|integer|digits_between:1,100',
            'komentar' => 'required',
        ];

        $messages = [
            'unique' => ":attribute sudah tersedia, silakan input lain",
            'required' => ":attribute gak boleh kosong",
            'min' => ":attribute kurang banyak",
            'max' => ":attribute kebanyakan",
        ];

        $this->validate($request, $rules, $messages);
        $this->donasi->nama = $request->nama;
        $this->donasi->email = $request->email;
        $this->donasi->program_id = $request->id;
        $this->donasi->total_donasi = $request->nominal;
        $this->donasi->komentar = $request->komentar;
        $this->donasi->save();
        return redirect()->route('home-page');
    }
   

}
