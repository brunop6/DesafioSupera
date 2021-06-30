<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelVeiculo extends Model
{
    use HasFactory;

    protected $table = 'veiculos';
    protected $fillable = ['id_tipo', 'marca', 'modelo', 'versao'];

    public function relDicas(){
        return $this->hasMany('App\Models\ModelDica', 'id', 'id_veiculo');
    }
    public function relTipo(){
        return $this->hasOne('App\Models\ModelTipo', 'id', 'id_tipo');
    }
}
