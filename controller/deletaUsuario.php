<?php

require_once("../model/conexao.php");

$idfuncionario = $_POST['id_funcionario'];

$conexao = new Conexao();
$con = $conexao->conecta();

$query = $con->prepare("DELETE FROM funcionario WHERE id_funcionario = :idfuncionario");
$query->bindParam(":idfuncionario", $idfuncionario);
$stmt = $query->execute();

$urlRetorno = $_SERVER['HTTP_REFERER'];

header("Location: $urlRetorno");

?>
