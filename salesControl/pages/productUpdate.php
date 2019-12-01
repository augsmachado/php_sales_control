<?php { include('header.php'); } ?>

<?php
    echo<<<HTML
    <html>
        <body>
            <!-- Bootstrap CSS -->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

            <!-- Content Register page -->
            <div class="container">
                
                <!-- Form to request's informations -->
                <form class="form-group" id="individualRegister" method="post" action="productActionUpdate.php">
                    <fieldset class="border p-2">
                        <legend class="w-auto">Product Register</legend>
                        
                        <div class="row">
                            <form class="form-inline">
                                <!-- If the record exists, returns the Product code here -->
                                <div class="form-group col-sm-4">
                                    <input type="text" class="form-control" id="productCodeRequest" name="productCodeRequest" placeholder="Product code">
                                </div>

                                <!-- Description about product -->
                                <div class="form-group col-sm-12">
                                    <label for="productDescriptionInput"></label>
                                    <textarea class="form-control" id="productDescriptionInput" name="productDescriptionInput" rows="3" placeholder="Product description"></textarea>
                                </div>

                                <!-- Data about product -->
                                <div class="form-group col-sm-4">
                                    <input type="number" class="form-control"  id="productAvailableAmountInput" name="productAvailableAmountInput" placeholder="Available Amount">
                                </div>
                                <div class="form-group col-sm-4">
                                    <input type="text" class="form-control"  id="produtUnitaryPriceInput" name="produtUnitaryPriceInput" placeholder="Unitary Price">
                                </div>
                                <div class="form-group col-sm-4">
                                    <input type="number" class="form-control"  id="productMinimalStockInput" name="productMinimalStockInput" placeholder="Minimal Stock">
                                </div>
                            </form>
                        </div>
                        <div class="form-group col-sm-6">
                            <button class="btn btn-success btn-lg" type="submit">Update</button>
                            <button class="btn btn-danger btn-lg" type="reset" value="clear" onclick="javascript:window.location.href='customer.php'">Cancel</button>
                        </div>
                    </fieldset>
                </form>
            </div>
        </body>
    </html>
HTML;
?>

<?php { include('footer.php'); } ?>