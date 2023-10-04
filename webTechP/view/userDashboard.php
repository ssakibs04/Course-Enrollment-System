<?php

session_start();

?>

<!DOCTYPE html>

<html>

<head>
    <?php include_once './common/links.php' ?>
    <link rel="stylesheet" href="./css/dashboard.css">
</head>

<body>
    <?php
    if (isset($_POST['submit'])) {        
        // echo $_FILES['fileName']['name'];
        // echo $_FILES['fileName']['tmp_name'];
        $fileName = $_FILES['fileName']['name'];
        $tmp_loc = $_FILES['fileName']['tmp_name'];
        $uploadLoc = './uploads/img/';
        if (!empty($fileName)) {
            move_uploaded_file($tmp_loc, $uploadLoc . $fileName);
            echo "File uploaded successfully";
        } else {
            echo "Select a file";
        }
        $title =  $_POST['title'];
        $author =  $_POST['author'];
        $enroll =  $_POST['enroll'];
        $_SESSION['title'] = $title;
        $_SESSION['author'] = $author;
        $_SESSION['enroll'] = $enroll;
        $_SESSION['uploadLoc'] = $uploadLoc;
    }

    ?>
    <header>
        <div id="custom_container" class="custom_row">
            User Dashboard
        </div>
        <div class="nav_item">
            <div>
                <ul>
                    <li><a href="./index.php">Home</a></li>
                    <li><a href="./courses.php">Courses</a></li>
                    <li><a href="./about.php">About</a></li>
                    <li><a href="./blog.php">Blog</a></li>
                </ul>
            </div>
            <div class="admin_username">
                <i class="fa fa-user" aria-hidden="true"></i>
                <p>User</p>
                <a href="./logout.php">Logout</a>
            </div>
        </div>
    </header>
    <main>
        <div class="left_sec items">
            <ul>
                <li><a href="#">Dashboard</a></li>
                <li><a href="javascript:myFunction()">Create a post</a></li>
                <li><a href="">Appearance</a></li>
                <li><a href="">Settings</a></li>
            </ul>
        </div>
        <div class="middle_sec items">
            <div id="myDIV">
                <p>Create a Post</p>
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" enctype="multipart/form-data">
                    <label for="title">Title</label>
                    <input type="text" name="title" placeholder="Enter a title" autocomplete="off">
                    <label for="author">Author name</label>
                    <input type="text" name="author" placeholder="Enter author name" autocomplete="off">
                    <label for="enroll">Enroll status</label>
                    <input type="text" name="enroll" placeholder="Enter enrollment status" autocomplete="off">
                    <label for="image">Select an image</label>
                    <input type="file" name="fileName">
                    <div class="submit">
                        <input type="submit" name="submit" value="Submit">
                    </div>
                </form>

            </div>
        </div>
        <div class="right_sec items">
            <div>Total Courses</div>
            <div>Your Courses</div>
            <div>Your Enrolled Courses</div>
        </div>
    </main>
    <footer>
        <hr>
        <div class="footer_content">
            <p>Copyright © 2022- <?php echo date("Y"); ?></p>

        </div>
    </footer>

    <script async defer>
        function myFunction() {
            var x = document.getElementById("myDIV");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        }
    </script>
</body>

</html>