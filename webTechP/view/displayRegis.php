<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>

    <?php include_once './common/links.php' ?>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <div class="table_content">
        <table>
            <caption>User Display</caption>
            <caption class="back"><a href="./registration.php">Back to registration page</a></caption>
            <caption class="back"><a href="./adminPanel.php">Back to Dashboard</a></caption>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>User Type</th>
                    <th colspan="2">Operation</th>
                </tr>
            </thead>
            <tbody>
                <?php
                //database connection path
                include_once '../model/connection.php';
                //admin model path
                include_once '../model/admin_model.php';

                //calling function
                displayRegisData();
                //using while loop to display all the row one by one
                while ($res = mysqli_fetch_array($_SESSION['query'])) {
                ?>
                    <tr>
                        <td><?php echo $res['id']; ?></td>
                        <td><?php echo $res['username']; ?></td>
                        <td><?php echo $res['email']; ?></td>
                        <td><?php echo $res['mobile']; ?></td>
                        <td><?php echo $res['usertype']; ?></td>
                        <td><a href="./update.php?idth=<?php echo $res['id']; ?>" data-toggle="tooltip" title="UPDATE"><i class="fa fa-edit"></i></a></td>
                        <td><a href="./delete.php?idth=<?php echo $res['id'] ?>" data-toggle="tooltip" title="DELETE"><i class="fa fa-trash"></i></a></td>
                    </tr>

                <?php
                }
                ?>


            </tbody>
        </table>
    </div>

    <script src="" defer></script>
</body>

</html>