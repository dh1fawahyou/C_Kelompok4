<?php

namespace App\Http\Controllers;

use App\Models\Alumni;
use App\Models\User;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $mengambil = Alumni::where('status', 1)->count();
        $belum = Alumni::where('status', 0)->count();
        $totalalumni =Alumni::all()->count();
        $totaladmin = User::all()->count();
        // $tahunalumni = Alumni::select(['tahun_lulus'])->get();
        // $tahunalumni = DB::table('alumni')
        //     ->select('tahun_lulus')
        //     ->get();
        $tahunalumni = DB::table('alumni')
                  ->selectRaw('count(tahun_lulus) as tahun, tahun_lulus')
                  ->groupBy('tahun_lulus')->get();
        $total=$tahunalumni->pluck('tahun');
        $tahunlulus=$tahunalumni->pluck('tahun_lulus');
        return view('home', [
            'menu' => 'home',
            'totaladmin' => $totaladmin,
            'mengambil' => $mengambil,
            'belum' => $belum,
            'totalalumni' => $totalalumni,
            'tahunalumni' => $tahunalumni,
            'total' => $total,
            'tahunlulus' => $tahunlulus,
        ]);
    }
}
