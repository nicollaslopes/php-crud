<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <title>Registro de Usuário</title>
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-4">
            <form class="form-signin" action="../controller/registra.php" method="POST">
                
                <h1 class="h3 mb-3 font-weight-normal">Registre seu usuário</h1>
                <label for="inputLogin" class="sr-only">Nome</label>
                <input type="text" id="inputLogin" class="form-control" placeholder="Usuário" required="" name="login" autofocus="">
                <label for="inputPassword" class="sr-only">Senha</label>
                <input type="password" id="inputSenha" class="form-control" placeholder="Senha" required="" name="senha">

                <button class="btn btn-lg btn-primary btn-block" type="submit">Registrar</button>
                
            </form>
        </div>
    </div>

</div>
</body>
</html>