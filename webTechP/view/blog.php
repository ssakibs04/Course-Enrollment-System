<!DOCTYPE html>
<html lang="en">

<head>
    <title>Shohoj Shiksha</title>
    <style>
        div {
            text-align: center;
            font-size: 20px;
            font-family: 'Roboto', sans-serif;
            font-weight: 600;
            text-transform: capitalize;
        }
 
    </style>
</head>

<body>
    <?php include './header.php'; ?>


    <div>Blog</div>
    <hr>

    <?php
    if (isset($_POST['submit'])) {
        // echo $_FILES['fileName']['name'];
        // echo $_FILES['fileName']['tmp_name'];
        $fileName = $_FILES['fileName']['name'];
        $tmp_loc = $_FILES['fileName']['tmp_name'];
        $uploadLoc = './uploads/';
        if (!empty($fileName)) {
            move_uploaded_file($tmp_loc, $uploadLoc . $fileName);
            echo "File uploaded successfully";
        } else {
            echo "Select a file";
        }
    }
    ?>
    <form method="post" action="" enctype="multipart/form-data">
        Select an Image
        <input type="file" name="fileName"> <br><br>
        <input type="submit" name="submit">
    </form>
    <?php include './footer.php'; ?>
</body>

</html>