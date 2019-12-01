<?php include("..\php\class\classProduct.php");?>
<?php

    $p = new Product();

    $p->set_idProduct($_POST["productCodeRequest"]);
    $p->set_description($_POST["productDescriptionInput"]);
    $p->set_availableAmount($_POST["productAvailableAmountInput"]);
    $p->set_unitPrice($_POST["produtUnitaryPriceInput"]);
    $p->set_minimalStock($_POST["productMinimalStockInput"]);


    $p->saveProductQuery($connection, $p->get_idProduct(), $p->get_description(), $p->get_availableAmount(), $p->get_unitPrice(), $p->get_minimalStock());

?>

<?php include('ProductRegister.php');?>