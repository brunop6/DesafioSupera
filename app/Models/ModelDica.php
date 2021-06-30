<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ModelDica extends Model
{
    use HasFactory;
    
    protected $table = 'dicas';
    protected $fillable = ['id_usuario', 'id_veiculo', 'descricao'];

    public function search(){
        $query = "SELECT d.id, d.descricao, v.marca, v.modelo
        FROM dicas d, veiculos v, tipos t
        WHERE d.id_veiculo = v.id  
        AND t.id = v.id_tipo";
        if(isset($_POST['tipo'])){
            $tipo = $_POST['tipo'];
            $query = $query ." AND t.descricao = '$tipo'";
        }
        if(isset($_POST['marca'])){
            $marca = $_POST['marca'];
            $query = $query ." AND v.marca = '$marca'";
        }
        if(isset($_POST['modelo'])){
            $modelo = $_POST['modelo'];
            $query = $query ." AND v.modelo = '$modelo'";
        }
        if(isset($_POST['versao'])){
            $versao = $_POST['versao'];
            $query = $query ." AND v.versao = '$versao'";
        }
        $query = $query ." ORDER BY d.id DESC";
        
        return DB::select($query);
    }
}
