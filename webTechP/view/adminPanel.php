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
    <header>
        <div id="custom_container" class="custom_row">
            Admin Panel
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
                <i class="fa fa-lock" aria-hidden="true"></i>
                <p>admin</p>
                <a href="./logout.php">Logout</a>
            </div>
        </div>
    </header>
    <main>
        <div class="left_sec items">
            <ul>
                <li><a href="">Dashboard</a></li>
                <li><a href="./displayRegis.php">User Display</a></li>
                <li><a href="">Appearance</a></li>
                <li><a href="">Content</a></li>
                <li><a href="">Settings</a></li>
            </ul>
        </div>
        <div class="middle_sec items"></div>
        <div class="right_sec items">
            <div>Total User</div>
            <div>Total Courses</div>
            <div>Enroll Courses</div>
        </div>
    </main>
    <footer>
        <hr>
        <div class="footer_content">
            <p>Copyright © 2022- <?php echo date("Y"); ?></p>

        </div>
    </footer>

    <script src="" async defer></script>
</body>

</html>