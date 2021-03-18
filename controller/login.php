<?php

session_start();

require_once '../model/conexao.php';

$conexao = new Conexao();
$con = $conexao->conecta();


$senha = $_POST["senha"];
$login = $_POST["login"];

var_dump($_POST);

// $stmt = $con->prepare("SELECT * WHERE administrador WHERE login = :login");
// $stmt->bindParam(':login', $login);
// $stmt->execute();

// if(!$stmt->rowCount()){
//     header('Location: ../index.php');
//     $_SESSION['online'] = false;
//     return false;
// }

// $dados = $stmt->fetch(PDO::FETCH_ASSOC);
