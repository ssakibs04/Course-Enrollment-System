<?php

// userRegistration Update function
function userRegisUpdate($idUpdate, $username, $email, $mobile)
{
    //establishing database connection through function
    $con = getConnection();

    //checking unique email
    $emailQuery = "select * from registration where email = '$email'";

    $query = mysqli_query($con, $emailQuery);
    //checking whether email exits or not in the row
    $emailCount = mysqli_num_rows($query);

    //closing database connection
    $con->close();

    if ($emailCount > 0) {

?>
        <script>
            alert("Email already exist");
        </script>

        <?php

    } else {
        //establishing database connection through function
        $con = getConnection();

        //update query to change values in the database
        $updateQuery = "update registration set username='$username', email='$email',
        mobile='$mobile' where id= '$idUpdate' ";

        //inserting values in db with the connection
        $result = mysqli_query($con, $updateQuery);

        //closing database connection
        $con->close();

        //checking if the data inserted successfully or not
        if ($result) {
        ?>
            <script>
                alert("Data updated successfully");
                location.replace("./update.php");
            </script>

        <?php
        } else {
        ?>
            <script>
                alert("Data not updated");
            </script>

<?php
        }
    }
}




?>