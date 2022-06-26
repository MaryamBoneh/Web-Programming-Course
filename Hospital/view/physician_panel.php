<?php
    include "navbar.php";
?>
<?php
    if ($_SESSION["login_status"] != null && $_SESSION["login_status"] == true):
?>


<div class="page-banner overlay-dark bg-image" style="background-image: url(../assets/img/bg_image_1.jpg);">
    <div class="banner-section-other">
      <div class="container text-center wow fadeInUp">
        <nav aria-label="Breadcrumb">
          <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">physician_panel</li>
          </ol>
        </nav>
        <h1 class="font-weight-normal">My Panel</h1>
      </div>
    </div>
  </div>

  <div class="page-section">
    <div class="container">
      <p class="">select the days of week and time for the patient visit:</p>
      <form class="contact-form mt-5" method="post" action="../controller/set_time.php">
        <div class="row mb-3">

            <div class="col-sm-6 py-2 wow fadeInLeft">
                <label for="Physician">Day of week</label>
                <select name="DAY_OF_WEEK" class="form-control" aria-label="Default select example" name="DAY_OF_WEEK">
                    <option value="Saturday">Saturday</option>
                    <option value="Sunday">Sunday</option>
                    <option value="Monday">Monday</option>
                    <option value="Tuesday">Tuesday</option>
                    <option value="Wednesday">Wednesday</option>
                    <option value="Thursday">Thursday</option>
                    <option value="Friday">Friday</option>
                </select>
            </div>

            <div class="col-sm-6 py-2 wow fadeInRight">
              <label for="TIME">time</label>
              <input type="text" id="TIME" class="form-control" placeholder="12:30" name="TIME">
            </div>
          
        </div>
        <button type="submit" class="btn btn-primary wow zoomIn">Submit</button>
      </form>
    </div>
  </div>
  

<?php else:
    header("Location: physician_login_register.php");
    endif;
?>
<?php
    include "footer.php";
?>