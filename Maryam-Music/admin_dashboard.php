<?php
    include "header2.php";
?>

<?php if($_SESSION["login_status"] != null && $_SESSION["login_status"] == true): ?>
    <div class="container vh100">
        <div class="row vh100">
            <div class="col-lg-3 col-md-6 col-sm-6 d-flex justify-content-start align-items-center">
                <?php include "admin_side.php"; ?>
            </div>
            <div class="col-lg-9 col-md-6 col-sm-6 d-flex justify-content-end align-items-center">
            </div>
        </div>
    </div>
<?php 
    else:
        header("Location: index.php");
    endif;
?> 
<?php include "footer.php"; ?>