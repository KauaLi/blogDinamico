<?php 
    include("variables.php");

    $mysli = new mysqli($host, $user, $password, $database);

    if($mysli->error){
        die("Erro ao conectar com banco de dados ". $mysli->error);
    }
?>