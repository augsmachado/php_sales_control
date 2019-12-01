<?php include("..\php\connection\connection.php");?>

<?php { include('header.php'); } ?>

<?php
    echo<<<HTML
    <html>

        <script>
            function userChoice(){
                const option = confirm("Do you really want to delete all records?");
                if ( option === true ) {
                    $.ajax({
                        type: "POST",
                        url: '..\class\classProduct.php',
                        data:{action:'deleteProductQuery'},
                        success:function(html) {
                            alert(html);
                        }
                    });
                }
            }
        </script>
        <body>
            <!-- Bootstrap CSS -->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
            
            <!-- Action Bar -->
            <div class="container-fluid">
                <form class="form-inline my-2 my-lg-0">
                    <div class="form-group col-sm-4">
                        <input class="form-control mr-sm-2" type="search" placeholder="Product Code" aria-label="Search">
                        <button class="btn btn-outline-sucess btn-primary my-2 my-sm-0 " type="submit">Search</button>
                    </div>
                    
                    <!-- Todos eles herdam o CPF pesquisado para realizar uma acao -->
                    <div class="form-group col-sm-1">
                        <button class="btn btn-primary " type="button" onclick="javascript:window.location.href='productRegister.php'">New</button>
                    </div>
                    <div class="form-group col-sm-1">
                        <button class="btn btn-primary " type="button" onclick="javascript:window.location.href='productRegister.php'">Edit</button>
                    </div>
                    <div class="form-group col-sm-1">
                        <button class="btn btn-primary " type="button" onclick="userChoice()">Delete</button>
                    </div>
                </form>
            </div>
        </body>
    </html>
HTML;
?>

<?php
    class Product {
        public $prod_idProduct;
        public $prod_description;
        public $prod_availableAmount;
        public $prod_unitPrice;
        public $prod_minimalStock;
    
        public function listProductQuery($connection) {
            $listQuery = mysqli_query($connection, "SELECT * FROM tbl_product ORDER BY prod_description ASC");

            if($listQuery == false) echo("<br>Error ". mysqli_errno($connection) . ": ". mysqli_error($connection));
            
            echo "<table border=1> 
                <tr align=center>
                    <th>Product code</th>
                    <th>Description</th>
                    <th>Available amount</th>
                    <th>Unitary price</th>
                    <th>Minimal stock</th>
                </tr>";

            while($row = mysqli_fetch_array($listQuery)) {
                $prod_idProduct = $row["prod_idProduct"];
                $prod_description = $row["prod_description"];
                $prod_availableAmount = $row["prod_availableAmount"];
                $prod_unitPrice = $row["prod_unitPrice"];
                $prod_minimalStock = $row["prod_minimalStock"];


                echo "  <tr align=center>
                            <td>$prod_idProduct</td>
                            <td>$prod_description</td>
                            <td>$prod_availableAmount</td>
                            <td>$prod_unitPrice</td>
                            <td>$prod_minimalStock</td>
                        </tr>";                

            }
            echo "</table><br>"	;
        }
    }
?>

<?php { include('footer.php'); } ?>