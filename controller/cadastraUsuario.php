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

    $idFuncionario = $_POST["id_funcionario"]; 
    $nomeFuncionario = $_POST["nome"]; 
    $salarioFuncionario = $_POST["salario"]; 
    $dtNascimentoFuncionario = $_POST["dtNascimento"]; 
    $cargoFuncionario = $_POST["cargo"]; 

    $conexao = new Conexao();
    $con = $conexao->Conecta();

    $query = $con->prepare("INSERT INTO funcionario
                                (nome, salario, dt_nascimento, cargo)
                            VALUES 
                                (:nome, :salario, :dtNascimento, :cargo)");

    $query->bindParam(":nome", $nomeFuncionario);
    $query->bindParam(":salario", $salarioFuncionario);
    $query->bindParam(":dtNascimento", $dtNascimentoFuncionario);
    $query->bindParam(":cargo", $cargoFuncionario);

    $stmt = $query->execute();
    
    if($stmt){
        echo '<center>';
        echo '    <h2>Usuário cadastrado!</h2>';
        echo '    <form method="GET" action="php-crud/../../view/painel.php">';
        echo '        <input type="submit" class="btn btn-primary" value="Clique aqui para voltar"">';
        echo '    </form>';
        echo '</center>';
    } else {
        echo "Ocorreu um erro ao cadastrar!";
    }


    
    // $urlRetorno = $_SERVER['HTTP_REFERER'];

    // header("Location: $urlRetorno");
