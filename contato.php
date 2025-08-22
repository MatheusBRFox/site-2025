<!DOCTYPE html>
<html>
<head>   
    <title> Contato | Pagina 03 </title>
    <?php include 'includes-site/head.php'; ?>
</head>
<body>
    <?php include 'includes-site/header.php'; ?>
<div class="container">

<h2><span class="badge text-bg-primary">Preencha os campos abaixo</span></h2>

    <form action="recebe_contato.php" method="POST" class="row g-3">
        <div class="col-md-6">
            <label for="nome_usuario" class="form-label">*Nome</label>
            <input type="text" class="form-control" name="nome_usuario" id="nome_usuario" required>
        </div>
        <div class="col-md-6">
            <label for="idade_usuario" class="form-label">*Idade</label>
            <input type="number" class="form-control" name="idade_usuario" id="idade_usuario" required>
        </div>
        <div class="col-6">
            <label for="email_usuario" class="form-label">*Email</label>
            <input type="email" class="form-control" name="email_usuario" id="email_usuario" required>
        </div>
        <div class="col-6">
            <label for="telefone_usuario" class="form-label">*Telefone</label>
            <input type="tel" class="form-control" name="telefone_usuario" id="telefone_usuario" placeholder="55 5555-5555" pattern="[1-9]{2} [0-9]{4}-[0-9]{4}" required>
        </div>
        <div class="col-12">
            <label for="mensagem_usuario" class="form-label">*Mensagem</label>
            <textarea class="form-control" rows="6" placeholder="Adicione um comentário" name="mensagem_usuario" id="mensagem_usuario" style="height: 100px" required></textarea>
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Enviar</button>
            <button type="reset" class="btn btn-danger">Limpar</button>
        </div>
    </form>

</div>
<?php include 'includes-site/footer.php'; ?>
</body>
</html>