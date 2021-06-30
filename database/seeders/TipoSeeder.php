<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ModelTipo;

class TipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(ModelTipo $tipo)
    {
        $tipo->create([
            'descricao'=>'Moto'
        ]);
        $tipo->create([
            'descricao'=>'Carro'
        ]);
        $tipo->create([
            'descricao'=>'Caminhão'
        ]);
    }
}
