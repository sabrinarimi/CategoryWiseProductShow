<?php include 'includes/header.php'?>
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 ">
                <h2 class="text-center">All Products</h2>
                <div class="row mt-2">
                    <?php foreach ($products as $product) { ?>
                    <div class="col-md-4 mt-4 ">
                        <div class="card">
                            <img src="assets/img/<?php echo $product['image']?>" alt="" class="card-img-top" style="height: 300px">
                            <div class="card-body">
                                <h3><?php echo $product['name']?></h3>
                                <p><?php echo $product['price']?></p>
                                <a href="" class="btn btn-success float-end">View more</a>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include 'includes/footer.php'?>

