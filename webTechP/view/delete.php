<?php

include_once '../model/connection.php';
//establishing database connection
$con = getConnection();
//collecting id value from the url
$ids = $_GET['idth'];
//searching id from the database
$id_search = " select * from registration where id = '$ids'";
$query = mysqli_query($con, $id_search);
//fetching data from database
$user_type = mysqli_fetch_assoc($query);
if ($user_type['usertype'] == "admin") {
    header("location:displayRegis.php");
} else {
    //passing query to delete data
    $deleteQuery = " delete from registration where id = '$ids'";
    $query = mysqli_query($con, $deleteQuery);

    $con->close();

    if ($query) {
?>
        <script>
            alert("Deleted successfully");
            location.replace("./displayRegis.php");
        </script>

    <?php
    } else {
    ?>
        <script>
            alert("Not deleted");
        </script>
<?php
    }
}


?>