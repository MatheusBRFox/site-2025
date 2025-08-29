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
} else if(!empty($_POST['nome_plano']) OR !empty($_POST['desc_plano']) OR !empty($_POST['valor_plano'])){
    $nomeplano= $_POST['nome_plano'];
    $decricaoplano= $_POST['nome_plano'];
    $valorplano= $_POST['nome_plano'];
} else {
    echo
    "<script>
        alert('VIOLAÇÃO: Tentativa ilegal de operação.')
        history.go(-1);
    </script>";
}


?>