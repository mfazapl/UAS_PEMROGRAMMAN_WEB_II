<?php
ob_start();
require('components/header.inc.php'); 
require('./model.php');
if (isset($_GET['id_member'])) {
    EditMember();
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
                        <label>Insert your name!</label>
                        <input class="form-control" type="text" name="nama" <?php echo (isset($_GET['id_order'])) ?  "value = " . $result[0]["name"] . "" : "value = '' "; ?> required>
                        <div class="valid-feedback">Username field is valid!</div>
                        <div class="invalid-feedback">Username field cannot be blank!</div>
                    </div>
                        
                    <div class="col-md-12">
                        <label>Pick a cake!</label>
                        <select class="form-control" name="cake_name" <?php echo (isset($_GET['id_order'])) ?  "value = " . $result[0]["cake_name"] . "" : "value = '' "; ?>>
							<?php
							$brg = koneksi()->query('SELECT * from cake')->fetchAll();
                            foreach ($brg as $b)
                            {
							?>
								<option value="<?php echo $b['cake_name']; ?>"><?php echo $b['cake_name'] ?></option>
							<?php
							}
							?>
						</select>
                        <div class="valid-feedback">You selected an item!</div>
                        <div class="invalid-feedback">Please select an item!</div>
                    </div>
                        
                    <div class="col-md-12 mt-3">
                        <label class="mb-3 mr-1" for="text">Status: </label>
                            
                        <input type="radio" class="btn-check" name="status" id="done" autocomplete="off" <?php echo (isset($_GET['id_order'])) ?  "value = " . $result[0]["order_status"] . "" : "value = '' "; ?> required>
                        <label class="btn btn-sm btn-outline-secondary" for="done">Done</label>
                            
                        <input type="radio" class="btn-check" name="status" id="notdone" autocomplete="off" <?php echo (isset($_GET['id_order'])) ?  "value = " . $result[0]["order_status"] . "" : "value = '' "; ?> required>
                        <label class="btn btn-sm btn-outline-secondary" for="notdone">Not Done</label>
                    </div>
                        
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                        <label class="form-check-label">I confirm that all data are correct</label>
                        <div class="invalid-feedback">Please confirm that the entered data are all correct!</div>
                    </div>
                        
                    <div class="form-button mt-3">
                        <?php 
                            if (isset($_GET['id'])) {
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
                            UpdateCOrder($_GET['id'],$_POST['order_date'], $_POST['nama'], $_POST['cake_name'], $_POST['status']);
                        }
                    ?>
            </div>
        </div>
    </div>
</div>

<script  src="assets/dist/js/form.js"></script>

<?php require('components/footer.inc.php');?>
