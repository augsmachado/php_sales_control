<?php include("..\php\class\classProduct.php");?>

<?php

    $choice = $_POST["buttonCustomer"];

    switch ($choice) {
        case 'save':
            
            $p = new Product();

            $p->set_idProduct($_POST["productCodeRequest"]);
            $p->set_description($_POST["productDescriptionInput"]);
            $p->set_availableAmount($_POST["productAvailableAmountInput"]);
            $p->set_unitPrice($_POST["produtUnitaryPriceInput"]);
            $p->set_minimalStock($_POST["productMinimalStockInput"]);

            $p->saveProductQuery($connection, $p->get_idProduct(), $p->get_description(), $p->get_availableAmount(), $p->get_unitPrice(), $p->get_minimalStock());

            
            include('ProductRegister.php');
            break;
            
        case 'search':

            $p = new Product();

            $p->set_idProduct($_POST["productCodeRequest"]);
            $p->listProductQuery($connection, $p->get_idProduct());
  
            include('ProductRegister.php');
            break;
        
        case 'update':

            $p = new Product();
        
            $p->set_idProduct($_POST["productCodeRequest"]);
            $p->set_description($_POST["productDescriptionInput"]);
            $p->set_availableAmount($_POST["productAvailableAmountInput"]);
            $p->set_unitPrice($_POST["produtUnitaryPriceInput"]);
            $p->set_minimalStock($_POST["productMinimalStockInput"]);
        
        
            $p->editProductQuery($connection, $p->get_idProduct(), $p->get_description(), $p->get_availableAmount(), $p->get_unitPrice(), $p->get_minimalStock());
            
            include('ProductRegister.php');
            break;
    }
?>




    