<?php
    session_start();
    if (!isset($_SESSION['login_status']))
    {
        $_SESSION["login_status"] = false;
    }
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="music" />
        <meta name="author" content="0" />
        <title>Maryam  Music</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.png" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark" id="mainNav">
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
                    <li class="nav-item">
                        <?php if ($_SESSION["login_status"] != null && $_SESSION["login_status"] == true): ?>
                            <a class="nav-link" href="admin_logout.php">
                                <i class="fas fa-user"></i> Log out</a>
                        <?php else : ?>
                            <a class="nav-link" href="admin_login.php">
                                <i class="fas fa-user"></i> Account</a>
                        <?php endif; ?>
                    </li>
                </ul>
            </div>
        </div>
    </nav>