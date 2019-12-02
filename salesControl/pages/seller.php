<?php { include('header.php'); } ?>

<?php
    echo<<<HTML
    <html>
    <body>
            <!-- Bootstrap CSS -->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
            
            <!-- Action Bar -->
            <div class="container-fluid">
                <form class="form-inline my-2 my-lg-0" method="post" action="sellerAction.php">
                    <div class="form-group col-sm-4">
                        <input class="form-control mr-sm-2" id="sellerCpfInput" name="sellerCpfInput" type="search" placeholder="CPF seller" aria-label="Search">
                        <button class="btn btn-outline-sucess btn-primary my-2 my-sm-0" id="buttonCustomerSearch" name="buttonCustomer" value="search" type="submit">Search</button>
                    </div>
                </form>
                <form class="form-inline my-2 my-lg-2">
                    <!-- Todos eles herdam o CPF pesquisado paara realizar uma acao -->
                    <div class="form-group col-sm-1">
                        <button class="btn btn-primary " type="button" onclick="javascript:window.location.href='sellerRegister.php'">New</button>
                    </div>
                    <div class="form-group col-sm-1">
                        <button class="btn btn-primary " type="button" onclick="javascript:window.location.href='sellerRegister.php'">Edit</button>
                    </div>
                </form>
            </div>
        </body>
    </html>
HTML;
?>

<?php { include('footer.php'); } ?>