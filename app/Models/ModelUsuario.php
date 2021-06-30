<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelUsuario extends Model
{
    use HasFactory;

    protected $table = 'usuarios';
    protected $fillable = ['nome', 'sobrenome', 'email', 'senha']; 

    public function relDicas(){
        return $this->hasMany('App\Models\ModelDica', 'id', 'id_usuario');
    }
}
