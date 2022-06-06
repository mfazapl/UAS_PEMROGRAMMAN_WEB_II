<?php 
    require('Model.php');
    if (isset($_GET['id_order'])) {
        DeleteCOrder($_GET['id_order']);
    }
?>
<div class="col-md-12">
    <h1>Cakes Order</h1>
    <table class="rwd-table">
            <tr>
                <th >Cake Name </th>
                <th >Shape </th>
                <th >Size </th>
                <th >Update Date </th>
                <th >Action</th>
            </tr>
            <?php
                ShowCOrder("cake_order")
            ?>
    </table>
</div>