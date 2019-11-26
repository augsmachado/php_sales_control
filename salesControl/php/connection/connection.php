<?php

    $host = "localhost";
    $user = "root";
    $password = "";
    $dataBank = "db_salesControl";

    $connection = mysqli_connect($host, $user, $password, $dataBank);

    if(!$connection) echo("Fail to connect with database");

?>