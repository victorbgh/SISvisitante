<?php include_once 'cabecalho.php'; ?>

<?php 

    if ($_SESSION['sisvisitante2']['user']['perfil_id'] != ID_PERFIL_ADMIN) {
        header('Location: index.php');
    }
?>

<h2>Usuários</h2>

<?php 
$query  = "SELECT id, cpf, nome FROM usuario WHERE id <> {$_SESSION['sisvisitante2']['user']['id']} ORDER BY nome";
$result = getResultAsArray($query);
?>

<?php if (!empty($result)) { ?>
    
    <table class="tbl">
        <thead>
            <tr>
                <th>Nome</th>
                <th>CPF</th>
                <th>Ação</th>
            </tr>
        </thead>
    
    <?php foreach ($result as $linhaTable) { ?>
        
        <tr>
            <td><?php echo $linhaTable['cpf']; ?></td>
            <td><?php echo $linhaTable['nome']; ?></td>
            <td>
                <a href="editar_usuario.php?id=<?php echo $linhaTable['id']; ?>">Editar</a>
                <a href="excluir_usuario.php?id=<?php echo $linhaTable['id']; ?>">Excluir</a>
            </td>
        </tr>
        
    <?php } ?>
    
    </table>

<?php } ?>


<?php include_once 'rodape.php'; ?>