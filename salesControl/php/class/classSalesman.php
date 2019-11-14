<?php include("connection\connection.php");?>
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

        public function saveSalesmanQuery($connection, $sal_cpf, $sal_name, $sal_address, $sal_city, $sal_cep, $sal_uf, $sal_ddd, $sal_tel, $sal_salary, $sal_commission) {
            $saveQuery = mysqli_query($connection, "INSERT INTO tbl_salesman (sal_cpf, sal_name, sal_address, sal_city, sal_cep, sal_uf, sal_ddd, sal_tel, sal_salary, sal_commission) VALUES ('$sal_cpf', '$sal_name', '$sal_address', '$sal_city', '$sal_cep', '$sal_uf', '$sal_ddd', '$sal_tel', $sal_salary, $sal_commission)");
			
			if($saveQuery) echo("<br>Query saved successfully.");
			else echo("<br>Error ". mysqli_errno($connection) . ": " . mysqli_error($connection));
        }

        public function listSalesmanQuery($connection) {
            $listQuery = mysqli_query($connection, "SELECT * FROM tbl_salesman");

            if($listQuery == false) echo("<br>Error ". mysqli_errno($connection) . ": ". mysqli_error($connection));

            while($row = mysqli_fetch_array($listQuery)) {
                $sal_idSalesman = $row["sal_idSalesman"];
                $sal_cpf = $row["sal_cpf"];
                $sal_name = $row["sal_name"];
                $sal_address = $row["sal_address"];
                $sal_city = $row["sal_city"];
                $sal_cep = $row["sal_cep"];
                $sal_uf = $row["sal_uf"];
                $sal_ddd = $row["sal_ddd"];
                $sal_tel = $row["sal_tel"];
                $sal_salary = $row["sal_salary"];
                $sal_commission = $row["sal_commission"];
                
                echo("<hr>
                CPF: $sal_cpf
                <br>Nome: $sal_name
                <br>Endereço: $sal_address
                <br>Cidade: $sal_city
                <br>CEP: $sal_cep
                <br>UF: $sal_uf
                <br>DDD: $sal_ddd
                <br>Número: $sal_tel
                <br>Credito Limite: $sal_salary
                <br>Limite Disponivel: $sal_commission");
            }
        }

        public function get_idSalesman(){
            return $this->idSalesman;
        }

        public function get_cpf(){
            return $this->sal_cpf;
        }
        
        public function set_cpf($sal_cpf){
            $this->sal_cpf = $sal_cpf;
        }

        public function get_name(){
            return $this->sal_name;
        }

        public function set_name($sal_name){
            $this->sal_name = $sal_name;
        }

        public function get_address(){
            return $this->sal_address;
        }

        public function set_address($sal_address){
            $this->sal_address = $sal_address;
        }

        public function get_city(){
            return $this->sal_city;
        }

        public function set_city($sal_city){
            $this->sal_city = $sal_city;
        }

        public function get_cep(){
            return $this->sal_cep;
        }

        public function set_cep($sal_cep){
            $this->sal_cep = $sal_cep;
        }

        public function get_uf(){
            return $this->sal_uf;
        }

        public function set_uf($sal_uf){
            $this->sal_uf = $sal_uf;
        }

        public function get_ddd(){
            return $this->sal_ddd;
        }

        public function set_ddd($sal_ddd){
            $this->sal_ddd = $sal_ddd;
        }

        public function get_tel(){
            return $this->sal_tel;
        }

        public function set_tel($sal_tel){
            $this->sal_tel = $sal_tel;
        }

        public function get_salary(){
            return $this->sal_salary;
        }

        public function set_salary($sal_salary){
            $this->sal_salary = $sal_salary;
        }

        public function get_commission(){
            return $this->sal_commission;
        }

        public function set_commission($sal_commission){
            $this->sal_commission = $sal_commission;
        }
    }

?>