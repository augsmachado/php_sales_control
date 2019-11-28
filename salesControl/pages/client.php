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
                        <input class="form-control mr-sm-2" type="search" placeholder="CPF Client" aria-label="Search">
                        <button class="btn btn-outline-sucess btn-primary my-2 my-sm-0 " type="submit"> Search </button>
                    </div>
                    
                    <div class="form-group col-sm-1">
                        <input class="btn btn-primary" type="button" value="Input">
                    </div>
                    <div class="form-group col-sm-1">
                        <input class="btn btn-primary" type="submit" value="Submit">
                    </div>
                    <div class="form-group col-sm-1">
                        <input class="btn btn-primary" type="reset" value="Reset">
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