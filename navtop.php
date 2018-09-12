<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Página Inicial</title>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/estilo.css">
        <link rel="stylesheet" href="open-iconic/font/css/open-iconic-bootstrap.css">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-info fixed-top">
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarToggleExternalContent">
                <span class="navbar-toggler-icon"></span>
            </button>

            <a class="navbar-brand" href="index.php">Site</a>

            <div id="navbarToggleExternalContent" class="collapse navbar-collapse">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#"
                           id="navbarDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true"
                           aria-expanded="false">Cadastros</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="cadastroatendente.php">Atendente</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="cadastromedicamento.php">Medicamentos</a>o
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="cadastromedico.php">Medico</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="cadastropaciente.php">Paciente</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/bootstrap.js"></script>
    </body>
</html>
