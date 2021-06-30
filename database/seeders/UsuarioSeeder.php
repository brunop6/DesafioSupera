<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ModelUsuario;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(ModelUsuario $usuario)
    {
        $usuario->create([
            'nome'=>'Bruno',
            'sobrenome'=>'Peres dos Santos',
            'email'=>'peresbruno6@gmail.com',
            'senha'=>md5('Password')
        ]);
    }
}
