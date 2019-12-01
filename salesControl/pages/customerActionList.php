<?php include("..\php\class\classCustomer.php");?>
<?php

    $c = new Client();

    $c->set_cpf($_POST["customerCpfInput"]);
    $c->listClientQuery($connection, $c->get_cpf());

?>

<?php include('customerUpdate.php');?>