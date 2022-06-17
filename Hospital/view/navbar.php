<?php
    include "header.php";
    include "../model/database.php";
?>


<div class="back-to-top"></div>

<header>
  <div class="topbar">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 text-sm">
          <div class="site-info">
            <a href="#"><span class="material-symbols-rounded">headphones</span> +98 513 1111 2222</a>
            <span class="divider">|</span>
            <a href="#"><span class="material-symbols-rounded">mail</span> Hospital@gmail.com</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
    <div class="container">
      <a class="navbar-brand" href="#"><span class="text-primary">‌Boneh</span>-Health</a>
      <!-- <form action="#">
        <div class="input-group input-navbar">
          <div class="input-group-prepend">
            <span class="input-group-text" id="icon-addon1"><span class="mai-search"></span></span>
          </div>
          <input type="text" class="form-control" placeholder="Enter keyword.." aria-label="Username" aria-describedby="icon-addon1">
        </div>
      </form> -->

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupport">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="doctors.php">Doctors</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="visit.php">Visit</a>
          </li>
          <li class="nav-item">
            <a class="btn btn-primary ml-lg-3" href="#">Login / Register</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>