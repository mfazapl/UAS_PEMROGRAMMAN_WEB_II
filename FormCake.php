<?php 
require('Model.php');
if (isset($_GET['id'])) {
    EditCake();
}
?>

<?php require('components/header.inc.php'); ?>

<link rel="stylesheet" href="assets/dist/css/style.css">

<div class="album py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="form-content">
                <div class="form-items">
                    <h3>Add a Cake</h3>
                    <p>Fill in the data below.</p>
                    <form action="" method="post" >
                            
                        <div class="col-md-12">
                            <input class="form-control" type="text" name="cake_name" placeholder="Cake Name"<?php echo (isset($_GET['id'])) ?  "value = " . $result[0]["cake_name"] . "" : "value = '' "; ?>  required>
                            <div class="valid-feedback">name is valid!</div>
                            <div class="invalid-feedback">name cannot be blank!</div>
                        </div>
                        
                        <div class="col-md-12">
                            <select class="form-select mt-3" name="cake_shape" <?php echo (isset($_GET['id'])) ?  "value = " . $result[0]["cake_shape"] . "" : "value = '' "; ?> required>
                                <option value="Rectangle">Rectangle</option>
                                <option value="Circle">Circle</option>
                                <option value="Square">Square</option>
                            </select>
                            <div class="valid-feedback">You selected a shape!</div>
                            <div class="invalid-feedback">Please select an shape!</div>
                        </div>
                        
                        <div class="col-md-12">
                            <select class="form-select mt-3" name="cake_size" <?php echo (isset($_GET['id'])) ?  "value = " . $result[0]["cake_size"] . "" : "value = '' "; ?> required>
                                <option value="Small">Small</option>
                                <option value="Medium">Medium</option>
                                <option value="Large">Large</option>
                            </select>
                            <div class="valid-feedback">You selected a size!</div>
                            <div class="invalid-feedback">Please select a size!</div>
                        </div>

                        <div class="col-md-12">
                            <label>Update Date</label>
                            <input name="cake_date" type="date" class="form-control" autocomplete="off" <?php echo (isset($_GET['id'])) ?  "value = " . $result[0]["cake_date"] . "" : "value = '' "; ?> required>
                            <div class="valid-feedback">You selected a date!</div>
                            <div class="invalid-feedback">Please select a date!</div>
                        </div>
                            
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                            <label class="form-check-label">I confirm that all data are correct</label>
                            <div class="invalid-feedback">Please confirm that the entered data are all correct!</div>
                        </div>
                            
                        <div class="form-button mt-3">
                        <?php 
                            if (isset($_GET['id'])) {
                                echo "<button type=\"submit\" name=\"update\" class=\"btn btn-success\">Update</button>";
                            }else {
                                echo "<button type=\"submit\" name=\"submit\" class=\"btn btn-success\">Add Cake</button>";
                            }
                        ?>
                            <a href="CakePage.php" class="btn btn-primary text-right">Back</a>
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
        
<?php require('components/footer.inc.php'); ?>
