<?php

    class Order {
        $ord_idOrder;
        $ord_idClient;
        $ord_idSalesman;
        $ord_status;
        $ord_orderDate;
        $ord_payDate;

        public function get_idOrder() {
            return $cli_idOrder;
        }

        public function set_idOrder($cli_idOrder) {
            $this->cli_idOrder = $cli_idOrder;
        }
        
        public function get_idClient() {
            return $cli_idClient;
        }

        public function set_idClient($cli_idClient) {
            $this->cli_idClient = $cli_idClient;
        }
        
        public function get_idSalesman() {
            return $cli_idSalesman;
        }

        public function set_idSalesman($cli_idSalesman) {
            $this->cli_idSalesman = $cli_idSalesman;
        }

        public function get_status() {
            return $cli_status;
        }

        public function set_status($cli_status) {
            $this->cli_status = $cli_status;
        }

        public function get_orderDate() {
            return $cli_orderDate;
        }

        public function set_orderDate($cli_orderDate) {
            $this->cli_orderDate = $cli_orderDate;
        }

        public function get_payDate() {
            return $cli_payDate;
        }

        public function set_payDate($cli_payDate) {
            $this->cli_payDate = $cli_payDate;
        }
    }

?>