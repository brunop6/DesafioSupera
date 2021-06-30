<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ModelVeiculo;

class VeiculoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(ModelVeiculo $veiculo)
    {
        $veiculo->create([
            'id_tipo'=>'1',
            'marca'=>'Honda',
            'modelo'=>'CBR 600RR',
        ]);
        $veiculo->create([
            'id_tipo'=>'1',
            'marca'=>'Honda',
            'modelo'=>'CG 160',
            'versao'=>'Titan'
        ]);
        $veiculo->create([
            'id_tipo'=>'1',
            'marca'=>'Yamaha',
            'modelo'=>'Lander 250 ABS',
        ]);
        $veiculo->create([
            'id_tipo'=>'2',
            'marca'=>'Chevorlet',
            'modelo'=>'Cruse',
            'versao'=>'Sedan'
        ]);
        $veiculo->create([
            'id_tipo'=>'2',
            'marca'=>'Chevorlet',
            'modelo'=>'Cruse',
            'versao'=>'Hatch'
        ]);
        $veiculo->create([
            'id_tipo'=>'2',
            'marca'=>'Troller',
            'modelo'=>'T4',
            'versao'=>'Connect'
        ]);
        $veiculo->create([
            'id_tipo'=>'3',
            'marca'=>'Volvo',
            'modelo'=>'FH16',
            'versao'=>'750'
        ]);
        $veiculo->create([
            'id_tipo'=>'3',
            'marca'=>'DAF',
            'modelo'=>'XF105',
        ]);
        $veiculo->create([
            'id_tipo'=>'3',
            'marca'=>'Mercedes-Benz',
            'modelo'=>'New Actros',
        ]);
    }
}
