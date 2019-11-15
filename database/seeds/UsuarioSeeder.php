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
            'cpf'=> '00879526025',
            'endereco'=>'Via Napoli 245'
        ];
        if (User::where('email','=',$dados['email'])->count()){
            $usuario = User::where('email','=',$dados['email'])->first();
            $usuario->update($dados);
            echo "Usuário atualizado";
        }else{
            User::create($dados);
            echo "Usuário criado";
        }
    }
}
