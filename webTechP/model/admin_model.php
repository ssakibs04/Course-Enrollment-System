<?php
//Function for display Registration data
function displayRegisData()
{
    //establishing connection
    $con = getConnection();

    //select query for accessing all the data from database
    $selectQuery  = "select * from registration";
    $query = mysqli_query($con, $selectQuery);

    //creating session to use this variable outside the scope  
    $_SESSION['query'] = $query;

    //connection closing
    $con->close();

    //to show number of rows
    //$nums = mysqli_num_rows($query);

}

?>