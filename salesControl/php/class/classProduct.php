<?php

    class Product {
        public $prod_idProduct;
        public $prod_description;
        public $prod_availableAmount;
        public $prod_unitPrice;
        public $prod_minimalStock;

        public function get_idProduct() {
            return $prod_idProduct;
        }

        public function get_description() {
            return $prod_description;
        }

        public function set_description($prod_description) {
            $this->prod_description = $prod_description;
        }

        public function get_availableAmount() {
            return $prod_availableAmount;
        }

        public function set_availableAmount($prod_availableAmount) {
            $this->prod_availableAmount = $prod_availableAmount;
        }

        public function get_unitPrice() {
            return $prod_unitPrice;
        }

        public function set_unitPrice($prod_unitPrice) {
            $this->prod_unitPrice = $prod_unitPrice;
        }

        public function get_minimalStock() {
            return $prod_minimalStock;
        }

        public function set_minimalStock($prod_minimalStock) {
            $this->prod_minimalStock = $prod_minimalStock;
        }
    }

?>