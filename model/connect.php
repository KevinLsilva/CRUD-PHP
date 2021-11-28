<?php

include "../config/config.php";

// criar um objeto de conexão (instancia)
$connect = new mysqli($host, $user, $password, $database);

// configuração de charset 
$connect->set_charset("utf-8");

// testar se a conexão foi bem sucedida
if ($connect->connect_error){
    die("Erro de conexão: " . $connect->connect_error);
}

if($mostraMSG){
    echo "Conexão Orientada a Objetos bem Sucedida";
}