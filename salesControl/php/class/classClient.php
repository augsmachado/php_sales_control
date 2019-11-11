<?php

    class Client{
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

        public function GET_cpf() {
            return $this->cli_cpf;
        }

        public function GET_name() {
            return $this->cli_name;
        }

        public function GET_address() {
            return $this->cli_address;
        }

        public function GET_city() {
            return $this->cli_city;
        }

        public function GET_cep() {
            return $this->cli_cep;
        }

        public function GET_uf() {
            return $this->cli_uf;
        }

        public function GET_ddd() {
            return $this->cli_ddd;
        }

        public function GET_telNumber() {
            return $this->cli_telNumber;
        }

        public function GET_creditLimit() {
            return $this->cli_creditLimit;
        }

        public function GET_availableLimit() {
            return $this->cli_availableLimit;
        }

        public function SET_ ($cli_cpf) {
            $this->cli_cpf = $cli_cpf;
        }

        public function SET_ ($cli_name) {
            $this->cli_name = $cli_name;
        }

        public function SET_ ($cli_address) {
            $this->cli_address = $cli_address;
        }

        public function SET_ ($cli_city) {
            $this->cli_city = $cli_city
        }

        public function SET_cep ($cli_cep) {
            $this->cli_cep = $cli_cep;
        }

        public function SET_uf ($cli_uf) {
            $this->cli_uf = $cli_uf;
        }

        public function SET_ddd ($cli_ddd) {
            $this->cli_ddd = $cli_ddd;
        }

        public function SET_telNumber ($cli_telNumber) {
            $this->cli_telNumber = $cli_telNumber;
        }

        public function SET_ ($cli_creditLimit) {
            $this->cli_creditLimit = $cli_creditLimit;
        }

        public function SET_ ($) {
            $this->cli_availableLimit = $cli_availableLimit
        }
    }

?>