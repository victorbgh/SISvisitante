<!DOCTYPE html>

<html>
    <head>
        <title>Sisvisitante - Sistema de Controle de Visitantes</title>
        <link href="css/reset.css" rel="stylesheet" type="text/css">
        <link href="css/style.css" rel="stylesheet" type="text/css">
        <meta charset="utf-8">
        <script type="text/javascript">
            <?php if (!empty($_GET['msg'])) { ?>
                switch(<?php echo $_GET['msg'] ?>) {
                    case 1:
                        alert('Operação ok.');
                        break;
                    case 3:
                        alert('Usuário/senha inválidos ou inexistentes.');
                        break;
                }
            <?php } ?>
            
            function validaLogin() {
                var cpf = document.getElementById('cpf');
                var senha = document.getElementById('senha');
                
                if (cpf.value == '' || cpf.value == null) {
                    alert('Informe o CPF.');
                    return false;
                }
                
                if (senha.value == '' || senha.value == null) {
                    alert('Informe a senha.');
                    return false;
                }
                
                document.getElementById('formLogin').submit();
                
            }
        </script>
    </head>
    <body>
        <div class="header">
            <h2>SISVISITANTE</h2>
        </div>        
        <div class="login">
            <h1>Autenticação</h1>
            <form id="formLogin" method="post" action="verifica_login.php">
                <label>CPF</label>
                <input type="text" name="cpf" id="cpf"> <br>
                <label>Senha</label>
                <input type="password" name="senha" id="senha"> <br>
                 <input type="button" onclick="validaLogin()" value="Entrar">
                <a href="solicitar_cadastro.php">Cadastre-se</a>
            </form>
        </div>
        <div class="footer">Desenvolvido por nós.</div>
    </body>
</html>
                