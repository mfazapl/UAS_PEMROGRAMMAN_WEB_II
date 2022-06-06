<?php
ob_start();
require('components/header.inc.php');
require('Model.php');
if (isset($_GET['id'])) {
    EditBread();
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
                            <input class="form-control" type="text" name="nama" placeholder="Bread Name"<?php echo (isset($_GET['id'])) ?  "value = " . $result[0]["nama"] . "" : "value = '' "; ?>  required>
                            <div class="valid-feedback">name is valid!</div>
                            <div class="invalid-feedback">name cannot be blank!</div>
                        </div>
                        
                        <div class="col-md-12">
                            <input class="form-control" type="text" name="jenis" placeholder="Bread Type"<?php echo (isset($_GET['id'])) ?  "value = " . $result[0]["jenis"] . "" : "value = '' "; ?>  required>
                            <div class="valid-feedback">name is valid!</div>
                            <div class="invalid-feedback">name cannot be blank!</div>
                        </div>

                        <div class="col-md-12">
                            <input class="form-control" type="text" name="harga" placeholder="Price"<?php echo (isset($_GET['id'])) ?  "value = " . $result[0]["harga"] . "" : "value = '' "; ?>  required>
                            <div class="valid-feedback">name is valid!</div>
                            <div class="invalid-feedback">name cannot be blank!</div>
                        </div>

                        <div class="form-button mt-3">
                        <?php 
                            if (isset($_GET['id'])) {
                                echo "<button type=\"submit\" name=\"update\" class=\"btn btn-success\">Update</button>";
                            }else {
                                echo "<button type=\"submit\" name=\"submit\" class=\"btn btn-success\">Add Bread</button>";
                            }
                        ?>
                        </div>
                    </form>
                    <?php
                        if (isset($_POST['submit'])) {
                            AddBread($_POST['nama'], $_POST['jenis'], $_POST['harga']);
                        }
                        if (isset($_POST['update'])) {
                            UpdateBread($_GET['id'],$_POST['nama'], $_POST['jenis'], $_POST['harga']);
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

<script  src="assets/dist/js/form.js"></script>
        
<?php require('components/footer.inc.php')?>