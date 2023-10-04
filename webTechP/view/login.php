<?php
session_start();
?>
<!DOCTYPE html>

<html>

<head>
    <link rel="stylesheet" href="./css/style.css">
    <?php include_once './common/links.php' ?>
</head>

<body>
    <?php
    include_once '../model/connection.php';
    include_once '../model/login_model.php';

    if (isset($_POST['submit'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        //calling the function userLogin file from model folder
        userLogin($email, $password);
    }
    ?>




    <article class="account_creation">
        <h4>Login Account</h4>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">

            <div class="form_group">
                <div class="input_field">
                    <span><i class="fa fa-envelope"></i></span>
                    <input type="email" id="email" name="email" placeholder="Email address" required>
                    <div class="error_div error_success">
                        <i class="fa fa-check-circle" aria-hidden="true"></i>
                        <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                        <small></small>
                    </div>
                </div>

            </div>
            <div class="form_group">
                <div class="input_field">
                    <span><i class="fa fa-lock"></i></span>
                    <input type="password" id="password" name="password" placeholder="Enter password" required>
                    <div class="error_div error_success">
                        <i class="fa fa-check-circle" aria-hidden="true"></i>
                        <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                        <small></small>
                    </div>
                </div>
            </div>

            <div class="form_group_button">
                <button type="submit" onclick="validation();" name="submit">Login</button>
                <p>Don't have an account? <a href="./registration.php">Signup</a></p>
            </div>
        </form>
    </article>
    <script src="../controller/js/login.js" async defer></script>
</body>

</html>