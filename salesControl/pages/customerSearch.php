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
                <form class="form-group" id="individualRegister" method="post" action="customerActionList.php">
                    <fieldset class="border p-2">
                        <legend class="w-auto">Customer CPF</legend>
                        
                        <div class="row">
                            <form class="form-inline">
                                <!-- If the record exists, returns the Customer code here -->
                                <div class="form-group col-sm-4">
                                    <input type="text" class="form-control" id="customerCpfInput" name="customerCpfInput" placeholder="Customer CPF">
                                </div>
                            </form>
                        </div>
                        <div class="form-group col-sm-6">
                            <button class="btn btn-secondary btn-lg" type="submit">Search</button>
                        </div>
                    </fieldset>
                </form>
            </div>
        </body>
    </html>
HTML;
?>

<?php { include('footer.php'); } ?>