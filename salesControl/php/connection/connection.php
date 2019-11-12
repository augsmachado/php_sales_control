<?php

    $host = "localhost";
    $user = "root";
    $password = "";
    $dataBank = "localHost";

    $connection = mysqli_connect($host, $user, $password, $dataBank);

    if($connection) echo("Conexão com o Banco de Dados bem-sucessida.");
    else echo("Falha ao conectar com o Banco de Dados.");

?>