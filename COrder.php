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
                <th >Order ID </th>
                <th >Date </th>
                <th >Name </th>
                <th >Item </th>
                <th >Status </th>
                <th >Action</th>
            </tr>
            <?php
                ShowCOrder("cake_order")
            ?>
    </table>
</div>