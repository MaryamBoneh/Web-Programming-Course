<?php
    include "header2.php";
    include "database.php";

    $album_id = $_GET["album_id"];
    $album = $db->query("SELECT * FROM albums WHERE ID = $album_id")->fetch_assoc();
    $artist_id = $album["ARTIST"];

    $artist = $db->query("SELECT * FROM artists WHERE ID = $artist_id")->fetch_assoc();
    $artists = $db->query("SELECT * FROM artists")
?>

<?php if ($_SESSION["login_status"] != null && $_SESSION["login_status"] == true) : ?>
    <div class="container vh-100">
        <div class="row mt-3 justify-content-center">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <?php include "admin_side.php"; ?>
            </div>

            <div class="col-lg-9 col-md-6 col-sm-6 px-5">
                <form method="post" action="admin_edit_album_proccess.php" enctype="multipart/form-data">
                    <div class="row m-3">
                        <div class="col">
                            <label for="files" class="btn">Album Name</label>
                            <input type="text" value="<?php echo $album["NAME"]; ?>" name="name" class="form-control" placeholder="Artist Name" aria-label="">
                        </div>
                    </div>
                    <div class="row m-3">
                        <div class="col">
                            <label for="files" class="btn">Album Cover</label>
                            <input type="file" name="IMAGE" class="form-control">
                        </div>
                    </div>
                    <div class="row m-3">
                        <div class="col">
                            <select class="form-select w-100" aria-label="Default select example" name="Artist">
                                <option selected>Artist Name</option>
                                <?php foreach ($artists as $artist) : ?>
                                    <option value="<?php echo $artist["ID"]; ?>"><?php echo $artist["NAME"]; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="row m-3">
                        <div class="col">
                            <input type="hidden" value="<?php echo $album["ID"]; ?>" name="ID">
                            <button type="submit" class="btn btn-primary btn-lg w-100 mt-2">Save</button>
                        </div>
                    </div>
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