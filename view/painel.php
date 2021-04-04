<?php
    require_once '../model/util.php';
    require_once '../controller/actions.php';

    $obj = new Util();
    $verifica = $obj->verificaSeLoginValido();

    $obj = new Actions();
    $usuarios = $obj->listaUsuarios();
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

        <?php
            foreach($usuarios as $usuario){
                $data_nascimento = date('d/m/Y', strtotime($usuario['dt_nascimento']));
        ?>

            <tr>
            <th scope="row"><?=$usuario['id_funcionario']?></th>
                <td><?=$usuario['nome']?></td>
                <td><?=$usuario['salario']?></td>
                <td><?=$data_nascimento?></td>
                <td><?=$usuario['cargo']?></td>
                <td>
                    <button type="button" class="btn btn-danger" 
                    data-toggle="modal" data-target="#modalExclusao" data-whatever="<?=$usuario['id_funcionario'];?>">Excluir</button>
                
                    <?php require_once('../view/modalExclusao.php');?>
                
                </td>

                <td>
                    <button type="button" class="btn btn-warning" 
                    data-toggle="modal" data-target="#modalAtualizacao" data-whatever="<?=$usuario['id_funcionario'];?>"> Atualizar </button>

                    <?php require_once('../view/modalAtualizacao.php');?>
                </td>
            </tr>

        <?php } ?>


        </div>


        <?php require_once 'footer.html';?>
    </body>
</html>