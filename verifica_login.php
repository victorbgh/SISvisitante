<?php

include_once 'biblioteca/constantes.php';
include_once 'biblioteca/db.php';

if (!empty($_POST)) {

    if (!empty($_POST['cpf']) && !empty($_POST['senha'])) {
        
        $senha = md5($_POST['senha']);
        
        $sql = "SELECT id, nome, perfil_id, cpf "
            . "FROM usuario "
            . "WHERE cpf = '{$_POST['cpf']}' AND senha = '{$senha}'";
            
        $result = getResultAsArray($sql);
        
        if (!empty($result)) {
            if ($result[0]['perfil_id'] != ID_SEM_PERFIL) {
                session_start();
                
                $_SESSION['sisvisitante2']['user'] = $result[0];
                
                header('Location: index.php');
            } else {
                header('Location: login.php?msg=' . MSG_LOGIN_ERROR);
            }
        }
            
    }
    
}
