<?php
    require_once '../model/util.php';

    $obj = new Util();
    $verifica = $obj->verificaSeLoginValido();
?>
<!DOCTYPE html>

    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel de administração</title>
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/css/style.css" rel="stylesheet">
    <link href="../assets/css/footer.css" rel="stylesheet">
    <script src="../assets/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head> 
    <body>
        <?php require_once 'menu.html';?>

        <div id="conteudo">

        <table class="table table-hover">

        <thead>
            <tr>
            <th scope="col">ID do funcionário</th>
            <th scope="col">Nome</th>
            <th scope="col">Salário</th>
            <th scope="col">Data de nascimento</th>
            <th scope="col">Cargo</th>
            </tr>
        </thead>

        <tr>
        <th scope="row">Teste</th>
            <td>1</td>
            <td>2</td>
            <td>3</td>
            <td>4</td>
            <td>*Excluir*</td>
            <td>*Atualizar*</td>
        </tr>
        <?php
            require_once '../controller/actions.php';
            $a = new Actions();
            $obj = $a->listaUsuarios();
            var_dump($obj);
        ?>

        </div>


        <?php require_once 'footer.html';?>
    </body>
</html>