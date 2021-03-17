<?php

    class Conexao{

        private $con;
        private $host = 'localhost';
        private $db = 'crud';
        private $usuario = 'root';
        private $senha = '';

        public function conecta(){
            try {
                $this->con = new PDO('mysql:host=localhost;dbname=crud', $this->usuario, $this->senha);
                
            } catch (PDOException $e) {
                echo "Erro: " . $e->getMessage();
            }   
            
            return $this->con;
        }

    }