<!DOCTYPE html>

<?php include_once 'biblioteca/includes.php'; ?>

<html>
    <head>
        <title>Sisvisitante - Sistema de Controle de Visitantes</title>
        <link href="css/reset.css" rel="stylesheet" type="text/css">
        <link href="css/style.css" rel="stylesheet" type="text/css">
        <meta charset="utf-8">
        <script type="text/javascript" src="js/scripts.js"></script>
    </head>
    <body>
        <div class="header">
            <h2>SISVISITANTE</h2>
        </div>
        <div class="menu">
            <ul>
                <li><a href="index.php">Início</a></li>
                <li><a href="visitantes.php">Visitantes</a></li>
                <li><a href="usuarios.php">Usuários</a></li>
                <li><a href="relatorio.php">Relatório</a></li>
                <li><a onclick="confirmeSair();"> Sair</a></li>
            </ul>
        </div>
        <div class="container">
            <div class="content">
            <div>
                Bem vindo, <?php echo $_SESSION['sisvisitante2']['user']['nome']; ?>
            </div>