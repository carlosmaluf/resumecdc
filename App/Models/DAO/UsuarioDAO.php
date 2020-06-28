<?php

namespace App\Models\DAO;

use App\Models\Entidades\Usuario;

class UsuarioDAO extends BaseDAO
{
    public function verificaNomeeSenha($nome, $senha)
    {
        try {

            $query = $this->select(
                "SELECT * FROM usuarios WHERE nome = '$nome' AND  senha = '$senha'"
            );

            return $query->fetch();

        }catch (Exception $e){
            throw new \Exception("Erro no acesso aos dados.", 500);
        }
    }

    public  function salvar(Usuario $usuario) {
        try {
            $nome      = $usuario->getNome();
            $email     = $usuario->getEmail();
            return $this->insert(
                'usuarios',
                ":nome,:email",
                [
                    ':nome'=>$nome,
                    ':email'=>$email
                ]
            );

        }catch (\Exception $e){
            throw new \Exception("Erro na gravação de dados.", 500);
        }
    }
}