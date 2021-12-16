<?php

namespace App\Http\Controllers;
use App\Models\EstacionamentoModel;

use App\Http\Requests\EstacionamentoRequest;

class EstacionamentoController extends Controller
{
    private $estacionamento;
    public function __construct() {
        $this -> estacionamento = new EstacionamentoModel();
    }

    public function index() {
        $estacionamento = $this -> estacionamento -> all();
        return view('listEstacionamento', compact('estacionamento'));
    }

    public function show($id) {
        $estacionamento = $this -> estacionamento -> find($id);
        return view('showEstacionamento', compact('estacionamento'));
    }

    public function create() {
        return view('newEstacionamento');
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
            return redirect('/');
        }
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\EstacionamentoRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EstacionamentoRequest $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del = $this->estacionamento->destroy($id);
        return ($del) ? "sim" : "não";
    }
}
