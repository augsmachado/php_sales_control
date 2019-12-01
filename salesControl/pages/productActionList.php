<?php include("..\php\class\classProduct.php");?>
<?php

    $p = new Product();

    $p->set_idProduct($_POST["productCodeRequest"]);
    $p->listProductQuery($connection, $p->get_idProduct());
    
?>

<?php include('productUpdate.php');?>