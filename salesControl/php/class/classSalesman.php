<?php

    class Salesman {
        public $sal_idSalesman;
        public $sal_cpf;
        public $sal_name;
        public $sal_address;
        public $sal_city;
        public $sal_cep;
        public $sal_uf;
        public $sal_ddd;
        public $sal_tel;
        public $sal_salary;
        public $sal_commission;

        public function saveClientQuery($connection, $cli_cpf, $cli_name, $cli_address, $cli_city, $cli_cep, $cli_uf, $cli_ddd, $cli_tel, $cli_creditLimit, $cli_availableLimit) {
            $saveQuery = mysqli_query($connection, "INSERT INTO tbl_client(cli_cpf, cli_name, cli_address, cli_city, cli_cep, cli_uf, cli_ddd, cli_tel, cli_creditLimit, cli_availableLimit) VALUES ('$cli_cpf', '$cli_name', '$cli_address', '$cli_city', '$cli_cep', '$cli_uf', '$cli_ddd', '$cli_tel', $cli_creditLimit, $cli_availableLimit)");
			
			if($saveQuery) echo("<br>Query saved successfully.");
			else echo("<br>Error ". mysqli_errno($connection) . ": " . mysqli_error($connection));
        }

        public function listClientQuery($connection) {
            $listQuery = mysqli_query($connection, "SELECT * FROM tbl_client");

            while($row = mysqli_fetch_array($listQuery)) {
                $sal_idClient = $row["cli_idClient"];
                $sal_cpf = $row["cli_cpf"];
                $sal_name = $row["cli_name"];
                $sal_address = $row["cli_address"];
                $sal_city = $row["cli_city"];
                $sal_cep = $row["cli_cep"];
                $sal_uf = $row["cli_uf"];
                $sal_ddd = $row["cli_ddd"];
                $sal_tel = $row["cli_tel"];
                $sal_salary = $row["cli_creditLimit"];
                $sal_comission = $row["cli_availableLimit"];
                
                echo("<hr>
                <br>CPF: $cli_cpf
                <br>Nome: $cli_name
                <br>Endereço: $cli_address
                <br>Cidade: $cli_city
                <br>CEP: $cli_cep
                <br>UF: $cli_uf
                <br>DDD: $cli_ddd
                <br>Número: $cli_tel
                <br>Credito Limite: $cli_creditLimit
                <br>Limite Disponivel: $cli_availableLimit");
            }
        }

        public function get_idSalesman() {
            return $sal_idSalesman;
        }

        public function set_idSalesman($sal_idSalesman) {
            $this-$sal_idSalesman = $sal_idSalesman;
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
        
        public function get_tel() {
            return $sal_tel;
        }

        public function set_tel($sal_tel) {
            $this-$sal_tel = $sal_tel;
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