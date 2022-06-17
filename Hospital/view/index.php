<?php 
      include "../model/database.php";
      $physicians = $db->query("SELECT * FROM physician");  
      include "header.php";
      include "navbar.php";
?>

  <div class="page-hero bg-image overlay-dark" style="background-image: url(assets/img/bg_image_1.jpg);">
    <div class="hero-section">
      <div class="container text-center wow zoomIn">
        <span class="subhead">Let's make your life happier</span>
        <h1 class="display-4">Healthy Living</h1>
        <a href="#" class="btn btn-primary">Visit</a>
      </div>
    </div>
  </div>


  <div class="bg-light">
    <div class="page-section py-3 mt-md-n5 custom-index">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-secondary text-white">
                <span class="material-symbols-rounded">volunteer_activism</span>
              </div>
              <p><span>Cosmetic</span> Surgery</p>
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-primary text-white">
                <span class="material-symbols-rounded">volunteer_activism</span>
              </div>
              <p><span>Boneh</span>-Health Protection</p>
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-accent text-white">
                <span class="material-symbols-rounded">volunteer_activism</span>
              </div>
              <p><span>Boneh</span>-Health Pharmacy</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="page-section pb-0">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 py-3 wow fadeInUp">
            <h1>Welcome to Your Health <br> Center</h1>
            <p class="text-grey mb-4">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Accusantium aperiam earum ipsa eius, inventore nemo labore eaque porro consequatur ex aspernatur. Explicabo, excepturi accusantium! Placeat voluptates esse ut optio facilis!</p>
            <a href="about.html" class="btn btn-primary">Learn More</a>
          </div>
          <div class="col-lg-6 wow fadeInRight" data-wow-delay="400ms">
            <div class="img-place custom-img-1">
              <img src="assets/img/bg-doctor.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="page-section">
    <div class="container">
      <h1 class="text-center mb-5 wow fadeInUp">Our Doctors</h1>

      <div class="owl-carousel wow fadeInUp" id="doctorSlideshow">
        <?php foreach ($physicians as $physician): ?>
          <div class="item">
            <div class="card-doctor">
              <div class="header">
                <img src="assets/img/doctors/<?php echo $physician['IMAGE']; ?>" alt="">
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

<?php include "footer.php" ?>
