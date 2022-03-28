<?php
    include "database.php";
    $album_id = $_POST["album_id"];
    $musics = $db-> query( "SELECT * FROM musics WHERE ALBUM = album_id");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="music" />
        <meta name="author" content="0" />
        <title>Musics</title>
        <!-- <link rel="icon" type="image/x-icon" href="assets/favicon.png" /> -->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="index.php">
                    <img src="assets/img/navbar-logo.png" alt="..." />
                </a>
            </div>
        </nav>

        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Musics</h2>
                    <h3 class="section-subheading text-muted">Have the best and newest songs</h3>
                </div>
                <div class="row">
                    <?php foreach($musics as $music){ ?>
                        <div class="col-lg-4 col-sm-6 mb-4">
                            <div class="portfolio-item">
                                <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                                    <div class="portfolio-hover">
                                        <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                    </div>
                                    <img class="img-fluid" src="assets/img/musics/<?php echo $music["IMAGE"]; ?>" alt="..." />
                                </a>
                                <div class="portfolio-caption">
                                    <div class="portfolio-caption-heading"><?php echo $music["NAME"]; ?></div>
                                    <div class="portfolio-caption-subheading text-muted"><?php echo $music["ARTIST"]; ?></div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </section>

        <?php include "footer.php"; ?>  

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
