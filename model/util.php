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

        public function verificaLogin($login, $senha){

            $conecta = $this->con->conecta();
            $stmt = $conecta->prepare("SELECT * FROM administrador WHERE login = :login");
            
            $stmt->bindParam(':login', $login);
            $stmt->execute();

            $hash = $conecta->prepare("SELECT senha FROM administrador where login = :login");
            $hash->bindParam(':login', $login);
            $hash->execute();
            $hashUsuario = $hash->fetch(PDO::FETCH_ASSOC)["senha"];
            
            $hash_verifica = password_verify($senha, $hashUsuario);

            if($stmt->rowCount() && $hash_verifica == true){
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