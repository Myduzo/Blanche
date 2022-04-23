<?php include "data.php"; ?>

<div class="row justify-content-center pb-5">
  <?php foreach ($pictures as $picture) { ?>
    <div class="col-10 col-md-3 d-flex justify-content-center align-items-center">
      <div class="picBox">
        <img src=<?php echo $picture['picture-img']; ?> class="pic">
      </div>
    </div>
  <?php } ?>
</div>