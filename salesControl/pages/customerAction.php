<?php include("..\php\class\classCustomer.php");?>
<?php

    $choice = $_POST["buttonCustomer"];

    switch ($choice) {
        case 'save':
            
            $c = new Client();

            $c->set_idClient($_POST["customerCodeRequest"]);
            $c->set_cpf($_POST["customerCpfInput"]);
            $c->set_name($_POST["customerNameInput"]);
            $c->set_address($_POST["customerAdressInput"]);
            $c->set_city($_POST["customerCityInput"]);
            $c->set_cep($_POST["customerCepInput"]);
            $c->set_uf($_POST["customerStateInput"]);
            $c->set_ddd($_POST["customerDDDInput"]);
            $c->set_tel($_POST["customerTelephoneInput"]);
            $c->set_creditLimit($_POST["customerCreditLimitInput"]);
            $c->set_availableLimit($_POST["customerCreditAvailabletInput"]);
        
            $c->saveClientQuery($connection, $c->get_cpf(), $c->get_name(), $c->get_address(), $c->get_city(), $c->get_cep(), $c->get_uf(), $c->get_ddd(), $c->get_tel(), $c->get_creditLimit(), $c->get_availableLimit());
        
            include('customerRegister.php');
            break;
            
        case 'search':

            $c = new Client();

            $c->set_cpf($_POST["customerCpfInput"]);
            $c->listClientQuery($connection, $c->get_cpf());

            include('customerRegister.php');
            break;
        
        case 'update':

            $c = new Client();

            $c->set_name($_POST["customerNameInput"]);
            $c->set_address($_POST["customerAdressInput"]);
            $c->set_city($_POST["customerCityInput"]);
            $c->set_cep($_POST["customerCepInput"]);
            $c->set_uf($_POST["customerStateInput"]);
            $c->set_ddd($_POST["customerDDDInput"]);
            $c->set_tel($_POST["customerTelephoneInput"]);
            $c->set_creditLimit($_POST["customerCreditLimitInput"]);
            $c->set_availableLimit($_POST["customerCreditAvailabletInput"]);
        
            $c->editClientQuery($connection, $c->get_cpf(), $c->get_name(), $c->get_address(), $c->get_city(), $c->get_cep(), $c->get_uf(), $c->get_ddd(), $c->get_tel(), $c->get_creditLimit(), $c->get_availableLimit());
        
            include('customerRegister.php');
            break;
    }
?>