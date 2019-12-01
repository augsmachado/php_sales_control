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
                                <div class="form-group col-sm-4">
                                    <input type="search" class="form-control" id="requestNumberInput" placeholder="Request number: 0000">
                                </div>
                                <div class="form-group-inline col-sm-4">
                                    <button class="btn btn-outline-sucess btn-secondary my-2 my-sm-0" type="submit">Search</button> 
                                </div>
                                                        
                                <div class="form-group col-sm-4">
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
                    apresenta o nome no espaco indicado que esta desabilitado
                -->
                <form class="form-group" id="formCustomer">
                    <fieldset class="border p-2">
                        <legend class="w-auto">Customer</legend>
                        <div class="row">
                            <form class="form-inline">
                                <div class="form-group col-sm-4">
                                    <input type="search" class="form-control" id="customerCodeInput" placeholder="Customer code: 0000">
                                </div>

                                <div class="form-group-inline col-sm-4">
                                    <button class="btn btn-outline-sucess btn-secondary my-2 my-sm-0" type="submit">Search</button> 
                                </div>
                                                        
                                <div class="form-group col-sm-4">
                                    <input type="text" class="form-control" id="customerNameRequest" placeholder="Customer name" disabled>
                                </div>
                            </form>
                        </div>
                    </fieldset>
                </form>

                <!-- Form to seller's informations -->
                <!--
                    Digita o codigo do vendedor
                    Faz uma requisicao para o banco (busca)
                    Seleciona o nome do cliente correspondente ao codigo
                    apresenta o nome no espaco indicado que estah desabilitado
                -->
                <form class="form-group" id="formSeller">
                    <fieldset class="border p-2">
                        <legend class="w-auto">Seller</legend>
                        <div class="row">
                            <form class="form-inline">
                                <div class="form-group col-sm-4">
                                    <input type="search" class="form-control" id="sellerNumberInput" placeholder="Seller code: 0000">
                                </div>
                                
                                <div class="form-group-inline col-sm-4">
                                    <button class="btn btn-outline-sucess btn-secondary my-2 my-sm-0" type="submit">Search</button> 
                                </div>
                                                        
                                <div class="form-group col-sm-4">
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
                                <div class="form-group col-sm-2">
                                    <input type="search" class="form-control" id="codeProductInput" placeholder="Code Product: 0000">
                                </div>

                                <div class="form-group col-sm-2">
                                    <button class="btn btn-outline-sucess btn-secondary my-2 my-sm-0" type="submit">Search</button>
                                </div>

                                <div class="form-group col-sm-2">
                                    <input type="text" class="form-control" id="requestNameInput" placeholder="Product description" disabled>
                                </div>

                                <div class="form-group col-sm-2">
                                    <input type="text" class="form-control" id="soldAmountInput" placeholder="Sold Amount">
                                </div>

                                <!-- Remove product function -->
                                <div class="form-group col-sm-2">
                                    <script>
                                        function userChoice(){
                                            const option = confirm("Do you really want to delete the product?");
                                            if ( option === true ) {
                                                $.ajax({
                                                    type: "POST",
                                                    url: '..\class\classOrder.php',
                                                    data:{action:'deleteOrderQuery'},
                                                    success:function(html) {
                                                        alert(html);
                                                    }
                                                });
                                            }
                                        }
                                    </script> 
                                    
                                    <button class="btn btn-danger btn-sm" type="button" onclick="userChoice()">Remove product</button>
                                </div>

                                <!-- Add product function -->
                                <div class="form-group col-sm-2">
                                    <script>
                                        function saveOrder() {
                                            $.ajax({
                                                type: "POST",
                                                url: '..\php\class\classOrder.php',
                                                data:{action:'saveOrderQuery'},
                                                success:function(html) {
                                                    alert(html);
                                                }

                                            });
                                        }
                                    </script>
                                    <button class="btn btn-success btn-sm" type="submit" onclick="saveOrder()">Add product</button>
                                </div>
                            </form>
                        </div>
                    </fieldset>
                </form>
            </div>




            <!--Add and remove products-->
            <div class="container-fluid">
                <form class="form-group" id="formRequest">
                    <div class="row">
                        <form class="form-inline" >                           
                            
                            


                            <!-- Description about order -->
                            <div class="form-group col-sm-9">
                                <label for="productDescriptionInput"></label>
                                <textarea class="form-control" id="productDescriptionInput" rows="5" placeholder="Order description" disabled></textarea>
                            </div>

                            <!-- Delete order function -->
                            <div class="form-group col-sm-1">
                                <button class="btn btn-danger btn-sm" type="reset" value="clear" onclick="javascript:window.location.href='order.php'">Cancel</button>
                            </div>
                            
                            
                            <!-- Save order function -->
                            <div class="form-group col-sm-1">
                                <script>
                                     function saveOrder() {
                                        $.ajax({
                                            type: "POST",
                                            url: '..\php\class\classOrder.php',
                                            data:{action:'saveOrderQuery'},
                                            success:function(html) {
                                                alert(html);
                                            }

                                        });
                                    }
                                </script>
                                <button class="btn btn-success btn-sm" type="submit" onclick="saveOrder()">Save</button>
                            </div>

                            <!-- Delete order function -->
                            <div class="form-group col-sm-1">
                                <button class="btn btn-primary btn-sm" type="reset" value="clear" onclick="javascript:window.location.href='home.php'">Exit</button>
                            </div>                         
                        </form>
                    </div>
                </form>
            </div>
        </body>
    </html>
HTML;
?>


<?php { include('footer.php'); } ?>