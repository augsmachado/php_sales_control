<?php { include('header.php'); } ?>

<?php
    echo<<<HTML
    <html>
        <body>
            <!-- Bootstrap CSS -->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

            
            <!-- Content Order page -->
            <div class="container-fluid">
                
                <!-- Form to request's informations -->
                <form class="form-group" id="formRequest">
                    <fieldset class="border p-2">
                        <legend class="w-auto">Request</legend>
                        <div class="row">
                            <form class="form-inline">
                                <div class="form-group col-sm-5">
                                    <input type="search" class="form-control" id="requestNumberInput" placeholder="Request number: 0000">
                                </div>
                                <div class="form-group-inline col-sm-2">
                                    <button class="btn btn-outline-sucess btn-secondary my-2 my-sm-0" type="submit">Search</button> 
                                </div>
                                                        
                                <div class="form-group col-sm-5">
                                    <input type="text" class="form-control" id="requestDateInput" placeholder="Request date: 99/99/9999">
                                </div>
                            </form>
                        </div>
                    </fieldset>
                </form>

                <!-- Form to customer's informations -->
                <!--
                    Digita o codigo do cliente
                    Faz uma requisicao para o banco (busca)
                    Selecina o nome do cliente correspondente ao codigo
                    apresenta o nome no espaco indicado que estah desabilitado
                -->
                <form class="form-group" id="formCustomer">
                    <fieldset class="border p-2">
                        <legend class="w-auto">Customer</legend>
                        <div class="row">
                            <form class="form-inline">
                                <div class="form-group col-sm-5">
                                    <input type="search" class="form-control" id="customerNumberInput" placeholder="Customer code: 0000">
                                </div>

                                <div class="form-group-inline col-sm-2">
                                    <button class="btn btn-outline-sucess btn-secondary my-2 my-sm-0" type="submit">Search</button> 
                                </div>
                                                        
                                <div class="form-group col-sm-5">
                                    <input type="text" class="form-control" id="requestNameInput" placeholder="Customer name" disabled>
                                </div>
                            </form>
                        </div>
                    </fieldset>
                </form>

                <!-- Form to seller's informations -->
                <!--
                    Digita o codigo do vendedor
                    Faz uma requisicao para o banco (busca)
                    Selecina o nome do cliente correspondente ao codigo
                    apresenta o nome no espaco indicado que estah desabilitado
                -->
                <form class="form-group" id="formSeller">
                    <fieldset class="border p-2">
                        <legend class="w-auto">Seller</legend>
                        <div class="row">
                            <form class="form-inline">
                                <div class="form-group col-sm-5">
                                    <input type="search" class="form-control" id="sellerNumberInput" placeholder="Seller code: 0000">
                                </div>
                                
                                <div class="form-group-inline col-sm-2">
                                    <button class="btn btn-outline-sucess btn-secondary my-2 my-sm-0" type="submit">Search</button> 
                                </div>
                                                        
                                <div class="form-group col-sm-5">
                                    <input type="text" class="form-control" id="requestNameInput" placeholder="Seller name" disabled>
                                </div>
                            </form>
                        </div>
                    </fieldset>
                </form>


                <!-- Form to Order items -->
                <form class="form-group" id="orderItems">
                    <fieldset class="border p-2">
                        <legend class="w-auto">Order Items</legend>
                        <div class="row">
                            <form class="form-inline">
                                <div class="form-group col-sm-4">
                                    <input type="search" class="form-control" id="codeProductInput" placeholder="Code Product: 0000">
                                </div>

                                <div class="form-group col-sm-2">
                                    <button class="btn btn-outline-sucess btn-secondary my-2 my-sm-0" type="submit">Search</button>
                                </div>

                                <div class="form-group col-sm-4">
                                    <input type="text" class="form-control" id="requestNameInput" placeholder="Product description" disabled>
                                </div>

                                <div class="form-group col-sm-2">
                                    <input type="text" class="form-control" id="soldAmountInput" placeholder="Sold Amount">
                                </div>
                            </form>
                        </div>

                        <!--Add and remove products-->
                        <div class="row">
                            <form class="form-inline" >
                                <div class="form-group col-sm-5">
                                    <button class="btn btn-outline-sucess btn-secondary my-2 my-sm-0" type="submit">Add product</button>
                                </div>
                                <div class="form-group col-sm-6">
                                    <button class="btn btn-outline-sucess btn-secondary my-2 my-sm-0" type="submit">Remove product</button>
                                </div>
                            </form>
                        </div>
                    </fieldset>
                </form>
            </div>
        </body>
    </html>
HTML;
?>

<?php { include('footer.php'); } ?>