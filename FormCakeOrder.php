<?php
ob_start();
require('components/header.inc.php'); 
require('Model.php');
if (isset($_GET['id_order'])) {
    EditCOrder();
}
?>

<div class="container">
    <div class="row">
        <div class="form-content">
            <div class="form-items">
                <h3>Cake Order</h3>
                <p>Fill in the data below.</p>
                <form class="requires-validation" novalidate>

                    <div class="col-md-12">
                        <label>When do you want this order to be done?</label>
						<input name="order_date" type="date" class="form-control" id="tgl" autocomplete="off" <?php echo (isset($_GET['id_order'])) ?  "value = " . $result[0]["order_date"] . "" : "value = '' "; ?> required>
                        <div class="valid-feedback">You selected an order date!</div>
                        <div class="invalid-feedback">Please select a date!</div>
                    </div>
                        
                    <div class="col-md-12">
                        <label>Orderer ID!</label>
                        <select class="form-control" name="id_customer" <?php echo (isset($_GET['id_order'])) ?  "value = " . $result[0]["id_customer"] . "" : "value = '' "; ?> required>
							<?php
							$customer = koneksi()->query('SELECT * from pelanggan')->fetchAll();
                            foreach ($customer as $cus)
                            {
							?>
								<option value="<?php echo $cus['id_customer']; ?>"><?php echo $cus['id_customer'] ?></option>
							<?php
							}
							?>
						</select>
                        <div class="valid-feedback">You selected a customer!</div>
                        <div class="invalid-feedback">Please select a customer!</div>
                    </div>
                        
                    <div class="col-md-12">
                        <label>Pick an item!</label>
                        <select class="form-control" name="cake_name" <?php echo (isset($_GET['id_order'])) ?  "value = " . $result[0]["cake_name"] . "" : "value = '' "; ?>>
							<?php
							$cake = koneksi()->query('SELECT * from cake')->fetchAll();
                            foreach ($cake as $c)
                            {
							?>
								<option value="<?php echo $c['cake_name']; ?>"><?php echo $c['cake_name'] ?></option>
							<?php
							}
							$roti = koneksi()->query('SELECT * from roti')->fetchAll();
                            foreach ($roti as $r)
                            {
							?>
								<option value="<?php echo $r['nama_roti']; ?>"><?php echo $r['nama_roti'] ?></option>
							<?php
							}
							?>
						</select>
                        <div class="valid-feedback">You selected an item!</div>
                        <div class="invalid-feedback">Please select an item!</div>
                    </div>
                        
                    <div class="col-md-12 mt-3">
                        <input class="form-control" type="text" name="order_status" placeholder=" Order Status"<?php echo (isset($_GET['id_order'])) ?  "value = " . $result[0]["order_status"] . "" : "value = '' "; ?>  required>
                        <div class="valid-feedback">Order Status is valid!</div>
                        <div class="invalid-feedback">Order Status cannot be blank!</div>
                    </div>
                        
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                        <label class="form-check-label">I confirm that all data are correct</label>
                        <div class="invalid-feedback">Please confirm that the entered data are all correct!</div>
                    </div>
                        
                    <div class="form-button mt-3">
                        <?php 
                            if (isset($_GET['id_order'])) {
                                echo "<button type=\"submit\" name=\"update\" class=\"btn btn-success\">Update Order</button>";
                            }else {
                                echo "<button type=\"submit\" name=\"submit\" class=\"btn btn-success\">Add Order</button>";
                            }
                        ?>
                    </div>
                </form>
                    <?php
                        if (isset($_POST['submit'])) {
                            AddCOrder($_POST['order_date'], $_POST['nama'], $_POST['cake_name'], $_POST['status']);
                        }
                        if (isset($_POST['update'])) {
                            UpdateCOrder($_GET['id_order'],$_POST['order_date'], $_POST['nama'], $_POST['cake_name'], $_POST['status']);
                        }
                    ?>
            </div>
        </div>
    </div>
</div>

<script  src="assets/dist/js/form.js"></script>

<?php require('components/footer.inc.php');?>
