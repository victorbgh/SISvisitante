<?php

function connect() {
    $server = mysql_connect('localhost', 'root', '');
    if (!$server) {
        die('Error ao conectar ao servidor' . mysql_error());
    }
    
    $db = mysql_select_db('sisvisitante2', $server);
    if (!$db) {
        die('Erro ao selecionar o banco.' . mysql_error());
    }
    
    return $db;
}

function close(){
    mysql_close();
}

function execute($query) {
    connect();
    $result = mysql_query($query);
    close();
    return $result;
}

function getResultAsArray($query) {
    $arr = array();
    
    $result = execute($query);
    if (!empty($result)) {
        while ($row = mysql_fetch_assoc($result)) {
            $arr[] = $row;
        }
    }
    
    return $arr;
}