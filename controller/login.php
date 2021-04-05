<?php

    session_start();


    $senha = $_POST["senha"];
    $login = $_POST["login"];

    require_once '../model/util.php';
    $con = new Util();

    $obj = $con->verificaLogin($login, $senha);

    var_dump($obj);

