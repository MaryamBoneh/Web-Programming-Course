<?php
    include "database.php";

    $musics = $db-> query( "SELECT * FROM musics");
    $artists = $db-> query( "SELECT * FROM artists");
    $albums = $db-> query( "SELECT * FROM albums");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="music" />
        <meta name="author" content="0" />
        <title>Maryam  Music</title>
        <!-- <link rel="icon" type="image/x-icon" href="assets/favicon.png" /> -->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top">
                    <img src="assets/img/navbar-logo.png" alt="..." />
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#portfolio">Musics</a></li>
                        <li class="nav-item"><a class="nav-link" href="#team">Artists</a></li>
                        <li class="nav-item"><a class="nav-link" href="#albums">Albums</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <header class="masthead">
            <div class="container">
               
            </div>
        </header>

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
                                <a class="portfolio-link">
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
        
        <section class="page-section bg-light" id="team">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Artists</h2>
                    <h3 class="section-subheading text-muted">All singers in all styles of music</h3>
                </div>
                <div class="row">
                <?php foreach($artists as $artist){ ?>
                        <div class="col-lg-4">
                            <div class="team-member">
                                <img class="mx-auto rounded-circle" src="assets/img/artists/<?php echo $artist["IMAGE"]; ?>" alt="..." />
                                <h4><?php echo $artist["NAME"]; ?></h4>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </section>

        <section class="page-section bg-light" id="portfolio">
            <div class="container" id="albums">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Albums</h2>
                    <h3 class="section-subheading text-muted">Have the best and newest albums in all styles of music</h3>
                </div>
                <div class="row">
                    <?php foreach($albums as $album){ ?>
                        <div class="col-lg-4 col-sm-6 mb-4">
                            <div class="portfolio-item">
                                <a class="portfolio-link">
                                    <div class="portfolio-hover">
                                        <form action="musics.php" method="post">
                                            <input type="text" name="album_id" class="d-none" value="<?php echo $album["ID"]; ?>">
                                            <button type="submit" class="portfolio-hover-content" style="background: none; border-style: hidden;">
                                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                            </button>
                                        </form>
                                    </div>
                                    <img class="img-fluid" src="assets/img/albums/<?php echo $album["IMAGE"]; ?>" alt="..." />
                                </a>
                                <div class="portfolio-caption">
                                    <div class="portfolio-caption-heading"><?php echo $album["NAME"]; ?></div>
                                    <!-- <div class="portfolio-caption-subheading text-muted"> </div> -->
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
