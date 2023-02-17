<?php

//include('application/models/dao/estadoDAO.php');

    class EstadoModel extends CI_Model{


        private $idestado;
        private $nome;
        private $sigla;

        public function __construct($idestado = 0,$nome = "",$sigla="")
        {
            $this->idestado = $idestado;
            $this->nome = $nome;
            $this->sigla = $sigla;
        }
        
        public function __get($key){
            return $this->{$key};
        }

        public function __set($key, $value)
        {
            $this->{$key} = $value;
        }

        /*public function SelecionaTodos(){

            //$retorno = $this->db->get('estado',100);

            //return $retorno->result();

            $estadoDAO = new EstadoDAO();

            return $estadoDAO->retrive();
        }*/

        public function  Novo(){
            $campos = array(
                'nome' => $_POST['nome'],
                'sigla' => $_POST['sigla']
            );

            $this->db->insert('estado', $campos);
        }

       /* public function Selecionar($where){

            $retorno = $this->db->get_where('estado',$where);

            return $retorno->result();
        }*/
/*
        public function SalvarAlteracao($where,$dados){
            $this->db->update('estado',$dados,$where);

            return;
        }*/
    }
?>