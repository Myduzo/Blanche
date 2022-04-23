<?php include "data.php"; ?>

<div class="container">
  <div class="row justify-content-center text-center">
    <div class="col-12 py-5">
      <p class="shopTitle">Our premium products got the finest quality cotton that create an exquisite lightweight textile that’s both soft and crisp – guaranteed to give you a wonderful night’s sleep.</p>
    </div>
  </div>

  <div class="row justify-content-center text-center">
    <?php foreach ($shops as $shop) { ?>
      <div class="col-12 col-md-6 bg-image d-flex justify-content-center align-items-end shopImg" style="background-image: url(<?php echo $shop['shop-img']; ?>);">
        <button type="button" class="btn bg-white mb-5 shopButton">Shop Bed Linens</button>
      </div>
    <?php } ?>
  </div>
</div>