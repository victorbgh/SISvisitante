<?php

include_once 'biblioteca/db.php';
include_once 'biblioteca/constantes.php';

if (!empty($_GET)) {
    if (!empty($_GET['id'])) {
        
        if ($_GET['id'] == $_SESSION['sisvisitante2']['user']['id']) {
            header('Location: usuarios.php?msg=' . MSG_NOT_DELETE_USER);
        }
        
        $query = "DELETE FROM usuario WHERE id = " . (integer) $_GET['id'];
        if (execute($query)) {
            header('Location: usuarios.php?msg=' . MSG_SUCCESS);
        } else {
            header('Location: usuarios.php?msg=' . MSG_ERROR);
        }
    }
}
