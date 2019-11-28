<?php { include('header.php'); } ?>

<?php
    echo<<<HTML
    <html>
        <body>
            <!-- Bootstrap CSS -->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

            <!-- Content Register page -->
            <div class="container">
                <form class="form-group" id="formSeller">
                    <fieldset class="border p-2">
                        <legend class="w-auto">Seller</legend>
                        <div class="row">
                            <form class="form-inline">
                                <div class="form-group col-sm-5">
                                    <input type="search" class="form-control" id="sellerNumberInput" placeholder="Seller code: 0000">
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