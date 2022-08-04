<?php include 'header.php'; ?>

<section class="py-5">
    <div class="container">
        <div class="row">
            <?php foreach($categoryProducts as $categoryProduct) { ?>
            <div class="col-md-3">
                <div class="card">
                    <img src="assets/img/<?php echo $categoryProduct['image'];?>" alt="" class="card-img-top" style="height: 250px;">
                    <div class="card-body">
                        <h5><?php echo $categoryProduct['name'];?></h5>
                        <p>Tk. <?php echo $categoryProduct['price'];?></p>
                        <hr>
                        <a href="#" class="btn btn-outline-primary px-5">Detail</a>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>