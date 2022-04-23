<?php
    include "database.php";
    include "header2.php";

    $albums = $db->query("SELECT * FROM albums");
    $artists = $db->query("SELECT * FROM artists");
    $id = 1;
?>

<?php if ($_SESSION["login_status"] != null && $_SESSION["login_status"] == true) : ?>
    <div class="container vh-100">
        <h3 class="text-light mb-4">
            Albums
        </h3>
        <hr class="bg-light mb-5">
        <div class="row mt-3 justify-content-center">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <?php include "admin_side.php"; ?>
            </div>

            <div class="col-lg-9 col-md-6 col-sm-6">
                <a href="admin_add_album.php" class="btn btn-primary btn-lg w-100 mb-4">
                    <i class="fas fa-plus"></i> Add an Album
                </a>

                <table class="table table-striped">
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Cover</th>
                        <th scope="col">Album Name</th>
                        <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($albums as $album) : ?>
                            <tr>
                                <th scope="row">
                                    <?php echo $id; $id++; ?>
                                </th>
                                <td>
                                    <img src="assets/img/albums/<?php echo $album["IMAGE"]; ?>" class="img-fluid" width="150px" alt="<?php echo $album["NAME"]; ?>">
                                </td>
                                <td>
                                    <?php echo $album["NAME"]; ?>
                                </td>
                                <td>
                                    <a href="admin_edit_album.php?album_id=<?php echo $album["ID"]; ?>" class="btn btn-sm btn-warning mb-2">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a href="admin_remove_album.php?album_id=<?php echo $album["ID"]; ?>" class="btn btn-sm btn-danger mb-2">
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