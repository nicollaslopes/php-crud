<?php session_start() ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto CRUD</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="assets/style.css">
</head>
<body>

    
    <div id=divCentral>     
        <form action="controller/login.php" method="POST">
            <div class="form-group">
                <label for="usuario">Usuário</label>
                <input type="text" class="form-control" id="login" name="login" required>
            </div>
            <div class="form-group">
                <label for="senha">Senha</label>
                <input type="password" class="form-control" id="senha" name="senha" required>
                <?php if(isset($_SESSION['online']) && $_SESSION['online'] == false){?>
                <small style="color:red">Login ou senha incorreto(s)!</small>
                <?php }
                unset($_SESSION['online']);
                ?>

            </div>
                <button type="submit" class="btn btn-primary">Entrar</button>
                
                <a class="btn btn-primary" href="view/registra.html">Registrar</a>
        </form>
    </div>
    
    
</body>
</html>