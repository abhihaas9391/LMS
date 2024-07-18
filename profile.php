<?php
session_start();
include 'connect.php';

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

$username = $_SESSION['username'];

// Fetch user data from database based on username stored in session
$sql = "SELECT * FROM user WHERE username='$username'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $username = $row['username']; // Ensure 'username' matches the column name in your database
} else {
    // Handle case where user data is not found (should not happen if session is valid)
    echo "User data not found!";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LearnStream - Profile</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link rel="stylesheet" href="css/style2.css">
</head>

<body>

<header class="header">
    <section class="flex">
        <a href="home.php" class="logo"><span style="font-weight: bold;">Learn</span><span style="color: #b34688; font-weight: bold;">Stream</span></a>

        <form action="search.php" method="post" class="search-form">
            <input type="text" name="search_box" required placeholder="search courses..." maxlength="100">
            <button type="submit" class="fas fa-search"></button>
        </form>

        <div class="icons">
            <div id="menu-btn" class="fas fa-bars"></div>
            <div id="search-btn" class="fas fa-search"></div>
            <div id="user-btn" class="fas fa-user"></div>
            <div id="toggle-btn" class="fas fa-sun"></div>
        </div>

        <div class="profile">
            <img src="images/pic-1.jpg" class="image" alt="">
            <h3 class="name">Abhihaas</h3>
            <p class="role">Student</p>
            <a href="profile.php" class="btn">View Profile</a>
            <div class="flex-btn">
                <?php if (!isset($_SESSION['username'])) : ?>
                    <a href="login.php" class="option-btn">login</a>
                    <a href="register.php" class="option-btn">register</a>
                <?php else : ?>
                    <a href="login.php" class="option-btn">logout</a>
                <?php endif; ?>
            </div>
        </div>
    </section>
</header>

<div class="side-bar">
    <div id="close-btn">
        <i class="fas fa-times"></i>
    </div>

    <div class="profile">
        <img src="images/pic-1.jpg" class="image" alt="">
        <h3 class="name">Abhihaas</h3>
        <p class="role">Student</p>
        <a href="profile.php" class="btn">View Profile</a>
    </div>

    <nav class="navbar">
        <a href="home.php"><i class="fas fa-home"></i><span>Home</span></a>
        <a href="about.php"><i class="fas fa-question"></i><span>About</span></a>
        <a href="courses.php"><i class="fas fa-graduation-cap"></i><span>Courses</span></a>
        <!-- <a href="teachers.php"><i class="fas fa-chalkboard-user"></i><span>Teachers</span></a> -->
        <a href="contact.php"><i class="fas fa-headset"></i><span>Contact Us</span></a>
    </nav>
</div>

<section class="user-profile">
    <h1 class="heading">Your Profile</h1>

    <div class="info">
        <div class="user">
            <img src="images/pic-1.jpg" alt="">
            <h3>Abhihaas</h3>
            <p>Student</p>
            <a href="update.php" class="inline-btn">Update Profile</a>
        </div>

        <div class="box-container">
            <div class="box">
                <div class="flex">
                    <i class="fas fa-bookmark"></i>
                    <div>
                        <span>4</span>
                        <p>saved playlist</p>
                    </div>
                </div>
                <a href="#" class="inline-btn">view playlists</a>
            </div>

            <div class="box">
                <div class="flex">
                    <i class="fas fa-heart"></i>
                    <div>
                        <span>33</span>
                        <p>videos liked</p>
                    </div>
                </div>
                <a href="#" class="inline-btn">view liked</a>
            </div>

            <div class="box">
                <div class="flex">
                    <i class="fas fa-comment"></i>
                    <div>
                        <span>12</span>
                        <p>videos comments</p>
                    </div>
                </div>
                <a href="#" class="inline-btn">view comments</a>
            </div>
        </div>
    </div>
</section>

<script src="js/script.js"></script>

</body>

</html>
