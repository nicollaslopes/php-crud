<?php

require_once("../model/conexao.php");
require_once("../model/util.php");

$conexao = new Conexao();
$con = $conexao->conecta();

$util = new Util();
$verifica = $util->verificaExistenciaUsuario($_POST["login"]); 

var_dump($verifica);
if(!$verifica){
    $urlRetorno = $_SERVER['HTTP_REFERER'];
    header("Location: $urlRetorno");
} else {
    
}

