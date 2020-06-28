<?php

namespace App\Models\Entidades;

class Blocos
{
    private $id;
    private $empreendid;
    private $nome;
    
    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getEmpreendid()
    {
        return $this->empreendid;
    }

    public function setEmpreendid($empreendid)
    {
        $this->empreendid = $empreendid;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

}