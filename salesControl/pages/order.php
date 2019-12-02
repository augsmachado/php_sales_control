<?php { include('header.php'); } ?>

<?php
    echo<<<HTML
    <html>
        <body>
            <!-- Bootstrap CSS -->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

            
            <!-- Content Order Register page -->
            <div class="container-fluid">
                
                 <!-- Form to request's informations -->
                <form class="form-group" id="formRequest">
                    <fieldset class="border p-2">
                        <legend class="w-auto">Request</legend>
                        <div class="row">
                            <form class="form-inline">
                                <div class="form-group col-sm-3">
                                    <input type="text" class="form-control"  id="numberOrderInput" name="numberOrderInput" placeholder="Number Order">
                                </div>
                                <div class="form-group col-sm-3">
                                    <input type="date" class="form-control"  id="dateOrderInput" name="dateOrderInput" placeholder="Date: 99/99/9999">
                                </div>
                                <div class="form-group col-sm-3">
                                    <input type="text" class="form-control"  id="codeCustomerInput" name="codeCustomerInput" placeholder="Customer Code">
                                </div>
                                <div class="form-group col-sm-3">
                                    <input type="text" class="form-control"  id="codeSellerInput" name="codeSellerInput" placeholder="Seller code">
                                </div>
                            </form>
                        </div>
                    </fieldset>
                </form>
                

                <!-- Form to Order items -->
                <form class="form-group" id="orderItems">
                    <fieldset class="border p-2">
                        <legend class="w-auto">Order Item</legend>
                        <div class="row">
                            <form class="form-inline">
                                
                                <!-- Search product -->
                                <div class="form-group col-sm-3">
                                    <input class="form-control" id="codeProductInput" name="codeProductInput" type="search" placeholder="Code Product: 0000" aria-label="Search">
                                </div>
                                <div class="form-group col-sm-3">
                                    <button class="btn btn-outline-sucess btn-primary my-2 my-sm-0 " type="submit">Search</button>
                                </div>
                                
                                
                                <div class="form-group col-sm-3">
                                    <input type="text" class="form-control" id="soldAmountInput" placeholder="Sold Amount">
                                </div>
                            </form>
                        </div>

                        <div  class="row">
                        <form class="form-inline">
                                <!-- Remove product function -->
                                <div class="form-group col-sm-5">
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
                                    
                                    <button class="btn btn-danger" type="button" onclick="userChoice()">Remove product</button>
                                </div>

                                <!-- Add product function -->
                                <div class="form-group col-sm-5">
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
                                    <button class="btn btn-success" type="submit" onclick="saveOrder()">Add product</button>
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
                                <textarea class="form-control" id="productDescriptionInput" rows="5" placeholder="Order description"></textarea>
                            </div>

                            <!-- Delete order function -->
                            <div class="form-group col-sm-1">
                                <button class="btn btn-danger btn-sm" type="reset" value="clear" onclick="javascript:window.location.href='order.php'">Cancel</button>
                            </div>
                            
                            
                            <!-- Save order function -->
                            <div class="form-group col-sm-1">
                                <button class="btn btn-success btn-sm" type="submit" onclick="window.print();">Save</button>
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