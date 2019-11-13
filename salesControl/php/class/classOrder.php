<?php include("../connection/connection.php");?>

<?php

    class Order {
        public $ord_idOrder;
        public $ord_idClient;
        public $ord_idSalesman;
        public $ord_status;
        public $ord_orderDate;
        public $ord_payDate;

        public function saveQueryOrder($ord_idClient, $ord_idSalesman, $ord_status, $ord_orderDate, $ord_payDate) {
            $saveQuery = mysqli_query($connection, "INSERT INTO TBL_ORDER('ORD_IDCLIENT', 'ORD_IDSALESMAN', 'ORD_ORDERSTATUS', 'ORD_ORDERDATE', 'ORD_ORDERPAY') VALUES ('$this->ord_idOrder', '$this->ord_idClient', '$this->ord_idSalesman', '$this->ord_status', '$this->ord_orderDate', '$this->ord_payDate');");
        }

        public function get_idOrder() {
            return $ord_idOrder;
        }
        
        public function get_idClient() {
            return $ord_idClient;
        }

        public function set_idClient($ord_idClient) {
            $this->ord_idClient = $ord_idClient;
        }
        
        public function get_idSalesman() {
            return $ord_idSalesman;
        }

        public function set_idSalesman($ord_idSalesman) {
            $this->ord_idSalesman = $ord_idSalesman;
        }

        public function get_status() {
            return $ord_status;
        }

        public function set_status($ord_status) {
            $this->ord_status = $ord_status;
        }

        public function get_orderDate() {
            return $ord_orderDate;
        }

        public function set_orderDate($ord_orderDate) {
            $this->ord_orderDate = $ord_orderDate;
        }

        public function get_payDate() {
            return $ord_payDate;
        }

        public function set_payDate($ord_payDate) {
            $this->ord_payDate = $ord_payDate;
        }
    }

?>