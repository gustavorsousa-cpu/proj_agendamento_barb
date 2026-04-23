<?php
    $host = "localhost";
    $usuario = "root";
    $senha="";
    $banco= "barbearia";

    $conn= mysqli_connect($host, $usuario, $senha,$banco);

    if (!$conn){
        die ("erro na conexão".mysqli_connect_error());
    }
?>