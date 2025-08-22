<?php
    include('verifica_login.php');
    include('conexao.php');
?>

<!DOCTYPE html>
<html>
<head>   
    <title> INDEX | Pagina 02 </title>
    <?php include 'includes/head.php'; ?>
</head>
<body>
    <?php include 'includes/header.php'; ?>

    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="midias/img/img1.jpg" height='500px' class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>BEM VINDO AO MELHOR PROVEDOR DO BRASIL</h5>
                    <button type='button' class='btn btn-primary btn-jg'> CONHEÇA NOSSOS PLANOS </button>
                </div>
            </div>
        </div>
    </div>
<div class="container">

    <?php include 'includes/footer.php'; ?>
</div>
</body>
</html>