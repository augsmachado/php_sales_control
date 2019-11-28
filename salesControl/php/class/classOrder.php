<?php include("connection\connection.php");?>
<?php

    class Order {
        public $ord_idOrder;
        public $ord_idClient;
        public $ord_idSalesman;
        public $ord_orderStatus;
        public $ord_orderDate;
        public $ord_payDate;

        public function saveOrderQuery($connection, $ord_idClient, $ord_idSalesman, $ord_orderStatus, $ord_orderDate, $ord_payDate) {
            $saveQuery = mysqli_query($connection, "INSERT INTO tbl_order (ord_idclient, ord_idsalesman, ord_orderstatus, ord_orderdate, ord_paydate) VALUES ($ord_idClient, $ord_idSalesman, '$ord_orderStatus', '$ord_orderDate', '$ord_payDate')");

            if($saveQuery) echo("<br>Query has been saved successfully.");
			else echo("<br>Error ". mysqli_errno($connection) . ": " . mysqli_error($connection));
        }
        
        public function listOrderQuery($connection) {
            $listQuery = mysqli_query($connection, "SELECT * FROM tbl_order");

            if($listQuery == false) echo("<br>Error ". mysqli_errno($connection) . ": ". mysqli_error($connection));
            
            while($row = mysqli_fetch_array($listQuery)) {
                $ord_idOrder = $row["ord_idOrder"];
                $ord_idClient = $row["ord_idClient"];
                $ord_idSalesman = $row["ord_idSalesman"];
                $ord_orderStatus = $row["ord_orderStatus"];
                $ord_orderDate = $row["ord_orderDate"];
                $ord_payDate = $row["ord_payDate"];

                echo("<hr>ID Order: $ord_idOrder<br>
                ID Client: $ord_idClient<br>
                ID Salesman: $ord_idSalesman<br>
                Order Status: $ord_orderStatus<br>
                Order Date: $ord_orderDate<br>
                Pay Date: $ord_payDate");
            }
        }

        public function editOrderQuery($connection, $ord_idOrder, $ord_idClient, $ord_idSalesman, $ord_orderStatus, $ord_orderDate, $ord_payDate) {
            $editQuery = mysqli_query($connection, "UPDATE `tbl_order` SET `ord_idClient` = $ord_idClient, `ord_idSalesman` = $ord_idSalesman, `ord_orderStatus` = '$ord_orderStatus', `ord_orderDate` = $ord_orderDate, `ord_payDate` = $ord_payDate WHERE ord_idOrder = $ord_idOrder");

            if($editQuery) echo("<br>Query has been up-to-date successfully.");
			else echo("<br>Error ". mysqli_errno($connection) . ": " . mysqli_error($connection));
        }

        public function deleteOrderQuery($connection, $ord_idOrder) {
            $deleteQuery = mysqli_query($connection, "DELETE FROM `tbl_order` WHERE ord_idOrder = $ord_idOrder");

            if($deleteQuery) echo("<br>Query has been deleted successfully.");
			else echo("<br>Error ". mysqli_errno($connection) . ": " . mysqli_error($connection));
        }

        public function get_idOrder() {
            return $this->ord_idOrder;
        }

        public function get_idClient() {
            return $this->ord_idClient;
        }

        public function set_idClient($ord_idClient) {
            $this->ord_idClient = $ord_idClient;
        }
        
        public function get_idSalesman() {
            return $this->ord_idSalesman;
        }

        public function set_idSalesman($ord_idSalesman) {
            $this->ord_idSalesman = $ord_idSalesman;
        }

        public function get_orderStatus() {
            return $this->ord_orderStatus;
        }

        public function set_orderStatus($ord_orderStatus) {
            $this->ord_orderStatus = $ord_orderStatus;
        }

        public function get_orderDate() {
            return $this->ord_orderDate;
        }

        public function set_orderDate($ord_orderDate) {
            $this->ord_orderDate = $ord_orderDate;
        }

        public function get_payDate() {
            return $this->ord_payDate;
        }

        public function set_payDate($ord_payDate) {
            $this->ord_payDate = $ord_payDate;
        }
    }
?>