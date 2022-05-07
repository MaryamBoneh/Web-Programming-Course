<?php include "header.php" ?>

    <div class="container vh-100 d-flex w-100 justify-content-center aligng-items-center">
        <div class="row mt-3 w-100 justify-content-center">
            <div class="col-lg-4 col-md-6 col-sm-12 d-flex justify-content-center align-items-center">
                <div class="card w-100">
                    <div class="card-header">
                        Log Into MaryGram
                    </div>
                    <div class="card-body">
                        <form method="post" action="">
                            <div class="mb-3">
                                <input type="text" class="form-control" name="username" placeholder="Email or phone number">
                            </div>
                            <div class="mb-3">
                                <input type="password" class="form-control" name="password" placeholder="Password">
                                <button type="submit" class="btn w-100 mt-3 btn-primary">Login</button>
                            </div>
                            <div class="form-check mb-3 text-center">
                                <button type="button" class="border-0 bg-transparent" data-bs-toggle="modal" data-bs-target="#exampleModal"> Sign up. &nbsp;&nbsp;</button>
                                <span> Forgot account? </span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Register into MaryGram</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="g-3 needs-validation" novalidate action="../controller/register.php" method="post">
                        <div class="row">

                            <div class="col-md-6">
                                <label class="form-label">First name</label>
                                <input type="text" class="form-control" name="FIRST_NAME" required>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Last name</label>
                                <input type="text" class="form-control" name="LAST_NAME" required>
                            </div>

                            <div class="col-md-12 mt-3 d-flex flex-column">
                                <label class="form-label mb-3">Gender</label>
                                <span class="mx-3 d-flex">
                                    <div class="form-check mx-3">
                                        <input class="form-check-input" type="radio" id="flexRadioDefault1" value="male" name="GENDER" checked>
                                        <label class="form-check-label" for="flexRadioDefault1">male</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" id="flexRadioDefault2" value="female" name="GENDER">
                                        <label class="form-check-label" for="flexRadioDefault2">female </label>
                                    </div>
                                </span>
                            </div>

                            <div class="col-md-12 mt-3">
                                <label class="form-label">Username</label>
                                <div class="input-group has-validation">
                                    <span class="input-group-text" id="inputGroupPrepend">@</span>
                                    <input type="text" class="form-control" aria-describedby="inputGroupPrepend" name="USERNAME" required>
                                    <div class="invalid-feedback">
                                        Please enter your username
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 mt-3">
                                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="EMAIL">
                            </div>

                            <div class="col-md-12 mt-3">
                                <label for="exampleFormControlInput1" class="form-label">Phone</label>
                                <input type="text" class="form-control" placeholder="09xxxxxxxxx" name="PHONENUMBER">
                            </div>

                        </div>
                        
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <label for="password" class="col-form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="PASSWORD">
                            </div>
                            <div class="col-md-6">
                                <label for="password" class="col-form-label">Confirm Password</label>
                                <input type="password" class="form-control" name="CONFIRMPASS">
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-12">
                                <label for="password" class="col-form-label">Birthday</label>
                                <div class="input-group mt-2">
                                    <span id="dtp1" class="input-group-text cursor-pointer" data-mds-dtp-guid="f43a28f4-a501-4ed8-afe2-13879d016db3" data-bs-original-title="" title="" data-mds-dtp-group="group1" data-from-date="true"> 
                                        <span class="material-icons"> calendar_month </span>
                                    </span>
                                    <input type="text" name="BIRTHDAY" data-name="dtp1-text" class="form-control">
                                </div>
                            </div>
    
                            <div class="col-12 mt-3">
                                <input type="submit" class="btn btn-primary w-100">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php include "footer.php" ?>
