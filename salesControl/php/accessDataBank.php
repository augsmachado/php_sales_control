<?php

$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "salesControl";

$conection = mysqli_connect($db_host, $db_user, $db_password, $db_name)

if($conection) echo("Conexão Bem-Sucessida.");
else echo("Falha na Conexão.");

?>