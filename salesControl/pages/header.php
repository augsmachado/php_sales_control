<?php
    echo<<<HTML
        <html>
            <!-- Bootstrap CSS -->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

            
            <header>

                <nav class="navbar navbar-expand-sm navbar-toggleable-sm navbar-light bg-light border-bottom box-shadow mb-3">
                    <div class="container-fluid">

                        <!-- Favicon: image and text -->
                        <a class="navbar-brand" href="home.php">
                            <img src="../img/logo_salesControl.png" width="30" height="30" class="d-inline-block align-top" alt="Logotype Sales Control"> Sales Control
                        </a>

                        <!-- Menu for small screens -->
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <!-- Application menu -->
                        <div class="navbar-collapse collapse d-sm-inline-flex flex-sm-row-reverse">
                            <ul class="navbar-nav flex-grow-1">
                                <li class="nav-item">
                                    <a class="nav-link" href="home.php"> Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="client.php"> Client </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="product.php"> Product </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="order.php"> Order </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </header>
        </html>
HTML;
?>