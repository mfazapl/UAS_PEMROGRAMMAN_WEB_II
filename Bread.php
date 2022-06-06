<?php 
    require('Model.php');
    if (isset($_GET['id_roti'])) {
        DeleteCake($_GET['id_roti']);
    }
?>
<link rel="stylesheet" href="assets/dist/css/style.css">
<div class="col-md-12">
    <h1>Bread Table</h1>
    <table class="rwd-table">
            <tr>
                <th >Bread ID </th>
                <th >Bread Name </th>
                <th >Bread Type </th>
                <th >Price </th>
                <th >Action</th>
            </tr>
            <?php
                ShowBread("roti")
            ?>
    </table>
</div>
