<?php { include('header.php'); } ?>

<?php
    echo<<<HTML
    <html>
        <body>
            <!-- Bootstrap CSS -->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

            
            <!-- jQuery first, then Popper.js, then Bootstrap JS -->
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
            <!-- Content Home page -->
            <div class="container">
                <div class="row ">
                    <div class="col-sm-3">
                        <div class="card" style="width: 40px height: 40px;">
                            <img src="https://cdn.pixabay.com/photo/2017/02/23/13/05/profile-2092113_1280.png" class="card-img-top" alt="Client image">
                            <div class="card-body">
                                <a href="client.php" class="btn btn-primary">Go Client</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card" style="width: 40px height: 40px;">
                            <img src="https://cdn.pixabay.com/photo/2018/08/12/11/27/skincare-3600570_1280.png" class="card-img-top" alt="Product image">
                            <div class="card-body">
                                <a href="product.php" class="btn btn-primary">Go Product</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card" style="width: 40px height: 40px;">
                            <img src="https://cdn.pixabay.com/photo/2018/08/17/19/52/shopping-3613689_1280.png" class="card-img-top" alt="Order image">
                            <div class="card-body">
                                <a href="order.php" class="btn btn-primary">Go Order</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card" style="width: 40px height: 40px;">
                            <img src="https://cdn.pixabay.com/photo/2016/08/02/18/27/statistic-1564428_1280.png" class="card-img-top mx-auto" alt="Sales Control image">
                            <div class="card-body">
                                <a href="index.php" class="btn btn-primary">Go Sales Control</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </body>
    </html>
HTML;
?>

<?php { include('footer.php'); } ?>