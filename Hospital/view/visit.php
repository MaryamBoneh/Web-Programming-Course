<?php 
    include "../model/database.php";
    $physicians = $db->query("SELECT * FROM physician"); 

    include "header.php";
    include "navbar.php";
?>


  <div class="page-banner overlay-dark bg-image" style="background-image: url(../assets/img/bg_image_1.jpg);">
    <div class="banner-section-other">
      <div class="container text-center wow fadeInUp">
        <nav aria-label="Breadcrumb">
          <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Visit</li>
          </ol>
        </nav>
        <h1 class="font-weight-normal">Visit</h1>
      </div>
    </div>
  </div>

  <div class="page-section">
    <div class="container">

      <form class="contact-form mt-5" method="post" action="select_time.php">
        <div class="row mb-3">
          <div class="col-sm-6 py-2 wow fadeInLeft">
            <label for="NATIONAL_CODE">National Code</label>
            <input type="text" id="NATIONAL_CODE" class="form-control" placeholder="National code" name="NATIONAL_CODE">
          </div>

          <div class="col-sm-6 py-2 wow fadeInLeft">
            <label for="INSURANCE_CODE">Insurance Code</label>
            <input type="text" id="INSURANCE_CODE" class="form-control" placeholder="Insurance code" name="INSURANCE_CODE">
          </div>

          <div class="col-sm-12 py-2 wow fadeInRight">
            <label for="Physician">Physician</label>
            <select name="PHYSICIAN_CODE" class="form-control" aria-label="Default select example" name="PHYSICIAN_CODE">
              <?php foreach ($physicians as $physician): ?>
                <option value="<?php echo $physician['ID']; ?>">DR. <?php echo $physician['NAME']; ?>  -  <?php echo $physician['EXPERTISE']; ?></option>
              <?php endforeach; ?>
            </select>
          </div>
          
        </div>
        <button type="submit" class="btn btn-primary wow zoomIn">Submit</button>
      </form>
    </div>
  </div>
  
<?php include "footer.php"; ?>