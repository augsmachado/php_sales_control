<?php

    class Cliente {
        $cli_cpf;
        $cli_name;
        $cli_address;
        $cli_city;
        $cli_cep;
        $cli_uf;
        $cli_ddd;
        $cli_telNumber;
        $cli_creditLimit;
        $cli_availableLimit;

        public function get_cpf() {
            return $cli_cpf;
        }

        public function set_cpf($cli_cpf) {
            $this->cli_cpf = $cli_cpf;
        }
        
        public function get_name() {
            return $cli_name;
        }

        public function set_name($cli_name) {
            $this->cli_name = $cli_name;
        }
        
        public function get_address() {
            return $cli_address;
        }

        public function set_address($cli_address) {
            $this->cli_address = $cli_address;
        }
        
        public function get_city() {
            return $cli_city;
        }

        public function set_city($cli_city) {
            $this->cli_city = $cli_city;
        }
        
        public function get_cep() {
            return $cli_cep;
        }

        public function set_cep($cli_cep) {
            $this->cli_cep = $cli_cep;
        }
        
        public function get_uf() {
            return $cli_uf;
        }

        public function set_uf($cli_uf) {
            $this->cli_uf = $cli_uf;
        }
        
        public function get_ddd() {
            return $cli_ddd;
        }

        public function set_ddd($cli_ddd) {
            $this->cli_ddd = $cli_ddd;
        }
        
        public function get_telNumber() {
            return $cli_telNumber;
        }

        public function set_telNumber($cli_telNumber) {
            $this->cli_telNumber = $cli_telNumber;
        }

        public function get_creditLimit() {
            return $cli_creditLimit;
        }

        public function set_creditLimit($cli_creditLimit) {
            $this->cli_creditLimit = $cli_creditLimit;
        }
        
        public function get_availableLimit() {
            return $cli_availableLimit;
        }

        public function set_availableLimit($cli_availableLimit) {
            $this->cli_availableLimit = $cli_availableLimit;
        }
    }

?>