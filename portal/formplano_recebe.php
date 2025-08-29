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
    if (!empty($_POST['nome_plano']) and !empty($_POST['descricao_plano']) and !empty($_POST['valor_plano'])) {
        $nome      = $_POST['nome_usuario'];
        $idade     = $_POST['idade_usuario'];
        $email     = $_POST['email_usuario'];
        $fone      = $_POST['telefone_usuario'];
        $mensagem  = $_POST['mensagem_usuario'];

        echo "<h2>"; ?><span class='badge text-bg-primary'>Dados Recebidos</span> <?php echo "</h2>";?>
        <a href="contato.php" class="btn btn-primary">Voltar</a><br><br>
        <div class="card border-primary" style="width: 25rem;">
            <div class="card-body">
                <p class="card-text"><strong>Nome: </strong><?php echo $nome;?></p>
                <p class="card-text"><strong>Idade: </strong><?php echo $idade;?></p>
                <p class="card-text"><strong>Email: </strong><?php echo $email;?></p>
                <p class="card-text"><strong>Telefone: </strong><?php echo $fone;?></p>
            </div>
        </div>

        <div class="card border-primary">
            <div class="card-body">
                <p class="card-text"><strong>Mensagem: </strong><?php echo $mensagem;?></p>
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