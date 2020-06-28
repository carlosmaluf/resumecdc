<?php

namespace App\Models\DAO;

use App\Models\Entidades\Empreend;

class EmpreendDAO extends BaseDAO
{
    public  function listar($id = null){
        if($id) {
            $resultado = $this->select(
                "SELECT id, nome, rua, valor, zona FROM empreend WHERE id = $id"
            );
            return $resultado->fetchObject(Empreend::class);
        }else{
            $resultado = $this->select(
                "SELECT id, nome, rua, valor, zona FROM empreend"
            );
            return $resultado->fetchAll(\PDO::FETCH_CLASS, Empreend::class);
        }

        return false;
    }

    public function verificaNomeeRua($nome, $rua){
        try {
            $query = $this->select(
                "SELECT * FROM empreend WHERE nome = '$nome' AND  rua = '$rua'"
            );
            return $query->fetch();

        }catch (Exception $e){
            throw new \Exception("Erro no acesso aos dados.", 500);
        }
    }

    public  function salvar(Empreend $empreend)
    {
        try {
            $nome      = $empreend->getNome();
            $rua       = $empreend->getRua();
            $valor     = $empreend->getValor();
            $zona      = $empreend->getZona();

            echo "  1>   ";
            echo $nome;
            echo $rua;
            echo $valor;
            echo $zona;

            return $this->insert(
                'empreend',
                ":nome,:rua,:valor,:zona",
                [
                    ':nome'=>$nome,
                    ':rua'=>$rua,
                    ':valor'=>$valor,
                    ':zona'=>$zona
                ]
            );

        }catch (\Exception $e){
            throw new \Exception("Erro na gravação de dados.", 500);
        }
    }

    public  function atualizar(Empreend $empreend){
        try {
            $id        = $empreend->getId();
            $nome      = $empreend->getNome();
            $rua       = $empreend->getRua();
            $valor     = $empreend->getValor();
            $zona      = $empreend->getZona();
            
            return $this->update(
                'empreend',
                "nome = :nome, rua = :rua, valor = :valor, zona = :zona",
                [
                    ':id'=>$id,
                    ':nome'=>$nome,
                    ':rua'=>$rua,
                    ':valor'=>$valor,
                    ':zona'=>$zona,
                ],
                "id = :id"
            );

        }catch (\Exception $e){
            throw new \Exception("Erro na gravação de dados.", 500);
        }
    }

    public function excluir(Empreend $empreend){
        try {
            $id = $empreend->getId();
            
            return $this->delete('empreend',"id = $id");

        }catch (Exception $e){
            
            throw new \Exception("Erro ao deletar", 500);
        }
    }
}
