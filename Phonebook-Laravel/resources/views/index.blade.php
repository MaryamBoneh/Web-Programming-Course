<!-- <html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="phonebook-with-laravel">
    <meta name="keywords" content="phonebook">
    <meta name="keywords" content="laravel">
    <meta name="auther" content="0">
    <link href="{{ asset('/css/style.css') }}" type="text/css" rel="stylesheet">
    <link href="{{ asset('/css/bootstrap.rtl.css') }}" type="text/css" rel="stylesheet">
    <title>Phonebook</title>
</head>

<body style="background-color: #f1f2f6; font-family: Cursive;">
    <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="col-lg-9 col-md-12 col-sm-12">
                <nav class="navbar navbar-expand-lg navbar-light mb-2 ">
                    <a class="navbar-brand" href="#">
                        <i class="far fa-address-book"></i>Phonebook
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="/">view contacts</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="add-contact" target="_blank">add contact</a>
                            </li>
                        </ul>
                    </div>
                </nav>
                <hr class="text-dark mb-4">
                <div class="table-responsive">
                    <table class="table table-bordered text-center table-striped mt-2">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Phone Number</th>
                                <th>Email</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($contacts as $contact)
                            <tr>
                                <td>{{ $contact->NAME; }}</td>
                                <td>{{ $contact->PHONE_NUMBER; }}</td>
                                <td>{{ $contact->EMAIL; }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <form action="delete-contact" method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token()}}">
                    <button type="submit" style="position: absolute;" class="mt-1 position-absolute btn btn-danger rounded-0" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Delete
                    </button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
</body>

</html> -->



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
    <link href="{{ asset('/css/style.css') }}" type="text/css" rel="stylesheet">
    <link href="{{ asset('/css/all.css') }}" type="text/css" rel="stylesheet">
    <link href="{{ asset('/css/bootstrap.rtl.css') }}" type="text/css" rel="stylesheet">
    <title>PhoneBook</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark  px-5 d-flex justify-content-between bg-dark">
        <a class="navbar-brand" href="#">Maryam's PhoneBook</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>


        <form action="delete-all" method="post">
            <input type="hidden" name="_token" value="{{ csrf_token()}}">
            <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">Delete all</button>
        </form>

        <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="deleteModalLabel">Are you sure you want to delete?</h5>
                        <button type="button" class="btn-close m-0" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="delete.php">
                            <button type="submit" class="btn btn-danger">Yes</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row mt-5">
            <div class="col-12">
                <table class="table table-striped table-dark">
                    <thead>
                        <tr>
                            <th scope="col">name</th>
                            <th scope="col">phone number</th>
                            <th scope="col">email</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($contacts as $contact)
                            <tr>
                                <td>{{ $contact->NAME; }}</td>
                                <td>{{ $contact->PHONE_NUMBER; }}</td>
                                <td>{{ $contact->EMAIL; }}</td>
                            </tr>
                        @endforeach
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
                                <form method="post" action="add-contact">
                                    <input type="hidden" name="_token" value="{{ csrf_token()}}">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">name</label>
                                        <input type="text" name="NAME" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">phone number</label>
                                        <input type="text" name="PHONE_NUMBER" class="form-control" id="exampleInputPassword1">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">email</label>
                                        <input type="text" name="EMAIL" class="form-control" id="exampleInputPassword1">
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