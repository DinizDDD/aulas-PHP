<?php 

    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $base = "lachinho";

    $con = mysqli_connect($servidor, $usuario, $senha, $base);

    if (!$icon){
        echo "Erro ao conectar ".mysqli_connect_errno()." - ".mysqli_connect_error();

    }