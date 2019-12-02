<?php include("..\php\class\classSalesman.php");?>
<?php

    $choice = $_POST["buttonCustomer"];

    switch ($choice) {
        case 'save':
            
            $s = new Salesman();

            $s->set_cpf($_POST["sellerCpfInput"]);
            $s->set_name($_POST["sellerNameInput"]);
            $s->set_address($_POST["sellerAdressInput"]);
            $s->set_city($_POST["sellerCityInput"]);
            $s->set_cep($_POST["sellerCepInput"]);
            $s->set_uf($_POST["sellerStateInput"]);
            $s->set_ddd($_POST["sellerDDDInput"]);
            $s->set_tel($_POST["sellerTelephoneInput"]);
            $s->set_salary($_POST["sellerSalaryInput"]);
            $s->set_commission($_POST["sellerCommissionPercentageInput"]);
        
            $s->saveSalesmanQuery($connection, $s->get_cpf(), $s->get_name(), $s->get_address(), $s->get_city(), $s->get_cep(), $s->get_uf(), $s->get_ddd(), $s->get_tel(), $s->get_salary(), $s->get_commission());
        
            include('sellerRegister.php');
            break;
            
        case 'search':

            $s = new Salesman();

            $s->set_cpf($_POST["sellerCpfInput"]);
            $s->listSalesmanQuery($connection, $s->get_cpf());

            include('sellerRegister.php');
            break;
        
        case 'update':

            $s = new Salesman();

            $s->set_name($_POST["sellerNameInput"]);
            $s->set_address($_POST["sellerAdressInput"]);
            $s->set_city($_POST["sellerCityInput"]);
            $s->set_cep($_POST["sellerCepInput"]);
            $s->set_uf($_POST["sellerStateInput"]);
            $s->set_ddd($_POST["sellerDDDInput"]);
            $s->set_tel($_POST["sellerTelephoneInput"]);
            $s->set_salary($_POST["sellerSalaryInput"]);
            $s->set_commission($_POST["sellerCommissionPercentageInput"]);
        
            $s->editSalesmanQuery($connection, $s->get_cpf(), $s->get_name(), $s->get_address(), $s->get_city(), $s->get_cep(), $s->get_uf(), $s->get_ddd(), $s->get_tel(), $s->get_salary(), $s->get_commission());
        
            include('sellerRegister.php');
            break;
    }
?>