<?php
    include "database.php";

    $contacts = mysqli_query($connection, "SELECT * FROM contacts");
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
    <title>PhoneBook</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark  px-5 d-flex justify-content-between bg-dark">
        <a class="navbar-brand" href="#">Maryam's PhoneBook</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <button type="button" class="btn btn-outline-danger">Delete all</button>
    </nav>
    <div class="container">
        <div class="row mt-5">
            <div class="col-12">
                <table class="table table-success table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">name</th>
                            <th scope="col">phone number</th>
                            <th scope="col">email</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php    
                            foreach($contacts as $contact):?>
                                <tr>
                                    <td scope="row"><?php echo $contact["ID"]; ?></td>
                                    <td><?php echo $contact["NAME"]; ?></td>
                                    <td><?php echo $contact["PHONE_NUMBER"]; ?></td>
                                    <td><?php echo $contact["EMAIL"]; ?></td>
                                </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>

                <!-- Button trigger modal -->
                <button type="button" class="btn btn-success py-2" data-bs-toggle="modal" data-bs-target="#exampleModal" style="position: absolute; bottom: 50px; left: 5%; height: 38px;">
                    <span class="material-icons">add</span>
                </button>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">New Contact</h5>
                                <button type="button" class="btn-close m-0" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form method="post" action="new_message.php">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">name</label>
                                        <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">phone number</label>
                                        <input type="text" name="phonenumber" class="form-control" id="exampleInputPassword1">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">email</label>
                                        <input type="text" name="email" class="form-control" id="exampleInputPassword1">
                                    </div>
                                    <button type="submit" class="btn btn-success">Save</button>
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