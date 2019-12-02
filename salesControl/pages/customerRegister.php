<?php { include('header.php'); } ?>

<?php
    echo<<<HTML
    <html>
        <body>
            <!-- Bootstrap CSS -->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

            <!-- Content Register page -->
            <div class="container">
                
                <!-- Form to request's informations -->
                <form class="form-group" id="individualRegister" method="post" action="customerActionSave.php">
                    <fieldset class="border p-2">
                        <legend class="w-auto">Customer Register</legend>
                        
                        <div class="row">
                            <form class="form-inline">


                                <!-- Data Customer -->
                                <div class="form-group col-sm-3">
                                    <input type="text" class="form-control" id="customerCpfInput" name="customerCpfInput" placeholder="CPF: 123.123.123-12">
                                </div>
                                <div class="form-group col-sm-9">
                                    <input type="text" class="form-control" id="customerNameInput" name="customerNameInput" placeholder="Customer's full name">
                                </div>

                                <!-- Data Customer about adress -->
                                <div class="form-group col-sm-3">
                                    <input type="text" class="form-control"  id="customerCepInput" name="customerCepInput" placeholder="CEP: 12345-123">
                                </div>
                                <div class="form-group col-sm-5">
                                    <input type="text" class="form-control"  id="customerAdressInput" name="customerAdressInput" placeholder="Adress: 0000 Saint John St.">
                                </div>
                                <div class="form-group col-sm-2">
                                    <input type="text" class="form-control"  id="customerCityInput" name="customerCityInput" placeholder="City">
                                </div>
                                <div class="form-group col-sm-2">
                                    <select id="inputState" class="form-control" id="customerStateInput" name="customerStateInput">
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

                                <!-- Data Customer about contact -->
                                <div class="form-group col-sm-3">
                                    <input type="text" class="form-control"  id="customerDDDInput" name="customerDDDInput" placeholder="DDD: (12)">
                                </div>
                                <div class="form-group col-sm-3">
                                    <input type="text" class="form-control"  id="customerTelephoneInput" name="customerTelephoneInput" placeholder="Telephone: 12345-1234">
                                </div>
                                
                                <!-- Data Customer about financial status -->
                                <div class="col-sm-12">
                                    <legend class="w-auto">Financial</legend>
                                </div>
                                <div class="form-group col-sm-5">
                                    <input type="number" class="form-control"  id="customerCreditLimitInput" name="customerCreditLimitInput" placeholder="Credit Limit">
                                </div>
                                <div class="form-group col-sm-5">
                                    <input type="number" class="form-control"  id="customerCreditAvailabletInput" name="customerCreditAvailabletInput" placeholder="Credit Available">
                                </div>
                            </form>
                        </div>
                        <div class="form-group col-sm-6">
                            <button class="btn btn-success btn-lg" id="buttonCustomerSave" name="buttonCustomer" value="save" type="submit">Save</button>
                            <button class="btn btn-danger btn-lg" id="buttonCustomerCancel" name="buttonCustomer" value="cancel" type="reset" value="clear" onclick="javascript:window.location.href='customer.php'">Cancel</button>
                            <button class="btn btn-success btn-lg" id="buttonCustomerSearch" name="buttonCustomer" value="search" type="submit">Search</button>
                            <button class="btn btn-success btn-lg" id="buttonCustomerUpdate" name="buttonCustomer" value="update" type="submit">Update</button>
                        </div>
                    </fieldset>
                </form>
            </div>

        </body>
    </html>
HTML;
?>

<?php { include('footer.php'); } ?>