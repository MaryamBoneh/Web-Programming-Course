<?php
    include "database.php";
    include "header2.php";

    $artists = $db->query("SELECT * FROM artists");
    $id = 1;
?>

<?php if ($_SESSION["login_status"] != null && $_SESSION["login_status"] == true) : ?>
    <div class="container vh-100">
        <h3 class="text-light mb-4">
             Songs
        </h3>
        <hr class="bg-light mb-5">
        <div class="row mt-3 justify-content-center" style="margin-top:5rem !important;">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <?php include "admin_side.php"; ?>
            </div>

            <div class="col-lg-9 col-md-6 col-sm-6">
                <a href="admin_add_album.php" class="btn btn-primary btn-lg w-100 mb-4">
                    <i class="fas fa-plus"></i> Add an Artist
                </a>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Image</th>
                            <th scope="col">Name</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach ($artists as $artist) : ?>
                            <tr>
                                <th scope="row">
                                    <?php echo $id; $id++; ?>
                                </th>
                                <td>
                                    <img src="assets/img/artists/<?php echo $artist["IMAGE"]; ?>" class="img-fluid" width="150px" alt="<?php echo $artist["NAME"]; ?>">
                                </td>
                                <td>
                                    <?php echo $artist["NAME"]; ?>
                                </td>
                                <td>
                                    <a href="admin_edit_artist.php?artist-id=<?php echo $artist["ID"]; ?>" class="btn btn-sm btn-warning mb-2">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a href="admin_remove_artist.php?artist-id=<?php echo $artist["ID"]; ?>" class="btn btn-sm btn-danger mb-2">
                                    <i class="fas fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

<?php
    else :
        header("Location: index.php");
    endif;

    include "footer.php";
?>