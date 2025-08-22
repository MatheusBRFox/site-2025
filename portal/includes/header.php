<nav class="navbar bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="../midias/img/logo.webp" alt="Logo" width="40" height="30" class="d-inline-block align-text-top">
            HyperLinker
        </a>
        <i class='fa fa-user-circle' style='font-size:24px'> <?php echo $noperador; ?></i>
    </div>
</nav>

    <nav class="navbar navbar-expand-lg bg-primary">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon bg-primary"></span>
            </button>
            <a class="navbar-brand" href="#"></a>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" id="header" href="index.php" style='font-size:15px'> Home <i class='fa fa-home'></i></a>
                        </li>

                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" id="header" style='font-size:15px'>Adicionar <i class='fa fa-plus'></i></a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#"> <i class='fa fa-address-card' style='font-size:15px'></i> Cliente </a></li>
                            <li><a class="dropdown-item" href="formplano.php"> <i class='fa fa-shopping-cart' style='font-size:15px'></i> Plano </a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#"> <i class='fa fa-headphones' style='font-size:15px'></i> Atendimentos </a></li>
                        </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="header" href="contato.php" style='font-size:15px'> Faturas <i class='fa fa-credit-card-alt'></i></a>
                        </li>

                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" id="header" style='font-size:15px'>Listar <i class='fa fa-bars'></i></a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#"> <i class='fa fa-address-card' style='font-size:15px'></i> Cliente </a></li>
                            <li><a class="dropdown-item" href="#"> <i class='fa fa-shopping-cart' style='font-size:15px'></i> Plano </a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#"> <i class='fa fa-headphones' style='font-size:15px'></i> Atendimentos </a></li>
                        </ul>
                        </li>

                    </ul>
                <a class="btn btn-light" href="logout.php" role="button" id="header1">Sair</a>
            </div>
        </div>
    </nav>