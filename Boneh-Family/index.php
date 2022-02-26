<?php
    include "database.php";

    $messages = mysqli_query($connection, "SELECT * FROM messages");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="family"/>
    <meta name="keywords" content="chat"/>
    <meta name="auther" content="0"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/bootstrap.css" />
    <title>Boneh Family</title>
</head>

<body dir="rtl">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">خونواده خوشحال</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </nav>
    <div class="container">
        <div class="row mt-5">
            <div class="col-12">
                <ul class="list-group">
                    
                    <?php    
                        foreach($messages as $massage){?>
                            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                <div class="ms-2 d-flex">
                                <div class="fw-bold text-secondary ms-3"><?php echo $massage["NAME"]; ?></div>
                                <?php echo $massage["TEXT"]; ?>
                                </div>
                                <span class="badge bg-success p-2 rounded-pill"><?php echo $massage["TIME"]; ?></span>
                            </li>
                    <?php } ?>
                </ul>

                <!-- Button trigger modal -->
                <button type="button" class="btn btn-success py-2" data-bs-toggle="modal" data-bs-target="#exampleModal" style="position: absolute; bottom: 50px; left: 5%; height: 38px;">
                    <span class="material-icons">add</span>
                </button>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">پیام جدید</h5>
                                <button type="button" class="btn-close m-0" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form method="post" action="new_message.php">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">نام</label>
                                        <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">متن پیام</label>
                                        <input type="text" name="message" class="form-control" id="exampleInputPassword1">
                                    </div>
                                    <button type="submit" class="btn btn-primary">فرستادن</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<script src="js/bootstrap.js"></script>
  <script
    src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
    integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
    crossorigin="anonymous">
  </script>

</html>