<?php

include_once 'biblioteca/constantes.php';
include_once 'biblioteca/db.php';

if (!empty($_POST)) {
    $senha = md5($_POST['senha']);
    
    if (!isset($_POST['perfil_id'])) {
        $perfil = USUARIO_COMUM;
    } else {
        $perfil = $_POST['perfil_id'];
    }
    
    $sql = "INSERT INTO usuario (senha, nome, cpf, perfil_id) "
            . "VALUES ('{$senha}', '{$_POST['nome']}', '{$_POST['cpf']}', {$perfil})";
            
    if (execute($sql)) {
        if ($perfil == ID_SEM_PERFIL) {
            header('Location: login.php?msg=' . MSG_SUCCESS);
        }
        
        header('Location: usuarios.php?msg=' . MSG_SUCCESS);
    } else {
        if ($perfil == ID_SEM_PERFIL) {
            header('Location: login.php?msg=' . MSG_ERROR);
        }
        
        header('Location: usuarios.php?msg=' . MSG_ERROR);
    }
    
}