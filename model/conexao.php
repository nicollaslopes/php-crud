<?php

    class Conexao{

        private $con;
        private $host = 'localhost';
        private $db = 'crud';
        private $usuario = 'root';
        private $senha = '';

        public function conecta(){
            try {
                $this->con = new PDO("mysql:host=$this->host;dbname=$this->db", $this->usuario, $this->senha);
                
            } catch (PDOException $e) {
                echo "Erro: " . $e->getMessage();
            }   
            
            return $this->con;
        }

        public function verificaLogin($login, $senha){

            $con::Conexao();
            $con = $con->conecta();
            $stmt = $con->prepare("SELECT * FROM administrador WHERE login = :login");

            $stmt->bindParam(':login', $login);
            $stmt->execute();

            
        }   

    }