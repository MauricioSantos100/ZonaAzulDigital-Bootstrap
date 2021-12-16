<?php

namespace App\Http\Controllers;

use App\Models\ModelVeiculo;
use App\Models\UsuarioModel;
use App\Http\Requests\VeiculoRequest;


class VeiculoController extends Controller
{
    private $veiculo;
    private $usuario;

    public function __construct() {
        $this -> veiculo = new ModelVeiculo();
        $this -> usuario = new UsuarioModel();
    }

    public function index()
    {
        $veiculo = $this -> veiculo -> all();
        return view('veiculo/listVeiculo', compact('veiculo'));
    }

    public function create()
    {
        $usuarios=$this->usuario->all();
        return view('veiculo/newVeiculo',compact('usuarios'));
    }

    public function store(VeiculoRequest $request)
    {
        $cad=$this->veiculo->create([
            'marca'=>$request->marca,
            'modelo'=>$request->modelo,
            'placa'=>$request->placa,
            'ano'=>$request->ano,
            'cor'=>$request->cor,
            'id_usuario'=>$request->id_usuario
         ]);
         if($cad){
             return redirect('veiculos');
         }
    }

    public function show($id)
    {
        $veiculo = $this -> veiculo -> find($id);
        return view('veiculo/showVeiculo', compact('veiculo'));
    }

    public function edit($id)
    {
        $veiculo=$this->veiculo->find($id);
        $usuarios=$this->usuario->all();
        return view('veiculo/newVeiculo',compact('veiculo','usuarios'));
    }

    public function update(VeiculoRequest $request, $id)
    {
        $this->veiculos->where(['id'=>$id])->update([
            'marca'=>$request->marca,
            'modelo'=>$request->modelo,
            'placa'=>$request->placa,
            'ano'=>$request->ano,
            'cor'=>$request->cor,
            'id_usuario'=>$request->id_usuario
        ]);
        return redirect('veiculos');
    }

    public function destroy($id)
    {
        $del = $this->veiculo->destroy($id);
        return ($del) ? "sim" : "não";
    }
}
