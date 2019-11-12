<?php

    class Salesman {
        $sal_idSalesman;
        $sal_cpf;
        $sal_name;
        $sal_address;
        $sal_city;
        $sal_cep;
        $sal_uf;
        $sal_ddd;
        $sal_telNumber;
        $sal_salary;
        $sal_commission;

        public function get_idSalesman() {
            return $cli_idSalesman;
        }

        public function set_idSalesman($cli_idSalesman) {
            $this->cli_idSalesman = $cli_idSalesman;
        }

        public function get_cpf() {
            return $sal_cpf;
        }

        public function set_cpf($sal_cpf) {
            $this-$sal_cpf = $sal_cpf;
        }
        
        public function get_name() {
            return $sal_name;
        }

        public function set_name($sal_name) {
            $this-$sal_name = $sal_name;
        }
        
        public function get_address() {
            return $sal_address;
        }

        public function set_address($sal_address) {
            $this-$sal_address = $sal_address;
        }
        
        public function get_city() {
            return $sal_city;
        }

        public function set_city($sal_city) {
            $this-$sal_city = $sal_city;
        }
        
        public function get_cep() {
            return $sal_cep;
        }

        public function set_cep($sal_cep) {
            $this-$sal_cep = $sal_cep;
        }
        
        public function get_uf() {
            return $sal_uf;
        }

        public function set_uf($sal_uf) {
            $this-$sal_uf = $sal_uf;
        }
        
        public function get_ddd() {
            return $sal_ddd;
        }

        public function set_ddd($sal_ddd) {
            $this-$sal_ddd = $sal_ddd;
        }
        
        public function get_telNumber() {
            return $sal_telNumber;
        }

        public function set_telNumber($sal_telNumber) {
            $this-$sal_telNumber = $sal_telNumber;
        }

        public function get_salary() {
            return $sal_salary;
        }

        public function set_salary($sal_salary) {
            $this-$sal_salary = $sal_salary;
        }
        
        public function get_commission() {
            return $sal_commission;
        }

        public function set_commission($sal_commission) {
            $this-$sal_commission = $sal_commission;
        }
    }

?>