<?php
    require_once '../model/conexao.php';

    class Actions{

        private $con;

        public function __construct(){
            $this->con = new Conexao();
        }

        public function listaUsuarios($inicio, $quantidade){

            $conn = $this->con->conecta();
            $stmt = $conn->prepare("SELECT * FROM funcionario ORDER BY id_funcionario LIMIT :inicio, :quantidade");
            $stmt->bindParam(':inicio', $inicio, PDO::PARAM_INT);
            $stmt->bindParam(':quantidade', $quantidade, PDO::PARAM_INT);
            $stmt->execute();
            $usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);
            
            return $usuarios;
            
        }

        public function quantidadeUsuarios(){
            
            $conn = $this->con->conecta();
            $stmt = $conn->prepare("SELECT * FROM funcionario");
            $stmt->execute();
            
            return $stmt;
        }


    }