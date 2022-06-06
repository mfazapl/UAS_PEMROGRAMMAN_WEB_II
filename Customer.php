<?php 
    ob_start();
    require('components/header.inc.php');
    require('Model.php');
    if (isset($_GET['id_customer'])) {
        DeleteCustomer($_GET['id_customer']);
    }
?>
<div class="album py-5 bg-light">
    <section class="py-4 text-center container">
        <div class="col-lg-6 col-md-8 mx-auto">
            <h1>Customer Data</h1>
            <p>
                <a href="FormPelanggan.php" class="btn btn-primary my-2">Add Customer Data</a>
            </p>
        </div>
    </section>
    <div class="col-md-12">
        <table class="rwd-table">
                <tr>
                    <th >Customer Name </th>
                    <th >Number </th>
                    <th >Address </th>
                    <th >Registered Date </th>
                    <th >Action</th>
                </tr>
                <?php
                    ShowCustomer("pelanggan")
                ?>
        </table>
    </div>
</div>
<?php require('components/footer.inc.php')?>
