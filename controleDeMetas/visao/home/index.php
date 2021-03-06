<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/home.css">
    <?php
    session_start();
    if (empty($_SESSION['email']) && empty($_SESSION['senha'])) {
        header("Location:../login/login.php");
        echo "<script>alert('Não foi possível fazer login,usuário ou senha inválidos')</script>";
    }
    ?>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <img src="../img/goal.png" alt="" height="60" class="d-inline-block align-text-top" style="margin-left: 5px;">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="Navbar">
                <div class="navbar-nav">
                    <a class="nav-link active" href="../home/index.php">Pagina Inicial</a>
                    <a class="nav-link" aria-current="page" href="../metas/metas.php">Minhas Metas</a>
                    <form method="post" action="/controleDeMetas/controle/controle_cliente.php">
                        <input class="btn nav-link b1" type="submit" name="bt_sair" value="Sair">
                    </form>
                </div>
            </div>
        </div>
    </nav>

    <!--Container do conteúdo-->
    <div class="container" style="margin-top: 5%;">
        <div class="row justify-content-md-center">
            <div class="col-sm-12 col-md-6 cont-img" style="padding-left: 5%;">
                <img src="../img/meeting.png" width="340px;">
            </div>
            <div class="col-sm-12 col-md-6 cont-text">
                <div class="row" style="padding-top: 12%;">
                    <p>
                        O Controle de Metas irá te ajudar nos seus primeiros passos como empreendedor, te ajudando a
                        planejar e acompanhar suas metas visando o controle do quanto estão perto de atingi-las.
                    </p>
                    <p>
                        Adicione suas metas, adicione seu progresso em cada meta no período que você determinar ou
                        remova as metas que já não fazem mais sentido para seu negócio.
                    </p>
                </div>
                <div class="row n-metas">
                    <input type="button" class="btn btn-metas buttonMetas" value="Ir para minhas Metas">
                </div>
            </div>
        </div>
    </div>

    <script src="../JQuery/jquery-3.6.0.js"></script>
    <script src="js/home.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

</body>

</html>