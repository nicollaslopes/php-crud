<?php
    require_once '../model/conexao.php';

    class Actions{

        private $con;

        public function __construct(){
            $this->con = new Conexao();
        }

        public function listaUsuarios(){

            $this->con = $this->con->conecta();
            $stmt = $this->con->prepare("SELECT * FROM funcionario ORDER BY id_funcionario");
            $stmt->execute();
            $usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $usuarios;
            
        }


    }