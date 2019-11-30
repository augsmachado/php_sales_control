<?php { include('header.php'); } ?>

<?php
    echo<<<HTML
    <html>
        <body>
            <div class="container">
                <!--Add and remove products-->
                <div class="row">
                    <form class="form-inline" >
                        <div class="form-group col-sm-6">
                            <button class="btn btn-danger btn-lg" type="reset" value="clear" onclick="javascript:window.location.href='customer.php'">No</button>
                        </div>
                        <div class="form-group col-sm-6">
                            <script>
                                
                            </script>
                            <button class="btn btn-success btn-lg" type="submit" onclick="deleteCustomer()">Yes</button>
                        </div>
                    </form>
                </div>
            </div>

        </body>
    <html>
HTML;
?>

<?php { include('footer.php'); } ?>