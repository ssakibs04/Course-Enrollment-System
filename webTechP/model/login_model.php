<?php
function userLogin($email, $password)
{
    //establishing database connection
    $con = getConnection();

    $email_search = " select * from registration where email = '$email'";
    $query = mysqli_query($con, $email_search);

    $email_count = mysqli_num_rows($query);

    //closing database connection
    $con->close();

    if ($email_count) {
        //we are fetching password throw email
        $email_pass = mysqli_fetch_assoc($query);
        //storing the password to a variable
        $db_pass = $email_pass['password'];

        //we are checking the user input password from database. & the database password is encripted.
        // Thats the reason we use a build in function called password_verify()
        $pass_decode = password_verify($password, $db_pass);

        //using values usnig session . after fetching email we are not getting username from that belonging email
        //we can not use this session value anywhere.
        $_SESSION['username'] = $email_pass['username'];

        if ($pass_decode) {

            if ($email_pass['usertype'] == "user") {
                header("location:index.php");
            } else if ($email_pass['usertype'] == "admin") {
                header("location:adminPanel.php");
            } else {
?>
                <script>
                    alert("Email or Password incorrect");
                </script>
            <?php
            }
            ?>
            <script>
                location.replace("./index.php");
            </script>
        <?php
            //if this header location file not work then use the above one using js
            //header('location:../../index.php');

        } else {
        ?>
            <script>
                alert("Password incorrect");
            </script>
        <?php

        }
    } else {
        ?>
        <script>
            alert("Invalid email");
        </script>
<?php

    }
}


?>