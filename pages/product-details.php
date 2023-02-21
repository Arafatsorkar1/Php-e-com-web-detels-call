<?php include 'includs/header.php'?>


    <?php if ($productDetails =='error'){?>
    <h1 class="text-center mt-5">Tomar eto beshi icca kore ken?</h1>
    <?php } else { ?>



        <section class="py-5">
    <div class="container">
        <div class="row">



            <div class="col-md-5">
                <div>
                    <img src="assets/img/<?php echo $productDetails['image']?>" alt="" class="img-fluid w-100">
                </div>
            </div>




            <div class="col-md-7">
                <div class="card card-body border-0">
                    <h2><?php echo $productDetails['name']?></h2>
                    <p>price:<?php echo $productDetails['price']?></p>
                    <p>Size : <?php echo $productDetails['size']?></p>
                    <p><?php echo $productDetails['short_description ']?></p>
                </div>
            </div>




        </div>


        <div class="row">
            <div class="col-md-12">
                <p class="mt-4" style="text-align: justify"><?php echo $productDetails['long_descreption']?></p>
            </div>
        </div>


    </div>

</section>



<?php } ?>



<?php include 'includs/footer.php'?>
