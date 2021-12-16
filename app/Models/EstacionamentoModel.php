<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstacionamentoModel extends Model
{
    use HasFactory;

    protected $table='Estacionamento';

    protected $fillable=['cnpj','nome','email','telefone', 'rua', 'bairro', 'cidade', 'numero'];
}
