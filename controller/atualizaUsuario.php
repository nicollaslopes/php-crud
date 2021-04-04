<?php

require_once("../model/conexao.php");

$idFuncionario = $_POST["id_funcionario"]; 
$nomeFuncionario = $_POST["nome"]; 
$salarioFuncionario = $_POST["salario"]; 
$dtNascimentoFuncionario = $_POST["dtNascimento"]; 
$cargoFuncionario = $_POST["cargo"]; 

$conexao = new Conexao();
$con = $conexao->Conecta();

$query = $con->prepare("UPDATE funcionario
                        SET 
                        nome = :nome, 
                        salario = :salario,
                        dt_nascimento = :dtNascimento,
                        cargo = :cargo
                        WHERE id_funcionario = :idFuncionario");

$query->bindParam(":nome", $nomeFuncionario);
$query->bindParam(":salario", $salarioFuncionario);
$query->bindParam(":dtNascimento", $dtNascimentoFuncionario);
$query->bindParam(":cargo", $cargoFuncionario);
$query->bindParam(":idFuncionario", $idFuncionario);

$stmt = $query->execute();

$url_retorno = $_SERVER['HTTP_REFERER'];

header("Location: $url_retorno");
