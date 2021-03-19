<?php

    class Util{
        
        public function verificaSeLoginValido(){
            session_start();
            if(!$_SESSION['online']){
                header("Location: ../../../../php-crud");
            }
        }

    }