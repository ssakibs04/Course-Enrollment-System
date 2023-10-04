<?php
session_start();

if (!isset($_SESSION['username'])) {
    echo "You are Sign out";
    header('location:login.php');
}
$cookie_name = "user";
//here we are trying to access the value of current user name through session
$cookie_value = $_SESSION['username'];

setcookie($cookie_name, $cookie_value, time() + (86400 * 15), "/"); // 86400 = 1 day

?>
<!DOCTYPE html>

<html>

<head>
    <link rel="stylesheet" href="./view/css/style.css">
    <title>Shohoj Shiksha</title>
    <?php include_once './common/links.php' ?>
</head>

<body>

    <?php include_once './header.php' ?>

    <main>
        <div class="welcome_user">
            <h1>Hello <span class="u_name"><?php echo  $_SESSION['username']; ?></span> Welcome To Shohoj Shiksha</h1>
            <p>AN INVESTMENT IN KNOWLEDGE PAYS THE BEST INTEREST</p>
            <hr>
        </div>
        <div class="main_section">
            <ul id="parent">
                <li>
                    <div class="offer_course">
                        <div>
                            <img src="./uploads/img/python.jpg" alt="">
                        </div>
                        <div class="course_details">
                            <h2>Programming for Everybody (Getting Started with Python)</h2>
                            <p>Charles Russell Severance</p>
                            <a href="#">Enroll for free</a>
                        </div>
                    </div>

                </li>
                <li>
                    <div class="offer_course">
                        <div>
                            <img src="./uploads/img/MachineLearningMastery.jpg" alt="">
                        </div>
                        <div class="course_details">
                            <h2>Supervised Machine Learning: Regression and Classification</h2>
                            <p>Andrew NG</p>
                            <a href="#">Enroll for free</a>
                        </div>
                    </div>

                </li>
                <li>
                    <div class="offer_course">
                        <div>
                            <img src="./uploads/img/english.jpg" alt="">
                        </div>
                        <div class="course_details">
                            <h2>English for Career Development</h2>
                            <p>Brian McManus</p>
                            <a href="#">Enroll for free</a>
                        </div>
                    </div>

                </li>
                <li>
                    <div class="offer_course">
                        <div>
                            <img src="./uploads/img/php.jpg" alt="">
                        </div>
                        <div class="course_details">
                            <h2><?php echo $_SESSION['title'] ?></h2>
                            <p><?php echo $_SESSION['author'] ?> </p>
                            <a href="#"><?php echo $_SESSION['enroll'] ?></a>
                        </div>
                    </div>
                </li>

            </ul>
        </div>

    </main>

    <!-- <div class="cookie_field">
        <?php
        if (!isset($_COOKIE[$cookie_name])) {

            echo "Cookie named '" . $cookie_name . "' is not set!";
        } else {
            echo "Cookie '" . $cookie_name . "' is set!<br>";
            echo "Value is: " . $cookie_value;
        }
        ?>
    </div> -->

    <?php include './footer.php' ?>

    <script async defer></script>
</body>

</html>