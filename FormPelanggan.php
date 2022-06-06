<?php 
ob_start();
require('components/header.inc.php');
require('Model.php');
if (isset($_GET['id'])) {
    EditCake();
}
?>

<div class="album py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="form-content">
                <div class="form-items">
                    <h3>Add a Cake</h3>
                    <p>Fill in the data below.</p>
                    <form action="" method="post" >
                            
                        <div class="col-md-12">
                            <input class="form-control" type="text" name="cust_name" placeholder="Customer Name"<?php echo (isset($_GET['id_customer'])) ?  "value = " . $result[0]["cust_name"] . "" : "value = '' "; ?>  required>
                            <div class="valid-feedback">name is valid!</div>
                            <div class="invalid-feedback">name cannot be blank!</div>
                        </div>
                        
                        <div class="col-md-12">
                            <input class="form-control" type="text" name="cust_number" placeholder="Customer Number"<?php echo (isset($_GET['id_customer'])) ?  "value = " . $result[0]["cust_number"] . "" : "value = '' "; ?>  required>
                            <div class="valid-feedback">Number is valid!</div>
                            <div class="invalid-feedback">Number cannot be blank!</div>
                        </div>

                        <div class="col-md-12">
                            <textarea class="form-control" name="address" placeholder="Address"<?php echo (isset($_GET['id_customer'])) ?  "value = " . $result[0]["address"] . "" : "value = '' "; ?>  required>
                            <div class="valid-feedback">Address is valid!</div>
                            <div class="invalid-feedback">Address cannot be blank!</div>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                            <label class="form-check-label">I confirm that all data are correct</label>
                            <div class="invalid-feedback">Please confirm that the entered data are all correct!</div>
                        </div>
                            
                        <div class="form-button mt-3">
                        <?php 
                            if (isset($_GET['id_customer'])) {
                                echo "<button type=\"submit\" name=\"update\" class=\"btn btn-success\">Update</button>";
                            }else {
                                echo "<button type=\"submit\" name=\"submit\" class=\"btn btn-success\">Add Cake</button>";
                            }
                        ?>
                        </div>
                    </form>
                    <?php
                        if (isset($_POST['submit'])) {
                            AddCake($_POST['cake_name'], $_POST['cake_shape'], $_POST['cake_size'], $_POST['cake_date']);
                        }
                        if (isset($_POST['update'])) {
                            UpdateCake($_GET['id'],$_POST['cake_name'], $_POST['cake_shape'], $_POST['cake_size'], $_POST['cake_date']);
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

<script  src="assets/dist/js/form.js"></script>
        
<?php require('components/footer.inc.php')?>
