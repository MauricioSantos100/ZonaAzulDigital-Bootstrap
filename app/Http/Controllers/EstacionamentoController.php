<?php

namespace App\Http\Controllers;
use App\Models\EstacionamentoModel as EstacionamentoModel;

use App\Http\Requests\EstacionamentoRequest;

class EstacionamentoController extends Controller
{
    private $estacionamento;
    public function __construct() {
        $this -> estacionamento = new EstacionamentoModel();
    }

    public function index() {
        $estacionamento = $this -> estacionamento -> all();
        return view('estacionamento/listEstacionamento', compact('estacionamento'));
    }

    public function show($id) {
        $estacionamento = $this -> estacionamento -> find($id);
        return view('estacionamento/showEstacionamento', compact('estacionamento'));
    }

    public function create() {
        return view('estacionamento/newEstacionamento');
    }

    public function store(EstacionamentoRequest $request) {
        $cad = $this -> estacionamento -> create([
            'cnpj' => $request -> cnpj,
            'nome' => $request -> nome,
            'email' => $request -> email,
            'telefone' => $request -> telefone,
            'rua' => $request -> rua,
            'bairro' => $request -> bairro,
            'cidade' => $request -> cidade,
            'numero' => $request -> numero,
        ]);
        if($cad){
            return redirect('estacionamentos');
        }
    }
    
    public function edit($id)
    {
        $estacionamento = $this -> estacionamento -> find($id);
        return view('estacionamento/newEstacionamento', compact('estacionamento'));
    }

    public function update(EstacionamentoRequest $request, $id)
    {
        $edt = $this -> estacionamento -> where(['id' => $id]) -> update([
            'cnpj' => $request -> cnpj,
            'nome' => $request -> nome,
            'email' => $request -> email,
            'telefone' => $request -> telefone,
            'rua' => $request -> rua,
            'bairro' => $request -> bairro,
            'cidade' => $request -> cidade,
            'numero' => $request -> numero,
        ]);
        if($edt){
            return redirect('estacionamentos');
        }
    }

    public function destroy($id)
    {
        EstacionamentoModel::findOrFail($id)->delete();

        return redirect('estacionamentos');
    }
}
