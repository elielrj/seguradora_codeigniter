<?php
    class EstadoController extends CI_Controller{

        public function index(){
            
            $this->load->model('dao/EstadoDAO');         

            $tabela = $this->EstadoDAO->retrive();

            $dados = array(
                'titulo'=>'Cadastro de Estados',
                'tabela'=> $tabela,
                'pagina'=>'estado/index.php'
            );

            $this->load->view('index',$dados);
        }

        public function formularioNovoEstado()       {
            $dados = array(
                'titulo' => 'Cadastro de estados',
                'pagina' => 'estado/formularioNovoEstado.php',
            );

            $this->load->view('index', $dados);
        }

        public function incluirNovoEstado(){
           
            $this->load->model('dao/EstadoDAO');

            $estado = array(
                'nome' => $this->input->post('nome'),
                'sigla' => $this->input->post('sigla')
            );

            $this->EstadoDAO->create($estado);

            redirect('estadocontroller');       
        }

        public function formularioAlterarEstado($codigo){                
            
            $this->load->model("dao/EstadoDAO");
            $where = array('idestado'=>$codigo);

            $tabela = $this->EstadoDAO->retriveIdEstado($where);

            $dados = array(
                'titulo'=>'Alteração do Estado',
                'pagina'=>'estado/formularioAlterarEstado.php',
                'tabela'=> $tabela
            );

            $this->load->view('index',$dados);
        }

        public function atualizarEstado(){

            $idestado = $this->input->post('idestado');
            $nome = $this->input->post('nome');
            $sigla = $this->input->post('sigla');

            $estado = array(
                'nome'=>$nome,
                'sigla'=>$sigla
            );

            $where = array('idestado' => $idestado);

            $this->load->model('dao/EstadoDAO');

            $this->EstadoDAO->update($where,$estado);

            redirect('estadocontroller');
        }

        public function deletarEstado($codigo){
            
           $where = array('idestado' => $codigo);

            $this->load->model('dao/EstadoDAO');

            $this->EstadoDAO->delete($where);

            redirect('estadocontroller');
        }

    }
