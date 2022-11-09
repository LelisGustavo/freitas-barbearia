<?php

require_once '../DAO/UtilDAO.php';

?>

<nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="inicial.php">Freitas Barbearia</a>
    </div>
    <div style="color: white;
padding: 15px 50px 5px 50px;
float: left;
font-size: 14px;"> Bem-Vindo, <strong style="font-size: 15px; color: #42c6fa"><?= UtilDAO::NomeLogado(); ?></strong> <br> Dúvidas mande uma mensagem para: <b>(19) 99357-6996</b> <i class="fa-brands fa-whatsapp"></i><br> </div>
</nav>