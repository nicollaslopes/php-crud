<?php

    session_start();


    $senha = $_POST["senha"];
    $login = $_POST["login"];

    require_once '../model/conexao.php';
    $con = new Conexao();

    $obj = $con->verificaLogin($login, $senha);

    var_dump($obj);

