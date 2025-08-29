<?php
    include('verifica_login.php');
    include('conexao.php');

$niveldapagina= array ($mestre, $colaborador);

if (!in_array($nivel, $niveldapagina)) {
    echo
        "<script>
            alert('Você não tem permissão para acessar essa área.')
            history.go(-1);
        </script>";
}
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

<form action="formplano_recebe.php">
    <div class="card border-primary" style="width: 75rem;">
        <div class="form-row">
            <div class="col">
                <label for="nomePlano">* Nome</label>
                <input type="text" class="form-control" name="nome_plano" id="nome_plano" placeholder="Nome do plano">
        </div>
        <div class="col">
            <label for="descricaoPlano">* Descrição</label>
            <input type="text" class="form-control" name="desc_plano" id="desc_plano" placeholder="Descreva detalhes do plano">
        </div>
            <div class="col">
                <label for="valorPlano">* Valor</label>
                <input type="text" class="form-control" name="valor_plano" id="valor_plano" placeholder="R$ 0,00">
            </div>
        </div>
        <br>
        <div class="col-12">
                <button type="submit" class="btn btn-primary" name="send" id="send ">Enviar</button>
                <button type="button" class="btn btn-danger" name="limpa" id="limpa" onclick='form.reset()'>
                    Limpar
                </button>
        </div>
    </div>
</form>
<br>
    <?php include 'includes/footer.php'; ?>
</div>
</body>
</html>