<?php
    include "database.php";
    include "header2.php";

    $artists = $db->query("SELECT * FROM artists");
?>

<?php if ($_SESSION["login_status"] != null && $_SESSION["login_status"] == true): ?>
    <div class="container vh-100" style="margin-top:10rem !important;">
        <h3 class="text-dark mb-4">
           Add New Album
        </h3>
        <div class="row mt-3 justify-content-center">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <?php include "admin_side.php"; ?>
            </div>

            <div class="col-lg-9 col-md-6 col-sm-6">
                <form method="post" action="admin_add_album_proccess.php" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col">
                            <input type="text" name="NAME" class="form-control" placeholder="Album Name">
                        </div>
                        <div class="col">
                            <input type="file" name="IMAGE" class="form-control">
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col">
                            <select class="form-select w-100" aria-label="Default select example" name="ARTIST">
                                <?php foreach ($artists as $artist) : ?>
                                        <option value="<?php echo $artist["ID"]; ?>"><?php echo $artist["NAME"]; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg w-100 mt-2">Add</button>
                </form>
            </div>
        </div>
    </div>

<?php
    else :
        header("Location: index.php");
    endif;
    include "footer.php";
?>