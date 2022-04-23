<?php
    include "database.php";

    $musics = $db-> query( "SELECT * FROM musics");
    $artists = $db-> query( "SELECT * FROM artists");
    $albums = $db-> query( "SELECT * FROM albums");
?>


<?php
    include "header.php";
?>
<body id="page-top">
    
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
                            <form action="albums.php" method="post">
                                    <input type="text" name="artist_id" class="d-none" value="<?php echo $artist["ID"]; ?>">
                                    <button type="submit" style="background: none; border-style: hidden; height: 30px;">
                                        <h4><?php echo $artist["NAME"]; ?></h4>
                                    </button>
                            </form>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <div class="text-center">
                <form action="artists.php" method="post">
                    <button type="submit" style="background: none; border-style: hidden;">
                        <h3 class="section-subheading text-muted" style="color: #ffc800 !important; cursor: pointer;">Show all artists</h3>
                    </button>
                </form>
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
                                            <div class="portfolio-hover-content"><i class="fas fa-eye fa-3x"></i></div>
                                        </button>
                                    </form>
                                </div>
                                <img class="img-fluid" src="assets/img/albums/<?php echo $album["IMAGE"]; ?>" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading"><?php echo $album["NAME"]; ?></div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
<?php include "footer.php"; ?>  
