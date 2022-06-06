<?php require('components/header.inc.php')?>

<div class="album py-5 bg-light">
<section class="py-4 text-center container">
        <div class="col-lg-6 col-md-8 mx-auto">
            <h1>Bread Table</h1>
            <p>
                <a href="FormPelanggan.php" class="btn btn-primary my-2">Add Bread</a>
            </p>
        </div>
    </section>
  <?php require('Bread.php'); ?>
</div>
<?php require('components/footer.inc.php')?>