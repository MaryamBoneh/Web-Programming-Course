<?php
    include "header2.php";
?>

<div class="container">
    <div class="row mt-3 justify-content-center vh100">
        <div class="col-lg-4 col-md-6 col-sm-12 d-flex justify-content-center align-items-center">
            <div class="card w-100">
                <div class="card-header">
                    admin panel
                </div>
                <div class="card-body">
                    <form method="post" action="admin_login_process.php">
                        <div class="mb-3">
                            <label class="form-label">User Name</label>
                            <input type="text" class="form-control" name="username">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">password</label>
                            <input type="password" class="form-control" name="password">
                        </div>
                        <div class="form-check mb-3">
                            <input type="checkbox" class="form-check-input">
                            <label class="form-check-label" for="exampleCheck1">Remember me</label>
                        </div>
                        <button type="submit" class="btn w-100 btn-primary">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include "footer.php"; ?>