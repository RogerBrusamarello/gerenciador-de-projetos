<?php

use Illuminate\Database\Seeder;
use App\User;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dados = [
            'nome'=>"Gilberto",
            'email'=>"admin@admin.com.br",
            'password'=> bcrypt("123456"),
            'cpf'=> '01605082074',
            'endereco'=>'Miguel Soccol 33 - Casa'
        ];
        if (User::where('email','=',$dados['email'])->count()){
            $usuario = User::where('email','=',$dados['email'])-> first();
            $usuario->update($dados);
            echo "Usuário atualizado";
        }else{
            User::create($dados);
            echo "Usuário criado";
        }
    }
}
