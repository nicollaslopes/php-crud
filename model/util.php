<?php

    require_once("conexao.php");

    class Util{

        public function __construct(){
            $this->con = new Conexao();
        }
        
        public function verificaSeLoginValido(){
            session_start();
            if(!$_SESSION['online']){
                header("Location: ../../../../php-crud");
            }
        }

        public function verificaExistenciaUsuario($login){
            
            $conecta = $this->con->conecta();
            $query = $conecta->prepare("SELECT * FROM administrador WHERE login = :login");
            $query->bindParam(":login", $login);
            $query->execute();

            if($query->rowCount()){
                return false;
            } else {
                return true;
            }
        }

    }