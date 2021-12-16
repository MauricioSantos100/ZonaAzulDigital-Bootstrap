<?php

namespace App\Http\Controllers;

use App\Http\Requests\UsuarioRequest;
use App\Models\UsuarioModel as UsuarioModel;

class UsuarioController extends Controller
{
    private $usuario;

    public function __construct()
    {
        $this->usuario = new UsuarioModel();
    }

    public function index()
    {
        $usuario = $this->usuario->all();
        return view('usuario/listUsuario', compact('usuario'));
    }

    public function show($id)
    {
        $usuario = $this->usuario->find($id);
        return view('usuario/showUsuario', compact('usuario'));
    }

    public function create()
    {
        return view('usuario/newUsuario');
    }

    public function store(UsuarioRequest $request)
    {
        $cad = $this->usuario->create([
            'nome' => $request->nome,
            'cpf' => $request->cpf,
            'email' => $request->email,
            'telefone' => $request->telefone
        ]);
        if ($cad) {
            return redirect('usuarios');
        }
    }

    public function edit($id)
    {
        $usuario = $this->usuario->find($id);
        return view('usuario/newUsuario', compact('usuario'));
    }

    public function update(UsuarioRequest $request, $id) {
        $edt = $this -> usuario -> where(['id' => $id]) -> update([
            'nome' => $request -> nome,
            'cpf' => $request -> cpf,
            'email' => $request -> email,
            'telefone' => $request -> telefone
        ]);
        if($edt){
            return redirect('usuarios');
        }
    }

    public function destroy($id)
    {
        UsuarioModel::findOrFail($id)->delete();

        return redirect('usuarios');
    }
}
