<?php include("..\php\connection\connection.php");?>
<?php

    class ItemOrder {
        public $item_idOrder;
        public $item_idProduct;
        public $item_soldAmount;

        public function saveItemQuery($connection, $item_idOrder, $item_idProduct, $item_soldAmount) {

            $saveQuery = mysqli_query($connection, "INSERT INTO tbl_itemOrder (item_idOrder, item_idProduct, item_soldAmount) VALUES ($item_idOrder, $item_idProduct, $item_soldAmount)");

            if($saveQuery) echo("<br>Query has been saved successfully.");
            else echo("<br>Error ". mysqli_errno($connection) . ": " . mysqli_error($connection));

            $updateQuery = mysqli_query($connection, "UPDATE tbl_product SET prod_availableAmount = prod_availableAmount - $item_soldAmount WHERE prod_idProduct = $item_idProduct");

            if($updateQuery) echo("<br>Query has been updated successfully.");
            else echo("<br>Error ". mysqli_errno($connection) . ": " . mysqli_error($connection));
        }
        
        public function listItemQuery($connection) {
            $listQuery = mysqli_query($connection, "SELECT * FROM tbl_itemOrder");

            if($listQuery == false) echo("<br>Error ". mysqli_errno($connection) . ": ". mysqli_error($connection));
            
            while($row = mysqli_fetch_array($listQuery)) {
                $item_idOrder = $row["item_idOrder"];
                $item_idProduct = $row["item_idProduct"];
                $item_orderDate = $row["item_orderDate"];
                $item_soldAmount = $row["item_soldAmount"];
            }
        }

        public function editItemQuery($connection, $item_idOrder, $item_idProduct, $item_soldAmount) {
            $editQuery = mysqli_query($connection, "UPDATE `tbl_itemOrder` SET `item_idOrder` = $item_idOrder, `item_idProduct` = $item_idProduct, `item_soldAmount` = $item_soldAmount WHERE item_idOrder = $item_idOrder");

            if($editQuery) echo("<br>Query has been up-to-date successfully.");
			else echo("<br>Error ". mysqli_errno($connection) . ": " . mysqli_error($connection));
        }

        public function deleteItemQuery($connection, $item_idOrder) {
            $deleteQuery = mysqli_query($connection, "DELETE FROM `tbl_itemOrder` WHERE item_idOrder = $item_idOrder");

            if($deleteQuery) echo("<br>Query has been deleted successfully.");
			else echo("<br>Error ". mysqli_errno($connection) . ": " . mysqli_error($connection));
        }

        public function get_idOrder() {
            return $this->item_idOrder;
        }
        
        public function set_idOrder($item_idOrder) {
            $this->item_idOrder = $item_idOrder;
        }

        public function get_idProduct() {
            return $this->item_idProduct;
        }

        public function set_idProduct($item_idProduct) {
            $this->item_idProduct = $item_idProduct;
        }

        public function get_soldAmount() {
            return $this->item_soldAmount;
        }

        public function set_soldAmount($item_soldAmount) {
            $this->item_soldAmount = $item_soldAmount;
        }
    }
?>