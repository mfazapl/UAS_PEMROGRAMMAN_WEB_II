<div class="album py-5 bg-light">
<section class="py-4 text-center container">
        <div class="col-lg-6 col-md-8 mx-auto">
            <h1>Order Data</h1>
            <p>
                <a href="FormCakeOrder.php" class="btn btn-primary my-2">Add Order</a>
            </p>
        </div>
    </section>
    <div class="container">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <?php require('COrder.php'); ?>
      </div>
    </div>
</div>
