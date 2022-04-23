<?php
    include "database.php";
    include "header2.php";

    if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
    $musics = $db->query("SELECT * FROM musics");
    $id = 1;
?>

<?php if ($_SESSION["login_status"] != null && $_SESSION["login_status"] == true) : ?>
    <div class="container vh-100">
        <div class="row mt-3 justify-content-center">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <?php include "admin_side.php"; ?>
            </div>

            <div class="col-lg-9 col-md-6 col-sm-6">
                <a href="admin_add_album.php" class="btn btn-primary btn-lg w-100 mb-4">
                    <i class="fas fa-plus"></i> Add a Music
                </a>

                <table class="table table-striped">
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Cover</th>
                        <th scope="col">Music Name</th>
                        <th scope="col">Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach ($musics as $music) : ?>
                            <tr>
                                <th scope="row">
                                    <?php echo $id; $id++; ?>
                                </th>
                                <td>
                                    <img src="assets/img/musics/<?php echo $music["IMAGE"]; ?>" class="img-fluid" width="150px" alt="">
                                </td>
                                <td>
                                    <?php echo $music["NAME"]; ?>
                                </td>
                                <td>
                                    <a href="admin_edit_music.php?music-id=<?php echo $music["ID"]; ?>" class="btn btn-sm btn-warning mb-2">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a href="admin_remove_music.php?music-id=<?php echo $music["ID"]; ?>" class="btn btn-sm btn-danger mb-2">
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
?>
<?php include "footer.php"; ?>