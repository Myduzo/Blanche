<?php include "data.php"; ?>

<div class="container">
  <h2 class="text-center pt-5 pb-3 sellerTitle">BEST SELLERS</h2>
  <div class="row justify-content-center">
    <?php foreach ($sellers as $seller) { ?>
      <div class="col-10 col-md-4">
        <img src=<?php echo $seller['seller-img']; ?> class="img-fluid sellerImg">
        <h3 class="sellerName pt-4 pb-2"><?php echo $seller['seller-name']; ?></h3>
        <p class="sellerPrice py-2"><?php echo $seller['seller-price']; ?></p>
        <p class="sellerDesc"><?php echo $seller['seller-desc']; ?></p>
      </div>
    <?php } ?>
  </div>
</div>