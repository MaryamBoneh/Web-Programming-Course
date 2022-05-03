<?php include "header.php" ?>

    <div class="container">
        <div class="row mt-3 justify-content-center vh100">
            <div class="col-lg-4 col-md-6 col-sm-12 d-flex justify-content-center align-items-center">
                <div class="card w-100">
                    <div class="card-header">
                        Log Into MaryamGram
                    </div>
                    <div class="card-body">
                        <form method="post" action="admin_login_process.php">
                            <div class="mb-3">
                                <input type="text" class="form-control" name="username" placeholder="Email or phone number">
                            </div>
                            <div class="mb-3">
                                <input type="password" class="form-control" name="password"placeholder="Password">
                                <button type="submit" class="btn w-100 mt-3 btn-primary">Login</button>
                            </div>
                            <div class="form-check mb-3">
                                <span> Forgot account? </span>
                                <span> Sign up for MaryamGram </span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include "footer.php" ?>
