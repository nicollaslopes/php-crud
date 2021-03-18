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

            $obj = new Conexao();
            $con = $obj->conecta();
            $stmt = $con->prepare("SELECT * FROM administrador WHERE login = :login and senha = :senha");

            $stmt->bindParam(':login', $login);
            $stmt->bindParam(':senha', $senha);
            $stmt->execute();

            if($stmt->rowCount()){
                $_SESSION['online'] = true;
                header('Location: ../view/painel.php');
                return true;
            } else {
                $_SESSION['online'] = false;
                header('Location: ../index.php');
                return false;
            }

            
        }   

    }