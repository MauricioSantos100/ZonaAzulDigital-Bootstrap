<?php

namespace App\Http\Controllers;

use App\Models\VeiculoModel as VeiculoModel;
use App\Models\EstacionamentoModel as EstacionamentoModel;
use App\Models\UsuarioModel as UsuarioModel;

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
        $this -> veiculo = new VeiculoModel();
        $this -> usuario = new UsuarioModel();
        $this -> estacionamento = new EstacionamentoModel();
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $quantVeiculos = $this -> veiculo -> all() -> count();
        $quantEstacionamentos = $this -> estacionamento -> all() -> count();
        $quantUsuarios = $this -> usuario -> all() -> count();

        if($quantEstacionamentos != 0){
            $dataEstacionamento = $this -> estacionamento -> orderBy('created_at', 'desc') -> first() -> created_at -> format('d/m/Y');
        } else {
            $dataEstacionamento = null;
        }

        if($quantVeiculos != 0){
            $dataVeiculo = $this -> veiculo -> orderBy('created_at', 'desc') -> first() -> created_at -> format('d/m/Y');
        } else {
            $dataVeiculo = null;
        }

        if($quantUsuarios != 0){
            $dataUsuario = $this -> usuario -> orderBy('created_at', 'desc') -> first() -> created_at -> format('d/m/Y');
        } else {
            $dataUsuario = null;
        }
      
        return view('dashboard', compact('quantVeiculos', 'quantEstacionamentos', 'quantUsuarios', 'dataEstacionamento', 'dataVeiculo', 'dataUsuario'));
        
    }    
}
