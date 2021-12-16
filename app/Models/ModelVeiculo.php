<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelVeiculo extends Model
{
    use HasFactory;

    protected $table='Veiculo';

    protected $fillable=['marca','id_usuario','modelo','placa', 'ano', 'cor'];

    public function relUsuarios()
    {
        return $this->hasOne('App\usuario','id','id_usuario');
    }
}
