<?php 
    include "header.php";
?>

    <body class="login-body mt-5">

        <?php if(isset($_SESSION["message"])):?>
            <div class="row justify-content-center mt-5">
                <div class="col-12">
                    <?php if($_SESSION["message_type"]== "success"):?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <?php echo $_SESSION["message"];?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php elseif($_SESSION["message_type"]== "error"):?>
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <?php echo $_SESSION["message"];?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php endif;?>
                </div>
            </div>
            <?php unset($_SESSION["message"]); ?>
        <?php endif;?>

        <div class="login-wrap">
            <div class="login-html">
                <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
                <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
                
                <div class="login-form">
                    <form method="post" action="../controller/physician_login.php">
                        <div class="sign-in-htm">
                            <div class="group">
                                <label for="user" class="label">Username</label>
                                <input id="user" type="text" class="input" name="NP_CODE">
                            </div>
                            <div class="group">
                                <label for="login-pass" class="label">Password</label>
                                <input id="login-pass" type="password" class="input" name="PASSWORD" data-type="password">
                            </div>
                            <div class="group">
                                <input type="submit" class="button" value="Sign In">
                            </div>
                            <div class="login-hr"></div>
                            <div class="login-foot-lnk">
                                <label for="tab-2">Create a new account</label>
                            </div>
                        </div>
                    </form>
                    <form method="post" action="../controller/physician_register.php">
                        <div class="sign-up-htm">
                            <div class="group">
                                <label for="sign-up-name" class="label">Name</label>
                                <input id="sign-up-name" type="text" name="NAME" class="input">
                            </div>
                            <div class="group">
                                <label for="sign-up-expertise" class="label">Expertise</label>
                                <input id="sign-up-expertise" type="text" name="EXPERTISE" class="input">
                            </div>
                            <div class="group">
                                <label for="sign-up-phone" class="label">Phone</label>
                                <input id="sign-up-phone" type="text" name="PHONE" class="input">
                            </div>
                            <div class="group">
                                <label for="sign-up-NP" class="label">NP</label>
                                <input id="sign-up-NP" type="text" name="NP" class="input">
                            </div>
                            <div class="group">
                                <label for="sign-up-pass" class="label">Password</label>
                                <input id="sign-up-pass" type="password" name="PASSWORD" class="input" data-type="password">
                            </div>
                            <div class="group">
                                <label for="sign-up-re-pass" class="label">Repeat Password</label>
                                <input id="sign-up-re-pass" type="password" name="CONFIRM_PASSWORD" class="input" data-type="password">
                            </div>
                            <div class="group">
                                <input type="submit" class="button" value="Sign Up">
                            </div>
                            <div class="login-hr"></div>
                            <div class="login-foot-lnk">
                                <label for="tab-1">Already Member?</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>

