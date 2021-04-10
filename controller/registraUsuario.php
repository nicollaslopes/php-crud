<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Painel de administração</title>
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <link href="../css/style.css" rel="stylesheet">
  <script src="../js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
</head>
<?php

require_once("../model/conexao.php");
require_once("../model/util.php");

$conexao = new Conexao();
$con = $conexao->conecta();

$util = new Util();
$verifica = $util->verificaExistenciaUsuario($_POST["login"]); 

if(!$verifica){
    session_start();
    $_SESSION['msgErroUsuario'] = true;
    $urlRetorno = $_SERVER['HTTP_REFERER'];
    header("Location: $urlRetorno");
} else {
    $login = $_POST["login"];
    $senha = $_POST["senha"];

    $senha_criptografada = password_hash($senha, PASSWORD_BCRYPT);

    $query = $con->prepare("INSERT INTO administrador (login, senha) VALUES (:login, :senha)");
    $query->bindParam(":login", $login);
    $query->bindParam(":senha", $senha_criptografada);
    $query->execute();
}

?>
<center>
    <h2>Usuário cadastrado!</h2>
    <form method="GET" action="php-crud/../../index.php">
        <input type="submit" class="btn btn-primary" value="Clique aqui para voltar"">
    </form>
</center>