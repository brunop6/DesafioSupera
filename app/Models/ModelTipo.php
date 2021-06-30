<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelTipo extends Model
{
    use HasFactory;

    protected $table = 'tipos';
    protected $fillable = ['descricao'];
}
