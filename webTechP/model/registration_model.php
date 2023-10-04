<?php
function userRegistration($username, $email, $mobile, $password, $cpassword, $token, $status, $usertype)
{
    //establishing database connection
    $con = getConnection();

    //selecting email from the database for the user input email to check the check or not. we are trying to use validation here to make all the user input email unique. 
    $emailquery = "select * from registration where email='$email'";
    $query = mysqli_query($con, $emailquery);
    //we are checking the email is exits or not by searching rows. when it will find 1 row it will store the value in the variable. Here in this case $emailcount will strore value 1.
    $emailcount = mysqli_num_rows($query);

    //closing database connection
    $con->close();

    if ($emailcount > 0) {
?>
        <script>
            alert("Email already exists");
        </script>

        <?php
    } else {
        //we are making the pass encripted
        $pass  = password_hash($password, PASSWORD_BCRYPT);
        $cpass  = password_hash($cpassword, PASSWORD_BCRYPT);

        //establishing database connection
        $con = getConnection();

        $insertquery = "insert into registration(username, email, mobile, password,token,status,usertype) values('$username','$email', '$mobile', '$pass', '$token', '$status','$usertype')";

        $iquery = mysqli_query($con, $insertquery);

        //closing database connection
        $con->close();

        if ($iquery) {
        ?>
            <script>
                alert("Inserted Successful");
                location.replace("./login.php");
            </script>

        <?php
        } else {
        ?>
            <script>
                alert("Not Inserted");
            </script>

<?php
        }
    }
}



?>


