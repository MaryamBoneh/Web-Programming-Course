<?php 
    include "../model/database.php";
    $physician_code = $_POST["PHYSICIAN_CODE"];
    $national_code = $_POST["NATIONAL_CODE"];
    $insurance_code = $_POST["INSURANCE_CODE"];

    echo "<script type='text/JavaScript'>
        localStorage.setItem('national_code', $national_code); 
        localStorage.setItem('insurance_code', $insurance_code);
        localStorage.setItem('physician_code', $physician_code);
      </script>"
    ;

    $visit_times = $db->query("SELECT *, times.ID AS time_id FROM times WHERE PHYSICIAN_CODE=$physician_code");

    include "header.php";
    include "navbar.php";
?>


  <div class="page-banner overlay-dark bg-image" style="background-image: url(../assets/img/bg_image_1.jpg);">
    <div class="banner-section-other">
      <div class="container text-center wow fadeInUp">
        <nav aria-label="Breadcrumb">
          <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">select_time</li>
          </ol>
        </nav>
        <h1 class="font-weight-normal">Time</h1>
      </div>
    </div>
  </div>

  <div class="page-section">
    <div class="container">
      <h1 class="text-center wow fadeInUp">Select Visit Time</h1>

      <form class="contact-form mt-5" method="post" action="../controller/set_visit_time.php">
        <div class="row mb-3">

          <div class="col-sm-6 py-2 wow fadeInRight">
            <label for="INSURANCE_CODE">Time</label>
            <select name="TIME" class="form-control" aria-label="Default select example">
              <?php foreach ($visit_times as $visit_time): ?>
                <option value="<?php echo $visit_time['ID']; ?>"><?php echo $visit_time['DAY_OF_WEEK']; ?>  -  <?php echo $visit_time['TIME'] ?></option>
              <?php endforeach; ?>
            </select>
          </div>

        </div>
        <button type="submit" class="btn btn-primary wow zoomIn">Submit</button>
      </form>
    </div>
  </div>
  
<?php include "footer.php"; ?>