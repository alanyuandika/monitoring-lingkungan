<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Environment;

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
        $hitung = Environment::get();

        return view('home', compact('hitung'));
    }

    public function grafik()
        {
            // mengambil data dari tabel environment
            $pembacaan = Environment::get();

            // mengirim data pegawai ke view index
            return view('chart.flot', compact('pembacaan'));
        }
}
