<?php 
    require('Model.php');
    if (isset($_GET['id_customer'])) {
        DeleteCake($_GET['id_customer']);
    }
?>
<div class="col-md-12">
    <h1>Customer Data</h1>
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