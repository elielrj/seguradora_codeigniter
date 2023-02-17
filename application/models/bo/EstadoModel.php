<?php

class EstadoModel extends CI_Model
{
    private $idestado;
    private $nome;
    private $sigla;

    public function __construct($idestado, $nome, $sigla)
    {
        $this->idestado = $idestado;
        $this->nome = $nome;
        $this->sigla = $sigla;
    }

    public function __get($key)
    {
        return $this->{$key};
    }

    public function __set($key, $value)
    {
        $this->{$key} = $value;
    }
}
