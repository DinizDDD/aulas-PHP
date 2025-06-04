<?php 

    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $base = "lachinho";

    $conn = mysqli_connect($servidor, $usuario, $senha, $base);

    if (!$conn){
        echo "Erro ao conectar ".mysqli_connect_errno()." - ".mysqli_connect_error();

    }
?>