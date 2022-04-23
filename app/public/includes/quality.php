<?php include 'data.php'; ?>

<div class="py-3 my-5" style="background-color: #f1f0ec">
  <div class="container">
    <h2 class="text-center pt-5 pb-3 qualityTitle">Your Comfort Is Our #1 Priority</h2>
    <div class="row justify-content-center">
      <?php foreach ($qualities as $quality) { ?>
        <div class="col-10 col-md-3 text-center">
          <div class="qualityBox d-flex justify-content-center align-items-center">
            <img src=<?php echo $quality['quality-img']; ?> class="img-fluid qualityImg">
          </div>
          <h3 class="qualityName py-4"><?php echo $quality['quality-name']; ?></h3>
          <p class="qualityDesc"><?php echo $quality['quality-desc']; ?></p>
        </div>
      <?php } ?>
    </div>
  </div>
</div>