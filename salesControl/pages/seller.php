<?php { include('header.php'); } ?>

<?php
    echo<<<HTML
    <html>
        <body>
            <!-- Bootstrap CSS -->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

            <!-- Content Seller Register page -->
            <div class="container">
                
                <!-- Form to request's informations -->
                <form class="form-group" id="individualRegister" method="post" action="">
                    <fieldset class="border p-2">
                        <legend class="w-auto">Seller Register</legend>
                        
                        <div class="row">
                            <form class="form-inline">
                                
                                <!-- Data Seller -->
                                <div class="form-group col-sm-4">
                                    <input type="text" class="form-control" id="sellerNameInput" name="sellerNameInput" placeholder="Seller's full name">
                                </div>
                                <div class="form-group col-sm-4">
                                    <input type="text" class="form-control" id="sellerCpfInput" name="sellerCpfInput" placeholder="CPF: 123.123.123-12">
                                </div>

                                <!-- Data Seller about adress -->
                                <div class="form-group col-sm-3">
                                    <input type="text" class="form-control"  id="sellerCepInput" name="sellerCepInput" placeholder="CEP: 12345-123">
                                </div>
                                <div class="form-group col-sm-6">
                                    <input type="text" class="form-control"  id="sellerAdressInput" name="sellerAdressInput" placeholder="Adress: 0000 Saint John St.">
                                </div>
                                <div class="form-group col-sm-3">
                                    <input type="text" class="form-control"  id="sellerCityInput" name="ssllerCityInput" placeholder="City">
                                </div>
                                <div class="form-group col-sm-2">
                                    <select id="inputState" class="form-control" id="sellerStateInput" name="sellerStateInput">
                                        <option disabled>State</option>
                                        <option>AC</option>
                                        <option>AL</option>
                                        <option>AM</option>
                                        <option>AP</option>
                                        <option>BA</option>
                                        <option>CE</option>
                                        <option>DF</option>
                                        <option>ES</option>
                                        <option>GO</option>
                                        <option>MA</option>
                                        <option>MG</option>
                                        <option>MS</option>
                                        <option>MT</option>
                                        <option>PA</option>
                                        <option>PB</option>
                                        <option>PE</option>
                                        <option>PE</option>
                                        <option>PI</option>
                                        <option>PR</option>
                                        <option>RJ</option>
                                        <option>RN</option>
                                        <option>RO</option>
                                        <option>RR</option>
                                        <option>RS</option>
                                        <option>SC</option>
                                        <option>SE</option>
                                        <option>SP</option>
                                        <option>TO</option>
                                    </select>
                                </div>

                                <!-- Data Seller about contact -->
                                <div class="form-group col-sm-3">
                                    <input type="text" class="form-control"  id="sellerDDDInput" name="sellerDDDInput" placeholder="DDD: (12)">
                                </div>
                                <div class="form-group col-sm-3">
                                    <input type="text" class="form-control"  id="sellerTelephoneInput" name="sellerTelephoneInput" placeholder="Telephone: 12345-1234">
                                </div>
                                
                                <!-- Data Seller about financial status -->
                                <div class="col-sm-12">
                                    <legend class="w-auto">Financial</legend>
                                </div>
                                <div class="form-group col-sm-5">
                                    <input type="number" class="form-control"  id="sellerSalaryInput" name="sellerSalaryInput" placeholder="Salary">
                                </div>
                                <div class="form-group col-sm-5">
                                    <input type="number" class="form-control"  id="sellerCommissionPercentageInput" name="sellerCommissionPercentageInput" placeholder="Commission Percentage">
                                </div>
                            </form>
                        </div>
                        <div class="form-group col-sm-6">
                            <button class="btn btn-success btn-lg" type="submit">Save</button>
                            <button class="btn btn-danger btn-lg" type="reset" value="clear" onclick="javascript:window.location.href='home.php'">Cancel</button>
                        </div>
                    </fieldset>
                </form>
            </div>
        </body>
    </html>
HTML;
?>

<?php { include('footer.php'); } ?>