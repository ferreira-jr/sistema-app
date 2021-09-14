<?php

namespace App\Http\Controllers;

use App\Models\Ocorrencia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Carbon\CarbonImmutable;

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
        $datahoje = Carbon::now();
        
        $ocorrencia = Ocorrencia::get();
    
        $abertas = DB::table('ocorrencias')->where('status', '=', 'Aberto')->get();
        $andamento = DB::table('ocorrencias')->where('status', '=', 'Andamento')->get();
        $finalizado = DB::table('ocorrencias')->where('status', '=', 'Finalizado')->get();
        return view('home', compact('ocorrencia','datahoje', 'abertas', 'andamento', 'finalizado'));
    }
    
}
