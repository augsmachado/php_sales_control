<?php

    $host = "localhost";
    $user = "root";
    $password = "";
    $dataBank = "db_salesControl";

    $connection = mysqli_connect($host, $user, $password, $dataBank);

    if($connection) echo("Success in to connect with database");
    else echo("Fail to connect with database");

?>