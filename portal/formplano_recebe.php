<!DOCTYPE html>
<html>
<head>   
    <title> Contato | Pagina 03 </title>
    <?php include 'includes/head.php'; ?>
</head>
<body>
    <?php include 'includes/header.php'; ?>
<div class="container">

<?php
    if (($_POST['nome_plano']) and ($_POST['descricao_plano']) and !empty($_POST['valor_plano'])) {
        $nome      = $_POST['nome_plano'];
        $descricao     = $_POST['descricao_plano'];
        $valor     = $_POST['valor_plano'];

        echo "<h2>"; ?><span class='badge text-bg-primary'>Dados Recebidos</span> <?php echo "</h2>";?>
        <a href="contato.php" class="btn btn-primary">Voltar</a><br><br>
        <div class="card border-primary" style="width: 25rem;">
            <div class="card-body">
                <p class="card-text"><strong>Nome: </strong><?php echo $nome;?></p>
                <p class="card-text"><strong>Idade: </strong><?php echo $descricao;?></p>
                <p class="card-text"><strong>Email: </strong><?php echo $valor;?></p>
            </div>
        </div>
<?php
    } else {
        echo "<script> alert('VIOLAÇÃO: Tentativa ilegal de operação.')
        history.go(-1);
        </script>";
    }
?>

</div>
<?php include 'includes/footer.php'; ?>
</body>
</html>