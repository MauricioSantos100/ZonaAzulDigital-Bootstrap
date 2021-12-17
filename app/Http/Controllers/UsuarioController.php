<?php

namespace App\Http\Controllers;

use App\Http\Requests\UsuarioRequest;
use App\Models\UsuarioModel as UsuarioModel;
use App\Models\VeiculoModel as VeiculoModel;

class UsuarioController extends Controller
{
    private $usuario;
    private $veiculo;

    public function __construct()
    {
        $this->usuario = new UsuarioModel();
        $this->veiculo = new VeiculoModel();
    }

    public function index()
    {
        $usuario = $this->usuario->all();
        return view('usuario/listUsuario', compact('usuario'));
    }

    public function show($id)
    {
        $usuario = $this->usuario->find($id);
        $veiculos = $this->veiculo->where('id_usuario', $id)->get();
        if (isset($veiculos)) {
            $usuario->veiculo = $veiculos;
            return view('usuario/showUsuario', compact('usuario', 'veiculos'));
        } else {
            return view('usuario/showUsuario', compact('usuario'));
        }
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

    public function update(UsuarioRequest $request, $id)
    {
        $edt = $this->usuario->where(['id' => $id])->update([
            'nome' => $request->nome,
            'cpf' => $request->cpf,
            'email' => $request->email,
            'telefone' => $request->telefone
        ]);
        if ($edt) {
            return redirect('usuarios');
        }
    }

    public function destroy($id)
    {
        UsuarioModel::findOrFail($id)->delete();

        return redirect('usuarios');
    }
}
