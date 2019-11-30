<?php include("connection\connection.php");?>
<?php

    class Product {
        public $prod_idProduct;
        public $prod_description;
        public $prod_availableAmount;
        public $prod_unitPrice;
        public $prod_minimalStock;

        public function saveProductQuery($connection, $prod_description, $prod_availableAmount, $prod_unitPrice, $prod_minimalStock) {
            $saveQuery = mysqli_query($connection, "INSERT INTO tbl_product (prod_description, prod_availableAmount, prod_unitPrice, prod_minimalStock) VALUES ('$prod_description', $prod_availableAmount, $prod_unitPrice, $prod_minimalStock)");
			
			if($saveQuery) echo("<br>Query has been saved successfully.");
			else echo("<br>Error ". mysqli_errno($connection) . ": " . mysqli_error($connection));
        }

        public function listProductQuery($connection) {
            $listQuery = mysqli_query($connection, "SELECT * FROM tbl_product");

            if($listQuery == false) echo("<br>Error ". mysqli_errno($connection) . ": ". mysqli_error($connection));
            
            while($row = mysqli_fetch_array($listQuery)) {
                $prod_idProduct = $row["prod_idProduct"];
                $prod_description = $row["prod_description"];
                $prod_availableAmount = $row["prod_availableAmount"];
                $prod_unitPrice = $row["prod_unitPrice"];
                $prod_minimalStock = $row["prod_minimalStock"];
            }
        }

        public function editProductQuery($connection, $prod_idProduct, $prod_description, $prod_availableAmount, $prod_unitPrice, $prod_minimalStock) {
            $editQuery = mysqli_query($connection, "UPDATE tbl_product SET `prod_description` = '$prod_description', `prod_availableAmount` = $prod_availableAmount, `prod_availableAmount` = $prod_availableAmount, `prod_unitPrice` = $prod_unitPrice, `prod_minimalStock` = $prod_minimalStock WHERE prod_idProduct = $prod_idProduct");

            if($editQuery) echo("<br>Query has been up-to-date successfully.");
			else echo("<br>Error ". mysqli_errno($connection) . ": " . mysqli_error($connection));
        }

        public function deleteProductQuery($connection, $prod_idProduct) {
            $deleteQuery = mysqli_query($connection, "DELETE FROM `tbl_product` WHERE prod_idProduct = $prod_idProduct");

            if($deleteQuery) echo("<br>Query has been deleted successfully.");
			else echo("<br>Error ". mysqli_errno($connection) . ": " . mysqli_error($connection));
        }
        
        public function get_idProduct() {
            return $this->prod_idProduct;
        }

        public function get_description() {
            return $this->prod_description;
        }

        public function set_description($prod_description) {
            $this->prod_description = $prod_description;
        }

        public function get_availableAmount() {
            return $this->prod_availableAmount;
        }

        public function set_availableAmount($prod_availableAmount) {
            $this->prod_availableAmount = $prod_availableAmount;
        }

        public function get_unitPrice() {
            return $this->prod_unitPrice;
        }

        public function set_unitPrice($prod_unitPrice) {
            $this->prod_unitPrice = $prod_unitPrice;
        }

        public function get_minimalStock() {
            return $this->prod_minimalStock;
        }

        public function set_minimalStock($prod_minimalStock) {
            $this->prod_minimalStock = $prod_minimalStock;
        }
    }
?>