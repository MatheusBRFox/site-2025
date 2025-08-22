<!DOCTYPE html>
<html>
<head>
    <title> Sobre | Pagina 04 </title>
    <?php include 'includes-site/head.php'; ?>
</head>
<body>
    <?php include 'includes-site/header.php'; ?>
    <br>
    <div class="container">

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"> <a href="index.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Sobre</li>
        </ol>
    </nav>
    <br>
    
    <div class="row">
        <div class="col-4">
            <div class="list-group" id="list-tab" role="tablist">
                <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Sobre a Empresa</a>
                <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Missão</a>
                <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-mensagens" role="tab" aria-controls="messages">Visão</a>
                <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-configuracoes" role="tab" aria-controls="settings">Valores</a>
            </div>
        </div>
        <div class="col-8">
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                    <p align="justify">
                        Há 11 anos no mercado, a turma 3.1 possui um histórico de serviços e soluções tecnológicas, prestados em toda região sul do Brasil. Com profissionais com mais de 2 anos e meio de experiência no mercado de tecnologias e Internet.
                    </p></div>
                <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
                    <p align="justify">
                        Conectar pessoas e organizações com excelência.</div>
                    </p>
                <div class="tab-pane fade" id="list-mensagens" role="tabpanel" aria-labelledby="list-messages-list">
                    <p align="justify">
                    Inovação: Vai além dos nossos produtos e serviços, está em tudo que fazemos. Ela nos inspira a explorar o potencial das pessoas, transformando limites em possibilidades.

                    <br><br>Entusiasmo: Nos tornamos mais criativos, produtivos e realizadores. Com entusiasmo, criamos melhores condições para alcançar nossos objetivos.

                    <br><br>Confiança: É a base para construirmos relações sustentáveis. Acreditamos que devemos ser íntegros em tudo que fazemos das conexões que criamos a forma como executamos nossos processos. É assim que conquistamos confiança e construímos relações e negócios fortes, sérios e duradouros.

                    <br><br>Foco no cliente: Clientes satisfeitos são mais fiéis à marca, indicam a empresa e a tornam referência, suas opiniões são mais consideradas do que toda a propaganda paga.

                    <br><br>Visão: Ser empresa referência em bom atendimento e respeito ao cliente, sendo a marca mais lembrada e preferida, entregando conectividade, segurança e entretenimento nas regiões em que atua.</div>
                    </p>
                <div class="tab-pane fade" id="list-configuracoes" role="tabpanel" aria-labelledby="list-settings-list"> 
                    <p align="justify">
                        Tudo Liso, mas top.</div>
                    </p>
            </div>
        </div>
    </div>

    <br>
</div>
<?php include 'includes-site/footer.php'; ?>
</body>
</html>