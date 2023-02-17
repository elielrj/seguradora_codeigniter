<?php
    class EstadoController extends CI_Controller{

        public function index(){
            
            $this->load->model('dao/EstadoDAO');

            //$estadoDAO = new EstadoDAO();        

            $tabela = $this->EstadoDAO->retrive();//$this->EstadoModel->SelecionaTodos();

            $dados = array(
                'titulo'=>'Cadastro de Estados',
                'tabela'=> $tabela,
                'pagina'=>'estado/index.php'
            );
            $this->load->view('index',$dados);
        }

        public function Novo()
        {
            $dados = array(
                'titulo' => 'Cadastro de estados',
                'pagina' => 'estado/novo.php',
            );

            $this->load->view('index', $dados);
        }

        public function Incluir(){
           
            $this->load->model('dao/EstadoDAO');


            $nome = $this->input->post('nome');
            $sigla = $this->input->post('sigla');

            $estado = array(
                'nome' => $nome,
                'sigla' => $sigla
            );

            $this->EstadoDAO->create($estado);

            redirect('estadocontroller');
       
        }

        public function Alterar($codigo){                
            
            $this->load->model("dao/EstadoDAO");
            $where = array('idestado'=>$codigo);

            $tabela = $this->EstadoDAO->retriveIdEstado($where);

            $dados = array(
                'titulo'=>'Alteração do Estado',
                'pagina'=>'estado/alterar.php',
                'tabela'=> $tabela
            );

            $this->load->view('index',$dados);
        }

        public function SalvarAlteracao(){

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

    }

    
?>