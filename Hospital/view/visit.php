<?php 
    include "../model/database.php";
    $physicians = $db->query("SELECT * FROM physician"); 
    
    
    $visit_times = $db->query("SELECT *, times.ID AS time_id FROM times INNER JOIN physician ON times.PHYSICIAN_CODE = physician.ID");
    // $visit_times_array = array();
    
    // foreach ($visit_times as $visit_time)
    // {
    //     // echo $visit_time['time_id'];
    //     // echo $visit_time['NAME'];
    //     $visit_time_id = $visit_time["time_id"];
    //     $visit_time["visit_time"] = $db->query("SELECT * FROM comments INNER JOIN users ON comments.USER_ID = users.ID WHERE comments.POST_ID = $post_id ORDER BY TIME DESC");
    //     $visit_times_array[] = $visit_time;
    // }


    include "header.php";
    include "navbar.php";
?>


  <div class="page-banner overlay-dark bg-image" style="background-image: url(../assets/img/bg_image_1.jpg);">
    <div class="banner-section">
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
      <h1 class="text-center wow fadeInUp">Visit</h1>

      <form class="contact-form mt-5" method="post">
        <div class="row mb-3">
          <div class="col-sm-6 py-2 wow fadeInLeft">
            <label for="NATIONAL_CODE">National Code</label>
            <input type="text" id="NATIONAL_CODE" class="form-control" placeholder="National code">
          </div>

          <div class="col-sm-6 py-2 wow fadeInRight">
            <label for="Physician">Physician</label>
            <select name="PHYSICIAN_CODE" class="form-control" aria-label="Default select example">
              <?php foreach ($physicians as $physician): ?>
                <option value="<?php echo $physician['ID']; ?>">DR. <?php echo $physician['NAME']; ?>  -  <?php echo $physician['EXPERTISE']; ?></option>
              <?php endforeach; ?>
            </select>
          </div>

          <div class="col-sm-6 py-2 wow fadeInLeft">
            <label for="INSURANCE_CODE">Insurance Code</label>
            <input type="text" id="INSURANCE_CODE" class="form-control" placeholder="Insurance code">
          </div>

          <div class="col-sm-6 py-2 wow fadeInRight">
            <label for="INSURANCE_CODE">Time</label>
            <select class="form-control" aria-label="Default select example">
              <?php foreach ($visit_times as $visit_time): ?>
                <option value="<?php echo $visit_time['ID']; ?>">DR. <?php echo $visit_time['NAME']; ?>  -  <?php echo $_POST['PHYSICIAN_CODE'] ?></option>
              <?php endforeach; ?>
            </select>
          </div>

        </div>
        <button type="submit" class="btn btn-primary wow zoomIn">Submit</button>
      </form>
    </div>
  </div>
  
<?php include "footer.php"; ?>