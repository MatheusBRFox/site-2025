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
    <div class="container">
<br>
    <center><h5> PREENCHA OS CAMPOS ABAIXO PARA ADICIONAR UM NOVO PLANO </h5></center>
<br>
<form>
    <div class="form-row">
        <div class="col">
            <label for="nomePlano">* Nome</label>
            <input type="text" class="form-control" placeholder="Nome do plano">
    </div>
    <div class="col">
        <label for="descricaoPlano">* Descrição</label>
        <input type="text" class="form-control" placeholder="Descreva detalhes do plano">
    </div>
        <div class="col">
            <label for="valorPlano">* Valor</label>
            <input type="text" class="form-control" placeholder="R$ 0,00">
        </div>
    </div>
    <br>
    <div class="col-12">
            <button type="submit" class="btn btn-primary" name="send" id="send ">Enviar</button>
            <button type="button" class="btn btn-danger" name="limpa" id="limpa" onclick='form.reset()'>
                <i class='fa fa-eraser' style="font-size:25px;"</i>
                Limpar
            </button>
    </div>
</form>
<br>
    <?php include 'includes/footer.php'; ?>
</div>
</body>
</html>