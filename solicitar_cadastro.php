<!DOCTYPE html>
<html>
    <head>
        <title>Sisvisitante - Sistema de Controle de Visitantes</title>
        <link href="css/reset.css" rel="stylesheet" type="text/css">
        <link href="css/style.css" rel="stylesheet" type="text/css">
        <meta charset="utf-8">
    </head>
    <body>
        <div class="header">
            <h2>SISVISITANTE</h2>
        </div>        
        <div class="login">
            <h3>Solicitar Cadastro</h3>
            <form action="cadastrar_usuario.php" method="POST">
                <label>nome</label>
                <input type="text" name="nome">  <br>
                <label>CPF</label>
                <input type="text" name="cpf" > <br>
                <label>Senha</label>
                <input type="password" name="senha"> <br>
                <input type="submit" value="Cadastrar">
            </form>
        </div>
        <div class="footer">Desenvolvido por nós.</div>
    </body>
</html>