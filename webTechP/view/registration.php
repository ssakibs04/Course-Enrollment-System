<?php
session_start();
?>
<!DOCTYPE html>

<html>

<head>
    <link rel="stylesheet" href="./css/style.css">
    <?php include './common/links.php' ?>
</head>

<body>
    <?php

    include_once '../model/connection.php';
    include_once '../model/registration_model.php';

    //establishing database connection
    $con = getConnection();

    if (isset($_POST['submit'])){
        $username = mysqli_real_escape_string($con, $_POST['username']);
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $mobile = mysqli_real_escape_string($con, $_POST['mobile']);
        $password = mysqli_real_escape_string($con, $_POST['password']);
        $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);
        
        //closing database connection
        $con->close();
        //generation random number for verification through email
        $token = bin2hex(random_bytes(15));

        //calling the funtion from userRegistration file in model folder
        userRegistration($username, $email, $mobile, $password, $cpassword, $token, 'inactive','user');
    }

    ?>




    <article class="account_creation">
        <h4>Create Account</h4>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" id="form">
            <div class="form_group ">
                <div class="input_field">
                    <span><i class="fa fa-user"></i></span>
                    <input type="text" id="username" name="username" placeholder="Full name" required>
                    <div class="error_div error_success">
                        <i class="fa fa-check-circle" aria-hidden="true"></i>
                        <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                        <small></small>
                    </div>
                </div>

            </div>
            <div class="form_group">
                <div class="input_field">
                    <span><i class="fa fa-envelope"></i></span>
                    <input type="email" id="email" name="email" placeholder="Email" required>

                    <div class="error_div error_success">
                        <i class="fa fa-check-circle" aria-hidden="true"></i>
                        <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                        <small></small>
                    </div>
                </div>


            </div>
            <div class="form_group">
                <div class="input_field">
                    <span><i class="fa fa-phone"></i></span>
                    <input type="number" id="mobile" name="mobile" placeholder="Phone Number" required>

                    <div class="error_div">
                        <i class="fa fa-check-circle" aria-hidden="true"></i>
                        <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                        <small></small>
                    </div>
                </div>

            </div>

            <div class="form_group">
                <div class="input_field">
                    <span><i class="fa fa-lock"></i></span>
                    <input type="password" id="password" name="password" placeholder="Create password" required>

                    <div class="error_div">
                        <i class="fa fa-check-circle" aria-hidden="true"></i>
                        <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                        <small></small>
                    </div>
                </div>
            </div>

            <div class="form_group">
                <div class="input_field">
                    <span><i class="fa fa-lock"></i></span>
                    <input type="password" id="cpassword" name="cpassword" placeholder="Confirm Password" required>

                    <div class="error_div">
                        <i class="fa fa-check-circle" aria-hidden="true"></i>
                        <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                        <small></small>
                    </div>
                </div>

            </div>
            <div class="form_group_button">
                <button type="submit" onclick="validation();" id="submit_btn" name="submit">SignUp</button>
                <p>Have an account? <a href="./login.php">Log in</a></p>
            </div>
        </form>
    </article>

    <script src="../controller/js/regis.js" async defer></script>
</body>

</html>