<?php

namespace App\Models\DAO;

use App\Models\Entidades\Blocos;

class BlocosDAO extends BaseDAO
{
    public  function listar($id = null){
        if($id) {
            $resultado = $this->select(
                "SELECT id, empreendid, nome FROM blocos  WHERE empreendid = $id"
            );
            return $resultado->fetchAll(\PDO::FETCH_CLASS, Blocos::class);
        }else{
            $resultado = $this->select(
                "SELECT id, empreendid, nome FROM blocos"
            );
            return $resultado->fetchAll(\PDO::FETCH_CLASS, Blocos::class);
        }

        return false;
    }

    public  function listarparaeditar($id = null){
        if($id) {
            $resultado = $this->select(
                "SELECT id, empreendid, nome FROM blocos  WHERE id = $id"
            );
            return $resultado->fetchObject(Blocos::class);
        }else{
            $resultado = $this->select(
                "SELECT id, empreendid, nome FROM blocos"
            );
            return $resultado->fetchAll(\PDO::FETCH_CLASS, Blocos::class);
        }

        return false;
    }

    public function verificaNome($nome){
        try {
            $query = $this->select(
                "SELECT * FROM blocos WHERE nome = '$nome'"
            );
            return $query->fetch();

        }catch (Exception $e){
            throw new \Exception("Erro no acesso aos dados.", 500);
        }
    }

    public  function salvar(Blocos $blocos)
    {
        try {
            $empreendid = $blocos->getEmpreendid();
            $nome       = $blocos->getNome();

            return $this->insert(
                'blocos',
                ":empreendid, :nome",
                [
                    ':empreendid'=>$empreendid,
                    ':nome'=>$nome
                ]
            );

        }catch (\Exception $e){
            throw new \Exception("Erro na gravação de dados.", 500);
        }
    }

    public  function atualizar(Blocos $blocos){
        try {
            $id         = $blocos->getId();
            $empreendid = $blocos->getEmpreendid();
            $nome       = $blocos->getNome();

            return $this->update(
                'blocos',
                "empreendid = :empreendid, nome = :nome",
                [
                    ':id'=>$id,
                    ':empreendid'=>$empreendid,
                    ':nome'=>$nome,
                ],
                "id = :id"
            );

        }catch (\Exception $e){
            throw new \Exception("Erro na gravação de dados.", 500);
        }
    }

    public function excluir(Blocos $blocos){
        try {
            $id = $blocos->getId();
            
            return $this->delete('blocos',"id = $id");

        }catch (Exception $e){
            
            throw new \Exception("Erro ao deletar", 500);
        }
    }
}
