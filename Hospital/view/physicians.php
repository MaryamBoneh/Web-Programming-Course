<?php 
      include "../model/database.php";
      $physicians = $db->query("SELECT * FROM physician");  
      include "header.php";
      include "navbar.php";
?>

  <div class="page-banner overlay-dark bg-image" style="background-image: url(/assets/img/bg_image_1.jpg);">
    <div class="banner-section-other">
      <div class="container text-center wow fadeInUp">
        <nav aria-label="Breadcrumb">
          <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">physicians</li>
          </ol>
        </nav>
        <h1 class="font-weight-normal">Our physicians</h1>
      </div>
    </div>
  </div>

  <div class="page-section bg-light">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-10">

          <div class="row">
            <?php foreach ($physicians as $physician): ?>
              <div class="col-md-6 col-lg-4 py-3 wow zoomIn">
                <div class="card-doctor">
                  <div class="header">
                    <img src="assets/img/doctors/<?php if (isset($physician["IMAGE"]) & $physician["IMAGE"] != '') { echo $physician["IMAGE"];} else { echo "user.png"; } ?>" alt="">
                  </div>
                  <div class="body">
                    <p class="text-xl mb-0">Dr. <?php echo $physician['NAME']; ?></p>
                    <span class="text-sm text-grey"><?php echo $physician['EXPERTISE']; ?></span>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>
          </div>

        </div>
      </div>
    </div>
  </div>

<?php include "footer.php" ?>