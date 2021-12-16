<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsuarioModel extends Model
{
    use HasFactory;

    protected $table = 'Usuario';
    protected $fillable = ['nome', 'cpf', 'email', 'telefone'];

    public function relVeiculo()
    {
        return $this->hasMany('App\Models\ModelVeiculo', 'id_usuario');
    }
}
