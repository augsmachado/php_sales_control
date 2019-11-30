<?php { include('header.php'); } ?>

<?php
    echo<<<HTML
    <html>
        <body>
            <!-- Bootstrap CSS -->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
            
            <!-- Action Bar -->
            <div class="container-fluid">
                <form class="form-inline my-2 my-lg-0">
                    <div class="form-group col-sm-4">
                        <input class="form-control mr-sm-2" type="search" placeholder="CPF Customer" aria-label="Search">
                        <button class="btn btn-outline-sucess btn-primary my-2 my-sm-0 " type="submit">Search</button>
                    </div>
                    
                    <!-- Todos eles herdam o CPF pesquisado paara realizar uma acao -->
                    <div class="form-group col-sm-1">
                        <button class="btn btn-primary " type="button" onclick="javascript:window.location.href='customerRegister.php'">New</button>
                    </div>
                    <div class="form-group col-sm-1">
                        <button class="btn btn-primary " type="button" onclick="javascript:window.location.href='customerRegister.php'">Edit</button>
                    </div>
                    <div class="form-group col-sm-1">
                        <button class="btn btn-primary " type="button" onclick="javascript:window.location.href='customerDelete.php'">Delete</button>
                    </div>
                </form>
            </div>



            <!-- Content Client page -->
            <div class="container-fluid">

            </div>
        </body>
    </html>
HTML;
?>

<?php { include('footer.php'); } ?>