<?php

namespace App\Models\Entidades;

class Empreend
{
    private $id;
    private $nome;
    private $rua;
    private $valor;
    private $zona;
    
    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getRua()
    {
        return $this->rua;
    }

    public function setRua($rua)
    {
        $this->rua = $rua;
    }

    public function getValor()
    {
        return $this->valor;
    }

    public function setValor($valor)
    {
        $this->valor = $valor;
    }
    
    public function getZona() 
    {
        return $this->zona;
    }

    public function setZona($zona)
    {
        $this->zona = $zona;
    }
}