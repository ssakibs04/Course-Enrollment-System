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
    <article class="account_creation">
        <h4>Update Details</h4>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" id="form">

            <?php
            //database connection path
            include_once '../model/connection.php';
            //user registration path
            include_once '../model/update_model.php';

            if (isset($_GET['idth'])) {
                //establishing connection
                $con = getConnection();

                //calling adminUpdate function to update existing values
                $ids = mysqli_real_escape_string($con, $_GET['idth']);

                //select query for accessing id from database
                $showQuery = "select * from registration where id='{$ids}'";
                $showData = mysqli_query($con, $showQuery);
                $arrData = mysqli_fetch_array($showData);
                //creating session to use this variable outside the scope
                $_SESSION['id'] = $ids;

                //connection closing
                $con->close();
            }

            if (isset($_POST['submit'])) {

                $con = getConnection();
                $idUpdate = mysqli_real_escape_string($con, $_SESSION['id']);
                $username = mysqli_real_escape_string($con, $_POST['username']);
                $email = mysqli_real_escape_string($con, $_POST['email']);
                $mobile = mysqli_real_escape_string($con, $_POST['mobile']);

                $con->close();


                //calling userRegistration function to inserting values
                userRegisUpdate($idUpdate, $username, $email, $mobile);
            }

            ?>
            <div class="form_group ">
                <div class="input_field">
                    <span><i class="fa fa-user"></i></span>
                    <input type="text" id="username" name="username" placeholder="Full name" value="<?php if (isset($_GET['idth'])) {
                                                                                                        echo $arrData['username'];
                                                                                                    } ?>" required>
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
                    <input type="email" id="email" name="email" placeholder="Email" value="<?php if (isset($_GET['idth'])) {
                                                                                                echo $arrData['email'];
                                                                                            } ?>" required>

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
                    <input type="number" id="mobile" name="mobile" placeholder="Phone Number" value="<?php if (isset($_GET['idth'])) {
                                                                                                            echo $arrData['mobile'];
                                                                                                        } ?>" required>

                    <div class="error_div">
                        <i class="fa fa-check-circle" aria-hidden="true"></i>
                        <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                        <small></small>
                    </div>
                </div>

            </div>

            <div class="form_group_button">
                <button type="submit" onclick="validation();" id="submit_btn" name="submit">Update</button>
                <p> <a href="./displayRegis.php">Back to user details page</a></p>
            </div>
            
        </form>
    </article>
    <script src="../controller/js/update.js" async defer></script>
</body>

</html>