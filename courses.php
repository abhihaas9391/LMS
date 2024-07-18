<?php
session_start();
include 'connect.php';

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

$username = $_SESSION['username'];

$sql = "SELECT * FROM user WHERE username='$username'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $username = $row['username']; 
} else {
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
   <title>LearnStream - Courses</title>

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
            <h3 class="name"><?php echo $username; ?></h3>
            <p class="role">Student</p>
            <a href="profile.php" class="btn">View Profile</a>
            <div class="flex-btn">
                <?php if (!isset($_SESSION['username'])) : ?>
                    <a href="login.php" class="option-btn">Login</a>
                    <a href="register.php" class="option-btn">Register</a>
                <?php else : ?>
                    <a href="login.php" class="option-btn">Logout</a>
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
        <h3 class="name"><?php echo $username; ?></h3>
        <p class="role">Student</p>
        <a href="profile.php" class="btn">View Profile</a>
    </div>

   <nav class="navbar">
      <a href="home.php"><i class="fas fa-home"></i><span>Home</span></a>
      <a href="about.php"><i class="fas fa-question"></i><span>About</span></a>
      <a href="courses.php"><i class="fas fa-graduation-cap"></i><span>Courses</span></a>
      <a href="contact.php"><i class="fas fa-headset"></i><span>Contact Us</span></a>
   </nav>

</div>

<section class="courses">

   <h1 class="heading">Our Courses</h1>

   <div class="box-container">

      <div class="box">
         <div class="tutor">
            <img src="images/pic-2.jpg" alt="">
            <div class="info">
               <h3>Ananya Singh</h3>
            </div>
         </div>
         <div class="thumb">
            <img src="images/thumb-1.png" alt="">
            <span>10 videos</span>
         </div>
         <h3 class="title">HTML</h3>
         <a href="playlist.php" class="inline-btn">view playlist</a>
      </div>

      <div class="box">
         <div class="tutor">
            <img src="images/pic-3.jpg" alt="">
            <div class="info">
               <h3>Aarav Sharma</h3>
            </div>
         </div>
         <div class="thumb">
            <img src="images/thumb-2.png" alt="">
            <span>10 videos</span>
         </div>
         <h3 class="title">CSS</h3>
         <a href="#" class="inline-btn">view playlist</a>
      </div>

      <div class="box">
         <div class="tutor">
            <img src="images/pic-4.jpg" alt="">
            <div class="info">
               <h3>Rohan Mehta</h3>
            </div>
         </div>
         <div class="thumb">
            <img src="images/thumb-3.png" alt="">
            <span>10 videos</span>
         </div>
         <h3 class="title">JavaScript</h3>
         <a href="#" class="inline-btn">view playlist</a>
      </div>

      <div class="box">
         <div class="tutor">
            <img src="images/pic-5.jpg" alt="">
            <div class="info">
               <h3>Priya Patel</h3>
            </div>
         </div>
         <div class="thumb">
            <img src="images/thumb-4.png" alt="">
            <span>10 videos</span>
         </div>
         <h3 class="title">Bootstrap</h3>
         <a href="#" class="inline-btn">view playlist</a>
      </div>

      <div class="box">
         <div class="tutor">
            <img src="images/pic-6.jpg" alt="">
            <div class="info">
               <h3>Kunal Desai</h3>
            </div>
         </div>
         <div class="thumb">
            <img src="images/thumb-5.png" alt="">
            <span>10 videos</span>
         </div>
         <h3 class="title">JQuery</h3>
         <a href="#" class="inline-btn">view playlist</a>
      </div>

      <div class="box">
         <div class="tutor">
            <img src="images/pic-7.jpg" alt="">
            <div class="info">
               <h3>Sneha Reddy</h3>
            </div>
         </div>
         <div class="thumb">
            <img src="images/thumb-6.png" alt="">
            <span>10 videos</span>
         </div>
         <h3 class="title">SASS</h3>
         <a href="#" class="inline-btn">view playlist</a>
      </div>

      <div class="box">
         <div class="tutor">
            <img src="images/pic-8.jpg" alt="">
            <div class="info">
               <h3>Arjun Gupta</h3>
            </div>
         </div>
         <div class="thumb">
            <img src="images/thumb-7.png" alt="">
            <span>10 videos</span>
         </div>
         <h3 class="title">PHP</h3>
         <a href="#" class="inline-btn">view playlist</a>
      </div>

      <div class="box">
         <div class="tutor">
            <img src="images/pic-9.jpg" alt="">
            <div class="info">
               <h3>Siddharth Verma</h3>
            </div>
         </div>
         <div class="thumb">
            <img src="images/thumb-8.png" alt="">
            <span>10 videos</span>
         </div>
         <h3 class="title">MySQL</h3>
         <a href="#" class="inline-btn">view playlist</a>
      </div>

      <div class="box">
         <div class="tutor">
            <img src="images/pic-1.jpg" alt="">
            <div class="info">
               <h3>Rahul Kapoor</h3>
            </div>
         </div>
         <div class="thumb">
            <img src="images/thumb-9.png" alt="">
            <span>10 videos</span>
         </div>
         <h3 class="title">React</h3>
         <a href="#" class="inline-btn">view playlist</a>
      </div>

   </div>

</section>

<!-- custom js file link  -->
<script src="js/script.js"></script>

   
</body>
</html>