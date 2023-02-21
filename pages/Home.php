<?php include 'includs/header.php'?>


<section class="py-5">
    <div class="container">
        <div class="row">
            <?php foreach ($products as $product) {?>
            <div class="col-md-4 mt-3">
                <div class="card">
                    <img src="assets/img/<?php echo $product['image']?>" alt="" class="card-img-top" style="height: 300px">
                    <div class="card-body">
                        <h3><?php echo $product['name'];?></h3>
                        <p><?php echo $product['price'];?></p>
                        <p><?php echo $product['size'];?></p>
                        <a href="action.php?page=product-details&&product-id=<?php echo $product['id'] ?>" class="btn btn-success w-100">more</a>
                    </div>
                </div>
            </div>
            <?php }?>
        </div>
    </div>

</section>

<?php include 'includs/footer.php'?>


