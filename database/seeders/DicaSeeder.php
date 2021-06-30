<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ModelDica;

class DicaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(ModelDica $dica)
    {
        $dica->create([
            'id_usuario'=>'1',
            'id_veiculo'=>'1',
            'descricao'=>'Moto esportiva'
        ]);
        $dica->create([
            'id_usuario'=>'1',
            'id_veiculo'=>'2',
            'descricao'=>'Economy'
        ]);
        $dica->create([
            'id_usuario'=>'1',
            'id_veiculo'=>'3',
            'descricao'=>'Off-road'
        ]);
        $dica->create([
            'id_usuario'=>'1',
            'id_veiculo'=>'4',
            'descricao'=>'Conforto'
        ]);
        $dica->create([
            'id_usuario'=>'1',
            'id_veiculo'=>'6',
            'descricao'=>'Conforto'
        ]);
        $dica->create([
            'id_usuario'=>'1',
            'id_veiculo'=>'6',
            'descricao'=>'Off-road'
        ]);
        $dica->create([
            'id_usuario'=>'1',
            'id_veiculo'=>'7',
            'descricao'=>'Carga pesada'
        ]);
        $dica->create([
            'id_usuario'=>'1',
            'id_veiculo'=>'8',
            'descricao'=>'Economy'
        ]);
        $dica->create([
            'id_usuario'=>'1',
            'id_veiculo'=>'9',
            'descricao'=>'Conforto'
        ]);
    }
}
