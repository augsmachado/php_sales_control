<?php include("connection\connection.php");?>
<?php

    class Client {
        public $cli_idClient;
        public $cli_cpf;
        public $cli_name;
        public $cli_address;
        public $cli_city;
        public $cli_cep;
        public $cli_uf;
        public $cli_ddd;
        public $cli_telNumber;
        public $cli_creditLimit;
        public $cli_availableLimit;

        public function saveClientQuery($connection, $cli_cpf, $cli_name, $cli_address, $cli_city, $cli_cep, $cli_uf, $cli_ddd, $cli_telNumber, $cli_creditLimit, $cli_availableLimit) {
            $saveQuery = mysqli_query($connection, "INSERT INTO tbl_cent(cli_cpf, cli_name, cli_address, cli_city, cli_cep, cli_uf, cli_ddd, cli_tel, cli_creditLimit, cli_availableLimit) VALUES ('$cli_cpf', '$cli_name', '$cli_address', '$cli_city', '$cli_cep', '$cli_uf', '$cli_ddd', '$cli_telNumber', $cli_creditLimit, $cli_availableLimit)");
			
			if($saveQuery) echo("<br>Query saved successfully.");
			else echo("<br>Error ". mysqli_errno($connection) . ": " . mysqli_error($connection));
        }

        public function get_idClient() {
            return $this->cli_idClient;
        }

        public function get_cpf() {
            return $this->cli_cpf;
        }

        public function set_cpf($cli_cpf) {
            $this->cli_cpf = $cli_cpf;
        }
        
        public function get_name() {
            return $this->cli_name;
        }

        public function set_name($cli_name) {
            $this->cli_name = $cli_name;
        }
        
        public function get_address() {
            return $this->cli_address;
        }

        public function set_address($cli_address) {
            $this->cli_address = $cli_address;
        }
        
        public function get_city() {
            return $this->cli_city;
        }

        public function set_city($cli_city) {
            $this->cli_city = $cli_city;
        }
        
        public function get_cep() {
            return $this->cli_cep;
        }

        public function set_cep($cli_cep) {
            $this->cli_cep = $cli_cep;
        }
        
        public function get_uf() {
            return $this->cli_uf;
        }

        public function set_uf($cli_uf) {
            $this->cli_uf = $cli_uf;
        }
        
        public function get_ddd() {
            return $this->cli_ddd;
        }

        public function set_ddd($cli_ddd) {
            $this->cli_ddd = $cli_ddd;
        }
        
        public function get_telNumber() {
            return $this->cli_telNumber;
        }

        public function set_telNumber($cli_telNumber) {
            $this->cli_telNumber = $cli_telNumber;
        }

        public function get_creditLimit() {
            return $this->cli_creditLimit;
        }

        public function set_creditLimit($cli_creditLimit) {
            $this->cli_creditLimit = $cli_creditLimit;
        }
        
        public function get_availableLimit() {
            return $this->cli_availableLimit;
        }

        public function set_availableLimit($cli_availableLimit) {
            $this->cli_availableLimit = $cli_availableLimit;
        }
    }

?>
