<?php { include('header.php'); } ?>

<?php
    echo<<<HTML
    <html>
        <body>
            <!-- Bootstrap CSS -->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

            <!-- Content Home page -->
            <div class="container-fluid">
                <div class="row ">
                    <div class="col-sm-3">
                        <div class="card" style="width: 40px height: 40px;">
                            <img src="https://cdn.pixabay.com/photo/2017/02/23/13/05/profile-2092113_1280.png" class="card-img-top" alt="Client image">
                            <div class="card-body">
                                <a href="customer.php" class="btn btn-primary">Go Customer</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card" style="width: 40px height: 40px;">
                            <img src="https://cdn.pixabay.com/photo/2016/08/02/18/27/statistic-1564428_1280.png" class="card-img-top mx-auto" alt="Sales Control image">
                            <div class="card-body">
                                <a href="sellerRegister.php" class="btn btn-primary">Go Seller</a>
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
                </div>
            </div>
        </body>
    </html>
HTML;
?>

<?php { include('footer.php'); } ?>